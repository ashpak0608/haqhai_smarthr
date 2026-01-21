@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="buildingTabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#basic">Basic Info</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#address">Address & Location</a></li>
                </ul>
            </div>
            <div class="card-body">
                <form id="buildingForm">
                    @csrf
                    <input type="hidden" name="id" id="building_id" value="{{ $id }}">
                    <div class="tab-content mt-3">
                        <div class="tab-pane fade show active" id="basic">
                            <div class="row">
                                <div class="col-md-4 mb-3"><label>Complex Name</label><input type="text" name="complex_name" class="form-control" value="{{ $singleData->complex_name ?? '' }}"></div>
                                <div class="col-md-4 mb-3"><label>Building / Wing Name</label><input type="text" name="building_name_wing" class="form-control" value="{{ $singleData->building_name_wing ?? '' }}"></div>
                                <div class="col-md-4 mb-3"><label>Building Type</label>
                                    <select name="building_type" class="form-select">
                                        <option value="Residential" {{ (isset($singleData) && $singleData->building_type == 'Residential') ? 'selected' : '' }}>Residential</option>
                                        <option value="Commercial" {{ (isset($singleData) && $singleData->building_type == 'Commercial') ? 'selected' : '' }}>Commercial</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3"><label>RERA Reg No</label><input type="text" name="rera_registration_no" class="form-control" value="{{ $singleData->rera_registration_no ?? '' }}"></div>
                                <div class="col-md-3 mb-3"><label>Survey No</label><input type="text" name="survey_no" class="form-control" value="{{ $singleData->survey_no ?? '' }}"></div>
                                <div class="col-md-3 mb-3"><label>Plot No</label><input type="text" name="plot_no" class="form-control" value="{{ $singleData->plot_no ?? '' }}"></div>
                                <div class="col-md-3 mb-3"><label>Year of Construction</label><input type="number" name="year_of_construction" class="form-control" value="{{ $singleData->year_of_construction ?? '' }}"></div>
                                <div class="col-md-3 mb-3"><label>Floors</label><input type="number" name="number_of_floors" class="form-control" value="{{ $singleData->number_of_floors ?? '' }}"></div>
                                <div class="col-md-3 mb-3"><label>Total Units</label><input type="number" name="total_units" class="form-control" value="{{ $singleData->total_units ?? '' }}"></div>
                                <div class="col-md-3 mb-3"><label>Lift Installed?</label>
                                    <select name="lift_installed" class="form-select">
                                        <option value="No" {{ (isset($singleData) && $singleData->lift_installed == 'No') ? 'selected' : '' }}>No</option>
                                        <option value="Yes" {{ (isset($singleData) && $singleData->lift_installed == 'Yes') ? 'selected' : '' }}>Yes</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3"><label>Building Status</label>
                                    <select name="building_status" class="form-select">
                                        <option value="Completed" {{ (isset($singleData) && $singleData->building_status == 'Completed') ? 'selected' : '' }}>Completed</option>
                                        <option value="Under Construction" {{ (isset($singleData) && $singleData->building_status == 'Under Construction') ? 'selected' : '' }}>Under Construction</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-end mt-3"><button type="submit" class="btn btn-primary">Save & Next</button></div>
                        </div>

                        <div class="tab-pane fade" id="address">
                            <div class="row">
                                <div class="col-md-6 mb-3"><label>Address Line 1</label><input type="text" name="address_line_1" class="form-control" value="{{ $singleData->address->address_line_1 ?? '' }}"></div>
                                <div class="col-md-6 mb-3"><label>Address Line 2</label><input type="text" name="address_line_2" class="form-control" value="{{ $singleData->address->address_line_2 ?? '' }}"></div>
                                <div class="col-md-3 mb-3"><label>State</label>
                                    <select name="state_id" id="state_id" class="form-select">
                                        <option value="">Select State</option>
                                        @foreach($states as $st)<option value="{{ $st->id }}" {{ (isset($singleData->address) && $singleData->address->state_id == $st->id) ? 'selected' : '' }}>{{ $st->state_name }}</option>@endforeach
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3"><label>District</label><select name="district_id" id="district_id" class="form-select"><option value="">Select District</option>@isset($districts) @foreach($districts as $d)<option value="{{$d->id}}" {{$singleData->address->district_id == $d->id ? 'selected':''}}>{{$d->district_name}}</option>@endforeach @endisset</select></div>
                                <div class="col-md-3 mb-3"><label>City</label><select name="city_id" id="city_id" class="form-select"><option value="">Select City</option>@isset($cities) @foreach($cities as $c)<option value="{{$c->id}}" {{$singleData->address->city_id == $c->id ? 'selected':''}}>{{$c->city_name}}</option>@endforeach @endisset</select></div>
                                <div class="col-md-3 mb-3"><label>Area</label><select name="area_id" id="area_id" class="form-select"><option value="">Select Area</option>@isset($areas) @foreach($areas as $a)<option value="{{$a->id}}" {{$singleData->address->area_id == $a->id ? 'selected':''}}>{{$a->area_name}}</option>@endforeach @endisset</select></div>
                                <div class="col-md-3 mb-3"><label>Location</label><select name="location_id" id="location_id" class="form-select"><option value="">Select Location</option>@isset($locations) @foreach($locations as $l)<option value="{{$l->id}}" {{$singleData->address->location_id == $l->id ? 'selected':''}}>{{$l->location_name}}</option>@endforeach @endisset</select></div>
                                <div class="col-md-3 mb-3"><label>Landmark</label><select name="landmark_id" id="landmark_id" class="form-select"><option value="">Select Landmark</option>@isset($landmarks) @foreach($landmarks as $lm)<option value="{{$lm->id}}" {{$singleData->address->landmark_id == $lm->id ? 'selected':''}}>{{$lm->landmark_name}}</option>@endforeach @endisset</select></div>
                                <div class="col-md-3 mb-3"><label>Ward No</label><input type="text" name="ward_no" class="form-control" value="{{ $singleData->address->ward_no ?? '' }}"></div>
                                <div class="col-md-3 mb-3"><label>Pincode</label><input type="text" name="pincode" class="form-control" value="{{ $singleData->address->pincode ?? '' }}"></div>
                            </div>
                            <div class="text-end mt-3"><button type="submit" class="btn btn-success">Save & Finish</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
