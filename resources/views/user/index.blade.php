@extends('layouts.app')

@section('content')
    <!-- Start::app-content -->
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
            <div>
                <h2 class="main-content-title fs-24 mb-1">User</h2>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User Management</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User</li>
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
                            <label class="main-content-label mb-0 pt-1">User</label>
                            <a href="{{ route('user.create') }}" class="btn btn-primary">Add User</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive userlist-table">
                            <table class="table card-table table-striped table-vcenter border text-nowrap mb-0"
                                id="table">
                                <thead>
                                    <tr>
                                        <th class="wd-lg-8p"><span>Name</span></th>
                                        <th class="wd-lg-20p"><span>Email</span></th>
                                        <th class="wd-lg-20p"><span>Is Active</span></th>
                                        <th class="wd-lg-20p">Password</th>
                                        <th class="wd-lg-20p">Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        @push('child-scripts')
                            <script>
                                $(function() {
                                    $('#table').DataTable({
                                        processing: true,
                                        serverSide: true,
                                        ajax: '{{ route('user.index') }}',
                                        columns: [{
                                                data: 'name',
                                                name: 'name'
                                            },
                                            {
                                                data: 'email',
                                                name: 'email'
                                            },
                                            {
                                                data: 'is_active',
                                                name: 'is_active',
                                                render: function(data, type, full, meta) {
                                                    if (data) {
                                                        return '<i class="fas fa-toggle-on text-primary is_active" data-activestatus="' +
                                                            0 + '" data-val="' + full.id + '"></i>';
                                                    } else {
                                                        return '<i class="fas fa-toggle-on text-secondary is_active" data-activestatus="' +
                                                            1 + '" data-val="' + full.id + '"></i>';
                                                    }
                                                }
                                            },
                                            {
                                                data: 'password',
                                                name: 'password',
                                                render: function(data, type, full, meta) {
                                                    return '<button class="btn btn-sm btn-primary reset-password" data-id="' +
                                                        full.id + '">Reset</button>';
                                                }
                                            },
                                            {
                                                data: 'id',
                                                name: 'actions',
                                                orderable: false,
                                                searchable: false,
                                                render: function(data, type, full, meta) {
                                                    var editUrl = '{{ route('user.edit', ':id') }}'.replace(':id', data);
                                                    return '<a href="' + editUrl + '" class="btn btn-sm btn-info">' +
                                                        '<i class="fe fe-edit-2"></i>' +
                                                        '</a>';
                                                }

                                            },
                                        ]
                                    });
                                });
                            </script>
                        @endpush
                    </div>
                </div>
            </div><!-- COL END -->
        </div>
        <!--End::row-1 -->
    </div>
    <!-- End::app-content -->
@endsection
