<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/ptpn.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid">
            <div class="d-flex full-height p-v-15 flex-column justify-content-between">
                <div class="d-none d-md-flex p-h-40">
                    <img src="img/logo-ptpn9.png" alt="">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="m-t-20">Sistem Audit Internal</h2>
                                    <p class="m-b-30">Enter your credential to get access</p>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="userName">Email:</label>
                                            <div class="input-affix">
                                                
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            <!-- @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="password">Password:</label>
                                    <!-- <a class="float-right font-size-13 text-muted" href="">Forget Password?</a> -->
                                    <div class="input-affix m-b-10">
                                        
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">
                                            <!-- @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="font-size-13 text-muted">
                                            Login menggunakan email dan kata sandi
                                            <!-- <a class="small" href=""> Signup</a> -->
                                        </span>
                                        <button class="btn btn-primary">Sign In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="offset-md-1 col-md-6 d-none d-md-block">
                    <img class="img-fluid" src="img/login-2.png" alt="">
                </div>
            </div>
        </div>
        <div class="d-none d-md-flex  p-h-40 justify-content-between">
            <span class="">© 2019 Sistem Audit Internal</span>
            <!-- <ul class="list-inline">
                <li class="list-inline-item">
                    <a class="text-dark text-link" href="#">Legal</a>
                </li>
                <li class="list-inline-item">
                    <a class="text-dark text-link" href="#">Privacy</a>
                </li>
            </ul> -->
        </div>
    </div>
</div>
</div>


<!-- Core Vendors JS -->
<script src="js/vendors.min.js"></script>

<!-- page js -->

<!-- Core JS -->
<script src="js/app.min.js"></script>

</body>

</html>