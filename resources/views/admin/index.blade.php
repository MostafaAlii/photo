@extends('admin.admin_master')

@section('pageTitle')
Dashboard
@endsection

@section('css')
@endsection

@section('content')
    @include('admin.messages')
<!-- Start Breadcrumbs -->
<div class="content-header row">
    <div class="mb-2 content-header-left col-md-6 col-12">
        <h3 class="content-header-title">
            <i class="material-icons">settings_input_svideo</i>
            Home
        </h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->
<div class="content-wrapper">
    <div class="content-body">

        <div class="row">
            <div class="col-12">
                Dashborad Content

            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection