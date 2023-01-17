@extends('layout.master')
@section('style')
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/logo.jpeg" />
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- icons -->
    <link rel="stylesheet" href="css/icofont.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/shortcode/shortcodes.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="./css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style2.css" />
@endsection
@section('container')
    <div class="bg-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mt-5">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h5 class="card-title"> البحث عن مزود الخدمة</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/filter') }}" method="get">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-3">
                                        <label> <strong>اسم المكتب</strong></label>

                                        <input type="search" name="name" value="{{ $name }}"
                                            class="form-control border border-primary" placeholder="">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-3  col-md-6 d-flex flex-column">
                                        <select name="" id=""
                                            class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center">
                                            <option value="">التقييم </option>
                                            @foreach ($provider as $provid)
                                                <option value="{{ $provid->id }}">{{ $provid->rate }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3  col-md-6 d-flex flex-column">
                                        <select name="" id=""
                                            class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center">
                                            <option
                                                style="position: absolute;  transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);"
                                                value="">عدد المشتركين </option>
                                            {{-- @foreach ($provider as $provid) --}}
                                            <option value="{{ $userCount }}">{{ $userCount }}</option>
                                            {{-- @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3  col-md-6 d-flex flex-column">
                                        <div class="dropdown custom-dropdown ">
                                            <button type="button"
                                                class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                                                data-toggle="dropdown" aria-expanded="true">
                                                عدد حالات الزواج
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right " x-placement="top-end"
                                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);">
                                                <a class="dropdown-item" href="#"> 170 m
                                                </a>
                                                <a class="dropdown-item" href="#">Last 6
                                                    Month</a>
                                                <a class="dropdown-item" href="#">Last 10
                                                    Month</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <button class="btn btn-primary"> البحث</button>
                            </form>
                        </div>

                        <!-- ********************************************** -->
                        <div class="search-result">
                            <div class="container">
                                <!-- <div class="d-flex justify-content-start mb-3"> -->

                                <h2 class="mb-3">نتائج البحث</h2>
                                <!-- <span class="search-icon ms-2"><i class="fa fa-filter" aria-hidden="true"></i>
                                                </span>
                                                <span class="search-icon"><i class="fa fa-sort"></i>
                                                </span>
                                            </div> -->

                                <div class="row">
                                    <div class="col-lg-12">

                                        <h4 class="card-title">خدمات المكاتب التعارف</h4>
                                        <div class="card-body">








                                            <div class="table-responsive">
                                                <table id="example" class="display min-w850 text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>اسم المكتب</th>
                                                            <th>عدد حالات الزواج</th>
                                                            <th>تقيم مكتب</th>
                                                            <th>عدد المشتركين</th>
                                                            <th>البيانات مكتب</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data as $res)
                                                            <tr>
                                                                <td>

                                                                    <strong> {{ $res->name }}</strong>

                                                                </td>
                                                                <td>25 خدمة</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center"><i
                                                                            class="fa fa-star"></i> <span
                                                                            class="w-space-no">
                                                                            {{ $res->rate }}</span></div>
                                                                </td>
                                                                <td>25</td>
                                                                <td>

                                                                    <button class="btn btn-primary">عرض البيانات
                                                                    </button>

                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                    </tbody>

                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- show-service area start -->

    <!-- ================ Footer Section start Here =============== -->
    <div id="contact" class="copyright-area-container bg-5 ptb-70">
        <div class="container">
            <!-- Contact address left -->
            <div class="d-flex justify-content-center gap-5">
                <div class="single-address">
                    <div class="media">
                        <div class="media-body d-flex gap-3 align-items-center">
                            <i class="icofont icofont-phone"></i>
                            <p class="phone">+966 50 737 1939<br /></p>
                        </div>
                    </div>
                </div>
                <div class="single-address">
                    <div class="media">
                        <div class="media-body d-flex gap-3 align-items-center">
                            <i class="icofont icofont-web"></i>
                            <p>info@mythaq.com.sa <br /></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact address left -->
            <!-- Copyright right -->
            <div class="row">
                <div class="col-12">
                    <div class="copyright-area text-center">
                        <!-- Copyright social -->
                        <div class="contact-social text-center pt-70 pb-35">
                            <ul>
                                <li>
                                    <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont icofont-social-instagram"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Footer Section End Here =============== -->
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
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>
@endsection
