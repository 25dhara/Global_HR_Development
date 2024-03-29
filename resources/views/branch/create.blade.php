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
                            Branch Create
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('branch.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="form-text" class="form-label fs-14 text-dark">Branch name</label>
                                <input type="name" class="form-control @error('name') is-invalid @enderror"
                                    id="name" placeholder="Enter name" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="error invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="time_zone" class="form-label fs-14 text-dark">Timezone</label>
                                <select class="js-example-basic-single1 @error('access') is-invalid @enderror" id="timezone"
                                    name="timezone">
                                    @foreach ($timezones as $timezone)
                                        <option value="{{ $timezone }}">{{ $timezone }}</option>
                                    @endforeach
                                </select>
                                @error('timezone')
                                    <span class="error invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="prefix_code" class="form-label fs-14 text-dark">Prefix Code</label>
                                <input type="text" class="form-control @error('prefix_code') is-invalid @enderror"
                                    id="prefix_code" placeholder="Enter prefix code" name="prefix_code"
                                    value="{{ old('prefix_code') }}">
                                @error('prefix_code')
                                    <span class="error invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
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
