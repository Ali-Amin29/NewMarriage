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
                            <h5 class="card-title">?????????? ???? ????????</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('resultClientsDash') }}" method="POST">
                                @csrf
                                <div class="row">
                                    {{-- ?????????? --}}
                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> ??????????</strong></label>
                                        <select name="gender"
                                            class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center">
                                            <option
                                                style="position: absolute; transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);"
                                                value="" selected disabled> ???????? ?????????? </option>
                                            <option value="??????">??????</option>
                                            <option value="????????">????????</option>
                                        </select>
                                    </div>

                                    {{-- ?????????? --}}
                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> ??????????</strong></label>
                                        <select name="length"
                                            class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center">
                                            <option
                                                style="position: absolute; transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);"
                                                value="" selected disabled> ?????????????????? </option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->length }}">{{ $client->length }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- ???????????? ???????????????????? --}}
                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> ???????????? ????????????????????</strong></label>
                                        <select name="maritalStatus"
                                            class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center">
                                            <option
                                                style="position: absolute; transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);"
                                                value="" selected disabled> ???????? ???????????? ???????????????????? </option>
                                            <option value="??????????">??????????/??</option>
                                            <option value="????????">????????/??</option>
                                            <option value="????????">????????/??</option>
                                        </select>
                                    </div>

                                    {{-- ?????????? --}}
                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> ??????????</strong></label>
                                        <select name="weight"
                                            class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center">
                                            <option
                                                style="position: absolute; transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);"
                                                value="" selected disabled> ???????? ?????????? </option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->weight }}">{{ $client->weight }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- ?????????????? --}}
                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong>??????????????</strong></label>
                                        <select name="country"
                                            class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center">
                                            <option
                                                style="position: absolute; transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);"
                                                value="" selected disabled>???????? ??????????????</option>

                                            </option>

                                            <option value="??????">??????</option>
                                            <option value="????????????????">????????????????</option>
                                            <option value="??????">??????</option>
                                            <option value="????????????">????????????</option>
                                            <option value="????????????????">????????????????</option>
                                            <option value="????????????">????????????</option>
                                            <option value="????????">????????</option>
                                            <option value="??????????">??????????</option>
                                            <option value="??????????????">??????????????</option>
                                            <option value="??????????????">??????????????</option>
                                        </select>
                                    </div>

                                    {{-- ?????????? ?????????? --}}
                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> ??????????</strong></label>
                                        <select name="age_from"
                                            class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center">
                                            <option
                                                style="position: absolute; transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);"
                                                value="" selected disabled> ???????? ?????????? ?????????? </option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->age }}">{{ $client->age }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- ?????????? ?????????? --}}
                                    <div class="form-group col-lg-3 col-md-6 d-flex flex-column">
                                        <label class="col-form-label"><strong> ?????? </strong></label>
                                        <select name="age_to"
                                            class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center">
                                            <option
                                                style="position: absolute; transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);"
                                                value="" selected disabled> ???????? ?????????? ?????????? </option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->age }}">{{ $client->age }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                </div>
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                    <button type="submit" class="btn btn-primary w-25">
                                        ???????? ??????????
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- ********************************************** -->
                        <div class="container">
                            <!-- <div class="d-flex justify-content-start mb-3"> -->
                            <h4 class="mb-3">?????????? ??????????</h4>
                            <!-- <span class="search-icon ms-2"><i class="fa fa-filter" aria-hidden="true"></i>
                                                                                                                                                                                                                                                                                                                                </span>
                                                                                                                                                                                                                                                                                                                                <span class="search-icon"><i class="fa fa-sort"></i>
                                                                                                                                                                                                                                                                                                                                </span>
                                                                                                                                                                                                                                                                                                                                </div> -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">??????????????</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="table1" class="display min-w850 text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>?????? ??????????</th>
                                                            <th>??????????</th>
                                                            <th>??????????</th>
                                                            <th>??????????</th>
                                                            <th>???????????? ????????????????????</th>
                                                            <th>??????????????</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($clients as $client)
                                                            <tr>
                                                                <td><strong> {{ $client->realName }}</strong></td>
                                                                <td>{{ $client->length }} ????</td>
                                                                <td>{{ $client->weight }} ??????</td>
                                                                <td>{{ $client->age }} ??????</td>
                                                                <td>{{ $client->maritalStatus }}</td>
                                                                <td>{{ $client->country }}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-primary">
                                                                        ?????? ????????????????
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            <p class="text-center text-danger">???? ???????? ???????????? ????????????</p>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="d-flex justify-content-center align-items-center mt-2">
                                                <button type="button" class="btn btn-primary w-25">
                                                    ????????????
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
