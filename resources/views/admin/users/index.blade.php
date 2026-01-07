@extends('layouts.admin')

@section('title', 'Manajemen User')

@section('content_header')
    <h1>Manajemen User</h1>
@endsection

@section('content')

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <span class="badge {{ $user->role === 'admin' ? 'bg-success' : 'bg-secondary' }}">
                    {{ $user->role }}
                </span>
            </td>
            <td>
                <form action="{{ route('admin.users.role', $user) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PUT')
                    <select name="role" class="form-control d-inline w-auto">
                        <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                        <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    <button class="btn btn-sm btn-primary">Ubah</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
