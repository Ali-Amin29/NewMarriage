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
                    <h2 class="text-center mb-2 mt-4">تسجيل </h2>

                    <form class="row flex-column align-items-center" method="POST" action={{ route('register') }}>
                        @csrf
                        <input type="hidden" name="hidden" class="form-control border border-primary text-primary"
                            value="1" />
                        <div class="form-group col-md-8">
                            <label> <strong>الاسم</strong></label>
                            <input id="userName" type="text" name="name"
                                class="form-control border border-primary text-primary" value="{{ old('name') }}"
                                autofocus @error('name') is-invalid @enderror placeholder="ادخل اسمــك" />
                            <div id="userNameFeedback" class="invalid-feedback">
                                <strong>
                                    من فضلك قم بإدخال اسم صحيح باللغة العربية
                                </strong>
                            </div>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-8">
                            <label> <strong>رقم الهاتف</strong></label>
                            <input id="phone" type="number" placeholder="ادخل رقم الجوال"
                                class="form-control border border-primary text-primary"
                                @error('phone')
                                 is-invalid @enderror name="phone"
                                value="{{ old('phone') }}">
                            <div id="phoneFeedback" class="invalid-feedback">
                                <strong>
                                    رقم الهاتف يجب ان يحتوى على 10 ارقام

                                </strong>
                            </div>

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror



                        </div>
                        <div class="form-group col-md-8">
                            <label> <strong>كلمة المرور </strong></label>

                            <input id="password" type="password"
                                class="form-control border border-primary
                                 text-primary"
                                @error('password') is-invalid @enderror placeholder="ادخل كلمة المرور" name="password">

                            <div id="passwordFeedback" class="invalid-feedback">
                                <strong>
                                    الباسورد يجب ان يحتوى على حروف وأرقام
                                </strong>
                            </div>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-8">
                            <label> <strong>تأكيد كلمة المرور</strong></label>
                            <input id="passwordConfirm" placeholder="تأكيد كلمة المرور" type="password"
                                class="form-control border border-primary text-primary" name="password_confirmation">

                            <div id="passwordConfirmFeedback" class="invalid-feedback">
                                <strong>
                                    الباسورد يجب ان يحتوى على حروف وأرقام
                                </strong>
                            </div>
                            <div id="passwordConfirmFeedback" class="invalid-feedback">
                                <strong>
                                    الباسورد يجب ان يكون مطابق
                                </strong>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <button type="submit" onclick="validate(event)"
                                class="btn btn-primary fw-bold w-100 text-uppercase mb-2">
                                تسجيل دخول
                            </button>

                        </div>


                    </form>
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
    <script src="{{ URL::asset('assets/js/supervisior/supervisior.js') }}"></script>
    <script src="js/vendor/jquery-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <!--**********************************
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Scripts
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>
@endsection
