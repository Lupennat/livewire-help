<div>

    Select status:
    <select class="form-select mb-5" wire:model="status">
        <option value="all" selected>All</option>
        <option value="1">Actives only</option>
    </select>

    <table
    data-toggle="table"
    data-height="360"
    data-fixed-columns="true"
    data-fixed-number="1"
    data-fixed-right-number="1"
    class="table table-hover table-bordered align-middle text-center text-nowrap"
    >
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Verified Timestamp</th>
                <th scope="col">Password</th>
                <th scope="col">Remember Token</th>
                <th scope="col">Created</th>
                <th scope="col">Active</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->email_verified_at }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->remember_token }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->is_active }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        {{ $users->links() }}
    </div>
</div>