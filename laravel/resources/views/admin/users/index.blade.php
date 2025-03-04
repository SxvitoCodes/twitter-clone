@extends('layouts.layout')

@section('title', 'Users | Admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-12 mb-3">
                @include('admin.shared.left-sidebar')
            </div>
            <div class="col-xl-9 col-12 mb-3">
                <h1>Users</h1>

                <table class="table table-striped mt-3">
                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joined At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->toDateString() }}</td>
                                <td>
                                    <a href="{{ route('users.show', $user->id) }}">View</a>
                                    <a href="{{ route('users.edit', $user->id) }}" class="ms-3">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
