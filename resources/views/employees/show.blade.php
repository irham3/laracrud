@extends('employees.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Employee</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <table class="table">
            <tbody class="table-group-divider">
              <tr>
                <th scope="row">NIP</th>
                <td>{{ $employee->nip }}</td>
              </tr>
              <tr>
                <th scope="row">Nama Lengkap</th>
                <td>{{ $employee->full_name }}</td>
              </tr>
              <tr>
                <th scope="row">Jenis Kelamin</th>
                <td>{{ $employee->gender }}</td>
              </tr>
              <tr>
                <th scope="row">Posisi</th>
                <td>{{ $employee->position }}</td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection