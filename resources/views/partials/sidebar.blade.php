<div class="sidebar" data-color="azure" data-image="{{ asset('assets/img/full-screen-image-4.jpg') }}">
    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
  <div class="logo">
      <a href="{{ url('/home') }}" class="logo-text">
          Order System
      </a>
  </div>
  <div class="logo logo-mini">
    <a href="{{ url('/home') }}" class="logo-text">
      OS
    </a>
  </div>

  <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('assets/img/an.jpeg') }}" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    {{ Auth::user()->name }}
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li><a href="#">My Profile</a></li>
                        <li><a href="#">Edit Profile</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="nav">
            <li>
                <a href="{{url('/home')}}">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#componentsProduct">
                    <i class="pe-7s-plugin"></i>
                    <p>Product
                       <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="componentsProduct">
                    <ul class="nav">
                        <li ><a href="#">All Product</a></li>
                        <li><a href="components/grid.html">Failed Product</a></li>
                        <li><a href="components/icons.html">Expired Product</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#tablesTransaction">
                    <i class="pe-7s-news-paper"></i>
                    <p>Transaction
                       <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tablesTransaction">
                    <ul class="nav">
                        <li><a href="tables/regular.html">Regular Tables</a></li>
                        <li><a href="tables/extended.html">Extended Tables</a></li>
                        <li><a href="tables/bootstrap-table.html">Bootstrap Table</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#tablesEvents">
                    <i class="pe-7s-gift"></i>
                    <p>Events
                       <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tablesEvents">
                    <ul class="nav">
                        <li><a href="tables/regular.html">Indexbar</a></li>
                        <li><a href="tables/extended.html">buttondown</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="charts.html">
                    <i class="pe-7s-culture"></i>
                    <p>Partner</p>
                </a>
            </li>

            <li>
                <a href="calendar.html">
                    <i class="pe-7s-id"></i>
                    <p>Client</p>
                </a>
            </li>

            <li>
                <a data-toggle="collapse" href="#pagesUser">
                    <i class="pe-7s-users"></i>
                    <p>User System
                       <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="pagesUser">
                    <ul class="nav">
                        <li><a href="pages/login.html">Admin</a></li>
                        <li><a href="pages/register.html">Analys</a></li>
                        <li><a href="pages/lock.html">Operator</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#pagesOption">
                    <i class="pe-7s-tools"></i>
                    <p>Option System
                       <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="pagesOption">
                    <ul class="nav">
                        <li><a href="{{url('/kategori-option-admin')}}">Kategori Option Root</a></li>
                        <li><a href="pages/register.html">Kategori Event</a></li>
                        <li><a href="pages/lock.html">Kategori Product</a></li>
                        <li><a href="pages/lock.html">Kategori Transaction</a></li>
                        <li><a href="pages/lock.html">Kategori Transaction</a></li>
                        <li><a href="pages/lock.html">Kategori Transaction</a></li>
                    </ul>
                </div>
            </li>
        </ul>
  </div>
</div>
