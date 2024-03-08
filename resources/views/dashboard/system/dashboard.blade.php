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
                    <a href="#content-wrapper-5" class="list-group-item list-group-item-action">
                        Dashboard
                    </a>
                    <a href="#content-wrapper-3" class="list-group-item list-group-item-action">
                        Companies
                    </a>
                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle"
                        data-bs-toggle="collapse" data-bs-target="#PagesMenu" aria-expanded="false"
                        aria-controls="PagesMenu">
                        Pages
                    </a>
                    <div class="collapse" id="PagesMenu" style="padding-left: 1.4rem;">
                        <a href="#content-wrapper-1" class="list-group-item list-group-item-action">
                            User
                        </a>
                        <a href="#content-wrapper-2" class="list-group-item list-group-item-action">
                            Banner
                        </a>

                        <a href="#content-wrapper-4" class="list-group-item list-group-item-action">
                            Change Logo-Name
                        </a>
                    </div>

                    <a href="#content-wrapper-6" class="list-group-item list-group-item-action">
                        Employee
                    </a>

                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle"
                        data-bs-toggle="collapse" data-bs-target="#NotificationMenu" aria-expanded="false"
                        aria-controls="NotificationMenu">
                        Notification
                    </a>
                    <div class="collapse" id="NotificationMenu" style="padding-left: 1.4rem;">
                        <a href="#notification1-content-wrapper" class="list-group-item list-group-item-action">
                            Notification 1
                        </a>
                        <a href="#notification2-content-wrapper" class="list-group-item list-group-item-action">
                            Notification 2
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{--  --}}
        <div id="content-wrapper-5" style="display:none;">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars fs-4 me-3" id="menu-toggle-5"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    {{-- Total number of companies --}}
                    {{-- <p>Total number of companies: {{ count($allCompanies) }}</p> --}}
                    <div class="col-4">
                        <div class="card text-center">
                            <div class="card-header">
                                Total Number of Companies
                            </div>
                            <div class="card-body">
                                {{ count($allCompanies) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-center">
                            <div class="card-header">
                                Total Number of Pending Companies
                            </div>
                            <div class="card-body">
                                {{ count($pendingCompanies) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-center">
                            <div class="card-header">
                                Total Number of Jobs
                            </div>
                            <div class="card-body">
                                {{ count($pendingCompanies) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="content-wrapper-6" style="display:none;">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars fs-4 me-3" id="menu-toggle-6"></i>
                    <h2 class="fs-2 m-0">Employee</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    @include('components.system-employee')
                </div>
            </div>
        </div>

        {{-- <!-- Contents for dashboard --> --}}
        <div id="content-wrapper-1">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <i class="fa-solid fa-bars fs-4 me-3" id="menu-toggle-1"></i>
                    <h2 class="fs-2 m-0 flex-grow-1">User</h2>
                    <h5 class="btn btn-light border p-0 fs-2 m-0">
                        {{ Auth::user()->usertype }}
                    </h5>
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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#logoNameModal">
                        Add Logo Name
                    </button>

                    @include('components.dashboard.system.add-logo')

                    @if (!empty($logoName->image))
                        <img class="my-4 d-flex justify-content-center"
                            style="width: 100px; height: 100px; object-fit: cover; border: 2px solid black;"
                            src="{{ asset('uploads/' . $logoName->image) }}" alt="">
                    @endif

                    <h3>Logo Name : {{ $logoName->name ?? '' }}</h3>
                    <h3>History : {{ $logoName->history ?? '' }}</h3>
                    <h3>Vision : {{ $logoName->vision ?? '' }}</h3>
                    <h3>About Banner : {{ $logoName->aboutbanner ?? '' }}</h3>
                    <h3>Jobs Banner : {{ $logoName->jobbanner ?? '' }}</h3>

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
