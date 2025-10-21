<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashboard.header')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  {{-- Preloader --}}
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('dist/img/Logo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>  -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">

        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #0c6dcd !important">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('TUKSElogo-iso-300x300.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TU(Kse)</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar user panel (optional) -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{ asset('dist/img/profile.png')}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">
          {{ Auth::user()->name }}
          <br>
          <small>
              @if(Auth::user()->role == '0')
                  <span class="badge badge-danger">Admin</span>
              @elseif(Auth::user()->role == '3')
                  <span class="badge badge-primary">Teacher</span>
              @elseif(Auth::user()->role == '2')
                  <span class="badge badge-success">Student</span>
              @else
                  <span class="badge badge-secondary">User</span>
              @endif
          </small>
      </a>
    </div>
  </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            {{-- Admin View --}}
            @if(auth()->user()->role == '0')
              <li class="nav-item">
                <a href="{{ route('year.create') }}" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Create Academic Year</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('year.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>Academic Year List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('department.create') }}" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Create Department</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('department.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>Department List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.create') }}" class="nav-link">
                  <i class="nav-icon fas fa-user-plus"></i>
                  <p>Create User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>User List</p>
                </a>
              </li>

              {{-- University Information (grouped links) --}}
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-university"></i>
                  <p>
                    University Information
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @if(auth()->user()->role == '0')
                    <li class="nav-item">
                      <a href="{{ route('score.create') }}" class="nav-link">
                        <p>Create Admission Score</p>
                      </a>
                    </li>
                  @endif
                  <li class="nav-item">
                    <a href="{{ route('score.index') }}" class="nav-link">
                      <p>Admission Score List</p>
                    </a>
                  </li>

                  @if(auth()->user()->role == '0')
                    <li class="nav-item">
                      <a href="{{ route('timetable.create') }}" class="nav-link">
                        <p>Create Timetable</p>
                      </a>
                    </li>
                  @endif
                  <li class="nav-item">
                    <a href="{{ route('timetable.index') }}" class="nav-link">
                      <p>Timetable List</p>
                    </a>
                  </li>

                  @if(auth()->user()->role == '0')
                    <li class="nav-item">
                      <a href="{{ route('result.create') }}" class="nav-link">
                        <p>Create Result File</p>
                      </a>
                    </li>
                  @endif
                  <li class="nav-item">
                    <a href="{{ route('result.index') }}" class="nav-link">
                      <p>Result File List</p>
                    </a>
                  </li>

                  @if(auth()->user()->role == '0')
                    <li class="nav-item">
                      <a href="{{ route('news.create') }}" class="nav-link">
                        <p>Create News & Events</p>
                      </a>
                    </li>
                  @endif
                  <li class="nav-item">
                    <a href="{{ route('news.index') }}" class="nav-link">
                      <p>News & Events List</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="{{ route('assignment.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>Assignment & Pratical List </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('blogs.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>Blogs & Comment </p>
                </a>
              </li>

            {{-- Teacher View --}}
            @elseif(auth()->user()->role == '3')
              <li class="nav-item">
                <a href="{{ route('year.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>Academic Year List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('department.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>Department List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>User List</p>
                </a>
              </li>

              {{-- University Information for Teacher --}}
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-university"></i>
                  <p>
                    University Information
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <!-- Teachers do not have create admission score (admin only) -->
                  <li class="nav-item">
                    <a href="{{ route('score.index') }}" class="nav-link">
                      <p>Admission Score List</p>
                    </a>
                  </li>

                  @if(auth()->user()->role == '0')
                    <li class="nav-item">
                      <a href="{{ route('timetable.create') }}" class="nav-link">
                        <p>Create Timetable</p>
                      </a>
                    </li>
                  @endif
                  <li class="nav-item">
                    <a href="{{ route('timetable.index') }}" class="nav-link">
                      <p>Timetable List</p>
                    </a>
                  </li>

                  <!-- Result create is admin-only -->
                  <li class="nav-item">
                    <a href="{{ route('result.index') }}" class="nav-link">
                      <p>Result File List</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('news.index') }}" class="nav-link">
                      <p>News & Events List</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="{{ route('assignment.create') }}" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Create Assignment & Pratical </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('assignment.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Assignment & Pratical List </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('result.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>Result File List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('news.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>News & Events List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('blogs.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>Blogs & Comment </p>
                </a>
              </li>

            {{-- Student View --}}
            @elseif(auth()->user()->role == '2')
              <li class="nav-item">
                <a href="{{ route('year.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>Academic Year List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('department.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>Department List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>User List</p>
                </a>
              </li>

              {{-- University Information for Student (lists only) --}}
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-university"></i>
                  <p>
                    University Information
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('score.index') }}" class="nav-link">
                      <p>Admission Score List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('timetable.index') }}" class="nav-link">
                      <p>Timetable List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('result.index') }}" class="nav-link">
                      <p>Result File List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('news.index') }}" class="nav-link">
                      <p>News & Events List</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="{{ route('assignment.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Assignment & Pratical List </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('blogs.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>Blogs & Comment </p>
                </a>
              </li>
            @endif

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>

    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      @yield('content')

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @extends('dashboard.footer')
</body>
</html>
