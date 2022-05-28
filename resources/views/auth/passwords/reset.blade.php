<!DOCTYPE html>
<html lang="@@languageDirection.lang">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Basic Log In | Front - Admin &amp; Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <!-- bundlecss:vendor [@@autopath] -->
    <link rel="stylesheet" href="@@autopath/node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('/assets/css/theme.min.css')}}" as="style">

</head>

<body>

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main">
        <div class="position-fixed top-0 end-0 start-0 bg-img-start"
            style="height: 32rem; background-image: url({{asset('/assets/svg/components/card-6.svg')}});">
            <!-- Shape -->
            <div class="shape shape-bottom zi-1">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    viewBox="0 0 1921 273">
                    <polygon fill="#fff" points="0,273 1921,273 1921,0 " />
                </svg>
            </div>
            <!-- End Shape -->
        </div>

        <!-- Content -->
        <div class="container py-5 py-sm-7">
            <a class="d-flex justify-content-center mb-5" href="@@autopath/index.html">
                <img class="zi-2" src="{{asset('/assets/svg/logos/logo.svg') }}" alt="Image Description"
                    style="width: 8rem;">
            </a>

            <div class="mx-auto" style="max-width: 30rem;">
                <!-- ALERT-->
                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <!--/ALERT-->
                <!-- Card -->
                <div class="card card-lg mb-5">
                    <div class="card-body">
                        <!-- Form -->
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="text-center">
                                <div class="mb-5">
                                    <h1 class="display-5">{{ __('Reset Password') }}</h1>
                                </div>

                                {{-- <div class="d-grid mb-4">
                                    <a class="btn btn-white btn-lg" href="#">
                                        <span class="d-flex justify-content-center align-items-center">
                                            <img class="avatar avatar-xss me-2"
                                                src="{{asset('/assets/svg/brands/google-icon.svg')}}"
                                                alt="Image Description">
                                            Sign in with Google
                                        </span>
                                    </a>
                                </div> --}}

                                {{-- <span class="divider-center text-muted mb-4">OR</span> --}}
                            </div>

                            <!-- Form -->
                            <div class="mb-4">
                                <label class="form-label" for="signinSrEmail">{{ __('Email Address') }}</label>
                                <input type="email" value="{{ $email ?? old('email') }}"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                    name="email" id="signinSrEmail" tabindex="1" placeholder="email@address.com"
                                    aria-label="email@address.com" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="mb-4">
                                <label class="form-label" for="password">{{ __('Password') }}</label>
                                <input type="passord"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    name="password" id="password" tabindex="1" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <!-- End Form -->

                            <!-- Form Confirm -->
                            <div class="mb-4">
                                <label class="form-label" for="confirm_password">{{ __('Confirm Password') }}</label>
                                <input type="passord" class="form-control form-control-lg" name="password_confirmation"
                                    id="confirm_password" tabindex="1" required>
                            </div>
                            <!-- End Form confirm -->

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
                <!-- End Card -->

                <!-- Footer -->
                <div class="position-relative text-center zi-1">
                    <small class="text-cap text-body mb-4">Trusted by the world's best teams</small>

                    <div class="w-85 mx-auto">
                        <div class="row justify-content-between">
                            <div class="col">
                                <img class="img-fluid" src="{{asset('/assets/svg/brands/gitlab-gray.svg')}}" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col">
                                <img class="img-fluid" src="{{ asset('/assets/svg/brands/fitbit-gray.svg') }}"
                                    alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col">
                                <img class="img-fluid" src="{{ asset('/assets/svg/brands/flow-xo-gray.svg') }}"
                                    alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col">
                                <img class="img-fluid" src="{{ asset('/assets/svg/brands/layar-gray.svg') }}"
                                    alt="Logo">
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Footer -->
            </div>
        </div>
        <!-- End Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- JS Global Compulsory @@deleteLine:build -->
    <script src="@@autopath/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="@@autopath/node_modules/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="@@autopath/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <!-- bundlejs:vendor [@@autopath] -->
    <script src="@@autopath/assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>

    <!-- JS Front -->
    <!-- bundlejs:theme [@@autopath] -->
    <script src="@@autopath/assets/js/hs.core.js"></script>
    <script src="@@autopath/assets/js/hs.bs-validation.js"></script>
</body>

</html>