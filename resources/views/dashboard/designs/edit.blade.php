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
                                <h3 class="card-title">Update Design</h3>
                            </div>
                            <form method="POST" action="{{ route('design.update', [$design->id]) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $design->name }}" placeholder="Designer Name" required>
                                        </div>
                                        <div class="col">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" value="{{ $design->description }}" placeholder="Email">
                                        </div>
                                        <div class="col">
                                            <label for="cat_id">Chose Category</label>
                                            <select name="cat_id" id="cat_id" class="form-control">
                                                <option disabled {{ empty($design->cat_id) ? 'selected' : '' }}>--Select One--</option>
                                                @foreach ($categories as $item)
                                                <option value="{{ $item->id }}" {{ $design->cat_id == $item->id ? 'selected' : '' }}>
                                                    {{ $item->name }}
                                                </option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col">
                                            <label for="inputClientCompany">Feature image</label>
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input"
                                                    id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose Image</label>

                                            </div>
                                            <div class="">
                                                <a href="{{ asset('assets/image/designs') . '/' . $design->image }}?text=1"
                                                    data-toggle="lightbox"
                                                    data-title="{{ $design->title }}"
                                                    data-gallery="gallery">
                                                    <img src="{{ asset('assets/image/designs') . '/' . $design->image }}?text=1"
                                                        class="img-fluid" alt="{{ $design->title }}"
                                                        style="width:40px" />
                                                </a>
                                            </div>
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


<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>

<script>
    $(function() {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
</script>

<script>
    $(function() {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });

        $('.filter-container').filterizr({
            gutterPixels: 3
        });
        $('.btn[data-filter]').on('click', function() {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });
    })
</script>

@endsection
