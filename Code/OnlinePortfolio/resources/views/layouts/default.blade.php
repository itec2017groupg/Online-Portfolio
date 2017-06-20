@include('includes.head')
<body>
<div class="container">

@include('includes.header')
<div id="main" class="row">
  <div id="sidebar" class="col-md-4">
            @include('includes.sidebar')
  </div>
  <div id="sidebar" class="col-md-4">
            @include('includes.sidebar')
  </div>

</div>
@include('includes.footer')
</div>
    <script src="<?php echo asset('js/js.js')?>"></script>
    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
