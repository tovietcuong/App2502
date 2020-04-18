
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <link rel="icon" type="image/png" size="16x16"  href ="{{asset('image/lua.jpg')}}">
    <title>Quản lý điểm UET</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.dataTables.min.css')}}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/buttons.dataTables.min.css')}}"> --}}
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="#">UET</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        {{-- <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li> --}}
        <!--Notification Menu-->
        {{-- <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a> --}}
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            {{-- @if(Session::has('tk_admin')) --}}
            {{-- <li><a class="dropdown-item" href="{{route('admin.thongtinadmin')}}"><i class="fa fa-user fa-lg"></i> Thông tin cá nhân</a></li> --}}
            {{-- @endif
            @if(Session::has('tk_giaovien'))
            <li><a class="dropdown-item" href="{{route('admin.thongtinadmin')}}"><i class="fa fa-user fa-lg"></i> Thông tin cá nhân</a></li>
            @endif --}}
            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#doimatkhau"><i class="fa fa-cog fa-lg"></i> Đổi mật khẩu</a></li>
            <li><a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-sign-out fa-lg"></i> Đăng xuất</a></li>
          </ul>
        </li>
      </ul> 
    </header>
    {{-- Doi mat khau --}}
         @if(Session::has('alertSuccessDoiMatKhau'))
        <script type="text/javascript">
          alert('{{Session::get('alertSuccessDoiMatKhau')}}');
        </script>
       @endif 
       @if(Session::has('alertErrorDoiMatKhau'))
        <script type="text/javascript">
          alert('{{Session::get('alertErrorDoiMatKhau')}}');
        </script>
       @endif
    <div class="modal fade" id="doimatkhau" tabindex="-1" role="dialog" aria-labelledby="doimatkhauLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form action="{{route('doiMatKhau')}}" method="get">
                <div class="modal-header">
                    <h5 class="modal-title" id="doimatkhauLabel">Tài khoản: @if(Session::has('tk_admin')) {{Session::get('tk_admin')}} @elseif(Session::has('tk_giaovien')) {{Session::get('tk_giaovien')}} @endif</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Mật khẩu cũ</label>
                        <input type="text" class="form-control" name="txtMatKhauCu">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Mật khẩu mới</label>
                        <input class="form-control" name="txtMatKhauMoi">
                    </div>
                </div>
                <div class="modal-footer"> 
                    <button type="submit" class="btn btn-primary" {{-- onclick="return confirm('Có chắc chắn đổi')" --}}>Thực thi</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{asset('image/48x48.jpg')}}" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">@if(Session::has('tk_admin')) {{Session::get('tk_admin')}} @elseif(Session::has('tk_giaovien')) {{Session::get('tk_giaovien')}} @endif</p>
          <p class="app-sidebar__user-designation">User</p>
        </div>
      </div>
      @if(Session::has('tk_admin'))
      <ul class="app-menu">
        <li><a class="app-menu__item " href="{{route('admin.index')}}"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Trang chủ</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-address-book-o"></i><span class="app-menu__label">Quản lí đối tượng</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('danhsachadmin')}}"><i class="icon fa fa-eye"></i> Quản lí quản trị viên</a></li>
            <li><a class="treeview-item" href="{{route('danhsachgiaovien')}}" target="_self" rel="noopener"><i class="icon fa fa-laptop"></i> Quản lí giáo viên</a></li>
            <li><a class="treeview-item" href="{{route('danhsachsinhvien')}}"><i class="icon fa fa-graduation-cap"></i> Quản lí sinh viên</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Thời khóa biểu</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            {{-- <li><a class="treeview-item" href="{{route('danhsachcahoc')}}"><i class="icon fa fa-hourglass"></i> Ca học</a></li> --}}
            <li><a class="treeview-item" href="{{route('danhsachlichhoc')}}"><i class="icon fa fa-calendar-plus-o"></i> Lịch học</a></li>
          </ul>
        </li>       
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Quản lí điểm</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            {{-- <li><a class="treeview-item" href="{{route('danhsachsinhvien')}}"><i class="icon fa fa-address-book"></i> Danh sách sinh viên</a></li> --}}
            <li><a class="treeview-item" href="{{route('danhsachdiemdanh')}}"><i class="icon fa fa-check"></i> Danh sách điểm danh</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-pencil-square-o"></i><span class="app-menu__label">Quản lí giáo vụ</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('danhsachlophoc')}}"><i class="icon fa fa-university"></i> Lớp học</a></li>
            <li><a class="treeview-item" href="{{route('danhsachmonhoc')}}"><i class="icon fa fa-book"></i> Môn học</a></li>
            <li><a class="treeview-item" href="{{route('danhsachnganhhoc')}}"><i class="icon fa fa-gears"></i> Ngành học</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item " href="{{route('admin.chonlop')}}"><i class="app-menu__icon fa fa-bar-chart-o"></i><span class="app-menu__label">Thống kê</span></a></li>
      </ul>
      @endif
      @if(Session::has('tk_giaovien'))
      <ul class="app-menu">
        <li><a class="app-menu__item " href="{{route('giaovien.index')}}"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Trang chủ</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Thời khóa biểu</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            {{-- <li><a class="treeview-item" href="{{route('giaovien.danhsachcahoc')}}"><i class="icon fa fa-hourglass"></i> Ca học</a></li> --}}
            <li><a class="treeview-item" href="{{route('giaovien.danhsachlichhoc')}}"><i class="icon fa fa-calendar-plus-o"></i> Lịch học</a></li>
          </ul>
        </li>       
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Quản lí điểm danh</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('giaovien.danhsachsinhvien')}}"><i class="icon fa fa-address-book"></i> Danh sách sinh viên</a></li>
            <li><a class="treeview-item" href="{{route('giaovien.danhsachdiemdanh')}}"><i class="icon fa fa-address-book-o"></i> Danh sách điểm danh</a></li>
            <li><a class="treeview-item" href="{{route('giaovien.chonlop')}}"><i class="icon fa fa-check"></i>Điểm danh</a></li>
          </ul>
        </li>
      </ul>
      @endif
    </aside>
    <main class="app-content">
      @yield('main')
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('js/plugins/pace.min.js')}}"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{asset('js/plugins/chart.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/sweetalert.min.js')}}"></script>
    {{-- <script type="text/javascript" src="{{asset('js/plugins/bootstrap-datepicker.min.js')}}"></script> --}}
    {{-- <script type="text/javascript">
      $('#demoNotify').click(function(){
        $.notify({
          title: "Update Complete : ",
          message: "Something cool is just updated!",
          icon: 'fa fa-check' 
        },{
          type: "info"
        });
      });
      $('#demoSwal').click(function(){
        swal({
          title: "Bạn chắc chắn muốn xóa?",
          text: "You will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonText: "Yes, delete it!",
          cancelButtonText: "No, cancel plx!",
          closeOnConfirm: false,
          closeOnCancel: false
        }, function(isConfirm) {
          if (isConfirm) {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
          } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
        });
      });
    </script> --}}
     <!-- Data table plugin-->
    <script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/dataTables.buttons.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('js/buttons.flash.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    @yield("script")
  </body>
</html>