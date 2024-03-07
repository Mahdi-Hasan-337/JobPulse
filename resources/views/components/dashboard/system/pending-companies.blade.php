@if ($pendingCompanies->isNotEmpty())
    <table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
                {{-- <th class="align-middle">ID</th> --}}
                <th class="align-middle">Name</th>
                <th class="align-middle">Email</th>
                <th class="align-middle">User Type</th>
                <th class="align-middle">Role</th>
                <th class="align-middle">Update Verify Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendingCompanies as $pendingCompany)
                <tr>
                    {{-- <td class="align-middle">{{ $pendingCompany->id }}</td> --}}
                    <td class="align-middle">{{ $pendingCompany->name }}</td>
                    <td class="align-middle">{{ $pendingCompany->email }}</td>
                    <td class="align-middle">{{ $pendingCompany->usertype }}</td>
                    <td class="align-middle">{{ $pendingCompany->role }}</td>
                    <td class="align-middle">
                        <div class="d-flex align-center justify-center">
                            {{ $pendingCompany->verify }}
                            <form style="margin:0; padding:0; decoration:none; background:none" method="post"
                                action="{{ route('update.Verify.Status', ['encryptedCompanyId' => encrypt($pendingCompany->id)]) }}">
                                @csrf
                                <button type="submit" style="" class="btn btn-primary mx-3">
                                    Approve
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
