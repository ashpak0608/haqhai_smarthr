@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ $id ? 'Edit' : 'Add' }} Building Information</h4>
            </div>
            <div class="card-body">
                <form id="buildingForm">
                    @csrf
                    <input type="hidden" name="id" id="building_id" value="{{ $id }}">
                    
                    <!-- Basic Information Section -->
                    <div class="section-block mb-4">
                        <h5 class="section-title mb-3">Basic Information</h5>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Complex Name <span class="text-danger">*</span></label>
                                <input type="text" name="complex_name" class="form-control" 
                                       value="{{ $singleData->complex_name ?? '' }}" 
                                       placeholder="Enter complex name" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Building / Wing Name</label>
                                <input type="text" name="building_name_wing" class="form-control" 
                                       value="{{ $singleData->building_name_wing ?? '' }}" 
                                       placeholder="Enter building or wing name">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Building Type <span class="text-danger">*</span></label>
                                <select name="building_type" class="form-select" required>
                                    <option value="">Select Building Type</option>
                                    <option value="Residential" {{ (isset($singleData) && $singleData->building_type == 'Residential') ? 'selected' : '' }}>Residential</option>
                                    <option value="Commercial" {{ (isset($singleData) && $singleData->building_type == 'Commercial') ? 'selected' : '' }}>Commercial</option>
                                    <option value="Mixed" {{ (isset($singleData) && $singleData->building_type == 'Mixed') ? 'selected' : '' }}>Mixed Use</option>
                                </select>
                            </div>
                            
                            <div class="col-md-3 mb-3">
                                <label class="form-label">RERA Reg No</label>
                                <input type="text" name="rera_registration_no" class="form-control" 
                                       value="{{ $singleData->rera_registration_no ?? '' }}" 
                                       placeholder="Enter RERA registration number">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Survey No</label>
                                <input type="text" name="survey_no" class="form-control" 
                                       value="{{ $singleData->survey_no ?? '' }}" 
                                       placeholder="Enter survey number">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Plot No</label>
                                <input type="text" name="plot_no" class="form-control" 
                                       value="{{ $singleData->plot_no ?? '' }}" 
                                       placeholder="Enter plot number">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Year of Construction</label>
                                <input type="number" name="year_of_construction" class="form-control" 
                                       value="{{ $singleData->year_of_construction ?? '' }}" 
                                       placeholder="YYYY" min="1900" max="{{ date('Y') }}">
                            </div>
                            
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Floors <span class="text-danger">*</span></label>
                                <input type="number" name="number_of_floors" class="form-control" 
                                       value="{{ $singleData->number_of_floors ?? '' }}" 
                                       placeholder="Enter total floors" required min="1">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Total Units</label>
                                <input type="number" name="total_units" class="form-control" 
                                       value="{{ $singleData->total_units ?? '' }}" 
                                       placeholder="Enter total units" min="0">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Lift Installed?</label>
                                <select name="lift_installed" class="form-select">
                                    <option value="No" {{ (isset($singleData) && $singleData->lift_installed == 'No') ? 'selected' : '' }}>No</option>
                                    <option value="Yes" {{ (isset($singleData) && $singleData->lift_installed == 'Yes') ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>
                            <!-- <div class="col-md-3 mb-3">
                                <label class="form-label">Building Status</label>
                                <select name="building_status" class="form-select">
                                    <option value="Completed" {{ (isset($singleData) && $singleData->building_status == 'Completed') ? 'selected' : '' }}>Completed</option>
                                    <option value="Under Construction" {{ (isset($singleData) && $singleData->building_status == 'Under Construction') ? 'selected' : '' }}>Under Construction</option>
                                    <option value="Planned" {{ (isset($singleData) && $singleData->building_status == 'Planned') ? 'selected' : '' }}>Planned</option>
                                    <option value="Renovation" {{ (isset($singleData) && $singleData->building_status == 'Renovation') ? 'selected' : '' }}>Under Renovation</option>
                                </select>
                            </div> -->
                        </div>
                    </div>
                    
                    <!-- Address & Location Section -->
                    <div class="section-block">
                        <h5 class="section-title mb-3">Address & Location</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Address Line 1 <span class="text-danger">*</span></label>
                                <input type="text" name="address_line_1" class="form-control" 
                                       value="{{ $singleData->address->address_line_1 ?? '' }}" 
                                       placeholder="Enter street address" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Address Line 2</label>
                                <input type="text" name="address_line_2" class="form-control" 
                                       value="{{ $singleData->address->address_line_2 ?? '' }}" 
                                       placeholder="Apartment, suite, unit, etc.">
                            </div>
                            
                            <div class="col-md-3 mb-3">
                                <label class="form-label">State <span class="text-danger">*</span></label>
                                <select name="state_id" id="state_id" class="form-select" required>
                                    <option value="">Select State</option>
                                    @foreach($states as $st)
                                        <option value="{{ $st->id }}" {{ (isset($singleData->address) && $singleData->address->state_id == $st->id) ? 'selected' : '' }}>
                                            {{ $st->state_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">District</label>
                                <select name="district_id" id="district_id" class="form-select">
                                    <option value="">Select District</option>
                                    @isset($districts) 
                                        @foreach($districts as $d)
                                            <option value="{{$d->id}}" {{$singleData->address->district_id == $d->id ? 'selected':''}}>
                                                {{$d->district_name}}
                                            </option>
                                        @endforeach 
                                    @endisset
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">City</label>
                                <select name="city_id" id="city_id" class="form-select">
                                    <option value="">Select City</option>
                                    @isset($cities) 
                                        @foreach($cities as $c)
                                            <option value="{{$c->id}}" {{$singleData->address->city_id == $c->id ? 'selected':''}}>
                                                {{$c->city_name}}
                                            </option>
                                        @endforeach 
                                    @endisset
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Area</label>
                                <select name="area_id" id="area_id" class="form-select">
                                    <option value="">Select Area</option>
                                    @isset($areas) 
                                        @foreach($areas as $a)
                                            <option value="{{$a->id}}" {{$singleData->address->area_id == $a->id ? 'selected':''}}>
                                                {{$a->area_name}}
                                            </option>
                                        @endforeach 
                                    @endisset
                                </select>
                            </div>
                            
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Location</label>
                                <select name="location_id" id="location_id" class="form-select">
                                    <option value="">Select Location</option>
                                    @isset($locations) 
                                        @foreach($locations as $l)
                                            <option value="{{$l->id}}" {{$singleData->address->location_id == $l->id ? 'selected':''}}>
                                                {{$l->location_name}}
                                            </option>
                                        @endforeach 
                                    @endisset
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Landmark</label>
                                <select name="landmark_id" id="landmark_id" class="form-select">
                                    <option value="">Select Landmark</option>
                                    @isset($landmarks) 
                                        @foreach($landmarks as $lm)
                                            <option value="{{$lm->id}}" {{$singleData->address->landmark_id == $lm->id ? 'selected':''}}>
                                                {{$lm->landmark_name}}
                                            </option>
                                        @endforeach 
                                    @endisset
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Ward No</label>
                                <input type="text" name="ward_no" class="form-control" 
                                       value="{{ $singleData->address->ward_no ?? '' }}" 
                                       placeholder="Enter ward number">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Pincode <span class="text-danger">*</span></label>
                                <input type="text" name="pincode" class="form-control" 
                                       value="{{ $singleData->address->pincode ?? '' }}" 
                                       placeholder="Enter pincode" required>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Municipal Corporation</label>
                                <input type="text" name="municipal_corporation" class="form-control" 
                                       value="{{ $singleData->address->municipal_corporation ?? '' }}" 
                                       placeholder="Enter municipal corporation">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Latitude</label>
                                <input type="text" name="latitude" class="form-control" 
                                       value="{{ $singleData->address->latitude ?? '' }}" 
                                       placeholder="e.g., 19.0760">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Longitude</label>
                                <input type="text" name="longitude" class="form-control" 
                                       value="{{ $singleData->address->longitude ?? '' }}" 
                                       placeholder="e.g., 72.8777">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Form Actions -->
                    <div class="form-actions mt-4 pt-3 border-top">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('building.index') }}" class="btn btn-light">
                                    <i class="ti ti-arrow-left me-1"></i> Back to List
                                </a>
                            </div>
                            <div class="col-md-6 text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti ti-check me-1"></i> Save Building
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function() {
    // Function to populate dropdowns
    function populateDropdown(selector, url, id, nameKey, placeholder) {
        $(selector).empty().append(`<option value="">${placeholder}</option>`);
        if(id) {
            $.get(url + '/' + id, function(data) {
                $.each(data, function(k, v) {
                    $(selector).append(`<option value="${v.id}">${v[nameKey]}</option>`);
                });
            }).fail(function() {
                console.error('Failed to load data for ' + selector);
            });
        }
    }

    // Chain dropdown population
    $('#state_id').change(function() {
        let stateId = $(this).val();
        populateDropdown('#district_id', '/get-districts', stateId, 'district_name', 'Select District');
        $('#city_id, #area_id, #location_id, #landmark_id').empty().append('<option value="">Select...</option>');
    });

    $('#district_id').change(function() {
        populateDropdown('#city_id', '/get-cities', $(this).val(), 'city_name', 'Select City');
        $('#area_id, #location_id, #landmark_id').empty().append('<option value="">Select...</option>');
    });

    $('#city_id').change(function() {
        populateDropdown('#area_id', '/get-areas', $(this).val(), 'area_name', 'Select Area');
        $('#location_id, #landmark_id').empty().append('<option value="">Select...</option>');
    });

    $('#area_id').change(function() {
        populateDropdown('#location_id', '/get-locations', $(this).val(), 'location_name', 'Select Location');
        $('#landmark_id').empty().append('<option value="">Select...</option>');
    });

    $('#location_id').change(function() {
        populateDropdown('#landmark_id', '/get-landmarks', $(this).val(), 'landmark_name', 'Select Landmark');
    });

    // Form submission
    $('#buildingForm').on('submit', function(e) {
        e.preventDefault();
        
        // Basic validation
        let requiredFields = $(this).find('[required]');
        let valid = true;
        requiredFields.each(function() {
            if(!$(this).val().trim()) {
                $(this).addClass('is-invalid');
                valid = false;
            } else {
                $(this).removeClass('is-invalid');
            }
        });
        
        if(!valid) {
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: 'Please fill all required fields marked with *',
                confirmButtonColor: '#3085d6',
            });
            return;
        }

        // Show loading state
        const submitBtn = $(this).find('button[type="submit"]');
        const originalText = submitBtn.html();
        submitBtn.prop('disabled', true).html('<i class="ti ti-loader me-1"></i> Saving...');

        $.ajax({
            url: "{{ route('building.save') }}",
            type: "POST",
            data: $(this).serialize(),
            success: function(res) {
                submitBtn.prop('disabled', false).html(originalText);
                
                if(res.status === 'success') {
                    $('#building_id').val(res.id);
                    
                    // Show success notification
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Building information saved successfully!',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                        background: '#f8f9fa',
                        iconColor: '#28a745',
                        didClose: () => {
                            // Redirect to list page
                            window.location.href = "{{ route('building.index') }}";
                        }
                    });
                    
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: res.message || 'Failed to save building information',
                        confirmButtonColor: '#3085d6',
                    });
                }
            },
            error: function(xhr) {
                submitBtn.prop('disabled', false).html(originalText);
                let errorMsg = 'An error occurred while saving the building information';
                if(xhr.responseJSON && xhr.responseJSON.message) {
                    errorMsg = xhr.responseJSON.message;
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: errorMsg,
                    confirmButtonColor: '#3085d6',
                });
            }
        });
    });

    // Remove validation classes on input
    $('input, select').on('input change', function() {
        if($(this).hasClass('is-invalid')) {
            $(this).removeClass('is-invalid');
        }
    });
});
</script>

