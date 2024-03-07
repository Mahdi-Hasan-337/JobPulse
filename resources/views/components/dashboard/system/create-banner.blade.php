<!-- Modal -->
<div class="modal fade" id="bannerModal" tabindex="-1" aria-labelledby="bannerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bannerModalLabel">Create Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('addBanner') }}" enctype="multipart/form-data">
                    @csrf

                    {{--  --}}
                    <div class="input-box">
                        <input type="text" id="heading" placeholder="Enter heading"
                            class="block mt-1 w-full form-control" name="heading" autofocus autocomplete="heading">
                    </div>

                    {{--  --}}
                    <div class="input-box">
                        <textarea id="description" placeholder="Enter description" class="summernote block mt-1 w-full form-control" autofocus
                            autocomplete="description"></textarea>
                    </div>

                    {{--  --}}
                    <div class="input-box">
                        <input type="text" id="link" placeholder="Enter link"
                            class="block mt-1 w-full form-control" name="link" autofocus autocomplete="link">
                    </div>

                    {{--  --}}
                    <div class="input-box">
                        <input type="text" id="link_name" placeholder="Enter link_name"
                            class="block mt-1 w-full form-control" name="link_name" autofocus autocomplete="link_name">
                    </div>

                    {{--  --}}
                    <div class="mb-4">
                        <input type="file" class="block mt-1 w-full form-control" id="image" name="image"
                            required class="form-control">
                    </div>

                    {{--  --}}
                    <div class="">
                        <input type="checkbox" id="status" name="status">
                        <label for="status">Visible</label>
                    </div>

                    <button class="button" name="register_btn">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
