@extends('layout.mainlayout')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="d-md-flex d-block align-items-center justify-content-between mb-3">
            <h2 class="mb-1">Building Master</h2>
            <a href="{{ route('building.add') }}" class="btn btn-primary">
                <i class="ti ti-plus me-1"></i> Add Building Info
            </a>
        </div>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Building List</h4>
                <div class="w-25">
                    <input type="text" id="search_input" class="form-control" placeholder="Search Complex or Building...">
                </div>
            </div>
            <div class="card-body" id="building_data_container">
                @include('building.list_partial')
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function fetchBuildings(page = 1, search = '') {
        $.ajax({
            url: "{{ route('building.index') }}?page=" + page + "&search=" + search,
            type: "GET",
            success: function(data) {
                $('#building_data_container').html(data);
            }
        });
    }

    $(document).on('keyup', '#search_input', function() {
        fetchBuildings(1, $(this).val());
    });

    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        fetchBuildings(page, $('#search_input').val());
    });

    $(document).on('click', '.delete-btn', function() {
        if(confirm('Are you sure you want to delete this building record?')) {
            let id = $(this).data('id');
            $.ajax({
                url: "{{ url('building/delete') }}/" + id,
                type: "POST",
                data: { _token: "{{ csrf_token() }}" },
                success: function(res) {
                    fetchBuildings();
                }
            });
        }
    });
</script>
@endsection