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

                    {{--  --}}
                    <div class="mb-4">
                        <input type="file" class="block mt-1 w-full form-control" id="image" name="image"
                            class="form-control">
                    </div>

                    <div class="input-box">
                        <input type="text" id="history" placeholder="Enter history"
                            class="block mt-1 w-full form-control" name="history"
                            value="{{ $logoName->history ?? '' }}">
                    </div>

                    <div class="input-box">
                        <input type="text" id="vision" placeholder="Enter vision"
                            class="block mt-1 w-full form-control" name="vision" value="{{ $logoName->vision ?? '' }}">
                    </div>

                    <div class="input-box">
                        <input type="text" id="aboutbanner" placeholder="Enter aboutbanner"
                            class="block mt-1 w-full form-control" name="aboutbanner"
                            value="{{ $logoName->aboutbanner ?? '' }}">
                    </div>

                    <div class="input-box">
                        <input type="text" id="jobbanner" placeholder="Enter jobbanner"
                            class="block mt-1 w-full form-control" name="jobbanner" value="{{ $logoName->jobbanner ?? '' }}">
                    </div>

                    <button class="button" name="register_btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
