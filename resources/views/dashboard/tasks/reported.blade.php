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
                            <li class="breadcrumb-item active">Visitor</li>
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
                                <!-- <a href="{{ route('visitor.create') }}" type="button" class="btn btn-success btn-sm">Add New Visitor</a> -->
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Assignee</th>
                                            <th>Assignee Email</th>
                                            <th>Assignee Phone</th>
                                            <th>Design</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($tasks as $item)
                                    <?php
                                        $assingee = App\Models\User::where('id', $item->assignee)->first();
                                        $design = App\Models\Design::where('id', $item->design_id)->first();
                                    ?>
                                    <tr>
                                            <td>{{ $assingee->name }}</td>
                                            <td>{{ $assingee->email }}</td>
                                            <td>{{ $assingee->phone_no }}</td>
                                            <td>
                                                <div class="">
                                                    <a href="{{ asset('assets/image/designs') . '/' . $design->image }}?text=1"
                                                        data-toggle="lightbox"
                                                        data-title="{{ $design->name }}"
                                                        data-gallery="gallery">
                                                        <img src="{{ asset('assets/image/designs') . '/' . $design->image }}?text=1"
                                                            class="img-fluid" alt="{{ $design->name }}"
                                                            style="width:40px" />
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Assignee</th>
                                            <th>Assignee Email</th>
                                            <th>Assignee Phone</th>
                                            <th>Design</th>
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

                title: `Are you sure you want to delete this User?`,
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
                alwaysShowClose: true,
                showArrows: true

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

@push('js')
@endpush
@endsection
