<button class="btn btn-primary" data-bs-target="#CandidateRegisterModal" data-bs-toggle="modal"
    data-bs-dismiss="modal">Candidate</button>
<div class="modal fade" id="CandidateRegisterModal" aria-hidden="true" aria-labelledby="CandidateRegisterModalLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CandidateRegisterModalLabel2">Candidate Register
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    {{-- User type --}}
                    <div class="mb-3">
                        <label for="usertype" class="form-label">Select Role</label>
                        <select name="usertype" class="form-control block mt-1 w-full">
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

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm
                            Password</label>
                        <input type="password" id="password_confirmation" class="form-control"
                            name="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#RegisterModal" data-bs-toggle="modal"
                    data-bs-dismiss="modal">Back</button>
            </div>
        </div>
    </div>
</div>
