<?php $page = 'state-list'; ?>
@extends('layout.mainlayout')

@section('content')
<div class="page-wrapper">
    <div class="content">

        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">States</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ url('index') }}"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Election</li>
                        <li class="breadcrumb-item active" aria-current="page">State List</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                <div class="mb-2">
                    <a href="{{ route('state.add') }}" class="btn btn-primary d-flex align-items-center">
                        <i class="ti ti-circle-plus me-2"></i>Add State
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap">
                <h5>State List</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-nowrap mb-0 datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>State Name</th>
                                <th>Created By</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($lists as $state)
                                <tr>
                                    <td>{{ $state->id }}</td>
                                    <td>{{ $state->state_name }}</td>
                                    <td>{{ $state->created_by }}</td>
                                    <td>{{ $state->created_at }}</td>
                                    <td>
                                        <span class="badge {{ $state->status == 0 ? 'badge-success' : 'badge-danger' }} d-inline-flex align-items-center">
                                            <i class="ti ti-circle-filled fs-5 me-1"></i>
                                            {{ $state->status == 0 ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="{{ route('state.add', $state->id) }}">
                                                    <i class="ti ti-edit me-2"></i>Edit
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0);" onclick="deleteState({{ $state->id }})">
                                                    <i class="ti ti-trash me-2"></i>Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center p-4">No Records Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
<script>
    function deleteState(id) {
        if(confirm('Are you sure you want to delete this state?')) {
            $.ajax({
                url: "{{ url('state/delete') }}/" + id,
                type: 'POST',
                data: { _token: "{{ csrf_token() }}" },
                success: function(response) {
                    let res = JSON.parse(response);
                    if(res.status === 'success') {
                        location.reload();
                    } else {
                        alert(res.message);
                    }
                }
            });
        }
    }
</script>
@endsection