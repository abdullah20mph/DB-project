@extends('mainLayout')


@section('title')
   Login
@endsection

@section('main-content-section')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Login</h3>
                    <form action="{{ route('loginSubmit') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Enter your email">
                        </div>
                        
                       
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Enter your password">
                            <input type="hidden" name="cmd" value="loginuser">
                        </div>

                       

                        <div class="mb-3 d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn btn-outline-info float-end">Login</button>
                        </div>

                        @error('email')
                            <div class="alert alert-danger">
                                Wrong credentials entered.
                            </div>
                        @enderror



                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection