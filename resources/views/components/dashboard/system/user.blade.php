<table class="table table-dark table-striped table-hover">
    <thead>
        <tr>
            {{-- <th class="align-middle">ID</th> --}}
            <th class="align-middle">Name</th>
            <th class="align-middle">Email</th>
            <th class="align-middle">User Type</th>
            <th class="align-middle">Role</th>
            <th class="align-middle">Verify Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allusers as $user)
            @if ($user->usertype != 'system')
                <tr>
                    {{-- <td class="align-middle">{{ $user->id }}</td> --}}
                    <td class="align-middle">{{ $user->name }}</td>
                    <td class="align-middle">{{ $user->email }}</td>
                    <td class="align-middle">{{ $user->usertype }}</td>
                    <td class="align-middle">{{ $user->role }}</td>
                    <td class="align-middle">{{ $user->verify }}</td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>
