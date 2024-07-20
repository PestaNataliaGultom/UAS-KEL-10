@extends('layouts.app')
@section('title', 'User Profile')
@section('content')
    <div class="container">

        <div class="col-md-6 mx-auto py-4">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <h1 class="fw-bold text-center text-uppercase">User Profile</h1>
            <p class="fw-semibold text-center">Update your information profile</p>
            <div class="card">
                <div class="card-header">
                    Profile Information
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.profile.update') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $user->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $user->email }}" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="phone" class="form-control" id="phone" name="phone"
                                value="{{ $user->phone }}" required>
                        </div>

                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <small class="form-text text-muted">Leave blank if you don't want to change the
                                password.</small>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
