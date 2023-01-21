@extends('layout.master')

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
    <link href="./css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style2.css" />
@endsection
@section('container')
    <!-- ================ Register Section Start Here =============== -->
    <div class="bg-header">
        <div class="wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay=".5s"
            style="
      visibility: visible;
      animation-duration: 1.5s;
      animation-delay: 0.5s;
      background-image: url('./images/bg-2.jpg');
    ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 bg-light p-5">
                        <div class="banner__form">
                            <form action="{{ route('resultClients') }}" method="POST">
                                @csrf
                                <div class="banner__list">
                                    <label> انا اكون</label>
                                    <div class="row">
                                        <div class="col-6 ">
                                            <label class="banner__inputlist" for="male">
                                                <input type="radio" id="male" name="me" class="male"
                                                    checked="" value="male" />
                                                <span>ذكر</span>
                                                <span class="banner__inputlist--icon"><i class="fa fa-mars"></i></span>
                                            </label>
                                        </div>
                                        <div class="col-6 ">
                                            <label class="banner__inputlist" for="female">
                                                <input type="radio" id="female" name="me" class="female"
                                                    value="female" />
                                                <span>انثي</span>
                                                <span class="banner__inputlist--icon"><i class="fa fa-venus"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner__list">
                                    <label>ابحث عن</label>
                                    <div class="row">
                                        <div class="col-6 ">
                                            <label class="banner__inputlist" for="male2">
                                                <input type="radio" id="male2" name="gender" class="male"
                                                    value="ذكر" />
                                                <span>ذكر</span>
                                                <span class="banner__inputlist--icon"><i class="fa fa-mars"></i></span>
                                            </label>
                                        </div>
                                        <div class="col-6 ">
                                            <label class="banner__inputlist" for="female2">
                                                <input type="radio" id="female2" name="gender" class="female"
                                                    value="انثى" checked />
                                                <span> أنثى</span>
                                                <span class="banner__inputlist--icon"><i class="fa fa-venus"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner__list">
                                    <label>عمر</label>
                                    <div class="row">
                                        <div class="col-6 ">
                                            <div class="banner__inputlist">
                                                <select class="custom-select-choose" name="age_from">
                                                    <option value="" selected disabled>إختر بداية العمر</option>
                                                    @foreach ($clients as $client)
                                                        <option value="{{ $client->age }}">{{ $client->age }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="banner__inputlist">
                                                <select class="custom-select-choose" name="age_to">
                                                    <option value="" selected disabled>إختر نهاية العمر</option>
                                                    @foreach ($clients as $client)
                                                        <option value="{{ $client->age }}">{{ $client->age }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner__list">
                                    <label>البلد</label>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="banner__inputlist">
                                                <select class="custom-select-choose" id="country" name="country">
                                                    <option value="" selected disabled>إختر الجنسية</option>
                                                    <option value="مصر">مصر</option>
                                                    <option value="السعودية">السعودية</option>
                                                    <option value="قطر">قطر</option>
                                                    <option value="الكويت">الكويت</option>
                                                    <option value="الامارات">الامارات</option>
                                                    <option value="المغرب">المغرب</option>
                                                    <option value="تونس">تونس</option>
                                                    <option value="ليبيا">ليبيا</option>
                                                    <option value="الجزائر">الجزائر</option>
                                                    <option value="اسبانيا">اسبانيا</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary mt-5">
                                        <span> ابحث عن شريك </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7  d-none d-md-block pb-5">
                        <div class="banner__thumb banner__thumb--thumb1 wow fadeInUp" data-wow-duration="1.5s"
                            data-wow-delay="1s">
                            <img src="./images/9.png" alt="Dating Thumb" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Register Section End Here =============== -->
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
    <!--**********************************
                                                                                                                                        Scripts
                                                                                                                                    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>
@endsection
