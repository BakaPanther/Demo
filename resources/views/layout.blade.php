<html>

<head>
    <title> Quản Lí Sản Phẩm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <!-- Custom styles for this template -->
    <link href="{{ asset('bootstrap-5.2.3/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dashboard.js') }}" rel="stylesheet" />
    <script src="{{ asset('sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('bootstrap-5.2.3/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="{{route('sanpham.danh-sach')}}">Trang chủ</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search"
            aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="{{route('Admin.dang-xuat')}}">Sign out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('sanpham.danh-sach')}}">
                            <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                            Quản lí sản phẩm
                            </a>
                        </li>
                        <li class="nav-item">
                        <a  class="nav-link" href="{{route('loaisanpham.danh-sach')}}">
                            <span data-feather="layers" class="align-text-bottom"></span>
                            Quản lí loại sản phẩm
                            </a>
                        </li>
                        <li class="nav-item">
                        <a  class="nav-link" href="{{route('khachhang.danh-sach')}}">
                            <span data-feather="layers" class="align-text-bottom"></span>
                            Quản lí khách hàng
                            </a>
                        </li>
                        <li class="nav-item">
                        <a  class="nav-link" href="{{route('nhacungcap.danh-sach')}}">
                            <span data-feather="layers" class="align-text-bottom"></span>
                            Quản lí nhà cung cấp
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
