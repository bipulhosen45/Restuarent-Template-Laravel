@extends('admin-layouts.app')

@section('admin_title', 'Welcome | PATO')
@section('header', 'All Welcome')


@push('css')
      <!-- DataTables -->
 <link rel="stylesheet" href="{{asset('bakend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="{{asset('bakend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
 <link rel="stylesheet" href="{{asset('bakend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> 
@endpush

@section('admin_content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                   <div class="d-grid">
                <h1 class="card-title">All Welcome</h1>
              </div>
                    <div class="float-right d-none d-sm-inline-block">
                      <a href="{{ route('welcome.create')}}" class="btn btn-primary">Add New Welcome</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Title</th>
                        <th>Header</th>
                        <th>Sub Title</th>
                        <th>Link</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($welcomes as $key=>$welcome)
                      <tr>
                         <td>{{$key+1}}</td>
                         <td>{{$welcome->title}}</td>
                         <td>{{$welcome->header}}</td>
                         <td>{{$welcome->sub_title}}</td>
                         <td>{{$welcome->link}}</td>
                         <td><img src="{{asset('uploads/welcome/'.$welcome->image)}}" width="200" height="90" alt=""></td>
                         <td>
                           <a href="{{route('welcome.show', $welcome->id)}}" class="btn btn-info"><i class="fas fa-eye"></i> </a>
                           <a href="{{route('welcome.edit', $welcome->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
                           
                           <button type="button" class="btn btn-danger" onclick="if(confirm('Are you sure delete this?')){event.preventDefault();document.getElementById('delete-form-{{$welcome->id}}').submit()};"><i class="fas fa-trash-alt"></i> </button>
                           
                           <form id="delete-form-{{$welcome->id}}" method="POST" action="{{route('welcome.destroy', $welcome->id)}}">
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
                        <th>Header</th>
                        <th>Sub Title</th>
                        <th>Link</th>
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
<script src="{{asset('bakend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('bakend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('bakend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('bakend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('bakend')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('bakend')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('bakend')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('bakend')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('bakend')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('bakend')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('bakend')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('bakend')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

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

