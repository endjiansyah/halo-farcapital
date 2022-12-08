@extends("template2")
@section("content")
@if ($message = Session::get('success'))
<div class="alert alert-success text-bold" role="alert">{{ $message }}</div>
@endif
<div class="card">
    <div class="card-header">
        <a href="{{ route('user.list') }}" class="btn btn-secondary">List User</a>
    </div>
    <form action="{{ route('user.create') }}" method="post">
        <div class="card-body">
            @csrf

            <label for="nama" class="form-label mt-2">Nama : </label>
            <input type="text" name="nama" id="nama" class="form-control">

            <label for="email" class="form-label mt-2">Email : </label>
            <input type="email" name="email" id="email" class="form-control">

            <label for="password" class="form-label mt-2">Password : </label>
            <input type="password" name="password" id="password" class="form-control">

            <label for="sekolah" class="form-label mt-2">Sekolah : </label>
            <select name="id_sekolah" id="sekolah" class="form-select">
                <option disabled selected>--pilih--</option>
                <!-- ambil data dari tabel / model sekolah -->
                @foreach ($sekolah as $skl)
                <option value="{{$skl->id}}">{{$skl->nama_sekolah}}</option>
                @endforeach
            </select>

            <label for="role" class="form-label mt-2">role : </label>
            <select name="role" id="role" class="form-select">
                <option disabled selected>--pilih--</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
                <option value="3">Guest</option>
            </select>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
</div>
@endsection