<?php $page = 'state-add'; ?>
@extends('layout.mainlayout')

@section('content')
<div class="page-wrapper">
    <div class="content">

        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">{{ isset($id) ? 'Edit State' : 'Add State' }}</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/index') }}"><i class="ti ti-smart-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('state.index') }}">State List</a></li>
                        <li class="breadcrumb-item active">{{ isset($id) ? 'Edit' : 'Add' }}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form id="state_form" onsubmit="return false;">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id ?? '' }}">

                            <div class="mb-3">
                                <label class="form-label">State Name <span class="text-danger">*</span></label>
                                <input type="text" name="state_name" class="form-control" 
                                       value="{{ $singleData['state_name'] ?? '' }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="0" {{ (isset($singleData['status']) && $singleData['status'] == 0) ? 'selected' : '' }}>Active</option>
                                    <option value="1" {{ (isset($singleData['status']) && $singleData['status'] == 1) ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-end mt-4">
                                <a href="{{ route('state.index') }}" class="btn btn-light me-2">Cancel</a>
                                <button type="submit" id="save_btn" class="btn btn-primary">Save State</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function () {
    $('#state_form').on('submit', function (e) {
        e.preventDefault(); 
        
        let btn = $('#save_btn');
        btn.prop('disabled', true).text('Saving...');

        $.ajax({
            // Target the POST route explicitly
            url: "{{ route('state.save') }}", 
            method: "POST",
            data: $(this).serialize(),
            success: function (response) {
                let res = (typeof response === 'string') ? JSON.parse(response) : response;
                
                if (res.status === 'success') {
                    window.location.href = "{{ route('state.index') }}";
                } else {
                    alert(res.message);
                    btn.prop('disabled', false).text('Save State');
                }
            },
            error: function (xhr) {
                // This captures server-side errors
                console.error("Server Error Response:", xhr.responseText);
                alert("Critical Error: " + xhr.status + ". See console for details.");
                btn.prop('disabled', false).text('Save State');
            }
        });
    });
});
</script>
@endsection