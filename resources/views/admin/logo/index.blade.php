@extends('admin-layouts.app')

@section('admin_title', 'Logo | PATO')
@section('header', 'All Logo')


@push('css')
      <!-- DataTables -->
 <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
 <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> 
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
                {{-- <h1 class="card-title"><a href="{{ route('logo.index')}}" class="btn btn-primary">All Logo</a></h1> --}}
              </div>
                    <div class="float-right d-none d-sm-inline-block">
                      <a href="{{ route('logo.create')}}" class="btn btn-primary">Add New Logo</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($logos as $key=>$logo)
                      <tr>
                         <td>{{$key+1}}</td>
                         <td>{{$logo->title}}</td>
                         <td><img src="{{asset('uploads/logo/'.$logo->image)}}" width="200" height="70" alt=""></td>
                         <td>
                           <a href="{{route('logo.show', $logo->id)}}" class="btn btn-info btn-sm m-1"><i class="fas fa-eye"></i> </a>
                           <a href="{{route('logo.edit', $logo->id)}}" class="btn btn-warning btn-sm m-1"><i class="fas fa-edit"></i> </a>
                           
                           <button type="button" class="btn btn-danger btn-sm m-1" onclick="if(confirm('Are you sure delete this?')){event.preventDefault();document.getElementById('delete-form-{{$logo->id}}').submit()};"><i class="fas fa-trash-alt"></i> </button>
                           
                           <form id="delete-form-{{$logo->id}}" method="POST" action="{{route('logo.destroy', $logo->id)}}">
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
                        <th>Image</th>
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
<script src="{{asset('backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('backend')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('backend')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
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