$(document).ready(function() {
    function populate(selector, url, id, nameKey, placeholder) {
        $(selector).empty().append(`<option value="">${placeholder}</option>`);
        if(id) $.get(url + '/' + id, function(data) { $.each(data, function(k, v) { $(selector).append(`<option value="${v.id}">${v[nameKey]}</option>`); }); });
    }
    $('#state_id').change(function() { populate('#district_id', '/get-districts', $(this).val(), 'district_name', 'Select District'); });
    $('#district_id').change(function() { populate('#city_id', '/get-cities', $(this).val(), 'city_name', 'Select City'); });
    $('#city_id').change(function() { populate('#area_id', '/get-areas', $(this).val(), 'area_name', 'Select Area'); });
    $('#area_id').change(function() { populate('#location_id', '/get-locations', $(this).val(), 'location_name', 'Select Location'); });
    $('#location_id').change(function() { populate('#landmark_id', '/get-landmarks', $(this).val(), 'landmark_name', 'Select Landmark'); });

    $('#buildingForm').on('submit', function(e) {
        e.preventDefault();
        var currentTab = $('.nav-link.active').attr('href');
        $.ajax({
            url: "{{ route('building.save') }}",
            type: "POST",
            data: $(this).serialize(),
            success: function(res) {
                if(res.status === 'success') {
                    $('#building_id').val(res.id);
                    if(currentTab === '#basic') { new bootstrap.Tab(document.querySelector('a[href="#address"]')).show(); }
                    else { window.location.href = "{{ route('building.index') }}"; }
                }
            }
        });
    });
});
</script>
@endsection