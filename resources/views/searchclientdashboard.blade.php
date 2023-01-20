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
                            <form action="{{ route('resultClientsDash') }}" method="POST">
                                @csrf
                                <div class="row">
                                    {{-- الجنس --}}
                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> الجنس</strong></label>
                                        <select name="gender"
                                            class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center">
                                            <option
                                                style="position: absolute; transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);"
                                                value="" selected disabled> إختر الجنس </option>
                                            <option value="ذكر">ذكر</option>
                                            <option value="أنثى">أنثى</option>
                                        </select>
                                    </div>

                                    {{-- الطول --}}
                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> الطول</strong></label>
                                        <select name="length"
                                            class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center">
                                            <option
                                                style="position: absolute; transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);"
                                                value="" selected disabled> إخترالطول </option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->length }}">{{ $client->length }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- الحالة الاجتماعية --}}
                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> الحالة الإجتماعية</strong></label>
                                        <select name="maritalStatus"
                                            class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center">
                                            <option
                                                style="position: absolute; transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);"
                                                value="" selected disabled> إختر الحالة الإجتماعية </option>
                                            <option value="متزوج">متزوج/ة</option>
                                            <option value="مطلق">مطلق/ة</option>
                                            <option value="أعذب">أعذب/ة</option>
                                        </select>
                                    </div>

                                    {{-- الوزن --}}
                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> الوزن</strong></label>
                                        <select name="weight"
                                            class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center">
                                            <option
                                                style="position: absolute; transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);"
                                                value="" selected disabled> إختر الوزن </option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->weight }}">{{ $client->weight }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- الجنسية --}}
                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong>الجنسية</strong></label>
                                        <select name="country"
                                            class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center">
                                            <option
                                                style="position: absolute; transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);"
                                                value="" selected disabled>إختر الجنسية</option>

                                            </option>

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

                                    {{-- بداية العمر --}}
                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> العمر</strong></label>
                                        <select name="age_from"
                                            class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center">
                                            <option
                                                style="position: absolute; transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);"
                                                value="" selected disabled> إختر بداية العمر </option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->age }}">{{ $client->age }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- نهاية العمر --}}
                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> إلى </strong></label>
                                        <select name="age_to"
                                            class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center">
                                            <option
                                                style="position: absolute; transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);"
                                                value="" selected disabled> إختر نهاية العمر </option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->age }}">{{ $client->age }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                </div>
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                    <button type="submit" class="btn btn-primary w-25">
                                        ابدأ البحث
                                    </button>
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
                                                        @forelse ($clients as $client)
                                                            <tr>
                                                                <td><strong> {{ $client->realName }}</strong></td>
                                                                <td>{{ $client->length }} سم</td>
                                                                <td>{{ $client->weight }} كجم</td>
                                                                <td>{{ $client->age }} عام</td>
                                                                <td>{{ $client->maritalStatus }}</td>
                                                                <td>{{ $client->country }}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-primary">
                                                                        عرض البيانات
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            <p class="text-center text-danger">لا يوجد بيانات مطابقة</p>
                                                        @endforelse
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
