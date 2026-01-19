<?php $page = 'state-view'; ?>
@extends('layout.mainlayout')

@section('content')
    <div class="page-wrapper">
        <div class="content">

            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">State Details</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('index') }}"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('state.index') }}">State List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View State</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                    <div class="mb-2">
                        <a href="{{ route('state.add', $views->id) }}" class="btn btn-primary d-flex align-items-center">
                            <i class="ti ti-edit me-2"></i>Edit State
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h5>General Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label text-muted">State Name</label>
                                    <p class="fw-medium fs-16">{{ $views->state_name ?? 'N/A' }}</p>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label text-muted">Status</label>
                                    <div>
                                        <span class="badge {{ $views->status == 0 ? 'badge-success' : 'badge-danger' }} d-inline-flex align-items-center">
                                            <i class="ti ti-circle-filled fs-5 me-1"></i>
                                            {{ $views->status == 0 ? 'Active' : 'Inactive' }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row mt-3">
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label text-muted">Created By</label>
                                    <p class="fw-medium">{{ $views->created_by ?? 'System' }}</p>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label text-muted">Created At</label>
                                    <p class="fw-medium">{{ $views->created_at ?? 'N/A' }}</p>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label text-muted">Last Updated By</label>
                                    <p class="fw-medium">{{ $views->updated_by ?? 'N/A' }}</p>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label text-muted">Last Updated At</label>
                                    <p class="fw-medium">{{ $views->updated_at ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <a href="{{ route('state.index') }}" class="btn btn-light">Back to List</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endsection