@extends('admin-layouts.app')

@section('admin_title', 'Chef | chef')
@section('header', 'Expert Chef')

@section('admin_content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
               <div class="d-grid bg-primary">
            <h1 class="card-title">
              <a href="{{ route('chef.index')}}" class="btn btn-primary float-right"><i class="fas fa-arrow-circle-left"></i></a>
            </h1>
          </div>
                <div class="float-right d-none d-sm-inline-block">
                  <a href="{{ route('chef.create')}}" class="btn btn-primary">Add New Chef</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Chef</th>
                    <th>Designation</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 
                  <tr>
                     <td>{{$chefs->id}}</td>
                     <td>{{$chefs->name}}</td>
                     <td>{{$chefs->designation}}</td>
                     <td><img src="{{asset('uploads/chef/'.$chefs->image)}}" width="200" height="70" alt=""></td>
                     <td>
                       
                       <a href="{{route('chef.edit',$chefs->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
                       <button type="button" class="btn btn-danger" onclick="if(confirm('Are you sure delete this?')){event.preventDefault();document.getElementById('delete-form-{{$chefs->id}}').submit()};" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
                           
                       <form id="delete-form-{{$chefs->id}}" method="POST" action="{{route('chef.destroy', $chefs->id)}}">
                        @csrf
                        @method('DELETE')
                      </form>
                     </td>
                                       
                </tr>
               
                </tbody>
                <tfoot>
                <tr>
                    <th>SN</th>
                    <th>Chef</th>
                    <th>Designation</th>
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

