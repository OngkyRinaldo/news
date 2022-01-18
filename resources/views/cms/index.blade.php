@extends('cms.layouts.template')

@section('title')
Dashboard
@endsection

@section('content')
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Welcome {{ $cms }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->
@endsection