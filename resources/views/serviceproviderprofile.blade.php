@extends('Layout.master')
@section('style')
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
    </head>
@endsection
@section('container')
    <div class="bg-header">
        <div class="container">
            <div class="profile card card-body px-3  mt-5">
                <div class="profile-head">
                    <div class="photo-content">
                        <div class="cover-photo"></div>
                    </div>
                    <div class="profile-info ">
                        <div class="profile-photo">
                            <img src="./images/1.webp" alt="" class="img-fluid rounded-circle" />
                        </div>
                        <div class="profile-details">
                            <div class="profile-name px-5 pt-2">
                                <h4 class="text-primary mb-0">التقييم مزود الخدمة(3)</h4>
                                <div class="comment-review star-rating">
                                    <ul class="text-center">
                                        <li><i class="fa fa-star text-primary"></i></li>
                                        <li><i class="fa fa-star text-primary"></i></li>
                                        <li><i class="fa fa-star text-primary"></i></li>
                                        <li><i class="fa fa-star text-primary-half-empty"></i></li>
                                        <li><i class="fa fa-star text-primary-half-empty"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown ml-auto">
                                <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown"
                                    aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                        </g>
                                    </svg></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View
                                        profile</li>
                                    <li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close
                                        friends</li>
                                    <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
                                    <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="container">
                <h5 class="mb-4">الخدمات المكتب</h5>
                <div class="row">
                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid" src="./images/05.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="ecom-product-detail.html">عنوان الخدمة</a></h4>
                                            <div class="comment-review star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                </ul>
                                                <span class="review-text">(24 رأي للخدمة) / </span><a
                                                    class="product-review" href="" data-toggle="modal"
                                                    data-target="#reviewModal">اكتب رأي هنا؟</a>
                                                <p class="price">$480.00</p>
                                            </div>
                                            <p> <span class="item"> <i
                                                        class="fa fa-check-circle text-success"></i></span> الخدمة:متاحة
                                            </p>
                                            <p>كود الخدمة: <span class="item">0405689</span> </p>
                                            <p>نوع: <span class="item">الخدمة</span></p>
                                            <p class="text-content">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد
                                                تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو
                                                العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيقwords.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid" src="./images/05.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="ecom-product-detail.html">عنوان الخدمة</a></h4>
                                            <div class="comment-review star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                </ul>
                                                <span class="review-text">(24 رأي للخدمة) / </span><a
                                                    class="product-review" href="" data-toggle="modal"
                                                    data-target="#reviewModal">اكتب رأي هنا؟</a>
                                                <p class="price">$480.00</p>
                                            </div>
                                            <p> <span class="item"> <i
                                                        class="fa fa-check-circle text-success"></i></span> الخدمة:متاحة
                                            </p>
                                            <p>كود الخدمة: <span class="item">0405689</span> </p>
                                            <p>نوع: <span class="item">الخدمة</span></p>
                                            <p class="text-content">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد
                                                تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو
                                                العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيقwords.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid" src="./images/05.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="ecom-product-detail.html">عنوان الخدمة</a></h4>
                                            <div class="comment-review star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                </ul>
                                                <span class="review-text">(24 رأي للخدمة) / </span><a
                                                    class="product-review" href="" data-toggle="modal"
                                                    data-target="#reviewModal">اكتب رأي هنا؟</a>
                                                <p class="price">$480.00</p>
                                            </div>
                                            <p> <span class="item"> <i
                                                        class="fa fa-check-circle text-success"></i></span> الخدمة:متاحة
                                            </p>
                                            <p>كود الخدمة: <span class="item">0405689</span> </p>
                                            <p>نوع: <span class="item">الخدمة</span></p>
                                            <p class="text-content">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد
                                                تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو
                                                العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيقwords.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid" src="./images/05.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="ecom-product-detail.html">عنوان الخدمة</a></h4>
                                            <div class="comment-review star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                </ul>
                                                <span class="review-text">(24 رأي للخدمة) / </span><a
                                                    class="product-review" href="" data-toggle="modal"
                                                    data-target="#reviewModal">اكتب رأي هنا؟</a>
                                                <p class="price">$480.00</p>
                                            </div>
                                            <p> <span class="item"> <i
                                                        class="fa fa-check-circle text-success"></i></span> الخدمة:متاحة
                                            </p>
                                            <p>كود الخدمة: <span class="item">0405689</span> </p>
                                            <p>نوع: <span class="item">الخدمة</span></p>
                                            <p class="text-content">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد
                                                تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو
                                                العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيقwords.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid" src="./images/05.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="ecom-product-detail.html">عنوان الخدمة</a></h4>
                                            <div class="comment-review star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                </ul>
                                                <span class="review-text">(24 رأي للخدمة) / </span><a
                                                    class="product-review" href="" data-toggle="modal"
                                                    data-target="#reviewModal">اكتب رأي هنا؟</a>
                                                <p class="price">$480.00</p>
                                            </div>
                                            <p> <span class="item"> <i
                                                        class="fa fa-check-circle text-success"></i></span> الخدمة:متاحة
                                            </p>
                                            <p>كود الخدمة: <span class="item">0405689</span> </p>
                                            <p>نوع: <span class="item">الخدمة</span></p>
                                            <p class="text-content">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد
                                                تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو
                                                العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيقwords.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid" src="./images/05.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="ecom-product-detail.html">عنوان الخدمة</a></h4>
                                            <div class="comment-review star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                    <li><i class="fa fa-star text-primary"></i></li>
                                                </ul>
                                                <span class="review-text">(24 رأي للخدمة) / </span><a
                                                    class="product-review" href="" data-toggle="modal"
                                                    data-target="#reviewModal">اكتب رأي هنا؟</a>
                                                <p class="price">$480.00</p>
                                            </div>
                                            <p> <span class="item"> <i
                                                        class="fa fa-check-circle text-success"></i></span> الخدمة:متاحة
                                            </p>
                                            <p>كود الخدمة: <span class="item">0405689</span> </p>
                                            <p>نوع: <span class="item">الخدمة</span></p>
                                            <p class="text-content">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد
                                                تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو
                                                العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيقwords.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- review -->
                    <div class="modal fade" id="reviewModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">رأي</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="text-center mb-4">
                                            <img class="img-fluid rounded" width="78" src="./images/avatar/1.jpg"
                                                alt="DexignZone">
                                        </div>
                                        <div class="form-group">
                                            <div class="rating-widget mb-4 text-center">
                                                <!-- Rating Stars Box -->
                                                <div class="rating-stars">
                                                    <ul id="stars">
                                                        <li class="star" title="Poor" data-value="1">
                                                            <i class="fa fa-star text-primary fa-fw"></i>
                                                        </li>
                                                        <li class="star" title="Fair" data-value="2">
                                                            <i class="fa fa-star text-primary fa-fw"></i>
                                                        </li>
                                                        <li class="star" title="Good" data-value="3">
                                                            <i class="fa fa-star text-primary fa-fw"></i>
                                                        </li>
                                                        <li class="star" title="Excellent" data-value="4">
                                                            <i class="fa fa-star text-primary fa-fw"></i>
                                                        </li>
                                                        <li class="star" title="WOW!!!" data-value="5">
                                                            <i class="fa fa-star text-primary fa-fw"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Comment" rows="5"></textarea>
                                        </div>
                                        <button class="btn btn-success btn-block">قيم</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5>الشروط والأحكام</h5>
                <p>لعرض الشروط والأحكام <a href="#">أضغط هنا</a></p>
            </div>
            <div class="d-flex justify-content-center mb-5">
                <button class="btn btn-primary  fw-bold text-uppercase rounded-5" type="submit">
                    عرض الصفحة الرئيسية
                </button>
            </div>
        </div>
    </div>
    </div>
    <!-- show-service area start -->
@endsection
@section('script')
@endsection
