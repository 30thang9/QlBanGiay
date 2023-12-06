<?php
use Illuminate\Support\Facades\Session;
?>
<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập hệ thống</title>
    <link rel="shortcut icon" href="/Login-rs/images/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="/Login-rs/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Login-rs/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="/Login-rs/vendors/jquery-ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="/Login-rs/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/Login-rs/vendors/flags-icon/css/flag-icon.min.css">
    <link rel="stylesheet" href="/Login-rs/vendors/social-button/bootstrap-social.css" />
    <link rel="stylesheet" href="/Login-rs/css/main.css">
</head>
<!-- END Head-->

<!-- START: Body-->

<body id="main-container" class="default">
    <!-- START: Main Content-->
    <div class="container">

        <div class="row vh-100 justify-content-between align-items-center">

            <div class="col-12">
                @if($message = Session::get('error'))

                <div class="lockscreen alert alert-danger " style="background-color: #f8d7da;">
                    {{ $message }}
                </div>

                @endif
                <form action="{{ URL::to('/login/dang-nhap-he-thong-SignIn') }}" method="post"
                    class="row row-eq-height lockscreen  mt-3 mb-5">
                    @csrf
                    <div class="lock-image col-12 col-sm-6"></div>
                    <div class="login-form col-12 col-sm-6">
                        <div class="form-group mb-3">
                            <label for="TaiKhoan">Tài khoản</label>
                            <input class="form-control" type="text" id="UserName" name="UserName"
                                placeholder="Nhập tài khoản">
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Mật khẩu</label>
                            <input class="form-control" type="password" id="Password" name="Password"
                                placeholder="Mật khẩu">
                        </div>

                        <div class="form-group mb-0">
                            <div class="mt-2" style="margin-bottom: 6px">
                                <a style="margin-right: 10px" href="/login/register">Đăng ký </a>
                                <a href="/login/khoi-phuc-mat-khau">Quên mật khẩu?</a>
                            </div>

                            <div>
                                <button class="btn btn-primary" type="submit"> Đăng nhập </button>
                                <a class="btn btn-secondary" style="color: #fff" href="/home">
                                    Trở lại
                                </a>
                            </div>
                        </div>
                        <p class="my-2 text-muted">--- đăng nhập qua ---</p>
                        <a class="btn btn-social btn-dropbox text-white mb-2">
                            <i class="icon-social-dropbox align-middle"></i>
                        </a>
                        <a class="btn btn-social btn-facebook text-white mb-2">
                            <i class="icon-social-facebook align-middle"></i>
                        </a>
                        <a class="btn btn-social btn-github text-white mb-2">
                            <i class="icon-social-github align-middle"></i>
                        </a>
                        <a class="btn btn-social btn-google text-white mb-2">
                            <i class="icon-social-google align-middle"></i>
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- END: Content-->

    <!-- START: Template JS-->
    <script src="/Login-rs/vendors/jquery/jquery-3.3.1.min.js"></script>
    <script src="/Login-rs/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="/Login-rs/vendors/moment/moment.js"></script>
    <script src="/Login-rs/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/Login-rs/vendors/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- END: Template JS-->
</body>
<!-- END: Body-->

</html>