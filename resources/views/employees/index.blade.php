<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CRUD Employees') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12 margin-tb mt-4">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('employees.create') }}"> Create New Employee</a>
                </div>
            </div>
        </div>
       
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
       
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Lengkap</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $employee->nip }}</td>
                <td>{{ $employee->full_name }}</td>
                <td>
                    <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
       
                        <a class="btn btn-info" href="{{ route('employees.show',$employee->id) }}">Show</a>
        
                        <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
      
        {!! $employees->links() !!}
    </div>
          
</x-app-layout>