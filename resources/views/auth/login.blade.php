<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> تسجيل الدخول في محاسبة</title>
    <link rel="stylesheet" href="{{ URL('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL('css/outside.css') }}">
</head>
<body>

    <header>

        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container  ">
              <a class="navbar-brand text-light" href="#"><img src="{{ URL('images/LOGO ARABIC AND ENGLISH.png') }}" class="sign-img" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  <li class="nav-item">
                    <a class="nav-link " href="#">الصفحة الرئيسية</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link " href="#">الباقات</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link bt" href="#">الدخول</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link bt" href="#">English</a>
                  </li>


                </ul>

              </div>
            </div>
          </nav>

    </header>

    <section>
        <div class="container sign2">
            <div class="row">

                <div class="col-md-5 first">
                   <div class="form-holder py-5">


                       <div>

                        <div class="my-5">
                            <h2 class="fs-4"> مرحبا بكم في<span class="text-white"> محاسبة</span></h2>
                        </div>

                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <input name="email" @if ($errors->has('email')) is-invalid @endif" class="form-control w-75  my-4" type="email" placeholder="البريد الالكتروني">

                           <input name="password" type="password" class="form-control w-75  my-4" placeholder="كلمةالمرور" >

                            <button type="submit" class="my-2 btn btn-dark text-white w-75">الدخول</button>

                            <div><input class="  my-3" type="checkbox">
                                <span class="small text-white">تذكرني</span>
                                <p ><a class="text-white " href="#">نسيت كلمة المرور؟</a></p>
                             </div>
                        </form>
                    </div>

                </div>
                </div>
                <div class="col-md-7 bg-white">
                    <div class="my-3 mx-3 head">
                        <h2>تجربة محاسبة</h2>
                        <p class="fw-bold">لم تسجل بعد؟<span class="text-primary">تسجيل جساب جديد</span></p>
                        <button class="btn btn-outline-primary"><a href="sign-up">ليس لدي جساب</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>









    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('js/main.js') }}"></script>
</body>
</html>