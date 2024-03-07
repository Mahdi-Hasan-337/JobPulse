<section class="carousel-section" style="margin: 0.0rem 0rem; border: 0.5rem solid rgb(234, 234, 234)">
    <div id="myCarousel" class="carousel slide text-center carousel-dark" data-bs-ride="carousel">

        <div class="carousel-inner">
            @foreach ($banners as $key => $banner)
                <div class="carousel-item c-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('uploads/' . $banner->image) }}" class="c-img" alt="Carousel Image 2">
                </div>
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev" style="color:black">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</section>

<style>
    .carousel-section {
        max-height: 35rem;
        overflow: hidden;
    }

    .c-item {
        height: 35rem;
        width: 100%;
    }

    .c-img {
        height: 100%;
        width: 100%;
        object-fit: contain;
        filter: brightness(0.7);
    }

    span.carousel-control-prev-icon,
    span.carousel-control-next-icon {
        color: black !important;
    }

    /* .carousel-control-prev,
    .carousel-control-next {
        background-color: rgba(245, 244, 244, 0.97);
    } */
</style>
