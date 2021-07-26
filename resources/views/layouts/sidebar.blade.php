<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/jogetdashboard" class="brand-link">
      <img src="{{ asset('')}}assets/dist/img/JogetLogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="">
      <span class="brand-text font-weight-light">Ecocare Joget DX</span>
    </a>

    <!-- Sidebar -->
    {{-- height: 431px;
    width: 249px; --}}
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('')}}assets/dist/img/ava.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Dashboard Sidebar</a>
        </div>
      </div> --}}

      <!-- SidebarSearch Form -->
      <div class="form-inline mt-3 mb-3 d-flex">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Applications
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('viewDetails')}}" class="nav-link">
                      {{-- <a href="{{ route('layouts.af') }}" class="nav-link"> --}}
                      <i class="far fa-circle nav-icon"></i>
                      <p>App Detail</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('af')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Advance Finance</p>
                    </a>
                  </li>
                  {{-- <li class="nav-item">
                    <a href="{{ url('/pcf')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>PCF & ECF</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/gdf')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pengiriman GDF</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/pr')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Purchase Request</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/rc')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Request Cuti</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/bket')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>BPJS Ketenagakerjaan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/bkes')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>BPJS Kesehatan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/da')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Destroy Asset</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/ma')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Movement Asset</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/pc')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pengiriman Cabang</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/pa')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Penjualan Asset</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/pd')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Perjalanan Dinas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/pk')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Permintaan Karyawan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/rp')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Request Parklaring</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/rt')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Request Training</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/sk')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sewa Kantor</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/wo')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Write Off</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/tb')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tagihan Bermasalah</p>
                    </a>
                  </li> --}}
                </ul>
              </li>

          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('')}}assets/indexTest.blade.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('')}}assets/index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('')}}assets/index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> --}}
          {{-- <li class="nav-item">
            <a href="{{ asset('')}}assets/pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Widgetsss
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li> --}}
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="assets/pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="assets/pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="assets/pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="assets/pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>