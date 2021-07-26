       
        <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          {{-- <h1>Advance Finance DETAIL</h1> --}}
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
      <!-- <div>TEST >>> </div> -->

      <!-- {{-- @foreach ($namaTabel as $a) -->
        <!-- <div>ISI tableName: {{$a->tableName}}</div> -->
      <!-- @endforeach --}} -->

      <hr>
      {{-- <div>{{country_name}}</div> --}}
      <div class="card scrollme table-responsive p-3">
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8" align="center">
           {{-- <select name="filter_gender" id="filter_gender" class="form-control" required> --}}
            {{-- if(isset($_GET['Appname']) && isset($_GET['appId'])){

            } --}}

              @foreach($app_name as $app)

              {{-- <option value=""> --}}
                <a href="
                http://127.0.0.1:8000/viewDetails/?Appname={{$app->name}}&appId={{$app->appId}}&status=
                
                {{-- '<a href="viewDetails/?Appname=' + content.name + '&appId='+ content.appId +'&status=ongoing" class=""> 8 ongoing </a>'; --}}

                {{-- {{$namaTabel->tableName}} --}}
                {{-- @foreach ($namaTabel as $a)
                {{$a->tableName}}
                @endforeach --}}
                
                " value="{{ $app->name }}">{{ $app->name  }} </a> |
              {{-- </option> --}}
                
              @endforeach
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
            {{-- </select> --}}

            {{-- <div class="form-group">
                <select name="filter_gender" id="filter_gender" class="form-control" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div> --}}
            {{-- <div class="form-group">
                <select name="filter_country" id="filter_country" class="form-control" required>
                    <option value="">Select Applications</option>
                    @foreach($app_name as $app)
                      <option value="{{ $app->name }}">{{ $app->name }}</option>
                    @endforeach
                  </select>
            </div>
            
            <div class="form-group" align="center">
                <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>
                <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
            </div> --}}
        </div>
        <div class="col-md-2"></div>
      </div>
      <table class="table table-hover table-bordered yajra-datatable-y">
        <thead class="table-success">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Account ID</th>
                {{-- <th>Created By Name</th> --}}
                {{-- <th>Requester Name</th> --}}
                <th>Account Name</th>
                {{-- <th>Divisi</th> --}}
                {{-- <th>Tanggal Pengajuan</th> --}}
                <th>Request Status</th>
                {{-- <th>On Progress</th>
                <th>Completed</th>
                <th>Rejected</th>
                <th>Clarified</th>
                <th>Link</th> --}}
                
                {{-- <th>Attachment Requester</th> --}}
              </tr>
            </thead>
            <tbody>
          {{-- <input type='button' value='Status Update'> --}}
            {{-- @foreach ($applications as $apps)
            <tr>
                <td scope="row">{{$loop -> iteration}}</td>
                <td scope="row">{{$apps -> CustomerName}}</td>
                <td>{{$apps -> name}}</td>
                <td>{{$apps -> Address}}</td>
                <td>{{$apps -> City}}</td>
                <td>{{$apps -> PostalCode}}</td>
                <td>{{$apps -> Country}}</td>
                <td>
                    <a class="btn btn-success" href="{{$req-> link}}">Enter</a>
                </td>
              </tr>
            @endforeach --}}
        </tbody>
      </table>
      </div>

      {{-- <div class="container" style="width: 500px;">
        <h2>Data Table</h2>
        <table class="table table-stripped table-hover table-sm">
            <thead class="thead-dark">
                <tr>
                    <th>app id</th>
                    <th>app name</th>
                </tr>
            </thead>
            <tbody> --}}
                <?php 
                    // if(mysqli_num_rows($result) > 0){
                    //     while ($row =mysqli_fetch_array($result)) {
                    //         # code...
                        ?>
                    {{-- <tr>
                        <td> --}}
                        {{-- </td>
                    </tr> --}}
                <?php 
                    //     }
                    // }
                ?>
            {{-- </tbody>
        </table>
      </div> --}}

      <!-- @foreach ($namaTabel as $a)
      <div>ISI tableName: {{$a->tableName}}</div>
      @endforeach -->
   </div>
    
    <!-- Default box -->
    
    {{-- <table class="table table-striped">
      <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Created By</th>
            <th scope="col">Branch</th>
            <th scope="col">Date Created</th>
            <th scope="col">Status</th>
            <th scope="col">Clarified Requests</th>
            <th scope="col">Joget Version</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($applications as $apps)
        <tr>
          <th scope="row">{{$loop -> iteration}}</th>
          <td>{{$apps -> id}}</td>
          <td>{{$apps -> createdByName}}</td>
          <td>{{$apps -> c_cabang}}</td>
          <td>{{$apps -> dateCreated}}</td>
          <td>{{$apps -> c_status}}</td>
          <td>
              <a class="btn btn-success" href="{{$apps-> link}}">Enter</a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table> 
    <!-- /.card -->

    <div class="row">

      <!-- @foreach ($namaTabel as $a)
        <div><br>ISI tableName: {{$a->tableName}}</div>
      @endforeach -->
      <hr>
  
    
      <!--LEFT LANE -->
      <div class="col-md-9">
        <!-- TABLE: LATEST ORDERS -->
       
        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Monthly Recap Report</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Action</a>
                  <a href="#" class="dropdown-item">Another action</a>
                  <a href="#" class="dropdown-item">Something else here</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">Separated link</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <p class="text-center">
                  <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                </p>

                <div class="chart">
                  <!-- Sales Chart Canvas -->
                  <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                </div>
                <!-- /.chart-responsive -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <p class="text-center">
                  <strong>Goal Completion</strong>
                </p>

                <div class="progress-group">
                  Add Products to Cart
                  <span class="float-right"><b>160</b>/200</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->

                <div class="progress-group">
                  Complete Purchase
                  <span class="float-right"><b>310</b>/400</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                  </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                  <span class="progress-text">Visit Premium Page</span>
                  <span class="float-right"><b>480</b>/800</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 60%"></div>
                  </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                  Send Inquiries
                  <span class="float-right"><b>250</b>/500</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- ./card-body -->
          <div class="card-footer">
            <div class="row">
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">$35,210.43</h5>
                  <span class="description-text">TOTAL REVENUE</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">$10,390.90</h5>
                  <span class="description-text">TOTAL COST</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">$24,813.53</h5>
                  <span class="description-text">TOTAL PROFIT</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block">
                  <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                  <h5 class="description-header">1200</h5>
                  <span class="description-text">GOAL COMPLETIONS</span>
                </div>
                <!-- /.description-block -->
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-footer -->
        </div>
      </div> --}}

      <!--RIGHT LANE -->
      {{-- <div class="col-md-3">
        
        <!-- Info Boxes Style 2 -->
        <div class="info-box mb-3 bg-primary">
          <span class="info-box-icon"><i class="fas fa-spinner"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">On Progress</span>
            <span class="info-box-number">5,200</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- Info Boxes Style 2 -->
        <div class="info-box mb-3 bg-success">
          <span class="info-box-icon"><i class="fas fa-check-square"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Approved</span>
            <span class="info-box-number">5,200</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- Info Boxes Style 2 -->
        <div class="info-box mb-3 bg-danger">
          <span class="info-box-icon"><i class="fas fa-times-circle"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Rejected</span>
            <span class="info-box-number">5,200</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- Info Boxes Style 2 -->
        <div class="info-box mb-3 bg-warning">
          <span class="info-box-icon"><i class="fas fa-undo"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Clarified</span>
            <span class="info-box-number">5,200</span>
          </div>
          <!-- /.info-box-content -->
        </div>

        
      </div> --}}

    </div>

    

  </section>
  <!-- /.content -->
</div>