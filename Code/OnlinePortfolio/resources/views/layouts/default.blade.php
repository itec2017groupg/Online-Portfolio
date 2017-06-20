@include('includes.head')
<body>
  <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

@include('includes.header')
@include('includes.sidebar')
<div class="content">
@yield('content')
</div>
@include('includes.footer')


</body>
</html>
