@extends('admin-layouts.app')

@section('admin_title', 'Image | PATO')
@section('header', 'All Image')


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
                {{-- <h1 class="card-title"><a href="{{ route('Image.index')}}" class="btn btn-primary">All Image</a></h1> --}}
              </div>
                    <div class="float-right d-none d-sm-inline-block">
                      <a href="{{ route('image.create')}}" class="btn btn-primary">Add New Image</a>
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
                      @foreach ($images as $key=>$image)
                      <tr>
                         <td>{{$key+1}}</td>
                         <td>{{$image->title}}</td>
                         <td><img src="{{asset('uploads/image/'.$image->image)}}" width="200" height="70" alt=""></td>
                         <td>
                           <a href="{{route('image.show', $image->id)}}" class="btn btn-info"><i class="fas fa-eye"></i> </a>
                           <a href="{{route('image.edit', $image->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
                           
                           <button type="button" class="btn btn-danger" onclick="if(confirm('Are you sure delete this?')){event.preventDefault();document.getElementById('delete-form-{{$image->id}}').submit()};"><i class="fas fa-trash-alt"></i> </button>
                           
                           <form id="delete-form-{{$image->id}}" method="POST" action="{{route('image.destroy', $image->id)}}">
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

