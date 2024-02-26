@extends('layouts.app')

@section('content')
    <!-- Start::app-content -->
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
            <div>
                <h2 class="main-content-title fs-24 mb-1">Dashboard</h2>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Global HR Dashboard</li>
                </ol>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-sm-12 col-lg-12 col-xl-12">
                <!-- Start::row -->
                <div class="row row-sm">
                    @foreach ($branches as $branch)
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-2">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="card-item">
                                        <div class="card-item-title mb-2">
                                            <label class="main-content-label fs-13 fw-bold mb-1">{{ $branch->name }}</label>
                                        </div>
                                        <div class="card-item-body">
                                            <div class="card-item-stat">
                                                <p class="mb-0 fs-24 mt-2"><b
                                                        class="text-primary">{{ $branch->users_count }}</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- End::row -->
            </div><!-- col end -->
        </div>
    </div>
    <!-- End::app-content -->
@endsection
