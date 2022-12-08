@extends("template2")
@section("content")
@if ($message = Session::get('success'))
<div class="alert alert-warning text-bold" role="alert">{{ $message }}</div>
@endif
<div class="card">
    <div class="card-header">
        <a href="{{ route('user.list') }}" class="btn btn-secondary">List User</a>
        <a href="{{ route('sekolah.store') }}" class="btn btn-secondary">Tambah sekolah</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sekolahs as $sekolah)
                <tr>
                    <td>{{$sekolah->nama_sekolah}}</td>
                    <td>{{$sekolah->alamat_sekolah}}</td>
                    <td>{{$sekolah->email_sekolah}}</td>
                    <td>
                        <a href="{{ route('sekolah.detail', ['id' => $sekolah->id]) }}">Edit</a>
                        <a href="{{ route('sekolah.destroy', ['id' => $sekolah->id]) }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection