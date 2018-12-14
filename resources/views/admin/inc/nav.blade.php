<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">

        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="active">
                <a href="index.html">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Customers</div>
        <ul class="pcoded-item pcoded-left-item">
          <li class="pcoded-hasmenu">
              <a href="javascript:void(0)">
                  <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                  <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Customers</span>
                  <span class="pcoded-mcaret"></span>
              </a>
              <ul class="pcoded-submenu">
                  <li class=" ">
                      <a href="{{ route('customer.add') }}">
                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                          <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add Customer</span>
                          <span class="pcoded-mcaret"></span>
                      </a>
                  </li>
                  <li class=" ">
                      <a href="{{ route('customer.all') }}">
                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                          <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">All Customer</span>
                          <span class="pcoded-mcaret"></span>
                      </a>
                  </li>
              </ul>
          </li>


        </ul>



</nav>
