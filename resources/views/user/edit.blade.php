@extends('layouts.app')

@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">

            <div class="d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <h2 class="main-content-title fs-24 mb-1">Edit User</h2>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">User Management</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                    </ol>
                </div>
            </div>

            <div class="row row-sm">
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                User Edit
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('user.update', $user->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label fs-14 text-dark">Name<span
                                            class="text-danger">*</span></label>
                                    <input type="name" class="form-control @error('name') is-invalid @enderror"
                                        id="name" placeholder="Enter name" name="name"
                                        value="{{ old('name', $user->name) }}">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label fs-14 text-dark">Email<span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" placeholder="Enter email" name="email"
                                        value="{{ old('email', $user->email) }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="form-text" class="form-label fs-14 text-dark">Roles <span
                                            class="text-danger">*</span></label>
                                    <select class="js-example-basic-multiple @error('roles') is-invalid @enderror"
                                    name="roles[]" multiple="multiple">
                                    @foreach ($roles as $role)
                                            <option value="{{ $role->id }}" {{ $user->roles &&  $user->roles->contains('id', $role->id) ? 'selected' : '' }}>
                                                {{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('roles')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="form-text" class="form-label fs-14 text-dark">Branch <span
                                            class="text-danger">*</span></label>
                                    <select
                                        class="js-example-basic-single1 @error('name') is-invalid @enderror"aria-label="select example"
                                        name="branch">
                                        <option value="">Branch</option>
                                        {{-- @foreach ($branches as $branch)
                                            <option value="{{ $branch->id }}"
                                                {{ $department->branch_id == $branch->id ? 'selected' : '' }}>
                                                {{ $branch->name }}</option>
                                        @endforeach --}}
                                    </select>
                                    @error('branch')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="form-text" class="form-label fs-14 text-dark">Department<span
                                            class="text-danger">*</span></label>
                                    <select
                                        class="js-example-basic-single1 @error('name') is-invalid @enderror"aria-label="select example"
                                        name="branch">
                                        <option value="">Department</option>
                                        {{-- @foreach ($branches as $branch)
                                            <option value="{{ $branch->id }}"
                                                {{ $department->branch_id == $branch->id ? 'selected' : '' }}>
                                                {{ $branch->name }}</option>
                                        @endforeach --}}
                                    </select>
                                    @error('branch')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="switch-primary"
                                        {{ $user->is_active == 1 ? 'checked' : '' }} name="is_active">
                                    <label class="form-check-label" for="switch-primary">Active</label>
                                </div>

                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
