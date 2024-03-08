@if ($allCompanies->isNotEmpty())
    <table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
                <th class="align-middle">Name</th>
                <th class="align-middle">Email</th>
                <th class="align-middle">User Type</th>
                <th class="align-middle">Role</th>
                <th class="align-middle">Update Verify Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allCompanies as $company)
                <tr>
                    <td class="align-middle">{{ $company->name }}</td>
                    <td class="align-middle">{{ $company->email }}</td>
                    <td class="align-middle">{{ $company->usertype }}</td>
                    <td class="align-middle">{{ $company->role }}</td>
                    <td class="align-middle">
                        <div class="d-flex align-center justify-center">
                            <form
                                action="{{ route('toggleVerifyStatus', ['encryptedCompanyId' => encrypt($company->id)]) }}"
                                method="POST">
                                @csrf
                                <input type="hidden" name="userId" value="{{ $company->id }}">
                                <button type="submit"
                                    class="btn btn-sm {{ $company->verify === 'verified' ? 'btn-success' : 'btn-warning' }}">
                                    {{ $company->verify === 'verified' ? 'Verified' : 'Pending' }}
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <h3 class="text-center">No pending company</h3>
@endif
