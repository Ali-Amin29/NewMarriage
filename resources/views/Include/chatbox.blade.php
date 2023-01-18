<div>
    <div class="chatbox">
        <div class="chatbox-close"></div>
        <div class="custom-tab-1">
            <ul class="nav nav-tabs">
                @if(Auth()->user()->role=='عميل')
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#notes">المستخدم</a>
                </li>
                @elseif(Auth()->user()->role=='مشرف')
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#alerts">المشرف</a>
                </li>
                @elseif(Auth()->user()->role=='مزود خدمة')
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#chat">مزود الخدمة</a>
                </li>
                @endif
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="chat" role="tabpanel">
                    <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                        <div class="card-header chat-list-header text-center">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                    viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect fill="#000000" x="4" y="11" width="16" height="2"
                                            rx="1"></rect>
                                        <rect fill="#000000" opacity="0.3"
                                            transform="translate(12.000000, 12.000000) rotate(-270.000000)
                                                      translate(-12.000000, -12.000000) "
                                            x="4" y="11" width="16" height="2" rx="1">
                                        </rect>
                                    </g>
                                </svg></a>
                            <div>
                                <h6 class="mb-1">قائمة الدردشة</h6>
                                <p class="mb-0">رؤية الكل</p>
                            </div>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                    viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                        </circle>
                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                        </circle>
                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                        </circle>
                                    </g>
                                </svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll ps ps--active-y" id="DZ_W_Contacts_Body">
                            <ul class="contacts">
                                {{-- @if($data['users']) --}}

                                @if(isset($users))
                                @foreach($users as $user)
                                 <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <input type="hidden" wire:model="user_adress_id" name="user_id" value="{{$user->user_id}}"/>
                                                <span wire:click.prevent="chat({{$user->id}})">{{$user->name}}</span>
                                                <p>انس غادر من عشرون دقيقة</p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                @endif


                            </ul>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; height: 536px; right: 336px">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 294px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card chat dz-chat-history-box">
                        <div class="card-header chat-list-header text-center">
                            <a href="#" class="dz-chat-history-back">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <rect fill="#000000" opacity="0.3"
                                            transform="translate(15.000000, 12.000000) scale(-1, 1)
                                                          rotate(-90.000000) translate(-15.000000, -12.000000) "
                                            x="14" y="7" width="2" height="10"
                                            rx="1" />
                                        <path
                                            d="M3.7071045,15.7071045 C3.3165802,16.0976288
                                                              2.68341522,16.0976288 2.29289093,15.7071045
                                                              C1.90236664,15.3165802 1.90236664,14.6834152
                                                              2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312
                                                              9.28105631,7.90106637 9.67572234,8.26284357
                                                              L15.6757223,13.7628436 C16.0828413,14.136036
                                                              16.1103443,14.7686034 15.7371519,15.1757223
                                                              C15.3639594,15.5828413 14.7313921,15.6103443
                                                              14.3242731,15.2371519 L9.03007346,10.3841355
                                                              L3.7071045,15.7071045 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(9.000001, 11.999997) scale(-1, -1)
                                                              rotate(90.000000) translate(-9.000001, -11.999997) " />
                                    </g>
                                </svg>
                            </a>
                            <div>
                                @if(isset($reciev_user))
                                {{-- @if($reciev_user) --}}
                                <h6 class="mb-1">دردشة مع {{ $reciev_user->name }}</h6>
                                <p class="mb-0 text-success">متصل</p>
                                @endif
                            </div>
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown" aria-expanded="false"><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item">
                                        <i class="fa fa-user-circle text-primary mr-2"></i> رؤية
                                        الملف الشخصي
                                    </li>
                                    <li class="dropdown-item">
                                        <i class="fa fa-users text-primary mr-2"></i> الاضافة
                                        الي الاصدقاء
                                    </li>
                                    <li class="dropdown-item">
                                        <i class="fa fa-plus text-primary mr-2"></i> الاضافة الي
                                        المجموعات
                                    </li>
                                    <li class="dropdown-item">
                                        <i class="fa fa-ban text-primary mr-2"></i> المحظورين
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">

                            @if(isset($reciever))
                            @foreach($reciever as $key => $value)
                            @if($value->user_messenger_id==Auth()->user()->id)
                                        <div class="d-flex justify-content-start mb-4">
                                            <div class="img_cont_msg">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                            </div>
                                            <div class="msg_cotainer">
                                                {{ $value->messages}}
                                                <span class="msg_time">8:40 AM, اليوم</span>
                                            </div>
                                        </div>

                                {{-- @php
                                    $recievr_user_id=0;
                                    if($reciev_user){ $recievr_user_id=44}
                                @endphp --}}

                              @elseif($value->user_messenger_id==$user_adress_id)
                                        <div class="d-flex justify-content-end mb-4">
                                            <div class="msg_cotainer_send">
                                                {{ $value->messages}}
                                                <span class="msg_time_send">{{ $value->created_at}}</span>
                                            </div>
                                            <div class="img_cont_msg">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                            </div>
                                        </div>
                                 @endif
                            @endforeach
                            @endif


                        </div>
                        <form wire:submit.prevent="save">
                        <div class="card-footer type_msg">
                            <div class="input-group">
                                {{-- <textarea class="form-control" placeholder="اكتب رسالتك..."></textarea> --}}
                                <input type="text" class="form-control" wire:model="messages" placeholder="اكتب رسالتك...">
                                <div class="input-group-append">
                                    <button  type="submit" class="btn btn-primary">
                                        <i class="fa fa-location-arrow"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                       </form>

                    </div>
                </div>


                    <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                        <div class="card-header chat-list-header text-center">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                    viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect fill="#000000" x="4" y="11" width="16"
                                            height="2" rx="1"></rect>
                                        <rect fill="#000000" opacity="0.3"
                                            transform="translate(12.000000, 12.000000)
                                                                                                              rotate(-270.000000) translate(-12.000000, -12.000000)
                                                                                                              "
                                            x="4" y="11" width="16" height="2" rx="1">
                                        </rect>
                                    </g>
                                </svg></a>
                            <div>
                                <h6 class="mb-1">قائمة الدردشة</h6>
                                <p class="mb-0">رؤية الكل</p>
                            </div>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                    viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24">
                                        </rect>
                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                        </circle>
                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                        </circle>
                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                        </circle>
                                    </g>
                                </svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll ps ps--active-y" id="DZ_W_Contacts_Body">
                            <ul class="contacts">
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/5.jpg" class="rounded-circle user_img"
                                                alt="" />
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>انس احمد</span>
                                            <p>انس غادر من عشرون دقيقة</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="active dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img"
                                                alt="" />
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>خالد صلاح </span>
                                            <p>خالد متصل</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img"
                                                alt="" />
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>سفيان عبد الحميد</span>
                                            <p>سفيان غادر من سبعه دقائق</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/3.jpg" class="rounded-circle user_img"
                                                alt="" />
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>سعد جمال</span>
                                            <p>سعد متصل</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img"
                                                alt="" />
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>شادي سليم </span>
                                            <p>شادي متصل</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/3.jpg" class="rounded-circle user_img"
                                                alt="" />
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>شادي يوسف</span>
                                            <p>شادي متصل</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img"
                                                alt="" />
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>صالح رشاد</span>
                                            <p>صالح غادر من 5 دقائق</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/4.jpg" class="rounded-circle user_img"
                                                alt="" />
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>كرم سفيان</span>
                                            <p>كرم غادر من ثلاثون دقيقة</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/4.jpg" class="rounded-circle user_img"
                                                alt="" />
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>أكرم سالم</span>
                                            <p>غادر من عشرون دقيقة</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; height: 536px; right: 336px">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 294px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card chat dz-chat-history-box">
                        <div class="card-header chat-list-header text-center">
                            <a href="#" class="dz-chat-history-back">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <rect fill="#000000" opacity="0.3"
                                            transform="translate(15.000000, 12.000000) scale(-1,
                                                                                                                  1) rotate(-90.000000) translate(-15.000000,
                                                                                                                  -12.000000) "
                                            x="14" y="7" width="2" height="10"
                                            rx="1" />
                                        <path
                                            d="M3.7071045,15.7071045 C3.3165802,16.0976288
                                                                                                                      2.68341522,16.0976288 2.29289093,15.7071045
                                                                                                                      C1.90236664,15.3165802 1.90236664,14.6834152
                                                                                                                      2.29289093,14.2928909 L8.29289093,8.29289093
                                                                                                                      C8.67146987,7.914312 9.28105631,7.90106637
                                                                                                                      9.67572234,8.26284357 L15.6757223,13.7628436
                                                                                                                      C16.0828413,14.136036 16.1103443,14.7686034
                                                                                                                      15.7371519,15.1757223 C15.3639594,15.5828413
                                                                                                                      14.7313921,15.6103443 14.3242731,15.2371519
                                                                                                                      L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(9.000001, 11.999997) scale(-1,
                                                                                                                      -1) rotate(90.000000) translate(-9.000001,
                                                                                                                      -11.999997) " />
                                    </g>
                                </svg>
                            </a>
                            <div>
                                <h6 class="mb-1">دردشة مع خالد</h6>
                                <p class="mb-0 text-success">متصل</p>
                            </div>
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown" aria-expanded="false"><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item">
                                        <i class="fa fa-user-circle text-primary mr-2"></i> رؤية
                                        الملف الشخصي
                                    </li>
                                    <li class="dropdown-item">
                                        <i class="fa fa-users text-primary mr-2"></i> الاضافة
                                        الي الاصدقاء
                                    </li>
                                    <li class="dropdown-item">
                                        <i class="fa fa-plus text-primary mr-2"></i> الاضافة الي
                                        المجموعات
                                    </li>
                                    <li class="dropdown-item">
                                        <i class="fa fa-ban text-primary mr-2"></i> المحظورين
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                                <div class="msg_cotainer">
                                    اهلا , كيف حالك سامر
                                    <span class="msg_time">8:40 AM, اليوم</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    انا بخير خالد وماذا عنك ؟
                                    <span class="msg_time_send">8:55 AM, اليوم</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                                <div class="msg_cotainer">
                                    انا بخير ايضا <span class="msg_time">9:00 AM, اليوم</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    علي الرحب
                                    <span class="msg_time_send">9:05 AM, اليوم</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                                <div class="msg_cotainer">
                                    علي الرحب <span class="msg_time">9:07 AM, اليوم</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    علي الرحب
                                    <span class="msg_time_send">9:10 AM, اليوم</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                                <div class="msg_cotainer">
                                    Bye, see you
                                    <span class="msg_time">9:12 AM, اليوم</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                                <div class="msg_cotainer">
                                    علي الرحب <span class="msg_time">8:40 AM, اليوم</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    علي الرحب
                                    <span class="msg_time_send">8:55 AM, اليوم</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                                <div class="msg_cotainer">
                                    علي الرحب <span class="msg_time">9:00 AM, اليوم</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    You are welcome
                                    <span class="msg_time_send">9:05 AM, اليوم</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                                <div class="msg_cotainer">
                                    علي الرحب <span class="msg_time">9:07 AM, اليوم</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    علي الرحب
                                    <span class="msg_time_send">9:10 AM, اليوم</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                                <div class="msg_cotainer">
                                    علي الرحب <span class="msg_time">9:12 AM, اليوم</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer type_msg">
                            <div class="input-group">
                                <textarea class="form-control"
                                    placeholder="اكتب
                                                                                                                                  رسالتك..."></textarea>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-location-arrow"></i>
                                    </button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
