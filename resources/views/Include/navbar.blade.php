<!-- ================ Header Section Start Here =============== -->
<header>
    <nav id="header-top" class="navbar navbar-expand-lg align-items-center">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('index') }}"><img src="./images/logo1.jpeg" alt="logo"
                        class="img-responsive" /></a>
                <button type="button" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-evenly" id="navigation">
                <ul class="nav nav-pills navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about">
                            عن ميثاق</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">مميزات ميثاق</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#brokers">الوسطاء </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#stats"> الاحصائيات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">اتصل بنا</a>
                    </li>
                    @if (Auth::user())
                        {{ Auth::user()->role }}
                        @if (Auth::user()->role == 'عميل')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('registerclient') }}"> الصفحة الخاصة للعميل</a>
                            </li>
                        @elseif (Auth::user()->role == 'مشرف')
                            <li class="nav-item">
                                <a class="nav-link" href="#contact"> الصفحة الخاصة مشرف</a>
                            </li>
                        @elseif (Auth::user()->role == 'مزود خدمة')
                            <li class="nav-item">
                                <a class="nav-link" href="#contact"> الصفحة الخاصة مزود الخدمة</a>
                            </li>
                        @endif
                    @endif
                </ul>
                <ul class="navbar-nav justify-content-end">
                    @if (Auth::user())
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->phone }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link download-btn" href={{ route('login') }}>تسجيل دخول</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link download-btn" href={{ route('register', ['id' => 3]) }}>انشاء حساب</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- ================ Header Section End Here =============== -->
