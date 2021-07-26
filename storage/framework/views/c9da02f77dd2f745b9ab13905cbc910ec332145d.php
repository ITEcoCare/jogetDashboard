<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $__env->yieldContent('title', 'AdminLTE 3 | Homepage'); ?></title>

  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('')); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('')); ?>assets/dist/css/adminlte.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(asset('')); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('')); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(asset('')); ?>assets/plugins/jqvmap/jqvmap.min.css">
  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset('')); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('')); ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(asset('')); ?>assets/plugins/summernote/summernote-bs4.min.css">


  <?php echo $__env->yieldPushContent('custom-css'); ?>
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php echo $__env->make('layouts/nav-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php echo $__env->make('layouts/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- /.Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <?php echo $__env->make('layouts/main-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- /.content-wrapper -->
  
  <!-- Footer -->
  <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- /.footer -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- ChartJS -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->


<!-- jQuery -->
<script src="<?php echo e(asset('')); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('')); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('')); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('')); ?>assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('')); ?>assets/dist/js/pages/dashboard2.js"></script>


<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('')); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- ChartJS -->
<script src="<?php echo e(asset('')); ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset('')); ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo e(asset('')); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo e(asset('')); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('')); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo e(asset('')); ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo e(asset('')); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset('')); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo e(asset('')); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('')); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('')); ?>assets/dist/js/pages/dashboard.js"></script>

<!-- REQUIRED SCRIPTS -->
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('')); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo e(asset('')); ?>assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo e(asset('')); ?>assets/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo e(asset('')); ?>assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo e(asset('')); ?>assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->







<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(function () {
      
      var table = $('.yajra-datatable-x').DataTable({
          processing: true,
          serverSide: true,
          ajax: "<?php echo e(route('app_app.list')); ?>",
          columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'appId', name: 'appId'},
            {data: 'name', name: 'name'},
            // {data: 'published', name: 'published'},
            {
                // data: {
                //     "_": "phone",
                //     "filter": "phone_filter",
                //     "display": "phone_display"
                // },
                data: null, 
                // name: 'appId',
                render: function(content, type, full, meta){
                    return '<a href="viewDetails/?Appname=' + content.name + '&appId='+ content.appId +'&status=ongoing" class=""> 8 ongoing </a>';
                }, 
                orderable: false, 
                searchable: false
            },
            {
                data: null, 
                // name: 'name',
                render: function(content, type, full, meta){
                    return '<a href="viewDetails/?Appname=' + content.name + '&appId='+ content.appId +'&status=completed" class="" style="color:seagreen;"> 23 completed </a>';
                }, 
                orderable: false, 
                searchable: false
            },
            {
                data: null, 
                name: 'name',
                render: function(content, type, full, meta){
                    return '<a href="viewDetails/?Appname=' + content.name + '&appId='+ content.appId +'&status=rejected" style="color:crimson;"> 3 rejected </a>';
                }, 
                orderable: false, 
                searchable: false
            },
            {
                data: null, 
                name: 'name',
                render: function(content, type, full, meta){
                    return '<a href="viewDetails/?Appname=' + content.name + '&appId='+ content.appId +'&status=clarify" style="color:#FFC108;"> 1 clarify </a>';
                }, 
                orderable: false, 
                searchable: false
            },
            {
                data: 'name', 
                name: 'name',
                render: function(link, type, full, meta){
                    // return "<img src=<?php echo e(URL::to('/')); ?>/images/" + data + " width='70' class='img-thumbnail' />";
                    // return "<a href='link'" + " class='edit btn btn-success btn-sm'>ENTER</a>";
                    return '<a href="' + link + '" class="edit btn btn-success btn-sm">ENTER APP</a>';
                }, 
                orderable: false, 
                searchable: false
            },
            // {data: 'url', name: 'url'},
            // {data: 'link'},
            // {data: 'createdBy', name: 'createdBy'},
          ],
        //   buttons: [
        //     'colvis',
        //     'excel',
        //     'print'
        //   ]
      });
      
    });
  </script>
  <script>
      $(function () {
        $('input').on('click', function () {
            
            var Status = $(this).val();
            $.ajax({
                url: 'Ajax/StatusUpdate.php',
                data: {
                    text: $("textarea[name=Status]").val(),
                    Status: Status
                },
                dataType : 'json'
            });
        });
    });
  </script>

</body>
</html>
<?php /**PATH D:\xampp\htdocs\adminSite01\resources\views//layouts/master.blade.php ENDPATH**/ ?>