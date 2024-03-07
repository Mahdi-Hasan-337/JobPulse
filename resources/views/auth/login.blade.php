{{-- Login --}}
<div class="modal fade" id="LoginModal" aria-hidden="true" aria-labelledby="LoginModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header justify-content-between">
                <h5 class="modal-title" id="LoginModalLabel">Login Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('passwordless-login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Enter your Email address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
