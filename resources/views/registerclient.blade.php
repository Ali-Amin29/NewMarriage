@extends('layout_dashboard.master')
@section('style')
    <!-- Favicon icon -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="./images/logo.jpeg" />
    <link href="./vendor/dropzone/dist/dropzone.css" rel="stylesheet" />
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
    <style>
        .select {
            border: 1px solid #ea7a9a;

        }

        .select:hover {
            background-color: #ea7a9a;
            color: white;

        }

        .option {
            background-color: white !important;
            color: gray;
        }
    </style>
@endsection
@section('container')
    <!--**********************************
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Content body start
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            {{--  user Information  --}}
                            <h4 class="card-title">معلوماتي</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                @if (Auth::user()->completeclient == 0)
                                    <form method="post" action={{ route('client.store') }}>
                                        @csrf
                                        <input type="hidden" name="token" value="{{ Auth::user()->id }}" />
                                        <div class="row">
                                            <div class="form-group col-sm-12 row justify-content-between">
                                                <label class="col-sm-2 col-form-label">
                                                    <strong>الاسم الرباعي </strong></label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="name"
                                                        class="form-control border border-primary" />
                                                </div>
                                                <div class="col-sm-5">
                                                    <p>لا يظهر بالموقع ولا لمزود الخدمة</p>
                                                </div>
                                            </div>
                                            {{--  gender  --}}
                                            <div class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong> الجنسية</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="gender"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="رجل">رجل
                                                            </option>
                                                            <option class="option" value="امراءه">امراءه
                                                            </option>


                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- city --}}
                                            <div class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong> مكان الاقامة</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="city"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="الرياض">الرياض
                                                            </option>
                                                            <option class="option" value="جدة">جدة
                                                            </option>
                                                            <option class="option" value="السعودية">السعودية
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- state --}}
                                            <div class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>القبيلة</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="state"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="قبيلة 1">قبيلة 1
                                                            </option>
                                                            <option class="option" value="قبيلة 2">قبيلة 2
                                                            </option>
                                                            <option class="option" value="قبيلة 3">قبيلة 3
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  address  --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>المدينة</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="address"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="مدينة 1">مدينة 1
                                                            </option>
                                                            <option class="option" value="مدينة 2">مدينة 2
                                                            </option>
                                                            <option class="option" value="مدينة 3">مدينة 3
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  nmuberChild  --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>يوجد اطفال ام لا</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="nmuberChild"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="نعم"> نعم
                                                            </option>
                                                            <option class="option" value="لا"> لا
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- MartialState   --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>الحالة
                                                            الاجتماعية</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="MartialState"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="حالة 1">حالة 1
                                                            </option>
                                                            <option class="option" value="حالة 2">حالة 2
                                                            </option>
                                                            <option class="option" value="حالة 3">حالة 3
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- education --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>المستوي التعليمي
                                                        </strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="education"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="مستوي 1">مستوي 1
                                                            </option>
                                                            <option class="option" value="مستوي 2">مستوي 2
                                                            </option>
                                                            <option class="option" value="مستوي 3">مستوي 3
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- religious --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>المستوي الديني </strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="religious"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="مستوي 1">مستوي 1
                                                            </option>
                                                            <option class="option" value="مستوي 2">مستوي 2
                                                            </option>
                                                            <option class="option" value="مستوي 3">مستوي 3
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- age --}}
                                            <div class="form-group col-sm-12 row justify-content-between">
                                                <label class="col-sm-2 col-form-label">
                                                    <strong> تاريخ الميلاد </strong></label>
                                                <div class="col-sm-5">
                                                    <input type="date" name="age"
                                                        class="form-control border border-primary" />
                                                </div>
                                                <div class="col-sm-5">
                                                    <p> قم باختيار السنة والشهر واليوم</p>
                                                </div>
                                            </div>
                                            {{-- jobstatus --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>طبيعة العمل </strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="jobstatus"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="عمل 1">عمل 1
                                                            </option>
                                                            <option class="option" value="عمل 2">عمل 2
                                                            </option>
                                                            <option class="option" value="عمل 3">عمل 3
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- health --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>الحالة الصحية</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="health"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="حالة 1">حالة 1
                                                            </option>
                                                            <option class="option" value="حالة 2">حالة 2
                                                            </option>
                                                            <option class="option" value="حالة 3">حالة 3
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- beauty --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>الجمال</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="beauty"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="جميل 1">جميل 1
                                                            </option>
                                                            <option class="option" value="جميل 2">جميل 2
                                                            </option>
                                                            <option class="option" value="جميل 3">جميل 3
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- length --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong> الطول</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="length"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value=" اطول من 150"> اطول من 150
                                                            </option>
                                                            <option class="option" value=" اقل من 150"> اقل من 150
                                                            </option>
                                                            <option class="option" value="150"> 150
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- weight --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>الحالة الصحية</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="weight"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value=" اطول من 50"> اطول من 50
                                                            </option>
                                                            <option class="option" value=" اقل من 50"> اقل من 50
                                                            </option>
                                                            <option class="option" value="50"> 50
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  facecolor  --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong> لون البشرة</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="facecolor"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="اسمر"> اسمر
                                                            </option>
                                                            <option class="option" value="ابيض"> ابيض
                                                            </option>
                                                            <option class="option" value="قمحي"> قمحي
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- multiable --}}
                                            <div class="form-check form-check-inline mb-2">
                                                <input type="checkbox" class="form-check-input p-2" name="multiable"
                                                    value="نعم" />
                                                <label class="form-check-label">
                                                    <span class="text-primary"> هل تقبلين بالتعدد : </span>
                                                    هذا الاختيار خاصة بالمرأة
                                                </label>
                                            </div>

                                            {{-- breif --}}
                                            <div
                                                class="form-group col-lg-12 row justify-content-between align-items-center">
                                                <div class="form-group col-sm-8">
                                                    <label class="col-form-label"><strong>
                                                            اكتب بأختصار مواصفاتك </strong></label>

                                                    <textarea class="form-control border border-primary" name="breif" rows="4" w-100 id="comment"></textarea>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary rounded-5 w-25">
                                                    حفظ البيانات
                                                </button>
                                            </div>
                                    </form>
                                @else
                                    <div class="alert text-center" role="alert"
                                        style="background: #ea7a9a;
                                    border-color: #e3f9e9;
                                    color: #ffffff;">
                                        تم ادخال البيانات الخاصي بك
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  specification User need it   --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            {{--  user Information  --}}
                            <h4 class="card-title">معلومات الطرف الاخر</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                @if (Auth::user()->completerequire == 0)
                                    <form method="post" action={{ route('Specification.store') }}>
                                        @csrf
                                        <input type="hidden" name="token" value="{{ Auth::user()->id }}" />
                                        <div class="row">
                                            {{--  gender  --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong> الجنسية</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="gender"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="رجل">رجل
                                                            </option>
                                                            <option class="option" value="امراءه">امراءه
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- city --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong> مكان
                                                            الاقامة</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="city"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="الرياض">الرياض
                                                            </option>
                                                            <option class="option" value="جدة">جدة
                                                            </option>
                                                            <option class="option" value="السعودية">السعودية
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- state --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>القبيلة</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="state"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="قبيلة 1">قبيلة 1
                                                            </option>
                                                            <option class="option" value="قبيلة 2">قبيلة 2
                                                            </option>
                                                            <option class="option" value="قبيلة 3">قبيلة 3
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  address  --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>المدينة</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="address"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="مدينة 1">مدينة 1
                                                            </option>
                                                            <option class="option" value="مدينة 2">مدينة 2
                                                            </option>
                                                            <option class="option" value="مدينة 3">مدينة 3
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  nmuberChild  --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>يوجد اطفال ام
                                                            لا</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="nmuberChild"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="نعم"> نعم
                                                            </option>
                                                            <option class="option" value="لا"> لا
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- MartialState   --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>الحالة
                                                            الاجتماعية</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="MartialState"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="حالة 1">حالة 1
                                                            </option>
                                                            <option class="option" value="حالة 2">حالة 2
                                                            </option>
                                                            <option class="option" value="حالة 3">حالة 3
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- education --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>المستوي التعليمي
                                                        </strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="education"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="مستوي 1">مستوي 1
                                                            </option>
                                                            <option class="option" value="مستوي 2">مستوي 2
                                                            </option>
                                                            <option class="option" value="مستوي 3">مستوي 3
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- religious --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>المستوي الديني
                                                        </strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="religious"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="مستوي 1">مستوي 1
                                                            </option>
                                                            <option class="option" value="مستوي 2">مستوي 2
                                                            </option>
                                                            <option class="option" value="مستوي 3">مستوي 3
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- age --}}
                                            <div class="form-group col-sm-12 row justify-content-between">
                                                <label class="col-sm-2 col-form-label">
                                                    <strong> تاريخ الميلاد </strong></label>
                                                <div class="col-sm-5">
                                                    <input type="date" name="age"
                                                        class="form-control border border-primary" />
                                                </div>
                                                <div class="col-sm-5">
                                                    <p> قم باختيار السنة والشهر واليوم</p>
                                                </div>
                                            </div>
                                            {{-- jobstatus --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>طبيعة العمل </strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="jobstatus"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="عمل 1">عمل 1
                                                            </option>
                                                            <option class="option" value="عمل 2">عمل 2
                                                            </option>
                                                            <option class="option" value="عمل 3">عمل 3
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- health --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>الحالة
                                                            الصحية</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="health"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="حالة 1">حالة 1
                                                            </option>
                                                            <option class="option" value="حالة 2">حالة 2
                                                            </option>
                                                            <option class="option" value="حالة 3">حالة 3
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- beauty --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>الجمال</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="beauty"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="جميل 1">جميل 1
                                                            </option>
                                                            <option class="option" value="جميل 2">جميل 2
                                                            </option>
                                                            <option class="option" value="جميل 3">جميل 3
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- length --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong> الطول</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="length"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value=" اطول من 150"> اطول من 150
                                                            </option>
                                                            <option class="option" value=" اقل من 150"> اقل من 150
                                                            </option>
                                                            <option class="option" value="150"> 150
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- weight --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong>الحالة
                                                            الصحية</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="weight"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value=" اطول من 50"> اطول من 50
                                                            </option>
                                                            <option class="option" value=" اقل من 50"> اقل من 50
                                                            </option>
                                                            <option class="option" value="50"> 50
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  facecolor  --}}
                                            <div
                                                class="form-group col-sm-6 row justify-content-between align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label"><strong> لون البشرة</strong></label>
                                                </div>
                                                <div class="dropdown custom-dropdown col-sm-8">
                                                    <select name="facecolor"
                                                        class="btn  w-100 d-flex select justify-content-between align-items-center"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            x-placement="bottom-end">
                                                            <option class="option" value="اسمر"> اسمر
                                                            </option>
                                                            <option class="option" value="ابيض"> ابيض
                                                            </option>
                                                            <option class="option" value="قمحي"> قمحي
                                                            </option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>

                                            {{-- multiable --}}
                                            <div class="form-check form-check-inline mb-2">
                                                <input type="checkbox" class="form-check-input p-2" name="multiable"
                                                    value="نعم" />
                                                <label class="form-check-label">
                                                    <span class="text-primary"> هل تقبلين بالتعدد : </span>
                                                    هذا الاختيار خاصة بالمرأة
                                                </label>
                                            </div>
                                            {{-- breif --}}
                                            <div
                                                class="form-group col-lg-12 row justify-content-between align-items-center">
                                                <div class="form-group col-sm-8">
                                                    <label class="col-form-label"><strong>
                                                            اكتب بأختصار مواصفات الزوجة/ الزوج التي تريده </strong></label>

                                                    <textarea class="form-control border border-primary" name="breif" rows="4" w-100 id="comment"></textarea>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary rounded-5 w-25">
                                                    حفظ البيانات
                                                </button>
                                            </div>
                                    </form>
                                @else
                                    <div class="alert text-center" role="alert"
                                        style="background: #ea7a9a;
                                border-color: #e3f9e9;
                                color: #ffffff;">
                                        تم ادخال البيانات الخاصي بك
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">القسم</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-check form-check-inline mb-2">
                                <input type="checkbox" class="form-check-input p-2" value="" />
                                <label class="form-check-label">
                                    <span class="text-primary"> اقسم بالله العظيم : </span>
                                    بأنني جاد في تسجيلي بالموقع وان هدفي الزواج عن طريق هذا
                                    الموقع
                                </label>
                            </div>
                            <div class="form-check form-check-inline mb-2">
                                <input type="checkbox" class="form-check-input p-2" value="" />
                                <label class="form-check-label">
                                    <span class="text-primary"> اقسم بالله العظيم : </span>
                                    بأنة لا يوجد لدي عضوية اخري في هذا الموقع تخصني شخصيا وان
                                    هذة هي العضوية الوحيدة

                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-primary mt-3 mb-2">
                                    أكمال الملف الشخصي
                                </button>
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
@endsection
@section('script')
    <!--**********************************
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Scripts
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>
    <script src="./vendor/owl-carousel/owl.carousel.js"></script>
    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>

    <script>
        function carouselReview() {
            /*  event-bx one function by = owl.carousel.js */
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
