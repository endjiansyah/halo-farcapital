@extends("template2")
@section("content")
@if ($message = Session::get('success'))
<div class="alert alert-success text-bold" role="alert">{{ $message }}</div>
@endif
<div class="card">
    <div class="card-header">
        <a href="{{ route('sekolah.list') }}" class="btn btn-secondary">List sekolah</a>
    </div>
    <form action="{{ route('sekolah.update',['id' => $sekolah->id]) }}" method="post">
        <div class="card-body">
            @method("put")
            @csrf

            <label for="nama" class="form-label">Nama : </label>
            <input type="text" name="nama_sekolah" id="nama" class="form-control" value="{{$sekolah->nama_sekolah}}">

            <label for="alamat" class="form-label">alamat : </label>
            <input type="text" name="alamat_sekolah" id="alamat" class="form-control" value="{{$sekolah->alamat_sekolah}}">

            <label for="email" class="form-label">Email : </label>
            <input type="email" name="email_sekolah" id="email" class="form-control" value="{{$sekolah->email_sekolah}}">

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
</div>
@endsection