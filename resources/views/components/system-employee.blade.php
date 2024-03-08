<table class="table table-dark table-striped table-hover">
    <thead>
        <tr>
            {{-- <th class="align-middle">ID</th> --}}
            <th class="align-middle">Name</th>
            <th class="align-middle">Email</th>
            <th class="align-middle">User Type</th>
            <th class="align-middle">Role</th>
            <th class="align-middle">Verify Status</th>
            <th class="align-middle">Actions</th> <!-- Added Actions column for updating role -->
        </tr>
    </thead>
    <tbody>
        @foreach ($allSystemEmployees as $employee)
            @if ($employee->role != 'superadmin')
                <tr>
                    {{-- <td class="align-middle">{{ $employee->id }}</td> --}}
                    <td class="align-middle">{{ $employee->name }}</td>
                    <td class="align-middle">{{ $employee->email }}</td>
                    <td class="align-middle">{{ $employee->usertype }}</td>
                    <td class="align-middle">{{ $employee->role }}</td>
                    <td class="align-middle">{{ $employee->verify }}</td>
                    <td class="align-middle">
                        <form method="POST" action="{{ route('updateRole', $employee->id) }}">
                            @csrf
                            @method('PUT')
                            <!-- Dropdown menu for selecting the new role -->
                            <select name="role" class="form-control" onchange="this.form.submit()">
                                <option value="admin" {{ $employee->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="manager" {{ $employee->role == 'manager' ? 'selected' : '' }}>Manager
                                </option>
                                <option value="verifier" {{ $employee->role == 'verifier' ? 'selected' : '' }}>Verifier
                                </option>
                                <option value="member" {{ $employee->role == 'member' ? 'selected' : '' }}>Member
                                </option>
                            </select>
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>
