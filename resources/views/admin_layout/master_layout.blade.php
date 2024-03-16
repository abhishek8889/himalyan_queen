<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Himalyan Queen | Admin Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('admin-theme-assets/img/favicon.png') }} " rel="icon">
  <link href="{{ asset('admin-theme-assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('admin-theme-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin-theme-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('admin-theme-assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin-theme-assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('admin-theme-assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('admin-theme-assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('admin-theme-assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- toaster -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <!-- Template Main CSS File -->
  <link href="{{ asset('admin-theme-assets/css/style.css') }}" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('admin.dashboard') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('admin-theme-assets/img/logo.png') }}" alt="">
        <span class="d-none d-lg-block">Himalyan Queen</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
<!-- 
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> -->
    
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('admin-theme-assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name ?? ''  }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ auth()->user()->name ?? ''  }}</h6>
             
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>


            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('account.setting') }}">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
           
           
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url('logout') }}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('admin.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Destinations</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('destination.add') }}">
              <i class="bi bi-circle"></i><span>Add destination</span>
            </a>
          </li>
          <li>
            <a href="{{ route('destination.list') }}">
              <i class="bi bi-circle"></i><span>Destination list</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#package-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Package</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="package-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('package.list') }}">
              <i class="bi bi-circle"></i><span>Package List</span>
            </a>
          </li>
          <li>
            <a href="{{ route('package.add') }}">
              <i class="bi bi-circle"></i><span>Add Package</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#site-setting" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Site setting</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="site-setting" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <!-- <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Add fields</span>
            </a>
          </li> -->
          <li>
            <a href="{{ route('site.meta') }}">
              <i class="bi bi-circle"></i><span>Site setting</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <!-- <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>End Page Title -->

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer" class="footer">
  
  </footer> -->
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="{{ asset('admin-theme-assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('admin-theme-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin-theme-assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('admin-theme-assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('admin-theme-assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('admin-theme-assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('admin-theme-assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('admin-theme-assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('admin-theme-assets/js/main.js') }}"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script>
    @if(session()->has('success') || session()->has('error') )
    Toastify({
      @if(session()->has('success'))
        text: "{{ session('success') }}",
      @else
        text: "{{ session('error') }}",
      @endif
      duration: 3000,
      destination: "https://github.com/apvarun/toastify-js",
      newWindow: true,
      close: true,
      gravity: "top", // `top` or `bottom`
      position: "right", // `left`, `center` or `right`
      stopOnFocus: true, // Prevents dismissing of toast on hover
      style: {
        // background: "linear-gradient(to right, #00b09b, #96c93d)",
        @if(session()->has('success'))
          background:"#098e40eb"
        @else
          background:"#da0909e3"
        @endif
      },
      onClick: function(){} // Callback after click
    }).showToast();
    @endif

    @if( $errors->any())
    @foreach ($errors->all() as $error)
      Toastify({
        text: "{{ $error }}",
        duration: 3000,
        destination: "https://github.com/apvarun/toastify-js",
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
          background:"#da0909e3"
        },
        onClick: function(){} // Callback after click
      }).showToast();
    @endforeach
    
    @endif
  </script>
</body>

</html>