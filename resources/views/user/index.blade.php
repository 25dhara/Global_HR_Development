@extends('layouts.app')

@section('content')
    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Page Header -->

            <div class="d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <h2 class="main-content-title fs-24 mb-1">Userlist</h2>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Advanced UI</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Userlist</li>
                    </ol>
                </div>

            </div>

            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="row row-sm">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
                    <div class="card custom-card">
                        <div class="card-header border-bottom-0 pb-0 d-block">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="main-content-label mb-0 pt-1">User Table</label>
                                <div class="ms-auto float-end">
                                    <div class="">
                                        <a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"><i
                                                class="fe fe-more-horizontal"></i></a>
                                        <a href="{{ route('user.create') }}" class="btn btn-primary">Add User</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="javascript:void(0);">Today</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive userlist-table">
                                <table class="table card-table table-striped table-vcenter border text-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th class="wd-lg-8p"><span>User</span></th>
                                            <th class="wd-lg-20p"><span></span></th>
                                            <th class="wd-lg-20p"><span>Created</span></th>
                                            <th class="wd-lg-20p"><span>Status</span></th>
                                            <th class="wd-lg-20p"><span>Email</span></th>
                                            <th class="wd-lg-20p">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="avatar-md">
                                                    <img alt="avatar" class="rounded-circle me-2"
                                                        src="../assets/images/faces/1.jpg">
                                                </div>
                                            </td>
                                            <td>Megan Peters</td>
                                            <td>
                                                08/06/2020
                                            </td>
                                            <td class="text-center">
                                                <span class="label text-muted d-flex"><span
                                                        class="dot-label bg-gray-300 me-1"></span>Inactive</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);">mila@kunis.com</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                    <i class="fe fe-search"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-info">
                                                    <i class="fe fe-edit-2"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    <i class="fe fe-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="avatar-md">
                                                    <img alt="avatar" class="rounded-circle me-2"
                                                        src="../assets/images/faces/2.jpg">
                                                </div>
                                            </td>
                                            <td>George Clooney</td>
                                            <td>
                                                12/06/2020
                                            </td>
                                            <td class="text-center">
                                                <span class="label text-success d-flex"><span
                                                        class="dot-label bg-success me-1"></span>Active</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);">marlon@brando.com</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                    <i class="fe fe-search"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-info">
                                                    <i class="fe fe-edit-2"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    <i class="fe fe-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="avatar-md">
                                                    <img alt="avatar" class="rounded-circle me-2"
                                                        src="../assets/images/faces/3.jpg">
                                                </div>
                                            </td>
                                            <td>Ryan Gossling</td>
                                            <td>
                                                14/06/2020
                                            </td>
                                            <td class="text-center">
                                                <span class="label text-danger d-flex"><span
                                                        class="dot-label bg-danger me-1"></span> Banned</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);">jack@nicholson</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                    <i class="fe fe-search"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-info">
                                                    <i class="fe fe-edit-2"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    <i class="fe fe-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="avatar-md">
                                                    <img alt="avatar" class="rounded-circle me-2"
                                                        src="../assets/images/faces/1.jpg">
                                                </div>
                                            </td>
                                            <td> Emma Watson</td>
                                            <td>
                                                16/06/2020
                                            </td>
                                            <td class="text-center">
                                                <span class="label text-warning d-flex"><span
                                                        class="dot-label bg-warning me-1"></span>Pending</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);">jack@nicholsonm</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                    <i class="fe fe-search"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-info">
                                                    <i class="fe fe-edit-2"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    <i class="fe fe-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="avatar-md">
                                                    <img alt="avatar" class="rounded-circle me-2"
                                                        src="../assets/images/faces/12.jpg">
                                                </div>
                                            </td>
                                            <td>Mila Kunis</td>
                                            <td>
                                                18/06/2020
                                            </td>
                                            <td class="text-center">
                                                <span class="label text-muted d-flex"><span
                                                        class="dot-label bg-gray-300 me-1"></span>Inactive</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);">mila@kunis.com</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                    <i class="fe fe-search"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-info">
                                                    <i class="fe fe-edit-2"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    <i class="fe fe-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="avatar-md">
                                                    <img alt="avatar" class="rounded-circle me-2"
                                                        src="../assets/images/faces/4.jpg">
                                                </div>
                                            </td>
                                            <td>Phil Watson</td>
                                            <td>
                                                23/06/2020
                                            </td>
                                            <td class="text-center">
                                                <span class="label text-success d-flex"><span
                                                        class="dot-label bg-success me-1"></span>active</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);">phil@watson.com</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                    <i class="fe fe-search"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-info">
                                                    <i class="fe fe-edit-2"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    <i class="fe fe-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="avatar-md">
                                                    <img alt="avatar" class="rounded-circle me-2"
                                                        src="../assets/images/faces/5.jpg">
                                                </div>
                                            </td>
                                            <td>Sonia Robertson</td>
                                            <td>
                                                25/06/2020
                                            </td>
                                            <td class="text-center">
                                                <span class="label text-success d-flex"><span
                                                        class="dot-label bg-success me-1"></span>active</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);">robertson@sonia.com</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                    <i class="fe fe-search"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-info">
                                                    <i class="fe fe-edit-2"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    <i class="fe fe-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="avatar-md">
                                                    <img alt="avatar" class="rounded-circle me-2"
                                                        src="../assets/images/faces/7.jpg">
                                                </div>
                                            </td>
                                            <td>Adam Hamilton</td>
                                            <td>
                                                31/06/2020
                                            </td>
                                            <td class="text-center">
                                                <span class="label text-danger d-flex"><span
                                                        class="dot-label bg-danger me-1"></span>Banned</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);">mila@kunis.com</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                    <i class="fe fe-search"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-info">
                                                    <i class="fe fe-edit-2"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    <i class="fe fe-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="avatar-md">
                                                    <img alt="avatar" class="rounded-circle me-2"
                                                        src="../assets/images/faces/9.jpg">
                                                </div>
                                            </td>
                                            <td>Leah Morgan</td>
                                            <td>
                                                02/07/2020
                                            </td>
                                            <td class="text-center">
                                                <span class="label text-warning d-flex"><span
                                                        class="dot-label bg-warning me-1"></span>pending</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);">morganleah@.com</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                    <i class="fe fe-search"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-info">
                                                    <i class="fe fe-edit-2"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    <i class="fe fe-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="avatar-md">
                                                    <img alt="avatar" class="rounded-circle me-2"
                                                        src="../assets/images/faces/11.jpg">
                                                </div>
                                            </td>
                                            <td>Amelia McDonald</td>
                                            <td>
                                                08/07/2020
                                            </td>
                                            <td class="text-center">
                                                <span class="label text-success d-flex"><span
                                                        class="dot-label bg-success me-1"></span>active</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);">amelia23@kunis.com</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                    <i class="fe fe-search"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-info">
                                                    <i class="fe fe-edit-2"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    <i class="fe fe-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="avatar-md">
                                                    <img alt="avatar" class="rounded-circle me-2"
                                                        src="../assets/images/faces/6.jpg">
                                                </div>
                                            </td>
                                            <td>Paul Molive</td>
                                            <td>
                                                12/07/2020
                                            </td>
                                            <td class="text-center">
                                                <span class="label text-success d-flex"><span
                                                        class="dot-label bg-success me-1"></span>active</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);">paul45@kunis.com</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                    <i class="fe fe-search"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-info">
                                                    <i class="fe fe-edit-2"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    <i class="fe fe-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <nav aria-label="...">
                                <ul class="pagination mt-4 mb-0 float-end">
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <span class="page-link">2</span>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0);">Next</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div><!-- COL END -->
            </div>
            <!--End::row-1 -->

        </div>
    </div>
    <!-- End::app-content -->
@endsection
