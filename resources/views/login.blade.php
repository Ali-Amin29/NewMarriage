@extends('Layout.master')
@section('style')
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/logo.jpeg" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- icons -->
    <link rel="stylesheet" href="css/icofont.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="./css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style2.css" />
@endsection
@section('container')
    <!-- header area end -->
    <div class="bg-header">
        <div class="container-fluid">
            <div class="row card-login ">
                <div class="col-md-6">
                    <h2 class="text-center mb-5 mt-5">تسجيل الدخول</h2>
                    <form class="row flex-column align-items-center" method="POST" action={{ route('login') }}>
                        @csrf
                        <div class="form-group col-md-8">
                            <label> <strong>رقم الهاتف</strong></label>
                            <input type="number"
                                class="form-control border border-primary text-primary @error('phone') is-invalid @enderror"
                                id="phone" name="phone" value="{{ old('phone') }}" placeholder="ادخل رقم الهاتف" />
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-8">
                            <label> <strong>كلمة المرور </strong></label>
                            <input type="password"
                                class="form-control border border-primary text-primary @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="ادخل كلمة المرور " />
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="col-sm-4">
                            <button class="btn btn-primary fw-bold w-100 text-uppercase mb-2" type="submit">
                                تسجيل دخول
                            </button>
                        </div>
                    </form>
                    <div class="row px-5 mb-4">
                        <div class="line"></div>
                        <small class="or text-center">Or</small>
                        <div class="line"></div>
                    </div>
                    <div class="row flex-column align-items-center">
                        <a class="text-center  small" href={{ route('register', ['id' => 2]) }}>
                            هل انت مزود خدمة ؟ سجل من هنا </a>
                        <a class="text-center mt-2 small" href={{ route('register', ['id' => 1]) }}>
                            هل انت مشرف ؟ سجل من هنا </a>
                    </div>
                </div>
                <div class="col-md-6 card-img-left  d-none d-md-block">
                    <img src="./images/login.jpeg" alt="" />
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Authincation area Start -->
@endsection
@section('script')
    <!-- all js here -->
    <script src="js/vendor/jquery-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>
@endsection
