@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
            <div>
                <h2 class="main-content-title fs-24 mb-1">Permission</h2>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User Managment</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Permission</li>
                </ol>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-xl-6">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Permission Create
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('permission.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="form-text" class="form-label fs-14 text-dark">Module<span
                                        class="text-danger">*</span></label>
                                <select class="js-example-basic-single1 @error('module') is-invalid @enderror"aria-label="select example"
                                    name="module">
                                    <option value="">Select Module</option>
                                    @foreach ($modules as $module)
                                        <option value="{{ $module->id }}">{{ $module->name }}</option>
                                    @endforeach
                                </select>
                                @error('module')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="form-text" class="form-label fs-14 text-dark">Access<span
                                        class="text-danger">*</span></label>
                                <select class="js-example-basic-single1 @error('access') is-invalid @enderror" aria-label="select example"
                                    name="access">
                                    <option value ="">Select Access</option>
                                    <option value ="create">Create</option>
                                    <option value ="update">Update</option>
                                    <option value ="delete">Delete</option>
                                    <option value ="view">View</option>
                                </select>
                                @error('access')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="form-text" class="form-label fs-14 text-dark">Description<span
                                        class="text-danger">*</span> </label>
                                <input type="name" class="form-control @error('description') is-invalid @enderror"
                                    id="description" name="description" value="{{ old('description') }}">
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" role="switch" id="switch-primary"
                                    checked="" name="is_active">
                                <label class="form-check-label" for="switch-primary">Active</label>
                            </div>
                            <button class="btn btn-primary" type="submit">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
