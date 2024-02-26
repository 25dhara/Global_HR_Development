@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
            <div>
                <h2 class="main-content-title fs-24 mb-1">User</h2>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Advanced UI</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User</li>
                </ol>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-xl-6">

                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            User Create
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="form-text" class="form-label fs-14 text-dark">Name<span
                                        class="text-danger">*</span></label>
                                <input type="name" class="form-control @error('name') is-invalid @enderror"
                                    id="name" placeholder="Enter name" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="form-password" class="form-label fs-14 text-dark">
                                    Email<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    id="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- <div class="mb-3">
                                <label for="form-password" class="form-label fs-14 text-dark">
                                    Password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" placeholder="Enter Passsword" name="password"
                                    value="{{ old('password') }}">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="form-password" class="form-label fs-14 text-dark">Confirm Password<span
                                        class="text-danger">*</span></label>
                                <input type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    id="password_confirmation" placeholder="Confirm Password" name="password_confirmation">
                                @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}
                            <button class="btn btn-primary" type="submit">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
