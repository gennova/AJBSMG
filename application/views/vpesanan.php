<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Salesforce | Admin - Pesanan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/Ionicons/css/ionicons.min.css');?>">
    <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css');?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/iCheck/all.css');?>">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css');?>">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/timepicker/bootstrap-timepicker.min.css');?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css');?>">
   <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/select2/dist/css/select2.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/dist/css/AdminLTE.min.css');?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/dist/css/skins/_all-skins.min.css');?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/morris.js/morris.css');?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/jvectormap/jquery-jvectormap.css');?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css');?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>AJB</b> Semarang</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/adminlte/dist/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('namauser');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/adminlte/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('level');?> - <span id='usernamesales'><?php echo $this->session->userdata('username');?></span>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#"><i class="fa fa-sign-out"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/adminlte/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('namauser');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">ADMIN MENU</li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>MASTER</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('barang');?>"><i class="fa fa-circle-o"></i> Barang</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        TRANSAKSI
        <small>Surat Pesanan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Master</a></li>
        <li class="active">Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <button class="" data-toggle="modal" data-target="#modal-default">LIST PESANAN</button>
        <div class='col-md-12'>
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Kode Pesanan <span id="kodepesanan"><?php echo $lasturut;?></span> <span>GRAND TOTAL</span> <b><span id="grandtotal"></span></b></h3>
            </div>
          <div class="form-inline">
              <div class="box-body">
              <div class="form-group">
                <select name="kodepelanggan" id="kodepelanggan" class="select2" style="width: 200px;">
                          <?php
                              foreach ($pelanggans as $key) {
                              echo ' <option value="'.$key->kode.'">'.$key->nama.'</option>';
                              }
                          ?>
                </select>
              </div>
                            <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>
          </div>
        </div>
        <div class="box box-info">
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-inline">
              <div class="box-body">
              <div class="form-group">
                <label for="alamat">Qty</label>
                <select name="kodebarang" id="kodebarang" class="select2" style="width: 170px;">
                          <?php
                              foreach ($barang as $key) {
                              echo ' <option value="'.$key->kodebarang.'">'.$key->kodebarang.'-'.$key->namabarang.'</option>';
                              }
                          ?>
                </select>
              </div>
              <div class="form-group">
                  <label for="qty">Qty</label>
                  <input type="number" class="form-control" id="qty">
              </div>    
              <div class="form-group">
                  <label for="harga">Harga Jual</label>
                  <input type="number" class="form-control" id="harga" onkeydown="hitung()">
              </div> 
              <div class="form-group">
                  <label for="totharga">Total Harga</label>
                  <input type="number" class="form-control" id="totharga" >
              </div> 
              <button class="btn btn-primary" id="btn_add">Add</button>
            </div>
                    <div class='col-md-12'>
          <table id="mydata" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>QTY</th>
                    <th>Harga Jual</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="show_data">
                 
            </tbody>
        </table>
        <!-- ./col -->
      </div>
             <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="btn_simpan">Simpan</button>
              </div>
              <!-- /.box-footer -->
            
            
          </div>
        <!-- ./col -->
      </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->

        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2020 <a href="https://tendydeveloper.com">https://www.tendydeveloper.com</a>.</strong> All rights
    reserved.
    <input type="hidden" name="grandtotalnoformat" id="grandtotalnoformat">
  </footer>
  
