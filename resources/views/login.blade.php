@extends('template2')
@section('content')
    @if ($errors->any())
        <p class="alert alert-danger">{{ $errors->first() }}</p>
    @endif
    <form method="POST">
        @csrf

        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="col">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Login</button>
    </form>
@endsection
