@extends('layout_dashboard.master')

@section('style')
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/logo.jpeg" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="./vendor/dropzone/dist/dropzone.css" rel="stylesheet" />
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
@endsection
@section('container')
    <div class="content-body">
        <div class="container-fluid">
            <!-- Add Order -->
            <div class="modal fade" id="addOrderModalside">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Event</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label class="text-black font-w500">Event Name</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Event Date</label>
                                    <input type="date" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Description</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary">
                                        Create
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--**********************************
                                  Table Start
                       ***********************************-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h5 class="card-title">البحث عن عميل</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> الجنس</strong></label>
                                        <div class="dropdown custom-dropdown">
                                            <button type="button"
                                                class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                                                data-toggle="dropdown" aria-expanded="true">
                                                انثي<i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="top-end"
                                                style="
                            position: absolute;
                            will-change: transform;
                            top: 0px;
                            left: 0px;
                            transform: translate3d(80px, -115px, 0px);
                          ">
                                                <a class="dropdown-item" href="#"> 170 m </a>
                                                <a class="dropdown-item" href="#">Last 6 Month</a>
                                                <a class="dropdown-item" href="#">Last 10 Month</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> الطول</strong></label>
                                        <div class="dropdown custom-dropdown">
                                            <button type="button"
                                                class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                                                data-toggle="dropdown" aria-expanded="true">
                                                170 m <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="top-end"
                                                style="
                            position: absolute;
                            will-change: transform;
                            top: 0px;
                            left: 0px;
                            transform: translate3d(80px, -115px, 0px);
                          ">
                                                <a class="dropdown-item" href="#"> 170 m </a>
                                                <a class="dropdown-item" href="#">Last 6 Month</a>
                                                <a class="dropdown-item" href="#">Last 10 Month</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> الحالة الاجتماعية</strong></label>
                                        <div class="dropdown custom-dropdown">
                                            <button type="button"
                                                class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                                                data-toggle="dropdown" aria-expanded="true">
                                                عزباء<i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="top-end"
                                                style="
                            position: absolute;
                            will-change: transform;
                            top: 0px;
                            left: 0px;
                            transform: translate3d(80px, -115px, 0px);
                          ">
                                                <a class="dropdown-item" href="#"> 170 m </a>
                                                <a class="dropdown-item" href="#">Last 6 Month</a>
                                                <a class="dropdown-item" href="#">Last 10 Month</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> الوزن</strong></label>
                                        <div class="dropdown custom-dropdown">
                                            <button type="button"
                                                class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                                                data-toggle="dropdown" aria-expanded="true">
                                                70 kg <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="top-end"
                                                style="
                            position: absolute;
                            will-change: transform;
                            top: 0px;
                            left: 0px;
                            transform: translate3d(80px, -115px, 0px);
                          ">
                                                <a class="dropdown-item" href="#"> 170 m </a>
                                                <a class="dropdown-item" href="#">Last 6 Month</a>
                                                <a class="dropdown-item" href="#">Last 10 Month</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> الجنسية</strong></label>
                                        <div class="dropdown custom-dropdown">
                                            <button type="button"
                                                class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                                                data-toggle="dropdown" aria-expanded="true">
                                                سعودي<i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="top-end"
                                                style="
                            position: absolute;
                            will-change: transform;
                            top: 0px;
                            left: 0px;
                            transform: translate3d(80px, -115px, 0px);
                          ">
                                                <a class="dropdown-item" href="#"> 170 m </a>
                                                <a class="dropdown-item" href="#">Last 6 Month</a>
                                                <a class="dropdown-item" href="#">Last 10 Month</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> العمر</strong></label>
                                        <div class="dropdown custom-dropdown">
                                            <button type="button"
                                                class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                                                data-toggle="dropdown" aria-expanded="true">
                                                20 سنة <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="top-end"
                                                style="
                            position: absolute;
                            will-change: transform;
                            top: 0px;
                            left: 0px;
                            transform: translate3d(80px, -115px, 0px);
                          ">
                                                <a class="dropdown-item" href="#"> 170 m </a>
                                                <a class="dropdown-item" href="#">Last 6 Month</a>
                                                <a class="dropdown-item" href="#">Last 10 Month</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> الي</strong></label>
                                        <div class="dropdown custom-dropdown">
                                            <button type="button"
                                                class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                                                data-toggle="dropdown" aria-expanded="true">
                                                25 سنة<i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="top-end"
                                                style="
                            position: absolute;
                            will-change: transform;
                            top: 0px;
                            left: 0px;
                            transform: translate3d(80px, -115px, 0px);
                          ">
                                                <a class="dropdown-item" href="#"> 170 m </a>
                                                <a class="dropdown-item" href="#">Last 6 Month</a>
                                                <a class="dropdown-item" href="#">Last 10 Month</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                    <a href="searchaboutclient-to-supervisior.html" class="btn btn-primary w-25">
                                        ابدأ البحث
                                    </a>
                                </div>
                            </form>
                        </div>

                        <!-- ********************************************** -->
                        <div class="container">
                            <!-- <div class="d-flex justify-content-start mb-3"> -->
                            <h4 class="mb-3">نتائج البحث</h4>
                            <!-- <span class="search-icon ms-2"><i class="fa fa-filter" aria-hidden="true"></i>
                    </span>
                    <span class="search-icon"><i class="fa fa-sort"></i>
                    </span>
                    </div> -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">الأعضاء</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="table1" class="display min-w850 text-center">
                                                    <thead>
                                                        <tr>
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
                                                                <button type="button" class="btn btn-primary">
                                                                    عرض البيانات
                                                                </button>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><strong> نور</strong></td>
                                                            <td>170 m</td>
                                                            <td>70 kg</td>
                                                            <td>24 سنه</td>
                                                            <td>عزباء</td>
                                                            <td>سعودية</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary">
                                                                    عرض البيانات
                                                                </button>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><strong> نور</strong></td>
                                                            <td>170 m</td>
                                                            <td>70 kg</td>
                                                            <td>24 سنه</td>
                                                            <td>عزباء</td>
                                                            <td>سعودية</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary">
                                                                    عرض البيانات
                                                                </button>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><strong> نور</strong></td>
                                                            <td>170 m</td>
                                                            <td>70 kg</td>
                                                            <td>24 سنه</td>
                                                            <td>عزباء</td>
                                                            <td>سعودية</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary">
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
                </div>
                <!--**********************************
                          Content body end
                    ***********************************-->
            </div>
        </div>
    </div>
@endsection


@section('script')
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>
    <script src="./vendor/owl-carousel/owl.carousel.js"></script>
    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>
    <script>
        function carouselReview() {
            jQuery(".event-bx").owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                center: true,
                autoplaySpeed: 3000,
                navSpeed: 3000,
                paginationSpeed: 3000,
                slideSpeed: 3000,
                smartSpeed: 3000,
                autoplay: false,
                navText: [
                    '<i class="fa fa-caret-left" aria-hidden="true"></i>',
                    '<i class="fa fa-caret-right" aria-hidden="true"></i>',
                ],
                dots: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    720: {
                        items: 2,
                    },

                    1150: {
                        items: 3,
                    },

                    1200: {
                        items: 2,
                    },
                    1749: {
                        items: 3,
                    },
                },
            });
        }
        jQuery(window).on("load", function() {
            setTimeout(function() {
                carouselReview();
            }, 1000);
        });
    </script>
@endsection
