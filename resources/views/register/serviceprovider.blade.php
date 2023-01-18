@extends('Layout.master')
@section('style')
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/logo.jpeg" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- icons -->
    <link rel="stylesheet" href="css/icofont.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/shortcode/shortcodes.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="./vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style2.css" />
@endsection
@section('container')
    <!-- ================ Header Section End Here =============== -->
    <!--***********************************
                                                                                                                                                                                                                                                                                                                                                                                Content body Start
                                                                                                                                                                                                                                                                                                                                                                            ***********************************-->
    <div class="container align-items-center service-register bg-header"">
        <div class=" row">
            <div class="col-xl-12 col-xxl-12  pt-5">
                <div class="card  pt-5">
                    <div class="card-header">
                        <h4 class="card-title"> خطوات التسجيل</h4>
                    </div>
                    <div class="card-body">
                        <div id="smartwizard" class="form-wizard order-create sw sw-theme-default sw-justified">
                            <ul class="nav nav-wizard">
                                <li><a class="nav-link inactive active" href="#wizard_Service">
                                        <span>1</span>
                                    </a></li>
                                <li><a class="nav-link inactive" href="#wizard_Time">
                                        <span>2</span>
                                    </a></li>
                                <li><a class="nav-link inactive" href="#wizard_Details">
                                        <span>3</span>
                                    </a></li>
                                <li><a class="nav-link inactive" href="#wizard_Payment">
                                        <span>4</span>
                                    </a></li>
                            </ul>
                            <form class="row flex-column align-items-center" method="POST" action={{ route('register') }}
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="hidden" class="form-control border border-primary text-primary"
                                    value="2" />
                                <div class="tab-content" style="height: 299px;">
                                    <div id="wizard_Service" class="tab-pane" role="tabpanel" style="display: block;">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label> <strong>رقم الهاتف</strong></label>
                                                <input id="phone" type="number" placeholder="ادخل رقم الجوال"
                                                    class="form-control border border-primary text-primary"
                                                    @error('phone')
                                                    is-invalid @enderror
                                                    name="phone" value="{{ old('phone') }}">
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
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label> <strong>كلمة المرور </strong></label>
                                                <input id="password" type="password"
                                                    class="form-control border border-primary
                                                text-primary"
                                                    @error('password') is-invalid @enderror placeholder="ادخل كلمة المرور"
                                                    name="password">

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
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label> <strong>تأكيد كلمة المرور</strong></label>
                                                <input id="passwordConfirm" placeholder="تأكيد كلمة المرور" type="password"
                                                    class="form-control border border-primary text-primary"
                                                    name="password_confirmation">

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

                                        </div>
                                    </div>
                                    <div id="wizard_Time" class="tab-pane" role="tabpanel" style="display: none;">
                                        <div class="row">
                                            <div class="conformation" style="padding:0;">
                                                <div class="container">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <div class="authincation-content">
                                                                <div class="row no-gutters">
                                                                    <div class="col-xl-12">
                                                                        <div class="auth-form">
                                                                            <h4
                                                                                class="mb-4
                                                                             confirm-code">
                                                                                كود تأكيد</h4>
                                                                            <h6
                                                                                class=" mb-4
                                                                            ">
                                                                                تم أرسال كود لتأكيد الحساب علي رقم الهاتف
                                                                                المرفق أدناه
                                                                                لتغيير كلمة المرور الخاصة بك </h4>
                                                                                <div class="form-group">
                                                                                    <div>
                                                                                        <input type="text"
                                                                                            class="form-control border border-warning"
                                                                                            disabled id="val-phoneus"
                                                                                            name="val-phoneus"
                                                                                            value="9000344555544">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="userInput mt-5 mb-2 d-flex justify-content-evenly gap-2">
                                                                                    <input type="text" maxlength="1"
                                                                                        class="btn btn-outline-danger autofocus otpinput"
                                                                                        autofocus />
                                                                                    <input type="text" maxlength="1"
                                                                                        class="btn btn-outline-danger  otpinput" />
                                                                                    <input type="text" maxlength="1"
                                                                                        class="btn btn-outline-danger otpinput" />
                                                                                    <input type="text" maxlength="1"
                                                                                        class="btn btn-outline-danger otpinput" />
                                                                                </div>
                                                                                <p class="text-dark text-center">ستنتهي
                                                                                    صلاحية الكود بعد <span
                                                                                        class="text-danger"
                                                                                        id="countdown-timer"></span>
                                                                                    <span class="text-danger"
                                                                                        id="resend"></span>
                                                                                </p>
                                                                                <div class="d-flex justify-content-evenly">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary  rounded-5 ">تأكيد
                                                                                        الكود</button>
                                                                                    <button type="button"
                                                                                        class="btn btn-primary  rounded-5 disabled">إعادة
                                                                                        الأرسال</button>
                                                                                </div>
                                                                        </div>
                                                                        <!-- <h4 class="text-center mb-3">Enter OTP</h4>
                                                                                                                                                                                                                                                                                                                                                <div class="mt-5 mb-2 d-flex justify-content-evenly gap-2 userInput">
                                                                                                                                                                                                                                                                                                                                                                <input type="text" maxlength="1" class="btn btn-outline-danger otpinput" />
                                                                                                                                                                                                                                                                                                                                                                <input type="text"  maxlength="1"class="btn btn-outline-danger otpinput" />
                                                                                                                                                                                                                                                                                                                                                                <input type="text" maxlength="1" class="btn btn-outline-danger otpinput" />
                                                                                                                                                                                                                                                                                                                                                                <input type="text" maxlength="1" class="btn btn-outline-danger otpinput" />
                                                                                                                                                                                                                                                                                                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 d-none d-md-block">
                                                            <div class="about-img">
                                                                <img src="./images/img-1.jpeg" alt="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="wizard_Details" class="tab-pane" role="tabpanel" style="display: none;">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label> <strong>اسم المكتب</strong></label>
                                                <input id="userName" type="text" name="name"
                                                    class="form-control border border-primary text-primary"
                                                    value="{{ old('name') }}" autofocus
                                                    @error('name') is-invalid @enderror placeholder="ادخل اسمــك" />
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
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label> <strong>الاسم الرباعي (مخفي فقط للاستخدام الرسمي )</strong></label>
                                                <input type="text" name="realname"
                                                    class="form-control border border-primary text-primary"
                                                    value="{{ old('realname') }}" placeholder="ادخل اسمــك" />
                                                <div id="userNameFeedback" class="invalid-feedback">
                                                    <strong>
                                                        من فضلك قم بإدخال اسم صحيح باللغة العربية
                                                    </strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label> <strong>رقم الهواية</strong></label>
                                                <input type="text" name="idNumber"
                                                    class="form-control border border-primary text-primary"
                                                    value="{{ old('idNumber') }}" autofocus
                                                    @error('idNumber') is-invalid @enderror placeholder="ادخل اسمــك" />
                                                <div id="userNameFeedback" class="invalid-feedback">
                                                    <strong>
                                                        من فضلك قم بإدخال اسم صحيح باللغة العربية
                                                    </strong>
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="formFileMultiple" class="form-label">قم بأدخال الصورة الخاصة
                                                    بالمكتب</label>
                                                <input class="form-control border border-primary text-primary"
                                                    type="file" id="formFileMultiple" name="image" multiple>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="wizard_Payment" class="tab-pane" role="tabpanel" style="display: none;">


                                        <div class="row">
                                            <div class="col-12">
                                                <div class="skip-email text-center">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">نبذه عن المكتب</label>
                                                        <textarea name="brief" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                                        <span> عدد الحروف 5000 حرف كحد اقصي</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <button class="btn btn-primary fw-bold w-100 text-uppercase mb-2"
                                                    type="submit">تسجيل</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="toolbar toolbar-bottom" role="toolbar" style="text-align: left;"><button
                                    class="btn btn-primary sw-btn-prev disabled" type="button">السابق</button><button
                                    class="btn btn-primary sw-btn-next" type="button">التالي</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
                                                                                                                                                                                                                                                                                                                                                                                Content body End
                                                                                                                                                                                                                                                                                                                                                                            ***********************************-->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/serviceprovider/serviceprovider.js') }}"></script>
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>

    <script src="./vendor/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="./vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="./js/plugins-init/jquery.validate-init.js"></script>



    <!-- Form Steps -->
    <script src="./vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>

    <script>
        $(document).ready(function() {
            // SmartWizard initialize
            $('#smartwizard').smartWizard();
        });
    </script>
@endsection
