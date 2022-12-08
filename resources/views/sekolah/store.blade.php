@extends("template2")
@section("content")
@if ($message = Session::get('success'))
<div class="alert alert-success text-bold" role="alert">{{ $message }}</div>
@endif
<div class="card">
    <div class="card-header">
        <a href="{{ route('sekolah.list') }}" class="btn btn-secondary">List sekolah</a>
    </div>
    <form action="{{ route('sekolah.create') }}" method="post">
        <div class="card-body">
            @csrf

            <label for="nama" class="form-label">Nama : </label>
            <input type="text" name="nama_sekolah" id="nama" class="form-control"><br>

            <label for="alamat" class="form-label">alamat : </label>
            <input type="text" name="alamat_sekolah" id="alamat" class="form-control"><br>

            <label for="email" class="form-label">Email : </label>
            <input type="email" name="email_sekolah" id="email" class="form-control"><br>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
</div>
@endsection