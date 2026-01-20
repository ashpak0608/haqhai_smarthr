@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $id ? 'Edit' : 'Add' }} State</h4>
                    </div>
                    <div class="card-body">
                        <form id="state_form" action="javascript:void(0);">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <div class="mb-3">
                                <label class="form-label">State Name <span class="text-danger">*</span></label>
                                <input type="text" name="state_name" class="form-control" value="{{ $singleData->state_name ?? '' }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="0" {{ (isset($singleData) && $singleData->status == 0) ? 'selected' : '' }}>Active</option>
                                    <option value="1" {{ (isset($singleData) && $singleData->status == 1) ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('state.index') }}" class="btn btn-light me-2">Cancel</a>
                                <button type="submit" id="save_btn" class="btn btn-success">Save State</button>
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
    $('#state_form').submit(function(e) {
        e.preventDefault();
        let btn = $('#save_btn');
        btn.prop('disabled', true).text('Saving...');

        $.ajax({
            url: "{{ route('state.save') }}",
            type: "POST",
            data: $(this).serialize(),
            success: function(res) {
                if(res.status === 'success') {
                    window.location.href = "{{ route('state.index') }}";
                } else {
                    alert(res.message);
                    btn.prop('disabled', false).text('Save State');
                }
            },
            error: function() {
                alert("Error saving data.");
                btn.prop('disabled', false).text('Save State');
            }
        });
    });
</script>
@endsection