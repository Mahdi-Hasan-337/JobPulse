@if (!empty($logoName->image))
    <img class="d-flex justify-content-center mx-1"
        style="width: 50px; height: 50px; object-fit: cover; border: 2px solid black; border-radius: 50%;"
        src="{{ asset('uploads/' . $logoName->image) }}" alt="">
@else
    <img class="text-center mx-1"
        style="width: 50px; height: 50px; object-fit: cover; border: 2px solid black; border-radius: 50%;"
        src="{{ asset('images/campusdotcrew.jpg') }}" alt="Default Avatar">
@endif

@if (!empty($logoName->image))
    <a class="navbar-brand logo-name mx-1" href="#">{{ $logoName->name }}</a>
@else
    <a class="navbar-brand logo-name mx-1" href="#">JobPulse</a>
@endif
