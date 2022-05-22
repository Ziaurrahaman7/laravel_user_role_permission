@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
              @endif
              <form action="{{ route('role.store') }}" method="POST">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="role">Role Name</label>
                    <input type="text" class="form-control" id="role" name="name" placeholder="Enter role">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- checkbox -->
                  <div class="form-group clearfix">
                    <div class="icheck-primary d-inline">
                      <input type="checkbox"  id="permissionall">
                      <label for="permissionall">
                        All
                      </label>
                    </div>
                  </div>
                  <hr>
                  11th@may#22KH    (vpn)
                  @147#852SWT (airtel)
                  @php $i = 1; @endphp
                  @foreach($permisions_group as $group)
                  {{-- {{ dd($group); }} --}}
                  <div class="row">
                    <div class="col-5">
                      <div class="form-group clearfix">
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" onclick="checkpermissiongroup('role-{{$i}}', this)"  id={{$i}}manage">
                          <label for="checkboxPrimary">
                              {{ $group->group_name }}
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-7 role-{{$i}}">
                      @php $permissions = Spatie\Permission\Models\Permission::all()  @endphp
                      @php $j = 1; @endphp
                      @foreach ($permissions as $permission)
                        @if($permission->group_name == $group->group_name)
                        <div class="form-group clearfix">
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" name="permission[]"  id="checkpermission{{ $permission->id }}">
                            <label for="checkboxPrimary">
                                {{ $permission->name }}
                            </label>
                          </div>
                        </div>
                        @endif
                        @php $j++; @endphp
                      @endforeach
                      
                    </div>
                  </div>
                  @php $i++; @endphp
                  @endforeach
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!-- /.card -->

          </div>
</div>
</div>
</section>
</div>

@endsection

