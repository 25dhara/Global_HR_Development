@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
            <div>
                <h2 class="main-content-title fs-24 mb-1">Role</h2>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User Managment</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Role</li>
                </ol>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-xl-6">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Role Edit
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('role.update', $role->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="form-text" class="form-label fs-14 text-dark">Name<span
                                        class="text-danger">*</span> </label>
                                <input type="name" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name', $role->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="form-text" class="form-label fs-14 text-dark">Description<span
                                        class="text-danger">*</span> </label>
                                <input type="name" class="form-control @error('description') is-invalid @enderror"
                                    id="description" name="description"
                                    value="{{ old('description', $role->description) }}">
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" role="switch" id="switch-primary" {{ $role->is_active == 1 ? 'checked' : '' }}
                                     name="is_active">
                                <label class="form-check-label" for="switch-primary">Active</label>
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Assign Permission
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('role.assignpermission',$role->id) }}">
                            @csrf
                            @method('PUT')
                        @foreach ($modulesWithPermissions as $module)
                            <div class="toast fade show mt-2 col-12" role="alert" aria-live="assertive" aria-atomic="true"
                                style="width: auto">
                                <div class="toast-body">
                                    <strong class="me-auto">{{ $module->name }}</strong>
                                    <div class="mt-2 pt-2 border-top">
                                        @foreach ($module->permissions as $permission)
                                            <div class="form-check form-check-inline">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        {{ $role->permissions && $role->permissions->contains('id', $permission->id) ? 'checked' : '' }}
                                                        name="permissions[]" value="{{ $permission->id }}"
                                                        id="checkebox-sm">
                                                    <label class="form-check-label" for="checkebox-sm">
                                                        {{ $permission->name }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <button class="btn btn-primary mt-2" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
