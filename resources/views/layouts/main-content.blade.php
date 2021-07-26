  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-3"></div>
          <div class="col-sm-3">
            <img style="display: block; margin-left: auto; margin-right: auto; width:80%;" src="https://static.wixstatic.com/media/d674c5_8ccafedb9b794a9aaeb349314d4ef9a6~mv2.png/v1/fill/w_1080,h_281,al_c/d674c5_8ccafedb9b794a9aaeb349314d4ef9a6~mv2.png" alt="Italian Trulli">
          </div>
          <div class="col-sm-3">
            <img style="display: block; margin-left: auto; margin-right: auto; width:80%;" src="https://www.joget.org/wp-content/uploads/2020/02/Joget-DX-logo_Registed-_RGB_tight-crop.png" alt="Italian Trulli">
          </div>
          <div class="col-sm-3"></div>
        </div>
        {{-- <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="">Joget Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div> --}}
        <!-- /.container-fluid -->
      </div>
    </section>

    <!-- Main content -->
    <section class="content p-4">
      
      {{-- UPPER STATUS BAR --}}
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3 ">
          <div class="info-box bg-primary elevation-1">
            <span class="info-box-icon">
              <i class="fas fa-spinner"></i>
            </span>
            <div class="info-box-content ">
              <span class="info-box-text">On Progress</span>
              <span class="info-box-number">101</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3 bg-danger elevation-1">
            <span class="info-box-icon "><i class="fas fa-times"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Rejected</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3 bg-success elevation-1">
            <span class="info-box-icon "><i class="fas fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Approved</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3 bg-warning elevation-1">
            <span class="info-box-icon " ><i class="fas fa-undo" style="color: white"></i></span>

            <div class="info-box-content" style="color: white">
              <span class="info-box-text">Clarified</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>{{-- ./ UPPER STATUS BAR --}}
      
      <hr>

      {{-- DATATABLE --}}
      <h2 style="color:">Application Datatable</h2>
      <div class="card table-responsive p-3">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
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
                      @foreach($applications as $app)

                      <option value="{{ $app->name }}">{{ $app->name }}</option>

                      @endforeach
                  </select>
              </div>
              
              <div class="form-group" align="center">
                  <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>

                  <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
              </div> --}}
          </div>
          <div class="col-md-4"></div>
        </div>
        <table class="table table-hover table-bordered yajra-datatable-x ">
        <thead>
              <tr>
                  <th>No</th>
                  {{-- <th>App ID</th> --}}
                  <th>App Id</th>
                  <th>App name</th>
                  <th>On Progress</th>
                  <th>Completed</th>
                  <th>Rejected</th>
                  <th>Clarified</th>
                  <th>Action</th>
                  {{-- <th>Account Name</th>
                  <th>Requester Name</th>
                  <th>Cabang</th>
                  <th>Tanggal Pengajuan</th>
                  <th>No. Permintaan</th> --}}
                  {{-- <th>Link</th> --}}
                  {{-- <th>url2</th> --}}
                  
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
      </div>{{-- ./ DATATABLE --}}

      {{-- LOWER SECTION --}}
      <div class="row">
  
        <!--LEFT LANE -->
        <div class="col-md-9">
          <!-- TABLE: LATEST ORDERS -->
  
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
        </div>
        <!-- /. LEFT LANE -->
  
        <!--RIGHT LANE -->
        <div class="col-md-3">
          
          {{-- LOWER STATUS BAR --}}
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
          {{-- ./ LOWER STATUS BAR --}}

        </div>
        <!-- /. RIGHT LANE -->
  
      </div>{{-- ./ LOWER SECTION --}}
      
    </section><!-- /. Main content -->
  </div>