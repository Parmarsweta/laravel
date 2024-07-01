@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Company</th>
                            <th scope="col">Employee</th>
                            {{-- <th scope="col">Teacher</th> --}}
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @foreach ($stores as $data )
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->store_name }}</td>
                                <td>{{ $data->company->name }}</td>
                                <td>{{ $data->employee->name }}</td>
                                {{-- <td>{{ $data->teacher->name}}</td> --}}
                            @endforeach
                          </tr>
                          
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
