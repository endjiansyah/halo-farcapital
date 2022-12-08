@extends("template2")
@section("content")
@if ($message = Session::get('success'))
<div class="alert alert-success text-bold" role="alert">{{ $message }}</div>
@endif
<div class="card">
    <div class="card-header">
        <a href="{{ route('user.list') }}" class="btn btn-secondary">List User</a>
    </div>
    <form action="{{ route('user.update',['id' => $user->id]) }}" method="post">
        <div class="card-body">
            @method("put")
            @csrf

            <label for="nama" class="form-label mt-2">Nama : </label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{$user->nama}}">

            <label for="email" class="form-label mt-2">Email : </label>
            <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">

            <label for="password" class="form-label mt-2">Password : </label>
            <input type="password" name="password" id="password" class="form-control">

            <label for="sekolah" class="form-label mt-2">Sekolah : </label>
            <select name="id_sekolah" id="sekolah" class="form-select">
                <option disabled selected>--pilih--</option>
                <!-- ambil data dari tabel / model sekolah -->
                @foreach ($sekolah as $skl)
                <option value="{{$skl->id}}" {{ $user->id_sekolah == $skl->id ? "selected" : "" }}>{{$skl->nama_sekolah}}</option>
                @endforeach
            </select>

            <label for="role" class="form-label mt-2">role : </label>
            <select name="role" id="role" class="form-select">
                <option disabled selected>--pilih--</option>
                <option value="1" {{ $user->role == 1 ? "selected" : "" }}>Admin</option>
                <option value="2" {{ $user->role == 2 ? "selected" : "" }}>User</option>
                <option value="3" {{ $user->role == 3 ? "selected" : "" }}>Guest</option>
            </select>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
</div>
@endsection