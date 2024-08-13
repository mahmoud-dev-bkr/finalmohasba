<meta charset="utf-8" />
<title>{{$title ?? ''}}</title>
<meta name="viewport" content="width=device-width, initial-scale=.3">
<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
<meta content="Coderthemes" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" type="image/png" href="{{ URL('images/LOGO ARABIC AND ENGLISH.png') }}">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900" rel="stylesheet" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL('css/normalize.css') }}">
<link rel="stylesheet" href="{{ URL('css/all.min.css') }}">
<link rel="stylesheet" href="{{ URL('css/bootstrap.min.css') }}">

@if (app()->getLocale() == 'en')
    <link rel="stylesheet" href="{{ URL('css/toggle-ltr.css') }}">
@else 
<link rel="stylesheet" href="{{ URL('css/style.css') }}">
@endif
<!-- App favicon -->
@yield('bootstrap')
