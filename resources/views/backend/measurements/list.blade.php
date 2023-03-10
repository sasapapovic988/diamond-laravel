@extends('backend.layouts.app', ['activePage' => 'measurements', 'title' => 'All Measurements', 'navName' => 'all_measurements', 'activeButton' => 'blog'])

@section('content')

    <!-- Page Header -->
    <div class="page-header mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item active" aria-current="page">Measurements</li>
            </ol>
        </nav>
        <div class="row align-items-center mb-3">
            <div class="col-sm mb-2 mb-sm-0">
                <h1 class="page-header-title">Measurements <span class="badge bg-soft-dark text-dark ms-2">{{ count($measurements) }}</span></h1>
            </div>
            <!-- End Col -->

            <div class="col-sm-auto">
                <a class="btn btn-primary" href="{{ route('backend.measurements.create') }}">Create Measurement</a>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Page Header -->

    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-0">
                <div class="datatable-custom position-relative">
                    <table class="table table-lg table-thead-bordered table-nowrap table-align-middle card-table dataTable table-responsive no-footer">
                        <thead class="thead-light">
                        <th class="sorting_disabled" aria-label="">
                            <div class="form-checkbox">
                                <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                                <label class="form-check-label" for="datatableCheckAll"></label>
                            </div>
                        </th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Units</th>
                        <th>Action</th>
                        </thead>

                        <tbody>
                        @foreach ($measurements as $measurement)
                            <tr>
                                <td class="table-column-pe-0">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="ordersCheck1">
                                        <label class="form-check-label" for="ordersCheck1"></label>
                                    </div>
                                </td>
                                <td>{{ $measurement->id }}</td>
                                <td>{{ $measurement->name }}</td>
                                <td>{{ $measurement->units }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-dark btn-sm" href="{{ route('backend.measurements.edit', $measurement->id) }}">Edit</a>
                                        <!-- Button Group -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown1" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                            <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown1" style="">
                                                <span class="dropdown-header">Options</span>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" onclick="return confirm('Are you sure you want to delete this material?')" href="{{ route('backend.measurements.delete', $measurement->id) }}">Delete</a>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->
                                    </div>
                                    <!-- End Button -->
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js_content')
    <script>
      $(function() {
      });
    </script>
@endsection
