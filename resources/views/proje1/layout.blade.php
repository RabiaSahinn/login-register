<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield("title")</title>

  <!-- Bootstrap core CSS -->
  <link href="/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/frontend/custom/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/frontend/css/modern-business.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

</head>

<body >
@if(!Auth::user())
<div class= "col-lg-12" >
<div class="text-left ">
      <ul class="navbar-nav fixed-top banner ">
        <li class="nav-item px-5 mt-4">
          <a class="px-3" href="#">Logo</a>
        </li>
      </ul>
    </div>

    <div class="text-right">
      <ul class="navbar-nav fixed-top ">
        <li class="nav-item px-5 mt-4">
          <a class="px-4" href="{{Route('GirisYap')}}"> Giriş Yap <i class="fa fa-sign-in" aria-hidden="true"></i></a>
          <a  href="{{Route('UyeOl')}}"> Üye Ol <i class="fa fa-user-plus " aria-hidden="true"></i></a>
        </li>
      </ul>
    </div>
</div>


<hr>
@endif
@yield("content")





  <!-- Bootstrap core JavaScript -->
  <script src="/frontend/vendor/jquery/jquery.min.js"></script>
  <script src="/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  @if(session()->has("success"))
<script>
    alertify.success('{{session('success')}}');
</script>
@endif

@if(session()->has("error"))
<script>
    alertify.error('{{session('error')}}');
</script>
@endif

</body>

</html>
