@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">User Role</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">SL</th>
            <th>Role</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
          <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $role->name }}</td>
            <td>
             
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">«</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">»</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
</div>
</section>
</div>
@endsection
