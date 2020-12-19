<!doctype html>
<html lang="en">

<head>
    <title>@yield('admintitle')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,700i,900,900i|Roboto+Slab:100,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="{{asset('css/adminstyle.css')}}">
</head>

<body>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-md navbar-light">
    <button class="navbar-toggler bg-light mb-2 ml-auto" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
            <div class="row no-gutters">
                <!-- Nav Sidebar Start-->
                <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                    <a href="/" class="navbar-brand text-white text-center d-block mx-auto py-3 mb-2 brand-bottom">
                        User Shop Home
                    </a>
                    <div class="brand-bottom pb-2">
                        @if(Auth::user()->avatar)
                            <img style="width: 70px; height: 70px;" class="img-fluid rounded-circle mr-3" src="{{asset('uploads/profile/'.Auth::user()->avatar)}}" alt="">
                        @else
                            <img class="img-fluid rounded-circle mr-3" src="https://picsum.photos/id/1005/70/70" alt="">
                        @endif

                        @auth
                            <a href="{{route('profile.index')}}" class="text-white">
                                {{Auth::user()->name}}
                            </a>
                        @endauth
                    </div>
                    <ul class="navbar-nav flex-column mt-4">
                        <li class="nav-item">
                            <a href="{{route('admin.index')}}" class="nav-link text-white p-2 mb-2 sidebar-link-current">
                                <i class="fa fa-home fa-lg mr-3"></i>
                                <span>Dashbord</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.user')}}" class="nav-link text-white p-2 mb-2 sidebar-link sidebar-link-current">
                                <i class="fa fa-user fa-lg mr-3"></i>
                                <span>Users</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link text-white p-2 mb-2 sidebar-link sidebar-link-current">
                                <i class="fa fa-folder fa-lg mr-3"></i>
                                <span>Category</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('product.index')}}" class="nav-link text-white p-2 mb-2 sidebar-link sidebar-link-current">
                                <i class="fa fa-shopping-cart fa-lg mr-3"></i>
                                <span>Products</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('post.index')}}" class="nav-link text-white p-2 mb-2 sidebar-link sidebar-link-current">
                                <i class="fab fa-blogger fa-lg mr-3"></i>
                                <span>Blog</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('options')}}" class="nav-link text-white p-2 mb-2 sidebar-link sidebar-link-current">
                                <i class="fas fa-clipboard-check fa-lg mr-3"></i>
                                <span>Select Options</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('review.index')}}" class="nav-link text-white p-2 mb-2 sidebar-link sidebar-link-current">
                                <i class="fa fa-table fa-lg mr-3"></i>
                                <span>Review</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('receive_message')}}" class="nav-link text-white p-2 mb-2 sidebar-link sidebar-link-current">
                                <i class="fa fa-envelope-open fa-lg mr-3"></i>
                                <span>Message</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('documentation')}}" class="nav-link text-white p-2 mb-2 sidebar-link sidebar-link-current">
                                <i class="fa fa-file-alt fa-lg mr-3"></i>
                                <span>Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Nav Sidebar End -->

                <!-- Nav Top Start -->
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h1 class="text-light text-uppercase mb-0 text-center">@yield('dashbordtitle')</h1>
                        </div>
                        <div class="col-md-6">
                            <ul class="navbar-nav">
                                <li class="nav-item ml-md-auto">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-lg fa-sign-out-alt text-danger">{{ __('Logout') }}</i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Nav Top End -->
            </div>
        </div>
    </div>
</nav>

<!-- Navbar End -->

<!-- Card Start -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row pt-md-5 mt-md-3 mb-5">
                    @yield('admincontent')
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Card End -->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body>

</html>