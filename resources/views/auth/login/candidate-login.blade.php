<button class="btn btn-primary" data-bs-target="#CandidateModal" data-bs-toggle="modal"
    data-bs-dismiss="modal">Candidate</button>
<div class="modal fade" id="CandidateModal" aria-hidden="true" aria-labelledby="CandidateModalLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CandidateModalLabel2">Candidate Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('passwordless-login') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#LoginModal" data-bs-toggle="modal"
                    data-bs-dismiss="modal">Back</button>
            </div>
        </div>
    </div>
</div>
