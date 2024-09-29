@extends('dashboard.app')
@push('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

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
                            <li class="breadcrumb-item active">Designs</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('design.create') }}" type="button" class="btn btn-success btn-sm">Add New Design</a>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($designs as $item)

                                        <?php
                                        $category = App\Models\Category::where('id', $item->cat_id)->value('name');
                                        ?>
                                        <tr>
                                            <td>{{ $item->name }}</td>

                                            <td>
                                                <div class="">
                                                    <a href="{{ asset('assets/image/designs') . '/' . $item->image }}?text=1"
                                                        data-toggle="lightbox"
                                                        data-title="{{ $item->name }}"
                                                        data-gallery="gallery">
                                                        <img src="{{ asset('assets/image/designs') . '/' . $item->image }}?text=1"
                                                            class="img-fluid" alt="{{ $item->name }}"
                                                            style="width:40px" />
                                                    </a>
                                                </div>
                                            </td>



                                            <td>{{ $category }}</td>
                                            <td>
                                                <a href="{{ route('design.edit', [$item->id]) }}" class="me-2">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <form method="GET" action="{{ route('design.delete', $item->id) }}" class="d-inline">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <a href="{{ route('design.delete', $item->id) }}" class="show_confirm" data-toggle="tooltip" title="Delete">
                                                        <i class="fas fa-trash text-danger" style="font-weight: bold;"></i>
                                                    </a>
                                                </form>

                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {

        alert('sdfs')
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();

        swal({

                title: `Are you sure you want to delete this design?`,
                icon: "warning",
                buttons: true,
                dangerMode: true,

            })
            .then((willDelete) => {

                if (willDelete) {
                    form.submit();
                }
            });
    });
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
