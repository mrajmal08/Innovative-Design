@extends('dashboard.app')
@push('css')
@endpush
@section('content')

<div class="wrapper">

    @include('dashboard.sidebar')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Update Designer</h3>
                            </div>
                            <form method="POST" action="{{ route('users.update', [$user->id]) }}"  enctype="multipart/form-data">
                                    @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Designer Name" required>
                                        </div>
                                        <div class="col">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Email" required>
                                        </div>
                                        <div class="col">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="phone_no">Phone</label>
                                            <input type="text" class="form-control" name="phone_no" value="{{ $user->phone_no }}" placeholder="Phone Number" required>
                                        </div>
                                        <div class="col">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" name="city" value="{{ $user->city }}" placeholder="City">
                                        </div>
                                        <div class="col">
                                            <label for="country">Country</label>
                                            <input type="text" class="form-control" name="country" value="{{ $user->country }}" placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="experience">Experience</label>
                                            <input type="text" class="form-control" name="experience" value="{{ $user->experience }}" placeholder="Experience" required>
                                        </div>
                                        <div class="col">
                                            <label for="specialization">Specialization</label>
                                            <input type="text" class="form-control" name="specialization" value="{{ $user->specialization }}" placeholder="Specialization">
                                        </div>
                                        <div class="col">
                                            <label for="skills">Skills</label>
                                            <input type="text" class="form-control" name="skills" value="{{ $user->skills }}" placeholder="Skills">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label for="image">Upload Image</label>
                                            <input type="file" class="form-control" name="image" accept=".png, .jpg, .jpeg, .webp" placeholder=" ">
                                        </div>
                                        <div class="col">

                                        </div>
                                        <div class="col">

                                        </div>
                                    </div>


                                    <div class="row">
                                        <input type="hidden" name="role_id" value="2">
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </div>

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2024 <a href="#">PROJECT WORK </a>|</strong> All rights reserved.
    </footer>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>

@endsection
