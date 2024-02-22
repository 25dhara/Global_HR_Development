@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
            <div>
                <h2 class="main-content-title fs-24 mb-1">Branch</h2>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Advanced UI</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Branch</li>
                </ol>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-xl-6">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Edit Branch
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('branch.update', $branch->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="form-text" class="form-label fs-14 text-dark">Branch Name</label>
                                <input type="name" class="form-control @error('name') is-invalid @enderror"
                                    id="name" placeholder="Enter name" name="name" value="{{ $branch->name }}">
                                @error('name')
                                    <span class="error invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="form-text" class="form-label fs-14 text-dark">Department</label>
                                <select class="js-example-basic-multiple @error('department') is-invalid @enderror"
                                    name="departments[]" multiple="multiple">
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}"
                                            {{ $branch->departments->contains($department->id) ? 'selected' : '' }}>
                                            {{ $department->name }}</option>
                                    @endforeach
                                </select>
                                @error('department')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" role="switch" id="switch-primary"
                                    name="is_active" {{ $branch->is_active == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="switch-primary">Active</label>
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
