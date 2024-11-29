<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Error Page | 404 | Page not Found | Adminto - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="adminTemplate/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="{{ asset('adminTemplate/js/config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('adminTemplate/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- icons -->
    <link href="{{ asset('adminTemplate/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="loading authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="text-center">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('adminTemplate/images/logo-dark.png') }}" alt="" height="22" class="logo-light mx-auto">
                        </a>
                    </div>
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center">
                                <h1 class="text-error">404</h1>
                                <h3 class="mt-3 mb-2">Page not Found</h3>
                                <p class="text-muted mb-3">It's looking like you may have taken a wrong turn. Don't
                                    worry... it happens to
                                    the best of us. You might want to check your internet connection. Here's a little
                                    tip that might
                                    help you get back on track.</p>

                                <a href="{{ route('home') }}" class="btn btn-danger waves-effect waves-light"><i
                                        class="fas fa-home me-1"></i> Back to Home</a>
                            </div>


                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor -->
    <script src="{{ asset('adminTemplate/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminTemplate/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminTemplate/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('adminTemplate/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('adminTemplate/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('adminTemplate/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('adminTemplate/libs/feather-icons/feather.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>


</html>