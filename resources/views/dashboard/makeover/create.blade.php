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
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                            <li class="breadcrumb-item active">Design</li>
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
                                <h3 class="card-title">Add New Design</h3>
                            </div>
                            <form method="POST" action="{{ route('makeover.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Design Name" required>
                                        </div>
                                        <div class="col">
                                        <label for="image">Upload Image</label>
                                            <input type="file" class="form-control" name="image" accept=".png, .jpg, .jpeg, .webp" placeholder=" ">
                                        </div>
                                        <div class="col">
                                        </div>
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
