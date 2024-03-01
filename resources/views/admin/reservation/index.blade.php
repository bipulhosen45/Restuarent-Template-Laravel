@extends('admin-layouts.app')

@section('admin_title', 'Reservation | PATO')
@section('header', 'All Reservation')


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
                      <h1 class="card-title">Reservation</h1>
                   </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Person</th>
                        <th>Date & Time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($reservations as $key=>$reservation)
                      <tr>
                         <td>{{$key+1}}</td>
                         <td>{{$reservation->name}}</td>
                         <td>{{$reservation->phone}}</td>
                         <td>{{$reservation->email}}</td>
                         <td>{{$reservation->person}}</td>
                         <td>{{$reservation->date}} & {{$reservation->time}}</td>
                         <td>
                            @if ($reservation->status == 1)
                                <span class="badge badge-success">Confirmed</span>
                            @endif
                            @if ($reservation->status == 0)
                                <span class="badge badge-warning">Waiting</span>
                            @endif
                        </td>
                        
                         <td>
                            @if ($reservation->status == 0)
                            <form id="status-form-{{$reservation->id}}" method="POST" action="{{route('reservation.status', $reservation->id)}}">
                                @csrf
                            </form>

                              <button type="button" class="btn btn-primary btn-sm mx-1" onclick="if(confirm('Are you verify request by phone?')){event.preventDefault();document.getElementById('status-form-{{$reservation->id}}').submit();}
                              else{event.preventDefault();}"><i class="fas fa-check"></i> </button>
                            @endif
                           
                           
                           <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure delete this?')){event.preventDefault();document.getElementById('delete-form-{{$reservation->id}}').submit();}
                           else{event.preventDefault();}"><i class="fas fa-trash-alt"></i> </button>
                           
                           <form id="delete-form-{{$reservation->id}}" method="POST" action="{{route('reservation.destroy', $reservation->id)}}">
                            @csrf
                          </form>
                         </td>
                                           
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>S/N</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Person</th>
                      <th>Date & Time</th>
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

