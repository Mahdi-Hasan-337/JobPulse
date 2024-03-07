<!-- Modal -->
<div class="modal fade" id="logoNameModal" tabindex="-1" aria-labelledby="logoNameModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoNameModalLabel">Add Logo Name</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('addLogoName') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{--  --}}
                    <div class="input-box">
                        <input type="text" id="name" placeholder="Enter heading"
                            class="block mt-1 w-full form-control" name="name" value="{{ $logoName->name ?? '' }}">
                    </div>

                    @if (!empty($logoName->image))
                        <img class="my-4 d-flex justify-content-center"
                            style="width: 100px; height: 100px; object-fit: cover; border: 2px solid black;"
                            src="{{ asset('uploads/' . $logoName->image) }}" alt="">
                    @endif
                    {{--  --}}
                    <div class="mb-4">
                        <input type="file" class="block mt-1 w-full form-control" id="image" name="image"
                            required class="form-control">
                    </div>

                    <button class="button" name="register_btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
