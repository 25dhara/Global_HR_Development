@extends('layouts.app')

@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <h2 class="main-content-title fs-24 mb-1">Department</h2>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Advanced UI</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Department</li>
                    </ol>
                </div>
            </div>
            <div class="row row-sm">
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Department Create
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('department.store') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="form-text" class="form-label fs-14 text-dark">Department<span
                                            class="text-danger">*</span> </label>
                                    <input type="name" class="form-control @error('name') is-invalid @enderror"
                                        id="name" placeholder="Enter name" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="form-text" class="form-label fs-14 text-dark">Branch <span
                                            class="text-danger">*</span></label>
                                    <select
                                        class="form-select @error('name') is-invalid @enderror"aria-label="select example"
                                        name="branch">
                                        <option value="">Branch</option>
                                        @foreach ($branches as $branch)
                                            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('branch')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> --}}

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
    </div>
@endsection