</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/adminlte/bower_components/jquery/dist/jquery.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/adminlte/bower_components/jquery-ui/jquery-ui.min.js');?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url('assets/adminlte/plugins/input-mask/jquery.inputmask.js');?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js');?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/input-mask/jquery.inputmask.extensions.js');?>"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url('assets/adminlte/bower_components/moment/min/moment.min.js');?>"></script>
<script src="<?php echo base_url('assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url('assets/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url('assets/adminlte/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js');?>"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url('assets/adminlte/plugins/timepicker/bootstrap-timepicker.min.js');?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/adminlte/bower_components/select2/dist/js/select2.full.min.js');?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/adminlte/bower_components/raphael/raphael.min.js');?>"></script>
<script src="<?php echo base_url('assets/adminlte/bower_components/morris.js/morris.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js');?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/adminlte/bower_components/moment/min/moment.min.js');?>"></script>
<script src="<?php echo base_url('assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/adminlte/bower_components/fastclick/lib/fastclick.js');?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url('assets/adminlte/plugins/iCheck/icheck.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/adminlte/dist/js/pages/dashboard.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/adminlte/dist/js/demo.js');?>"></script>
<script>
  $(function () {
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('yyyymmdd', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('yyyymmdd', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script type="text/javascript">
   function hitung(){
    $('#qty, #harga').on('input', function () {
    var qty = parseInt($('#qty').val());
    var price = parseFloat($('#harga').val());
    $('#totharga').val((qty * price ? qty * price : 0).toFixed(0));
   });

  }
</script>
<script type="text/javascript">
  $(document).ready(function() {
  $('form input').keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });


});
</script>
<script type="text/javascript">
    $(document).ready(function(){
       // document.getElementById('kodepesanan').innerHTML="SP11111100000XXX";
      tampil_data_barang();   //pemanggilan fungsi tampil barang.
      grandtotal_temp();
      $('.select2').select2();
      $('#mydata').dataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false
    });
        
        //fungsi total grand temp
        function grandtotal_temp(){
          var kodepesanan = $('#kodepesanan').text(); // jquery used
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url("pesanan/get_totalharga_temp_json");?>',
                async : false,
                dataType : 'json',
                data : {kode:kodepesanan},
                success : function(data){
                     //console.log(data[0].total);
                     document.getElementById('grandtotal').innerHTML=formatRupiah(data[0].total,'Rp.');
                     document.getElementById('grandtotalnoformat').value=data[0].total;
                     
                }
 
            });            
        }

        //fungsi tampil pesanan
        function tampil_data_barang(){
          var kodepesanan = $('#kodepesanan').text(); // jquery used
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url("pesanan/pesanantemp/");?>'+kodepesanan,
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].id+'</td>'+
                                '<td>'+data[i].kodebarang+'</td>'+   
                                '<td>'+data[i].namabarang+'</td>'+   
                                '<td>'+data[i].qty+'</td>'+   
                                '<td>'+data[i].hargajual+'</td>'+   
                                '<td>'+data[i].totalharga+'</td>'+      
                                '<td style="text-align:center;">'+
                                    '<a href="javascript:;" id="" class="btn btn-danger btn-sm item_hapus" data="'+data[i].id+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);

                }
 
            });            
        }
        //Insert Pesanan Temp
        $('#btn_add').on('click',function(){
            var kodepesanan = $('#kodepesanan').text(); // jquery used
            var kodebarang = document.getElementById('kodebarang').value;
            var sel = document.getElementById("kodebarang");
            var namabarang = sel.options[sel.selectedIndex].text;
            var qty = document.getElementById('qty').value;
            var harga = document.getElementById('harga').value;
            var total = document.getElementById('totharga').value;
            var username =$('#usernamesales').text();
            //console.log(kodepesanan);
            //console.log(kodebarang);
            //console.log(namabarang);
            //console.log(qty);
            //console.log(harga);
            //console.log(total);
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('pesanan/insertPesananTemp');?>",
                dataType : "JSON",
                data : {kodepesanan:kodepesanan , kodebarang:kodebarang,namabarang:namabarang,qty:qty,harga:harga,total:total,username:username},
                success: function(data){
                    document.getElementById('qty').value="";
                    document.getElementById('harga').value="";
                    document.getElementById('totharga').value="0";
                    //$('#modal-total').modal('hide');
                    tampil_data_barang();
                    grandtotal_temp();                    
                }
            });
            return false;
        });

        //Simpan Surat Pesanan
        $('#btn_simpan').on('click',function(){
            var kopes=$('#kodepesanan').text();
            var kosales=$('#usernamesales').text();
            var tglpes =$('#datepicker').val();
            var kopel =$('#kodepelanggan').val();
            var grandtot = $('#grandtotalnoformat').val();
            //console.log(kopes);
            //console.log(kosales);
            //console.log(tglpes);
            //console.log(kopel);
            //console.log(grandtot);
            $.ajax({
                type : "POST",
                url  : "http://localhost/ajbsmg/pesanan/addpesanan",
                dataType : "JSON",
                data : {kopes:kopes , tglpes:tglpes,kodpel:kopel,grandtotal:grandtot,kodesales:kosales,username:kosales},
                success: function(data){
                  console.log('sukses');
                    tampil_data_barang();
                    window.location.reload();
                }
            });
            return false;
        });

        //Hapus Pesanan Temp
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('pesanan/hapustemp');?>",
            dataType : "JSON",
                    data : {id: id},
                    success: function(data){
                            //$('#modal-hapus').modal('hide');
                            tampil_data_barang();
                            grandtotal_temp();
                            //window.location.reload();
                    }
                });
                return false;
            });

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "http://localhost/ajbsmg/barang/get_barang",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(barang_kode, barang_nama){
                        $('#modal-edit').modal('show');
                        $('[name="kobar_edit"]').val(data.barang_id);
                        $('[name="kobar_edit2"]').val(data.barang_kode);
                        $('[name="nabar_edit"]').val(data.barang_nama);
                    });
                }
            });
            return false;
        });

        //Update Barang
        $('#btn_update').on('click',function(){
            var kobar=$('#kode_barang2').val();
            var kobar2=$('#kode_barang3').val();
            var nabar=$('#nama_barang2').val();
            $.ajax({
                type : "POST",
                url  : "http://localhost/ajbsmg/barang/update_barang",
                dataType : "JSON",
                data : {kobar:kobar , kobar2:kobar2, nabar:nabar},
                success: function(data){
                    $('[name="kobar_edit"]').val("");
                    $('[name="kobar_edit2"]').val("");
                    $('[name="nabar_edit"]').val("");
                    $('#modal-edit').modal('hide');
                    tampil_data_barang();                    
                    location.reload(false);
                    //window.location.reload();
                    //$("#mydata").ajax.reload();

                }
            });
            return false;
        });

          function formatRupiah(angka, prefix){
            if(angka==null){
              angka='000';
              var number_string = angka.replace(/[^,\d]/g, '').toString(),
              split       = number_string.split(','),
              sisa        = split[0].length % 3,
              rupiah        = split[0].substr(0, sisa),
              ribuan        = split[0].substr(sisa).match(/\d{3}/gi);
 
              // tambahkan titik jika yang di input sudah menjadi angka ribuan
              if(ribuan){
                  separator = sisa ? '.' : '';
                  rupiah += separator + ribuan.join('.');
              }
 
              rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            }else {
              var number_string = angka.replace(/[^,\d]/g, '').toString(),
              split       = number_string.split(','),
              sisa        = split[0].length % 3,
              rupiah        = split[0].substr(0, sisa),
              ribuan        = split[0].substr(sisa).match(/\d{3}/gi);
 
              // tambahkan titik jika yang di input sudah menjadi angka ribuan
              if(ribuan){
                  separator = sisa ? '.' : '';
                  rupiah += separator + ribuan.join('.');
              }
 
              rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            }
              
              return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
          }

    });
 
</script>
</body>
</html>
