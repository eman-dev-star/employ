  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('admin/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{auth()->user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> {{auth()->user()->email}}</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <li>
          <a href="{{route('dashboard')}}">
            <i class="fa fa-th"></i> <span>dashboard</span>
          </a>
        </li>

        <li>
           @can('is_admin')
            <a href="{{route('projects.index')}}">
              <i class="fa fa-user" aria-hidden="true"> </i><span>Projects</span>
            </a>
          </li>
        <li>
          @endcan

            <a href="{{route('tasks.index')}}">
              <i class="fa fa-globe"></i> <span>Tasks</span>
            </a>
          </li>









      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
