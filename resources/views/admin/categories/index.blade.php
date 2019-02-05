@extends('admin.layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap4.css') }}">
@endsection

@section('title')
    Categories
@endsection

@section('h1')
    Categories
@endsection

@section('bread')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="breadcrumb-item active">Categories</li>
</ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="data" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>@if ($category->status == 1)
                                        Active
                                    @else
                                        Inactive
                                    @endif
                                </td>
                                <td align="center"><a href="{{ route('categories.edit', [$category->id, 'tab_1']) }}" title="Edit {{ $category->name }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                <td align="center"><a href="{{ route('categories.delete', $category->id) }}" title="Delete {{ $category->name }}" onclick="return confirm('Delete {{ $category->name }}?');"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.js') }}"></script>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#data').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "stateSave": true,
                "columns": [
                    null,
                    { "width": "60px" },
                    { "width": "40px" },
                    { "width": "40px" }
                ]
            });
        });
    </script>
@endsection