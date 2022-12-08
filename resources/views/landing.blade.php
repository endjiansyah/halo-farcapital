@extends("template")
@section("content")
@if($tampilkanPeserta)
<ul>
    @foreach($peserta as $p)
    <li>{{$p}}</li>
    @endforeach
</ul>
@endif
<a href="{{route('homepage)}}"></a>
@endsection