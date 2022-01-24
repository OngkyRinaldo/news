@extends('cms.layouts.template')

@section('title')
Account Setting
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{ asset('images/users/' . $auth->image) }}" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ $auth->name }}</h3>

                            <p class="text-muted text-center">Software Engineer</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Edit Profile</b> <a class="btn btn-warning float-right"
                                        href="{{ route('user.edit', $auth->id) }}" role="button">Edit</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Change Password</b> <a class="btn btn-warning float-right"
                                        href="{{ route('changePasswordGet') }}" role="button">Edit</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Following</b> <a class="float-right">543</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Friends</b> <a class="float-right">13,287</a>
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
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