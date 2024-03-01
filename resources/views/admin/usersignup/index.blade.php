@extends('admin-layouts.app')

@section('admin_title', 'User Register | PATO')
@section('header', 'All User')


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
                      <h1 class="card-title">All User</h1>
                   </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($usersignups as $key=>$usersignup)
                      <tr>
                         <td>{{$key+1}}</td>
                         <td>{{$usersignup->email}}</td>
                         <td>
                            @if ($usersignup->status == 1)
                                <span class="badge badge-success">Confirmed</span>
                            @endif
                            @if ($usersignup->status == 0)
                                <span class="badge badge-warning">Waiting</span>
                            @endif
                        </td>
                        
                         <td>
                            @if ($usersignup->status == 0)
                            <form id="status-form-{{$usersignup->id}}" method="POST" action="{{route('usersignup.status', $usersignup->id)}}">
                                @csrf
                            </form>

                              <button type="button" class="btn btn-primary btn-sm mx-1" onclick="if(confirm('Are you verify request by phone?')){event.preventDefault();document.getElementById('status-form-{{$usersignup->id}}').submit();}
                              else{event.preventDefault();}"><i class="fas fa-check"></i> </button>
                            @endif
                           
                           
                           <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure delete this?')){event.preventDefault();document.getElementById('delete-form-{{$usersignup->id}}').submit();}
                           else{event.preventDefault();}"><i class="fas fa-trash-alt"></i> </button>
                           
                           <form id="delete-form-{{$usersignup->id}}" method="POST" action="{{route('usersignup.destroy', $usersignup->id)}}">
                            @csrf
                          </form>
                         </td>
                                           
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>S/N</th>
                      <th>Email</th>
                      <th>Status</th>
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

