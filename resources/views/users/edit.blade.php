@extends('layouts.app')

@section('content')
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title">Edit  USERS</h1>
            </div>
            <!-- End Col -->


            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Page Header -->

    
        
        <div class="row justify-content-lg-center">
            <div class="col-lg-8">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form class="js-step-form py-md-5" method="POST">
                    @csrf
                    <!-- Content Step Form -->
                    <div id="addUserStepFormContent">
                        <!-- Card -->
                        <div id="addUserStepProfile" class="card card-lg active">
                            <!-- Body -->
                            <div class="card-body">
                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Full name <i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title=""
                                            data-bs-original-title="Displayed on public forums, such as Front."
                                            aria-label="Displayed on public forums, such as Front."></i></label>

                                    <div class="col-sm-9">
                                        <div class="input-group input-group-sm-vertical">
                                            <input type="text" class="form-control" name="name" id="firstNameLabel"
                                                placeholder="Clarice" aria-label="Clarice"
                                                value="">
                                                @error('name')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="emailLabel" class="col-sm-3 col-form-label form-label">Email</label>

                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" id="emailLabel"
                                            placeholder="clarice@site.com" aria-label="clarice@site.com"
                                            value="{{old('email')}}">
                                        @error('email')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="password" class="col-sm-3 col-form-label form-label">Password</label>

                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="password" aria-label="Htmlstream" value="{{old('password')}}">
                                        @error('password')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="confirm" class="col-sm-3 col-form-label form-label">Confirm Password</label>

                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="password_confirmation" id="confirm"
                                            placeholder="Confirm Password" aria-label="Human resources">
                                    </div>
                                </div>
                                <!-- End Form -->


                            </div>
                            <!-- End Body -->

                            <!-- Footer -->
                            <div class="card-footer d-flex justify-content-end align-items-center">
                                <button type="submit" class="btn btn-primary">
                                    submit <i class="bi-chevron-right"></i>
                                </button>
                            </div>
                            <!-- End Footer -->
                        </div>
                        <!-- End Card -->




                    </div>
                    <!-- End Content Step Form -->
                </form>

            </div>
        </div>
        <!-- End Row -->

</div>
@endsection