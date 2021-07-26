       
        <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
     <!-- Small boxes (Stat box) -->
     <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>150</h3>

            <p>In Progress</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>53<sup style="font-size: 20px">%</sup></h3>

            <p>Completed</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>44</h3>

            <p>Clarified</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>65</h3>

            <p>Rejected</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

     <!-- Default TABLE BOX -->
    <div class="content p-4">    
      <hr>
      <h2>Application Detail Datatable</h2>
      <div>TEST >>> <?php echo e($raka); ?></div>

      

      <hr>
      
      <div class="card scrollme table-responsive p-3">
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8" align="center">
           
            

              <?php $__currentLoopData = $app_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              
                <a href="
                http://127.0.0.1:8000/viewDetails/?Appname=<?php echo e($app->name); ?>&appId=<?php echo e($app->appId); ?>&status=
                
                

                
                
                
                " value="<?php echo e($app->name); ?>"><?php echo e($app->name); ?> </a> |
              
                
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php
                  if(isset($_GET['Appname']) && isset($_GET['appId'])){
                      // echo "INI DIA APPNAME >>> ". $_GET['Appname'];
                      // echo "INI DIA APPID   >>> ". $_GET['appId'];
          
                      $namaApp = $_GET['Appname'];
                      $namaTabelnya = $_GET['appId'];
                      $namaStatus = $_GET['status'];
                      // echo "--->>>".$tableName;
                      $str = "appId: <b>{$namaTabelnya}</b>, app: <b>{$namaApp}</b>, status: <b>{$namaStatus}</b>";
                      echo "<br> >>> ".$str;
          
                  }
              ?>
            

            
            
        </div>
        <div class="col-md-2"></div>
      </div>
      <table class="table table-hover table-bordered yajra-datatable-y">
        <thead class="table-success">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Account ID</th>
                
                
                <th>Account Name</th>
                
                
                <th>Request Status</th>
                
                
                
              </tr>
            </thead>
            <tbody>
          
            
        </tbody>
      </table>
      </div>

      
                <?php 
                    // if(mysqli_num_rows($result) > 0){
                    //     while ($row =mysqli_fetch_array($result)) {
                    //         # code...
                        ?>
                    
                        
                <?php 
                    //     }
                    // }
                ?>
            

      <?php $__currentLoopData = $namaTabel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div>ISI tableName: <?php echo e($a->tableName); ?></div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
    
    <!-- Default box -->
    
    
    <!-- /.card -->

    <div class="row">

      
  
    
      <!--LEFT LANE -->
      

      <!--RIGHT LANE -->
      

    </div>

    

  </section>
  <!-- /.content -->
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/adminSite01/resources/views/layouts/main-appDetail.blade.php ENDPATH**/ ?>