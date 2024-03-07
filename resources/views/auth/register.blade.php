{{-- Register --}}
<div class="modal fade" id="RegisterModal" tabindex="-1" aria-labelledby="RegisterModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="RegisterModalLabel">Sign Up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-body d-flex justify-content-between">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- User type --}}
                        <div class="mb-3">
                            <label for="usertype" class="form-label">Select Role</label>
                            <select name="usertype" class="form-control block mt-1 w-full">
                                <option value="company">Company</option>
                                <option value="candidate">Candidate</option>
                            </select>
                        </div>
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>

                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