<style>
.section-block {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid #e9ecef;
}

.section-title {
    color: #2c3e50;
    font-weight: 600;
    border-bottom: 2px solid #3498db;
    padding-bottom: 8px;
    margin-bottom: 20px;
}

.form-label {
    font-weight: 500;
    color: #495057;
    margin-bottom: 8px;
}

.form-control, .form-select {
    border: 1px solid #ced4da;
    border-radius: 6px;
    padding: 10px 15px;
    transition: all 0.3s;
}

.form-control:focus, .form-select:focus {
    border-color: #3498db;
    box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
}

.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    padding: 10px 25px;
    border-radius: 6px;
    font-weight: 500;
    transition: all 0.3s;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.btn-primary:disabled {
    opacity: 0.6;
    cursor: not-allowed;
    transform: none !important;
}

.btn-light {
    background: #f8f9fa;
    border: 1px solid #dee2e6;
    padding: 10px 25px;
    border-radius: 6px;
    font-weight: 500;
    transition: all 0.3s;
}

.btn-light:hover {
    background: #e9ecef;
    border-color: #ced4da;
}

.form-actions {
    background: #fff;
    padding-top: 20px;
}

.is-invalid {
    border-color: #dc3545 !important;
}

.is-invalid:focus {
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25) !important;
}

.swal2-popup {
    border-radius: 10px !important;
}

.swal2-success {
    border-color: #28a745 !important;
}

.swal2-title {
    color: #28a745 !important;
    font-weight: 600 !important;
}

.text-danger {
    color: #dc3545 !important;
}
</style>
@endsection