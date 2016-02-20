<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title> @yield('page_title') </title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="/favicon.ico">

  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type='text/css' href="/css/vendor.css" >
  <link rel="stylesheet" type='text/css' href="/css/admin-all.css">
  {{-- Additional Page-Specific CSS --}}
  @yield('css')

</head>
<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

    @include('admin.partials.header')
    @include('admin.partials.sidebar')

    <main class="mdl-layout__content">
      <div class="mdl-grid">
        @include('common.flash')
        @yield('dashboard-content')
      </div>
    </main>

  </div>

  <!-- Scripts -->
  <!--[if IE]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/4.2.0/es5-shim.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/classlist/2014.01.31/classList.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
  <![endif]-->
  <script src="/js/vendor.js"></script>
  <script src="/js/admin-all.js"></script>
  {{-- Additional Page-Specific JS --}}
  @yield('js')
</body>
</html>
