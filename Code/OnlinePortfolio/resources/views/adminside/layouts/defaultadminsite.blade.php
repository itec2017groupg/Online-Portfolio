@include('adminside.includes.head')
<body>
  <script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
  <script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
  <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
  <script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
  <script src="https://datatables.yajrabox.com/js/handlebars.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.0.0/jquery.mark.min.js"></script>
@include('adminside.includes.header')

<div class="content">
@yield('content')
</div>
@include('adminside.includes.footer')


</body>
</html>
