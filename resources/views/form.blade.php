@extends('layouts')

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
        </form>
    </div>
