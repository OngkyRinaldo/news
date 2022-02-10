@extends('cms.layouts.template')

@section('title')
Account Setting
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <a href="{{ route('user.edit', $auth->id) }}"> <img
                                        class="profile-user-img img-fluid img-circle"
                                        src="{{ asset('images/users/' . $auth->image) }}"
                                        alt="User profile picture"></a>
                            </div>

                            <h3 class="profile-username text-center">{{ $auth->name }}</h3>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Edit Profile</b> <a class="btn btn-warning float-right"
                                        href="{{ route('user.edit', $auth->id) }}" role="button">Edit</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Change Password</b> <a class="btn btn-warning float-right"
                                        href="{{ route('changePasswordGet') }}" role="button">Edit</a>
                                </li>
                            </ul>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>
@endsection