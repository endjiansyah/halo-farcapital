@extends("template2")
@section("content")
@if ($message = Session::get('success'))
<div class="alert alert-warning text-bold" role="alert">{{ $message }}</div>
@endif
<div class="card">
    <div class="card-header">
        <a href="{{ route('sekolah.list') }}" class="btn btn-secondary">List Sekolah</a>
        <a href="{{ route('user.store') }}" class="btn btn-secondary">Tambah User</a>
    </div>
    <div class="card-body card-warning">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Sekolah</th>
                    <th>Role</th>
                    <th>Aktif</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->nama}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->sekolah->nama_sekolah}}</td>
                    <td>
                        @switch($user->role)
                        @case(1)
                        Admin
                        @break

                        @case(2)
                        User
                        @break

                        @default
                        Guest
                        @endswitch
                    </td>
                    <td>{{$user->aktif ? "Ya" : "Tidak"}}</td>
                    <td>
                        <a href="{{ route('user.detail', ['id' => $user->id]) }}">Edit</a>
                        <a href="{{ route('user.destroy', ['id' => $user->id]) }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection