<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#jobModal">
    Add a Job
</button>

<div class="modal fade" id="jobModal" tabindex="-1" aria-labelledby="jobModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jobModalLabel">{{ __('Create a New Job') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('jobs.store') }}">
                    @csrf

                    <div class="form-group">
                        <label for="title">{{ __('Title') }}</label>
                        <input id="title" type="text" class="form-control" name="title" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="description">{{ __('Description') }}</label>
                        <textarea id="description" class="form-control" name="description" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="benefits">{{ __('Benefits') }}</label>
                        <input id="benefits" type="text" class="form-control" name="benefits" required>
                    </div>

                    <div class="form-group">
                        <label for="location">{{ __('Location') }}</label>
                        <input id="location" type="text" class="form-control" name="location" required>
                    </div>

                    <div class="form-group">
                        <label for="deadline">{{ __('Deadline') }}</label>
                        <input id="deadline" type="date" class="form-control" name="deadline"
                            min="{{ date('Y-m-d') }}" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
