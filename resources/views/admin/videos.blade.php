@extends('admin.layout.auth')

@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                فهرست ویدیو ها
                <small>پنل مدیریت</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
                <li class="active">فهرست ویدیو ها</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">ویدیو ها</h3>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>تصویر شاخص</th>
                                    <th>عنوان</th>
                                    <th>مشاهده ویدیو</th>
                                    <th>تاریخ ثبت</th>
                                    <th>تاریخ اتمام</th>
                                    <th>مدیریت</th>
                                </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>تصویر شاخص</th>
                                    <th>عنوان</th>
                                    <th>مشاهده ویدیو</th>
                                    <th>تاریخ ثبت</th>
                                    <th>تاریخ اتمام</th>
                                    <th>مدیریت</th>
                                </tr>
                                </tfoot>
                            </table>

                            <style>
                                #example2  td{
                                    vertical-align: middle;
                                }
                            </style>

                        </div><!-- /.box-body -->

                    </div><!-- /.box -->

                </div>   <!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


    <script src="/dist/js/persianumber.min.js"></script>

    <script>
        $(function () {

            $(".select2").select2({ dir: "rtl"});

            $('#example2').DataTable({
                ajax: '{!! route('videos.data') !!}',
                columns: [
                    { data: 'pic', name: 'pic' },
                    { data: 'title', name: 'title' },
                    { data: 'url', name: 'url' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'expire', name: 'expire' },
                    { data: 'videoId', name: 'videoId' }
                ],
                "processing": true,
                "serverSide": true,
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "language": {

                    "show":"نمایش",
                    "decimal":        "",
                    "emptyTable":     "اطلاعاتی وجود ندارد",
                    "info":           "نمایش _START_ مورد _END_ از _TOTAL_ موجود",
                    "infoEmpty":     "نمایش 0 مورد از 0 موجود",
                    "infoFiltered":   "(فیلتر شده از _MAX_ عدد موجود)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "نمایش _MENU_ موجود",
                    "loadingRecords": "بارگذاری...",
                    "processing":     "در حال دریافت",
                    "search":         "جستجو",
                    "zeroRecords":    "موردی یافت نشد",
                    "paginate": {
                        "first":      "ابتدا",
                        "last":       "آخر",
                        "next":       "بعدی",
                        "previous":   "قبلی"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                },
                "columnDefs": [
                    {
                        // The `data` parameter refers to the data for the cell (defined by the
                        // `data` option, which defaults to the column being worked with, in
                        // this case `data: 0`.
                        "render": function ( data, type, row ) {
                            return '<img src="'+data+'" width="100px" />';
                        },
                        "targets": 0 // column index
                    },
                    {
                        // The `data` parameter refers to the data for the cell (defined by the
                        // `data` option, which defaults to the column being worked with, in
                        // this case `data: 0`.
                        "render": function ( data, type, row ) {
                            return '<a style="text-align: center" href="'+data+'"><i style="color: #00a65a" class="fa fa-play-circle fa-3x" aria-hidden="true"></i></a>';
                        },
                        "targets": 2 // column index
                    },
                    {
                        // The `data` parameter refers to the data for the cell (defined by the
                        // `data` option, which defaults to the column being worked with, in
                        // this case `data: 0`.
                        "render": function ( data, type, row ) {
                            return '<i id="btn-edit" data-id="'+data+'" style="color: #1094e0;margin: 3px" class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>' +
                                '<i id="btn-remove" data-id="'+data+'" style="color: #f11717;margin: 3px" class="fa  fa-times fa-2x" aria-hidden="true"></i>' +
                                '<i id="btn-statistics" data-id="'+data+'" style="color: #00a65a;margin: 3px" class="fa fa-bar-chart fa-2x" aria-hidden="true"></i>';
                        },
                        "targets": 5 // column index
                    }

                ]
            });


            $('.persiaNumber').persiaNumber();

        });
    </script>
@endsection
