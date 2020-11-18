<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>User - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="/highdamin/light/assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{asset('highdamin/light/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('highdamin/light/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('highdamin/light/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body class="account-pages">
            <!-- Begin page -->
            <div class="accountbg" style="background: url('/highdamin/light/assets/images/bg-1.jpg');background-size: cover;background-position: center;"></div>
    
            <div class="wrapper-page account-page-full">
                <div class="card shadow-none">
                    <div class="card-block">
                        <div class="account-box">
                            <div class="card-box shadow-none p-4 mt-2">
                                <h2 class="text-uppercase text-center pb-3">
                                    <a href="index.html" class="text-success">
                                        <span><img src="/highdamin/light/assets/images/logo-dark.png" alt="" height="26"></span>
                                    </a>
                                </h2>
    
                                <form class="" action="#">
    
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="username">Email</label>
                                            <input class="form-control" type="email" id="email" required="" placeholder="Masukan Email">
                                        </div>
                                    </div>
    
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <a href="page-recoverpw.html" class="text-muted float-right"><small>Lupa Kata Sandi?</small></a>
                                            <label for="password">Kata Sandi</label>
                                            <input class="form-control" type="password" required="" id="password" placeholder="Masukan Kata Sandi">
                                        </div>
                                    </div>
    
                                    <div class="form-group row">
                                        <div class="col-12">
    
                                            <div class="checkbox checkbox-primary">
                                                <input id="remember" type="checkbox" checked="">
                                                <label for="remember">
                                                    Ingatkan Saya
                                                </label>
                                            </div>
    
                                        </div>
                                    </div>
    
                                    <div class="form-group row text-center">
                                        <div class="col-12">
                                            <button href="{{route('user-dashboard')}}" class="btn btn-block btn-primary waves-effect waves-light" type="submit">Masuk</button>
                                        </div>
                                    </div>
    
                                </form>
    
                                <div class="row mt-4">
                                    <div class="col-sm-12 text-center">
                                        <p class="text-muted">Belum Punya Akun?<a href="{{route('user-register')}}" class="text-dark ml-1"><b>Daftar</b></a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
    
                    </div>
                </div>
    
                <div class="text-center">
                    <p class="account-copyright">2018 - 2019 © Highdmin. <span class="d-none d-sm-inline-block"> - Coderthemes.com</span></p>
                </div>

            </div>
    
        <!-- Vendor js -->
        <script src="/highdamin/light/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="/highdamin/light/assets/js/app.min.js"></script>
        
    </body>
</html>