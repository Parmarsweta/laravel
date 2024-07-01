@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('change Password') }}</div>

                <form action="{{ route('update-password') }}" method="POST">
                    @csrf
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">old password</label>
                        <input type="text" class="form-control @error('old_password') is-invalid @enderror"
                          
                         id="formGroupExampleInput" placeholder="Enter old password">
                        @error('old_password')
                        <span class="text-danger">{{ $message }}</span>
                          
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">new password</label>
                        <input type="text" class="form-control @error('new_password') is-invalid @enderror" 
                          
                        id="formGroupExampleInput" placeholder="Enter new password">
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">confirm password</label>
                        <input type="text" class="form-control @error('confirm_password') is-invalid @enderror"
                          
                         id="formGroupExampleInput2" placeholder="Enter confirm password">
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">submit</button>
                      </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
