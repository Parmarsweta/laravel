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
                            <th scope="col">name</th>
                            <th scope="col">study</th>
                            <th scope="col">city</th>
                            <th scope="col">teacher</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @foreach ($students as $data )
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->study }}</td>
                                <td>{{ $data->city }}</td>
                                <td>{{ $data->teacher->name}}</td>
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
