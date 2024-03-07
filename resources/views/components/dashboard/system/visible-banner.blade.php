<table class="table table-dark table-striped table-hover">
    <thead>
        <tr>
            {{-- <th class="align-middle">ID</th> --}}
            <th class="align-middle">Heading</th>
            <th class="align-middle">Description</th>
            <th class="align-middle">Image</th>
            <th class="align-middle">Status</th>
            <th class="align-middle">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($visibleBanners as $visibleBanner)
            <tr>
                {{-- <td class="align-middle">{{ $visibleBanner->id }}</td> --}}
                <td class="align-middle">{{ $visibleBanner->heading }}</td>
                <td class="align-middle">{{ $visibleBanner->description }}</td>
                <td class="align-middle">
                    <img src="{{ asset('uploads/' . $visibleBanner->image) }}" style="width: 100px; height:100px; "
                        alt="...">
                </td>
                <td class="align-middle">
                    <form style="margin:0; padding:0; decoration:none; background:none" method="post"
                        action="{{ route('update.Banner.status', ['encryptedUserId' => encrypt($visibleBanner->id)]) }}">
                        @csrf
                        <button type="submit" style=""
                            class="btn btn-{{ $visibleBanner->status == 1 ? 'danger' : 'primary' }}">
                            {{ $visibleBanner->status == 1 ? 'Invisible' : 'Visible' }}
                        </button>
                    </form>
                </td>
                <td class="align-middle">
                    <button type="button" class="btn btn-primary open-modal" data-bs-toggle="modal"
                        data-bs-target="#update-banner-{{ $visibleBanner->id }}"
                        data-member-id="{{ $visibleBanner->id }}">
                        Update
                    </button>

                    <div class="modal fade" id="update-banner-{{ $visibleBanner->id }}" aria-hidden="true"
                        aria-labelledby="update-banner-{{ $visibleBanner->id }}" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="bannerModalLabel">Update Banner</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('edit-banner', ['id' => $visibleBanner->id]) }}"
                                        method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="input-box">
                                            <input type="text" id="heading" placeholder="Enter heading"
                                                class="block mt-1 w-full form-control" name="heading"
                                                value="{{ $visibleBanner->heading }}">
                                        </div>

                                        <div class="input-box">
                                            <textarea id="description" class="summernote block mt-1 w-full form-control" name="description">{{ $visibleBanner->description }}</textarea>
                                        </div>

                                        <div class="input-box">
                                            <input type="text" id="link" placeholder="Enter link"
                                                class="block mt-1 w-full form-control" name="link"
                                                value="{{ $visibleBanner->link }}">
                                        </div>

                                        <div class="input-box">
                                            <input type="text" id="link_name" placeholder="Enter link_name"
                                                class="block mt-1 w-full form-control" name="link_name"
                                                value="{{ $visibleBanner->link_name }}">
                                        </div>

                                        <div class="mb-4">
                                            <img src="{{ asset('uploads/' . $visibleBanner->image) }}" alt=""
                                                style="width: 30rem; height: 30rem">
                                            <input type="file" class="block mt-1 w-full form-control" id="image"
                                                name="image" class="form-control">
                                        </div>

                                        <div class="input-box">
                                            <input type="checkbox" id="status" name="status"
                                                {{ $visibleBanner->status == '1' ? 'checked' : '' }}>
                                            <label for="status">Visible</label>
                                        </div>

                                        <button class="button" name="register_btn">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
