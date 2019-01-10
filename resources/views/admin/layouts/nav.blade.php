
  <header class="main-header">
    <!-- Logo -->
    <a href="{{aurl('/')}}" class="logo">
      <span class="logo-lg"><b>{{trans('admin.FILMZWEN')}}</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
     

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header text-center">ليس لديك أي رسالة</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu"></ul>
              </li>
              <li class="footer text-center"><a href="#">عرض الكل</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header text-center">ليس لديك اي تنبيه</li>
              <li>
              </li>
              <li class="footer"><a href="#">عرض الكل</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header text-center">ليست لديك اي مهمة</li>
         
              <li class="footer">
                <a href="#">عرض المهام</a>
              </li>
            </ul>
          </li>


           <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-globe"></i>
              <span class="hidden-xs"> </span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('admin/lang/ar') }}"><i class="fa fa-flag"></i> عربى</a></li>
              <li><a href="{{ url('admin/lang/en') }}"><i class="fa fa-flag"></i> English</a></li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="https://e.top4top.net/p_10965wf401.png" class="user-image" alt="User Image">
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="text-center">
                  <a href="{{ route('logout')}}" class="btn btn-danger"> {{ trans('admin.Sign_out')}} </a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      @include('admin.layouts.menu')
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="https://e.top4top.net/p_10965wf401.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-right info">
          <p>{{ admin()->user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('admin.Online')}} </a>
        </div>
      </div>


      <ul class="sidebar-menu" data-widget="tree">
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>{{ trans('admin.dashboard')}}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active">
              <a href="{{ url('admin/users')}}"><i class="fa fa-users"></i>{{ trans('admin.users')}}</a>
            </li>
             <li>
              <a href="{{ url('admin/admin')}}"><i class="fa fa-user"></i>{{ trans('admin.admins')}}</a>
            </li>
            <li>
              <a href="{{ url('admin/add')}}"><i class="fa fa-plus"></i>{{ trans('admin.add')}}</a>
            </li>
            <li>
              <a href="{{ url('admin/addFilms')}}"><i class="fa fa-film"></i>{{ trans('admin.addFilms')}}</a>
            </li>
            <li>
            {{--   <a href="{{ url('admin/edit')}}" disabled="disabled"><i class="fa fa-pencil-square-o"></i>{{ trans('admin.edit_content')}}</a> --}}
            </li>
            <li>
              <a href="{{ url('admin/comment')}}"><i class="fa fa-commenting"></i>{{ trans('admin.comment')}}</a>
            </li>
            <li>
              <a href="{{ url('admin/message')}}">
                <i class="fa fa-envelope-open"></i>{{ trans('admin.message')}}</a>
            </li>
          </ul>
        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
