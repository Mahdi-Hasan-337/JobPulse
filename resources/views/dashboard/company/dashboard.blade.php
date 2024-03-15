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
                    <a href="#content-wrapper-1" class="list-group-item list-group-item-action">
                        Dashboard
                    </a>
                    <a href="#content-wrapper-2" class="list-group-item list-group-item-action">
                        Job
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
                        {{-- <a href="#content-wrapper-2" class="list-group-item list-group-item-action">
                            Banner
                        </a> --}}

                        <a href="#content-wrapper-4" class="list-group-item list-group-item-action">
                            Change Logo-Name
                        </a>
                    </div>

                    <a href="#content-wrapper-6" class="list-group-item list-group-item-action">
                        Employee
                    </a>

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

            <div class="container-fluid d-flex px-4">
                @include('components.Company-Dashboard')
            </div>
        </div>

        {{-- Contents for Analytics portion --}}
        <div id="content-wrapper-2" style="display:none;">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars fs-4 me-3" id="menu-toggle-2"></i>
                    <h2 class="fs-2 m-0">job</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    {{-- @include('components.company-job') --}}
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#jobModal">
                        Add a Job
                    </button>

                    <div class="modal fade" id="jobModal" tabindex="-1" aria-labelledby="jobModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="jobModalLabel">{{ __('Create a New Job') }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('jobs.store') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label for="title">{{ __('Title') }}</label>
                                            <input id="title" type="text" class="form-control" name="title"
                                                required autofocus>
                                        </div>

                                        <div class="form-group">
                                            <label for="description">{{ __('Description') }}</label>
                                            <textarea id="description" class="form-control" name="description" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="benefits">{{ __('Benefits') }}</label>
                                            <input id="benefits" type="text" class="form-control" name="benefits"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="location">{{ __('Location') }}</label>
                                            <input id="location" type="text" class="form-control" name="location"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="deadline">{{ __('Deadline') }}</label>
                                            <input id="deadline" type="date" class="form-control" name="deadline"
                                                min="{{ date('Y-m-d') }}" required>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid px-4">
                        <div class="row g-3 my-2">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Location</th>
                                        <th>Deadline</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $job)
                                        <tr>
                                            <td>{{ $job->title }}</td>
                                            <td>{{ $job->description }}</td>
                                            <td>{{ $job->location }}</td>
                                            <td>{{ $job->deadline }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#showJobModal{{ $job->id }}">
                                                    View
                                                </button>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#updateJobModal{{ $job->id }}">
                                                    Update
                                                </button>
                                                <form method="POST" action="{{ route('jobs.destroy', $job->id) }}"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>

                                        <!-- Update Job Modal -->
                                        <div class="modal fade" id="updateJobModal{{ $job->id }}" tabindex="-1"
                                            aria-labelledby="updateJobModalLabel{{ $job->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="updateJobModalLabel{{ $job->id }}">
                                                            {{ __('Update Job') }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('jobs.update', $job->id) }}">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="form-group">
                                                                <label for="title">{{ __('Title') }}</label>
                                                                <input id="title" type="text" class="form-control"
                                                                    name="title" value="{{ $job->title }}" required
                                                                    autofocus>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="description">{{ __('Description') }}</label>
                                                                <textarea id="description" class="form-control" name="description" required>{{ $job->description }}</textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="benefits">{{ __('Benefits') }}</label>
                                                                <input id="benefits" type="text" class="form-control"
                                                                    name="benefits" value="{{ $job->benefits }}"
                                                                    required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="location">{{ __('Location') }}</label>
                                                                <input id="location" type="text" class="form-control"
                                                                    name="location" value="{{ $job->location }}"
                                                                    required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="deadline">{{ __('Deadline') }}</label>
                                                                <input id="deadline" type="date" class="form-control"
                                                                    name="deadline" min="{{ date('Y-m-d') }}"
                                                                    value="{{ $job->deadline }}" required>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">{{ __('Update') }}</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Update Job Modal -->

                                        <!-- View Job Modal -->
                                        <div class="modal fade" id="showJobModal{{ $job->id }}" tabindex="-1"
                                            aria-labelledby="showJobModalLabel{{ $job->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="showJobModalLabel{{ $job->id }}">
                                                            {{ __('View Job') }}
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>Title: {{ $job->title }}</h5>
                                                        <p>Description: {{ $job->description }}</p>
                                                        <p>Benefits: {{ $job->benefits }}</p>
                                                        <p>Location: {{ $job->location }}</p>
                                                        <p>Deadline: {{ $job->deadline }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">
                                                            {{ __('Close') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End View Job Modal -->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- @foreach ($jobs as $job)
                        <!-- Job Card -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $job->title }}</h5>
                                    <p class="card-text">{{ $job->description }}</p>
                                    <p class="card-text"><strong>Location:</strong> {{ $job->location }}</p>
                                    <p class="card-text"><strong>Deadline:</strong> {{ $job->deadline }}</p>
                                    <a href="#" class="btn btn-primary">Apply Now</a>
                                    <!-- Update Button -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#updateJobModal{{ $job->id }}">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="updateJobModal{{ $job->id }}" tabindex="-1"
                            aria-labelledby="updateJobModalLabel{{ $job->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateJobModalLabel{{ $job->id }}">
                                            {{ __('Update Job') }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('jobs.update', $job->id) }}">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group">
                                                <label for="title">{{ __('Title') }}</label>
                                                <input id="title" type="text" class="form-control" name="title"
                                                    value="{{ $job->title }}" required autofocus>
                                            </div>

                                            <div class="form-group">
                                                <label for="description">{{ __('Description') }}</label>
                                                <textarea id="description" class="form-control" name="description" required>{{ $job->description }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="benefits">{{ __('Benefits') }}</label>
                                                <input id="benefits" type="text" class="form-control"
                                                    name="benefits" value="{{ $job->benefits }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="location">{{ __('Location') }}</label>
                                                <input id="location" type="text" class="form-control"
                                                    name="location" value="{{ $job->location }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="deadline">{{ __('Deadline') }}</label>
                                                <input id="deadline" type="date" class="form-control"
                                                    name="deadline" min="{{ date('Y-m-d') }}"
                                                    value="{{ $job->deadline }}" required>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit"
                                                    class="btn btn-primary">{{ __('Update') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}

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
