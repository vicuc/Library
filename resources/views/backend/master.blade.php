<!DOCTYPE html>
<html>

<head>
    <base href="{{asset('admin/backend')}}/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')| Library</title>
    <link href="{{asset('public/admin/backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/admin/backend/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('public/admin/backend/css/styles.css')}}" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('dashboard')}}">Trang Quản Trị</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
                                <use xlink:href="#stroked-male-user"></use>
                            </svg> {{Auth::user()->email}} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{asset('logout')}}"><svg class="glyph stroked cancel">
                                        <use xlink:href="#stroked-cancel"></use>
                                    </svg> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <ul class="nav menu">
            <li role="presentation" class="divider"></li>
            <li class="active"><a href="{{Route('dashboard')}}"><svg class="glyph stroked dashboard-dial">
                        <use xlink:href="#stroked-dashboard-dial"></use>
                    </svg> Trang chủ</a></li>
            <li><a href="{{Route('list.sach')}}"><svg class="glyph stroked calendar">
                        <use xlink:href="#stroked-calendar"></use>
                    </svg> Sách</a></li>

            <li><a href="{{Route('list.chude')}}"><svg class="glyph stroked line-graph">
                        <use xlink:href="#stroked-line-graph"></use>
                    </svg> Chủ đề</a></li>
            
            <li><a href="{{Route('list.tacgia')}}"><svg class="glyph stroked line-graph">
                <use xlink:href="#stroked-line-graph"></use>
            </svg> Tác giả</a></li>

            <li><a href="{{Route('list.nxb')}}"><svg class="glyph stroked line-graph">
                <use xlink:href="#stroked-line-graph"></use>
            </svg> Nhà xuất bản</a></li>

            <li><a href="#"><svg class="glyph stroked line-graph">
                        <use xlink:href="#stroked-female-user"></use>
                    </svg> Độc giả</a></li>

            <li><a href="{{ route('thong-ke') }}"><svg class="glyph stroked line-graph">
                        <use xlink:href="#stroked-table"></use>
                    </svg> Thống kê</a></li>

            <li><a href="#"><svg class="glyph stroked line-graph">
                        <use xlink:href="#stroked-table"></use>
                    </svg> Phiếu mượn</a></li>
        </ul>
    </div>
    <!--/.sidebar-->
    @yield('main')

    <script src="{{asset('public/admin/backend/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('public/admin/backend/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('public/admin/backend/js/bootstrap-datepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('public/admin/backend/js/lumino.glyphs.js')}}"></script>
    <script>
        $('#calendar').datepicker({});

        ! function ($) {
            $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                $(this).find('em:first').toggleClass("glyphicon-minus");
            });
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
            if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
            if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })

    </script>
</body>

</html>
