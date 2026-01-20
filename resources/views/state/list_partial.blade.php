<div class="table-responsive">
    <table class="table table-striped table-nowrap mb-0">
        <thead>
            <tr>
                <th>ID</th>
                <th>State Name</th>
                <th>Status</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($lists as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->state_name }}</td>
                <td>
                    <span class="badge {{ $row->status == 0 ? 'bg-success' : 'bg-danger' }}">
                        {{ $row->status == 0 ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td class="text-end">
                    <a href="{{ route('state.view', $row->id) }}" class="btn btn-sm btn-info me-1">View</a>
                    <a href="{{ route('state.add', $row->id) }}" class="btn btn-sm btn-primary me-1">Edit</a>
                    <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $row->id }}">Delete</button>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">No Records Found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-between align-items-center mt-3">
    <div>
        Showing {{ $lists->firstItem() }} to {{ $lists->lastItem() }} of {{ $lists->total() }} entries
    </div>
    <div class="pagination-wrapper">
        {{ $lists->appends(request()->input())->links('pagination::bootstrap-5') }}
    </div>
</div>