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
                        {{-- @include('components.logo-name') --}}
                        @if (!empty($logoName->image))
                            <img class="d-flex justify-content-center mx-1"
                                style="width: 50px; height: 50px; object-fit: cover; border: 2px solid black; border-radius: 50%;"
                                src="{{ asset('uploads/' . $logoName->image) }}" alt="">
                        @else
                            <img class="text-center mx-1"
                                style="width: 50px; height: 50px; object-fit: cover; border: 2px solid black; border-radius: 50%;"
                                src="{{ asset('images/campusdotcrew.jpg') }}" alt="Default Avatar">
                        @endif

                        @if (!empty($logoName->name))
                            <a class="navbar-brand logo-name mx-1" href="#">{{ $logoName->name }}</a>
                        @else
                            <a class="navbar-brand logo-name mx-1" href="#">JobPulse</a>
                        @endif
                    </div>
                    <a href="#content-wrapper-1" class="list-group-item list-group-item-action">
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
                        <a href="#content-wrapper-5" class="list-group-item list-group-item-action">
                            Dashboard
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
                </div>
            </div>
        </div>

        {{-- <!-- Contents for dashboard --> --}}
        <div id="content-wrapper-1">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <i class="fa-solid fa-bars fs-4 me-3" id="menu-toggle-1"></i>
                    <h2 class="fs-2 m-0 flex-grow-1">Dashboard</h2>
                    <p class="btn btn-secondary border p-0 fs-2 m-0">
                        {{ Auth::user()->usertype }}
                    </p>
                </div>
            </nav>

            <div class="container-fluid px-4">
                @include('components.Company-Dashboard')
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
