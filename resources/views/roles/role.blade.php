@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Roles') }}</div>

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
                            <th scope="col">Role_name</th>
                            <th scope="col">Username</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @foreach ($roles as $data )
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->Role_name }}</td>
                                <td>{{ $data->getuser->name }}</td>
                                
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
