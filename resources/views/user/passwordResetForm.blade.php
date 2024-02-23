@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
            <div>
                <h2 class="main-content-title fs-24 mb-1">Password Reset</h2>
                <ol class="breadcrumb mb-0">
                    {{-- <li class="breadcrumb-item active" aria-current="page">User</li> --}}
                </ol>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-xl-6">

                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Password Reset
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.resetPassword', $user->id) }}">
                            @csrf
                            <div class="mb-3">
                                <label for="old_password" class="form-label fs-14 text-dark">Old Password<span
                                        class="text-danger">*</span></label>
                                <input id="old_password" name="old_password" type="password"
                                    class="form-control @error('old_password') is-invalid @enderror" name="old_password">
                                @error('old_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fs-14 text-dark">New Password<span
                                        class="text-danger">*</span></label>
                                <input id="password" name="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label fs-14 text-dark">Confirm Password<span
                                        class="text-danger">*</span></label>
                                <input type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    id="password_confirmation" placeholder="Confirm Password" name="password_confirmation">
                                @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
