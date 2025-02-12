<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminfiles/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/adminfiles/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminfiles/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">

    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/admin" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                {{-- <p class="login-box-msg">Sign in to start your session</p> --}}
                {{-- {{dd(App\Models\User::find(1)->password)}} --}}
                <form action="{{ route('admin.post.login') }}" method="post">
                    @csrf
                    @method('POST')

                    @include('admin.includes.message')

                    <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                            name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <div class="text-danger w-100 d-block"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control  @error('email') is-invalid @enderror"
                            placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <div class="text-danger w-100 d-block"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block w-50 mx-auto">Bejelentkezés</button>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="icheck-primary row justify-content-between">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">
                                    Emlékezzen rám
                                </label>
                                <a href="forgot-password.html">Elfelejtette a jelszavát?</a>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                {{-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div> --}}
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="/adminfiles/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="/adminfiles/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/adminfiles/dist/js/adminlte.min.js"></script>
</body>

</html>
