@extends('admin-layouts.app')

@section('admin_title', 'Footer | PATO')
@section('header', 'All Footer')


@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@section('admin_content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-grid bg-primary">
                                {{-- <h1 class="card-title"><a href="{{ route('slider.index')}}" class="btn btn-primary">All Sliders</a></h1> --}}
                            </div>
                            <div class="float-right d-none d-sm-inline-block">
                                <a href="{{ route('footer.create') }}" class="btn btn-primary">Add New footer</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Title</th>
                                        <th>Sub Title</th>
                                        <th>Icon</th>
                                        <th>Url Link</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($footers as $key=>$footer)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $footer->title }}</td>
                                            <td>{{ $footer->sub_title }}</td>
                                            <td>{{ $footer->icon }}</td>
                                            <td>{{ $footer->url }}</td>
                                            <td>{{ $footer->date }}</td>
                                            <td>
                                                <a href="{{ route('footer.show', $footer->id) }}" class="btn btn-info"><i
                                                        class="fas fa-eye"></i> </a>
                                                <a href="{{ route('footer.edit', $footer->id) }}" class="btn btn-warning"><i
                                                        class="fas fa-edit"></i> </a>

                                                <button type="button" class="btn btn-danger my-1"
                                                    onclick="if(confirm('Are you sure delete this?')){event.preventDefault();document.getElementById('delete-form-{{ $footer->id }}').submit()};"
                                                ><i class="fas fa-trash-alt"></i> </button>

                                                <form id="delete-form-{{ $footer->id }}" method="POST"
                                                    action="{{ route('footer.destroy', $footer->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Title</th>
                                        <th>Sub Title</th>
                                        <th>Icon</th>
                                        <th>Url Link</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

@push('js')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
