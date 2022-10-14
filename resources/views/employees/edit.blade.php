@extends('employees.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Employee</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>NIP:</strong>
                  <input type="text" name="nip" class="form-control" placeholder="NIP" value="{{ $employee->nip }}">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Nama Lengkap:</strong>
                  <input type="text" name="full_name" class="form-control" placeholder="Nama Lengkap" value="{{ $employee->full_name }}">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Jenis Kelamin:</strong>
                  <select name="gender" class="form-control">
                    <option value="Pria" {{$employee->gender == 'Pria' ? 'selected' : '' }}>Pria</option>
                    <option value="Wanita" {{$employee->gender == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                  </select>
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Posisi:</strong>
                <select name="position" class="form-control">
                  <option value="Manager" {{$employee->position == 'Manager' ? 'selected' : '' }}>Manager</option>
                  <option value="Administrator" {{$employee->position == 'Administrator' ? 'selected' : '' }}>Administrator</option>
                  <option value="Programmer" {{$employee->position == 'Programmer' ? 'selected' : '' }}>Programmer</option>
                  <option value="Editor" {{$employee->position == 'Editor' ? 'selected' : '' }}>Editor</option>
                </select>
            </div>
        </div>
          <div class="col-xs-12 col-sm-12 col-md-12 mt-3 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </div>
   
    </form>
@endsection