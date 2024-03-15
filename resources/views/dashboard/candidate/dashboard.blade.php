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
                        Jobs
                    </a>
                    <a href="#content-wrapper-3" class="list-group-item list-group-item-action">
                        Profile
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
                    <h2 class="fs-2 m-0">Jobs</h2>
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
                <div class="row g-3 my-2">

                </div>
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
                    <div class="container-fluid px-4">
                        <div class="row g-3 my-2">
                            @if (!$portfolio)
                                <div class="container-fluid d-flex px-4">
                                    <form action="{{ Route('portfolios.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                        <input type="text" name="myname" placeholder="Name">
                                        <input type="text" name="father" placeholder="Father's Name">
                                        <input type="text" name="mother" placeholder="Mother's Name">
                                        <input type="datetime-local" name="dob" placeholder="Date of Birth">
                                        <select name="blood_group" id="blood_group">
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                        <input type="text" name="social_id" placeholder="Social ID">
                                        <input type="text" name="passport_no" placeholder="Passport Number">
                                        <input type="text" name="cell_no" placeholder="Cell Number">
                                        <input type="text" name="emergency_contact_no"
                                            placeholder="Emergency Contact Number">
                                        <input type="email" name="email" placeholder="Email">
                                        <input type="text" name="whatsapp" placeholder="WhatsApp">
                                        <input type="text" name="linkedin" placeholder="LinkedIn">
                                        <input type="text" name="facebook" placeholder="Facebook">
                                        <input type="text" name="github" placeholder="GitHub">
                                        <input type="text" name="behance" placeholder="Behance">
                                        <input type="text" name="portfolio" placeholder="Portfolio URL">

                                        <div id="education_fields">
                                            <div>
                                                <input type="text" name="education[0][degree]" placeholder="Degree">
                                                <input type="text" name="education[0][institution]"
                                                    placeholder="Institution">

                                            </div>
                                        </div>
                                        <button type="button" onclick="addEducation()">Add Education</button>

                                        <button type="submit">Submit</button>
                                    </form>
                                </div>
                            @else
                                <div>
                                    <form action="{{ Route('portfolios.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                        <input type="text" name="myname" placeholder="Name"
                                            value="{{ $portfolio->myname }}">
                                        <input type="text" name="father" placeholder="Father's Name">
                                        <input type="text" name="mother" placeholder="Mother's Name">
                                        <input type="datetime-local" name="dob" placeholder="Date of Birth">
                                        <select name="blood_group" id="blood_group">
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                        <input type="text" name="social_id" placeholder="Social ID">
                                        <input type="text" name="passport_no" placeholder="Passport Number">
                                        <input type="text" name="cell_no" placeholder="Cell Number">
                                        <input type="text" name="emergency_contact_no"
                                            placeholder="Emergency Contact Number">
                                        <input type="email" name="email" placeholder="Email">
                                        <input type="text" name="whatsapp" placeholder="WhatsApp">
                                        <input type="text" name="linkedin" placeholder="LinkedIn">
                                        <input type="text" name="facebook" placeholder="Facebook">
                                        <input type="text" name="github" placeholder="GitHub">
                                        <input type="text" name="behance" placeholder="Behance">
                                        <input type="text" name="portfolio" placeholder="Portfolio URL">

                                        <div id="education_fields">
                                            @foreach ($education as $key => $edu)
                                                <div>
                                                    <input type="text" name="education[{{ $key }}][degree]"
                                                        placeholder="Degree" value="{{ $edu['degree'] }}">
                                                    <input type="text"
                                                        name="education[{{ $key }}][institution]"
                                                        placeholder="Institution" value="{{ $edu['institution'] }}">
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="button" onclick="addEducation()">Add Education</button>

                                        <button type="submit">Update</button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Contents for Feedback portion --}}
        <div id="content-wrapper-3" style="display:none;">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars fs-4 me-3" id="menu-toggle-3"></i>
                    <h2 class="fs-2 m-0">Profile</h2>
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

    <script>
        let educationCount = 1;

        function addEducation() {
            let newField = `<div>
                                <input type="text" name="education[${educationCount}][degree]" placeholder="Degree">
                                <input type="text" name="education[${educationCount}][institution]" placeholder="Institution">
                                <!-- other fields -->
                            </div>`;
            document.getElementById('education_fields').innerHTML += newField;
            educationCount++;
        }
    </script>
@endsection
