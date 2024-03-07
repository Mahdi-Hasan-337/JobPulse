@extends('layouts.main')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard/dashboard.css') }}">
@endsection

@section('contact')
    <div class="d-flex" id="wrapper">
        <div class="bg-white d-flex flex-column" id="sidebar-wrapper">
            <div class="contents"
                style="display: flex; flex-direction: column; justify-content: space-between; flex-grow: 1;">
                <div class="list-group list-group-flush my-3">
                    <div class="d-flex">
                        @include('components.logo-name')
                    </div>
                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle"
                        data-bs-toggle="collapse" data-bs-target="#PagesMenu" aria-expanded="false"
                        aria-controls="PagesMenu">
                        <i class="fa-solid fa-bell me-2"></i>Pages
                    </a>
                    <div class="collapse" id="PagesMenu" style="padding-left: 1.4rem;">
                        <a href="#content-wrapper-1" class="list-group-item list-group-item-action">
                            <i class="fas fa-tachometer-alt me-2"></i>
                            User
                        </a>
                        <a href="#content-wrapper-2" class="list-group-item list-group-item-action">
                            <i class="fas fa-chart-line me-2"></i>
                            Banner
                        </a>
                        <a href="#content-wrapper-3" class="list-group-item list-group-item-action">
                            <i class="fas fa-comments me-2"></i>
                            Approve Company
                        </a>
                        <a href="#content-wrapper-4" class="list-group-item list-group-item-action">
                            <i class="fas fa-comments me-2"></i>
                            Change Logo-Name
                        </a>
                    </div>

                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle"
                        data-bs-toggle="collapse" data-bs-target="#NotificationMenu" aria-expanded="false"
                        aria-controls="NotificationMenu">
                        <i class="fa-solid fa-bell me-2"></i>Notification
                    </a>
                    <div class="collapse" id="NotificationMenu" style="padding-left: 1.4rem;">
                        <a href="#notification1-content-wrapper" class="list-group-item list-group-item-action">
                            <i class="fas fa-comment-alt me-2"></i>Notification 1
                        </a>
                        <a href="#notification2-content-wrapper" class="list-group-item list-group-item-action">
                            <i class="fas fa-comment-alt me-2"></i>Notification 2
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- <!-- Contents for dashboard --> --}}
        <div id="content-wrapper-1">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars fs-4 me-3" id="menu-toggle-1"></i>
                    <h2 class="fs-2 m-0">User</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                @include('components.dashboard.system.user')
            </div>
        </div>

        {{-- Contents for Analytics portion --}}
        <div id="content-wrapper-2" style="display:none;">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars fs-4 me-3" id="menu-toggle-2"></i>
                    <h2 class="fs-2 m-0">Banner</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bannerModal">
                        Create Banner
                    </button>
                    @include('components.dashboard.system.create-banner')

                    <h3>Visible Banners</h3>
                    @include('components.dashboard.system.visible-banner')


                    <h3>Invisible Banners</h3>
                    @include('components.dashboard.system.invisible-banner')
                </div>
            </div>
        </div>

        {{-- Contents for Feedback portion --}}
        <div id="content-wrapper-3" style="display:none;">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars fs-4 me-3" id="menu-toggle-3"></i>
                    <h2 class="fs-2 m-0">Approve Company</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row my-5">
                    @include('components.dashboard.system.pending-companies')
                </div>
            </div>
        </div>

        {{--  --}}
        <div id="content-wrapper-4" style="display:none;">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars fs-4 me-3" id="menu-toggle-4"></i>
                    <h2 class="fs-2 m-0">Logo Name change</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#logoNameModal">
                        Add Logo Name
                    </button>

                    @include('components.dashboard.system.add-logo')
                </div>
            </div>
        </div>

        {{--  --}}
        <div id="notification1-content-wrapper" style="display:none;">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars fs-4 me-3" id="notification1-menu-toggle"></i>
                    <h2 class="fs-2 m-0">Notification1</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">

                </div>
            </div>
        </div>

        {{--  --}}
        <div id="notification2-content-wrapper" style="display:none;">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars fs-4 me-3" id="notification2-menu-toggle"></i>
                    <h2 class="fs-2 m-0">Notification2</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="{{ asset('js/dashboard/dashboard.js') }}"></script>
@endsection
