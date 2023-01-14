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
    <div class="container">
        <div class="container-fluid ">
            <div class="row m-5">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">الأعضاء</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table1" class="display min-w850 text-center m-5">
                                    <thead>
                                        <tr class="m-5">
                                            <th>اسم العضو</th>
                                            <th>الطول</th>
                                            <th>الوزن</th>
                                            <th>العمر</th>
                                            <th>الحالة الاجتماعية</th>
                                            <th>الجنسية</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong> نور</strong></td>
                                            <td>170 m</td>
                                            <td>70 kg</td>
                                            <td>24 سنه</td>
                                            <td>عزباء</td>
                                            <td>سعودية</td>
                                            <td>
                                                <button type="button" class="btn btn-primary mb-1">
                                                    عرض البيانات
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-center align-items-center mt-2">
                                <button type="button" class="btn btn-primary w-25">
                                    التالي
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
