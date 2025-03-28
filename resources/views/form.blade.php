@extends('layout')

@section('content')

    <div class="col-4">
        <h2>{{ $action}}</h2>
        <form method="POST" action="/{{ $actionUrl}}" class="form">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">User Name</label>
                <br>
                <input id="name"
                        name="name"
                        type="text"
                        value="{{ old('name' ?? $user->name) }}"
                        class="form-control @error('name') is-invalid @enderror"
                        placeholder="Enter your name">
                @error('name')
                    <div class="alert alert-dander">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="age">User Age</label>
                <br>
                <input id="age"
                        name="age"
                        type="text"
                        value="{{ old('age' ?? $user->age) }}"
                        class="form-control @error('age') is-invalid @enderror"
                        placeholder="Enter your age">
                @error('age')
                    <div class="alert alert-dander">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
