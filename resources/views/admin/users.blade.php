@extends('admin.layout.auth')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                فهرست نمایندگی ها
                <small>پنل مدیریت</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
                <li class="active">فهرست نمایندگی ها</li>
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
                            <h3 class="box-title">نمایندگی ها</h3>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>عکس پروفایل</th>
                                    <th>نام</th>
                                    <th>نام خانوادگی</th>
                                    <th>کد ملی</th>
                                    <th>کد سازمانی</th>

                                    <th>شماره تلفن همراه</th>
                                    <th>شماره نمایندگی</th>
                                    <th>شماره ۱۶ رقمی کارت بانکی</th>
                                    <th>نام بانک</th>
                                    <th>مسیر</th>
                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>عکس پروفایل</th>
                                    <th>نام</th>
                                    <th>نام خانوادگی</th>
                                    <th>کد ملی</th>
                                    <th>کد سازمانی</th>

                                    <th>شماره تلفن همراه</th>
                                    <th>شماره نمایندگی</th>
                                    <th>شماره ۱۶ رقمی کارت بانکی</th>
                                    <th>نام بانک</th>
                                    <th>مسیر</th>
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

                </div>   <!-- /.row --></div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->



<script>
    $(function () {

        $(".select2").select2({ dir: "rtl"});

        $('#example2').DataTable({
            ajax: '{!! route('users.data') !!}',
            columns: [
                { data: 'image', name: 'image' },
                { data: 'name', name: 'name' },
                { data: 'lname', name: 'lname' },
                { data: 'nic', name: 'nic' },
                { data: 'orgId', name: 'orgId' },
                { data: 'mobile', name: 'mobile' },
                { data: 'id', name: 'id' },
                { data: 'bankNum', name: 'bankNum' },
                { data: 'bank', name: 'bank' },
                { data: 'path', name: 'path'}
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
                }

            ]
        });

        $('.persiaNumber').persiaNumber();

    });



</script>

@endsection
