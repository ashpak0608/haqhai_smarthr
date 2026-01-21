<div class="table-responsive">
    <table class="table table-striped table-nowrap mb-0">
        <thead>
            <tr>
                <th>Complex Name</th>
                <th>Building / Wing</th>
                <th>Pincode</th>
                <th>Status</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($lists as $row)
            <tr>
                <td><strong>{{ $row->complex_name }}</strong></td>
                <td>{{ $row->building_name_wing }}</td>
                <td>{{ $row->address->pincode ?? 'N/A' }}</td>
                <td>
                    <span class="badge {{ $row->status == 0 ? 'bg-success' : 'bg-danger' }}">
                        {{ $row->status == 0 ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td class="text-end">
                    <div class="dropdown dropdown-action">
                        <a href="{{ route('building.add', $row->id) }}" class="btn btn-sm btn-primary me-1">
                            <i class="ti ti-edit"></i> Edit
                        </a>
                        <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $row->id }}">
                            <i class="ti ti-trash"></i> Delete
                        </button>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No building records found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $lists->links() }}
</div>