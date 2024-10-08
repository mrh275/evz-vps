@extends('layouts.user-template')

@section('content')
    <div id="main" class='layout-navbar navbar-fixed'>
        <header>
            <nav class="navbar navbar-expand navbar-light navbar-top">
                <div class="container-fluid">
                    <a href="#" class="burger-btn d-block">
                        <i class="bi bi-justify fs-3"></i>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-lg-0">
                            <li class="nav-item dropdown me-1">
                                <a class="text-gray-600 nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class='bi bi-envelope bi-sub fs-4'></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Mail</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">No new mail</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown me-3">
                                <a class="text-gray-600 nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                    <i class='bi bi-bell bi-sub fs-4'></i>
                                    <span class="badge badge-notification bg-danger">7</span>
                                </a>
                                <ul class="dropdown-menu dropdown-center dropdown-menu-sm-end notification-dropdown" aria-labelledby="dropdownMenuButton">
                                    <li class="dropdown-header">
                                        <h6>Notifications</h6>
                                    </li>
                                    <li class="dropdown-item notification-item">
                                        <a class="d-flex align-items-center" href="#">
                                            <div class="notification-icon bg-primary">
                                                <i class="bi bi-cart-check"></i>
                                            </div>
                                            <div class="notification-text ms-4">
                                                <p class="font-bold notification-title">Successfully check out</p>
                                                <p class="text-sm font-thin notification-subtitle">Order ID #256</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-item notification-item">
                                        <a class="d-flex align-items-center" href="#">
                                            <div class="notification-icon bg-success">
                                                <i class="bi bi-file-earmark-check"></i>
                                            </div>
                                            <div class="notification-text ms-4">
                                                <p class="font-bold notification-title">Homework submitted</p>
                                                <p class="text-sm font-thin notification-subtitle">Algebra math homework</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <p class="py-2 mb-0 text-center"><a href="#">See all notification</a></p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="user-menu d-flex">
                                    <div class="user-name text-end me-3">
                                        <h6 class="mb-0 text-gray-600">John Ducky</h6>
                                        <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                    </div>
                                    <div class="user-img d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="./assets/compiled/jpg/1.jpg">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;">
                                <li>
                                    <h6 class="dropdown-header">Hello, John!</h6>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                        Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                        Settings</a></li>
                                <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i>
                                        Wallet</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div id="main-content">

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="order-last col-12 col-md-6 order-md-1">
                            <h3>Vertical Layout with Navbar</h3>
                            <p class="text-subtitle text-muted">Navbar will appear on the top of the page.</p>
                        </div>
                        <div class="order-first col-12 col-md-6 order-md-2">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Layout Vertical Navbar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">About Vertical Navbar</h4>
                        </div>
                        <div class="card-body">
                            <p>Vertical Navbar is a layout option that you can use with Mazer. </p>

                            <p>In case you want the navbar to be sticky on top while scrolling, add <code>.navbar-fixed</code> class alongside with <code>.layout-navbar</code> class.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Dummy Text</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis tincidunt tempus. Duis vitae facilisis enim, at rutrum lacus. Nam at nisl ut ex egestas placerat sodales id quam. Aenean sit amet nibh quis lacus pellentesque venenatis vitae at justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse venenatis tincidunt odio ut rutrum. Maecenas ut urna venenatis, dapibus tortor sed, ultrices justo. Phasellus
                                scelerisque, nibh quis gravida venenatis, nibh mi lacinia est, et porta purus nisi eget nibh. Fusce pretium vestibulum sagittis. Donec sodales velit cursus convallis sollicitudin. Nunc vel scelerisque elit, eget facilisis tellus. Donec id molestie ipsum. Nunc tincidunt tellus sed felis vulputate euismod.
                            </p>
                            <p>
                                Proin accumsan nec arcu sit amet volutpat. Proin non risus luctus, tempus quam quis, volutpat orci. Phasellus commodo arcu dui, ut convallis quam sodales maximus. Aenean sollicitudin massa a quam fermentum, et efficitur metus convallis. Curabitur nec laoreet ipsum, eu congue sem. Nunc pellentesque quis erat at gravida. Vestibulum dapibus efficitur felis, vel luctus libero congue eget. Donec mollis pellentesque arcu, eu commodo nunc porta sit amet. In commodo augue
                                id mauris tempor, sed dignissim nulla facilisis. Ut non mattis justo, ut placerat justo. Vestibulum scelerisque cursus facilisis. Suspendisse velit justo, scelerisque ac ultrices eu, consectetur ac odio.
                            </p>
                            <p>
                                In pharetra quam vel lobortis fermentum. Nulla vel risus ut sapien porttitor volutpat eu ac lorem. Vestibulum porta elit magna, ut ultrices sem fermentum ut. Vestibulum blandit eros ut imperdiet porttitor. Pellentesque tempus nunc sed augue auctor eleifend. Sed nisi sem, lobortis eget faucibus placerat, hendrerit vitae elit. Vestibulum elit orci, pretium vel libero at, imperdiet congue lectus. Praesent rutrum id turpis non aliquam. Cras dignissim, metus vitae
                                aliquam faucibus, elit augue dignissim nulla, bibendum consectetur leo libero a tortor. Vestibulum non tincidunt nibh. Ut imperdiet elit vel vehicula ultricies. Nulla maximus justo sit amet fringilla laoreet. Aliquam malesuada diam in augue mattis aliquam. Pellentesque id eros dignissim, dapibus sem ac, molestie dolor. Mauris purus lacus, tempor sit amet vestibulum vitae, ultrices eu urna.
                            </p>
                        </div>
                    </div>
                </section>
            </div>

        </div>
        <footer>
            <div class="clearfix mb-0 footer text-muted">
                <div class="float-start">
                    <p>2023 &copy; Mazer</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                        by <a href="https://saugi.me">Saugi</a></p>
                </div>
            </div>
        </footer>
    </div>
@endsection
