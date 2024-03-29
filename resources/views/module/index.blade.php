@extends('layouts.app')

@section('content')
    <!-- Start::app-content -->
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
            <div>
                <h2 class="main-content-title fs-24 mb-1">Module</h2>
            </div>
        </div>
        <!-- Page Header Close -->
        <!-- Start::row-1 -->
        <div class="row row-sm">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
                <div class="card custom-card">
                    <div class="card-header border-bottom-0 pb-0 d-block">
                        <div class="d-flex justify-content-between align-items-center">
                            <label class="main-content-label mb-0 pt-1">Module</label>
                            <a href="{{ route('module.create') }}" class="btn btn-primary">Add Module</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive userlist-table">
                            <table class="table card-table table-striped table-vcenter border text-nowrap mb-0"
                                id="table">
                                <thead>
                                    <tr>
                                        <th class="wd-lg-8p"><span>Name</span></th>
                                        <th class="wd-lg-20p"><span>Is Active</span></th>
                                        <th class="wd-lg-20p"><span>Action</span></th>
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
                                        ajax: '{{ route('module.index') }}',
                                        columns: [{
                                                data: 'name',
                                                name: 'name'
                                            },
                                            {
                                                data: 'is_active',
                                                name: 'is_active',
                                                render: function(data, type, full, meta) {
                                                    if (data) {
                                                        return '<i class="bi bi-check-circle-fill text-success is_active" data-activestatus="' +
                                                            0 + '" data-val="' + full.id + '"></i> ';
                                                    } else {
                                                        return '<i class="bi bi-x-circle-fill text-danger is_active" data-activestatus="' +
                                                            1 + '" data-val="' + full.id + '"></i>';
                                                    }
                                                }
                                            },
                                            {
                                                data: 'id',
                                                name: 'actions',
                                                orderable: false,
                                                searchable: false,
                                                render: function(data, type, full, meta) {
                                                    var editUrl = '{{ route('module.edit', ':id') }}'.replace(':id', data);
                                                    var deleteFormId = 'delete-form-' + data;
                                                    var deleteUrl = '{{ route('module.destroy', ':id') }}'.replace(':id',
                                                        data);

                                                    return '<a href="' + editUrl +
                                                        '" class="btn btn-sm btn-info"><i class="fe fe-edit-2"></i></a> ' +
                                                        '<a href="#" class="btn btn-sm btn-danger delete-link" ' +
                                                        '   onclick="event.preventDefault(); document.getElementById(\'' +
                                                        deleteFormId + '\').submit();">' +
                                                        '   <i class="fe fe-trash"></i>' +
                                                        '</a>' +
                                                        '<form id="' + deleteFormId + '" ' +
                                                        '   action="' + deleteUrl +
                                                        '" method="POST" style="display: none;">' +
                                                        '   @csrf' +
                                                        '   @method('DELETE')' +
                                                        '</form>';
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
