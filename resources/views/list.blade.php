@extends('layouts')

@section('content')
    <
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>Users</h1>

    <div class="pb-3">
        <a href="{{router('create')}}" class="btn btn-success">Add User</a>
    </div>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>User Age</th>
            <th>Actions</th>
        </tr>

        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->age }}</td>
                <td>
                    <a href="{{route('edit', ['id' => $user->id])}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('delete', ['id' => $user->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach

    </table>

@endsection
