@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="d-md-flex d-block align-items-center justify-content-between mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">States Master</h2>
            </div>
            <div class="mb-2">
                <a href="{{ route('state.add') }}" class="btn btn-primary d-flex align-items-center">
                    <i class="ti ti-plus me-1"></i>Add New State
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">State List</h4>
                <input type="text" id="search_input" class="form-control w-25" placeholder="Search state name...">
            </div>
            <div class="card-body" id="state_data_container">
                @include('state.list_partial')
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Central function to handle AJAX requests
    function fetchStates(page = 1, search = '') {
        $.ajax({
            url: "{{ route('state.index') }}?page=" + page + "&search=" + search,
            type: "GET",
            beforeSend: function() {
                $('#state_data_container').css('opacity', '0.5');
            },
            success: function(data) {
                $('#state_data_container').html(data);
                $('#state_data_container').css('opacity', '1');
            }
        });
    }

    // Handle Search Input
    $(document).on('keyup', '#search_input', function() {
        fetchStates(1, $(this).val());
    });

    // Handle Pagination Clicks
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        let search = $('#search_input').val();
        fetchStates(page, search);
    });

    // Handle Delete
    $(document).on('click', '.delete-btn', function() {
        if(confirm('Are you sure you want to move this state to trash?')) {
            let id = $(this).data('id');
            $.ajax({
                url: "{{ url('state/delete') }}/" + id,
                type: "POST",
                data: { _token: "{{ csrf_token() }}" },
                success: function(res) {
                    fetchStates($('#search_input').val());
                }
            });
        }
    });
</script>
@endsection