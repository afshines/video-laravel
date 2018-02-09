@extends('admin.layout.auth')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                پیشخوان
                <small>پنل مدیریت</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
                <li class="active">پیشخوان</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>۱۵۰</h3>
                            <p>ویدیو ها</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-film"></i>
                        </div>
                        <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>۵۳<sup style="font-size: 20px">%</sup></h3>
                            <p>افزایش آمار</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>۴۴</h3>
                            <p>نمایندگی های ثبت نام شده</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>۶۵</h3>
                            <p>بازدید کنندگان امروز</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div><!-- ./col -->
            </div><!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">


                    <!-- Chat box -->
                    <div class="box box-success">
                        <div class="box-header">
                            <i class="fa fa-comments-o"></i>
                            <h3 class="box-title">گفتگو</h3>
                            <div class="box-tools pull-left" data-toggle="tooltip" title="Status">
                                <div class="btn-group" data-toggle="btn-toggle" >
                                    <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="box-body chat" id="chat-box">
                            <!-- chat item -->
                            <div class="item">
                                <img src="/img/no-picture.png" alt="user image" class="online">
                                <p class="message">
                                    <a href="#" class="name">
                                        <small class="text-muted pull-left"><i class="fa fa-clock-o"></i> 6:15</small>
                                        نمایندگی 1
                                    </a>
                                    بسیار عالی حتما مشاهده میشود
                                </p>

                            </div><!-- /.item -->
                            <!-- chat item -->
                            <div class="item">
                                <img src="/img/logo.png" alt="user image" class="offline">
                                <p class="message">
                                    <a href="#" class="name">
                                        <small class="text-muted pull-left"><i class="fa fa-clock-o"></i> 5:45</small>
                                        رسانه منجی
                                    </a>
                                    با سلام و عرض خسته نباشید خدمت شما
                                </p>
                            </div><!-- /.item -->
                            <!-- chat item -->
                            <div class="item">
                                <img src="/img/no-picture.png" alt="user image" class="offline">
                                <p class="message">
                                    <a href="#" class="name">
                                        <small class="text-muted pull-left"><i class="fa fa-clock-o"></i> 5:31</small>
                                        نمایندگی 2
                                    </a>
                                    مورد بازبینی قرار گرفت
                                </p>
                            </div><!-- /.item -->

                            <div class="item">
                                <img src="/img/no-picture.png" alt="user image" class="offline">
                                <p class="message">
                                    <a href="#" class="name">
                                        <small class="text-muted pull-left"><i class="fa fa-clock-o"></i> 5:30</small>
                                        نمایندگی 2
                                    </a>
                                    با عرض سلام و خسته نباشيد فراوان خدمت استاد گرامي و با عرض تشكرات فراوان به خاطر زحمات بيكران جنابعالي
                                </p>
                            </div><!-- /.item -->
                        </div><!-- /.chat -->
                        <div class="box-footer">
                            <div class="input-group">
                                <input class="form-control" placeholder="پیام بگذارید...">
                                <div class="input-group-btn">
                                    <button class="btn btn-success"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box (chat box) -->


                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="nav-tabs-custom">
                        <!-- Tabs within a box -->
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">نمایندگی های آنلاین</h3>
                                <div class="box-tools pull-right">
                                    <span class="label label-danger">8 نمایندگی جدید اضافه شد</span>
                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body no-padding">
                                <ul class="users-list clearfix">
                                    <li>
                                        <img src="/img/no-picture.png" alt="User Image">
                                        <a class="users-list-name" href="#">نمایندگی 1</a>
                                        <span class="users-list-date">8 دقیقه پیش</span>
                                    </li>
                                    <li>
                                        <img src="/img/no-picture.png" alt="User Image">
                                        <a class="users-list-name" href="#">نمایندگی 2</a>
                                        <span class="users-list-date">Yesterday</span>
                                    </li>
                                    <li>
                                        <img src="/img/no-picture.png" alt="User Image">
                                        <a class="users-list-name" href="#">نمایندگی 22</a>
                                        <span class="users-list-date">12 دقیقه پیش</span>
                                    </li>
                                    <li>
                                        <img src="/img/no-picture.png" alt="User Image">
                                        <a class="users-list-name" href="#">نمایندگی 65</a>
                                        <span class="users-list-date">12 دقیقه پیش</span>
                                    </li>
                                    <li>
                                        <img src="/img/no-picture.png" alt="User Image">
                                        <a class="users-list-name" href="#">نمایندگی 43</a>
                                        <span class="users-list-date">13 دقیقه پیش</span>
                                    </li>
                                    <li>
                                        <img src="/img/no-picture.png" alt="User Image">
                                        <a class="users-list-name" href="#">نمایندگی 33</a>
                                        <span class="users-list-date">14 دقیقه پیش</span>
                                    </li>
                                    <li>
                                        <img src="/img/no-picture.png" alt="User Image">
                                        <a class="users-list-name" href="#">نمایندگی 66</a>
                                        <span class="users-list-date">15 دقیقه پیش</span>
                                    </li>
                                    <li>
                                        <img src="/img/no-picture.png" alt="User Image">
                                        <a class="users-list-name" href="#">نمایندگی 43</a>
                                        <span class="users-list-date">15 دقیقه پیش</span>
                                    </li>
                                </ul><!-- /.users-list -->
                            </div><!-- /.box-body -->
                            <div class="box-footer text-center">
                                <a href="javascript::" class="uppercase">مشاهده همه نمایندگی های آنلاین</a>
                            </div><!-- /.box-footer -->
                        </div>
                    </div><!-- /.nav-tabs-custom -->

                    <!-- TO DO List -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <i class="ion ion-clipboard"></i>
                            <h3 class="box-title">To Do List</h3>
                            <div class="box-tools pull-left">
                                <ul class="pagination pagination-sm inline">
                                    <li><a href="#">&laquo;</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <ul class="todo-list">
                                <li>
                                    <!-- drag handle -->
                                    <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <!-- checkbox -->
                                    <input type="checkbox" value="" name="">
                                    <!-- todo text -->
                                    <span class="text">Design a nice theme</span>
                                    <!-- Emphasis label -->
                                    <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                                    <!-- General tools such as edit or delete-->
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="" name="">
                                    <span class="text">Make the theme responsive</span>
                                    <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="" name="">
                                    <span class="text">Let theme shine like a star</span>
                                    <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="" name="">
                                    <span class="text">Let theme shine like a star</span>
                                    <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="" name="">
                                    <span class="text">Check your messages and notifications</span>
                                    <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="" name="">
                                    <span class="text">Let theme shine like a star</span>
                                    <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- /.box-body -->
                        <div class="box-footer clearfix no-border">
                            <button class="btn btn-default pull-left"><i class="fa fa-plus"></i> Add item</button>
                        </div>
                    </div><!-- /.box -->

                    <!-- quick email widget -->
                    <div class="box box-info">
                        <div class="box-header">
                            <i class="fa fa-envelope"></i>
                            <h3 class="box-title">Quick Email</h3>
                            <!-- tools box -->
                            <div class="pull-left box-tools">
                                <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                            </div><!-- /. tools -->
                        </div>
                        <div class="box-body">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                </div>
                                <div>
                                    <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="box-footer clearfix">
                            <button class="pull-left btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-left"></i></button>
                        </div>
                    </div>

                </section><!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">

                    <!-- Calendar -->
                    <div class="box box-solid bg-green-gradient">

                        <div class="box-header">
                            <i class="fa fa-calendar"></i>
                            <h3 style="margin-bottom: 3px" class="box-title">تقویم روز</h3>
                            <!-- tools box -->
                            <div  class="date-picker" ></div>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            <!--The calendar -->

                        </div><!-- /.box-body -->
                        <div class="box-footer text-black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Progress bars -->
                                    <div class="clearfix">
                                        <span class="pull-right">بازدید</span>
                                        <small class="pull-left">65</small>
                                    </div>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 65%;"></div>
                                    </div>


                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <div class="clearfix">
                                        <span class="pull-right">مشاهده</span>
                                        <small class="pull-left">70</small>
                                    </div>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                                    </div>


                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div>
                    </div><!-- /.box -->


                    <!-- Map box -->
                    <div class="box box-solid bg-light-blue-gradient">
                        <div class="box box-warning direct-chat direct-chat-warning">
                            <div class="box-header with-border">
                                <h3 class="box-title">گفتگو مستقیم</h3>
                                <div class="box-tools pull-right">
                                    <span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span>
                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <!-- Conversations are loaded here -->
                                <div class="direct-chat-messages">
                                    <!-- Message. Default to the left -->
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-left">رسانه منجی</span>
                                            <span class="direct-chat-timestamp pull-right">23 دی 2:00 pm</span>
                                        </div><!-- /.direct-chat-info -->
                                        <img class="direct-chat-img" src="/img/logo.png" alt="message user image"><!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            کاملا درست  این  بحث فابل انجام می باشد
                                        </div><!-- /.direct-chat-text -->
                                    </div><!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                            <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                        </div><!-- /.direct-chat-info -->
                                        <img class="direct-chat-img" src="/dist//img/user3-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            You better believe it!
                                        </div><!-- /.direct-chat-text -->
                                    </div><!-- /.direct-chat-msg -->

                                    <!-- Message. Default to the left -->
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                            <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
                                        </div><!-- /.direct-chat-info -->
                                        <img class="direct-chat-img" src="/dist//img/user1-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            Working with AdminLTE on a great new app! Wanna join?
                                        </div><!-- /.direct-chat-text -->
                                    </div><!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                            <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
                                        </div><!-- /.direct-chat-info -->
                                        <img class="direct-chat-img" src="/dist//img/user3-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            I would love to.
                                        </div><!-- /.direct-chat-text -->
                                    </div><!-- /.direct-chat-msg -->

                                </div><!--/.direct-chat-messages-->

                                <!-- Contacts are loaded here -->
                                <div class="direct-chat-contacts">
                                    <ul class="contacts-list">
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="/dist//img/user1-128x128.jpg">
                                                <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Count Dracula
                                  <small class="contacts-list-date pull-right">2/28/2015</small>
                                </span>
                                                    <span class="contacts-list-msg">How have you been? I was...</span>
                                                </div><!-- /.contacts-list-info -->
                                            </a>
                                        </li><!-- End Contact Item -->
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="/dist//img/user7-128x128.jpg">
                                                <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Sarah Doe
                                  <small class="contacts-list-date pull-right">2/23/2015</small>
                                </span>
                                                    <span class="contacts-list-msg">I will be waiting for...</span>
                                                </div><!-- /.contacts-list-info -->
                                            </a>
                                        </li><!-- End Contact Item -->
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="/dist//img/user3-128x128.jpg">
                                                <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nadia Jolie
                                  <small class="contacts-list-date pull-right">2/20/2015</small>
                                </span>
                                                    <span class="contacts-list-msg">I'll call you back at...</span>
                                                </div><!-- /.contacts-list-info -->
                                            </a>
                                        </li><!-- End Contact Item -->
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="/dist//img/user5-128x128.jpg">
                                                <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nora S. Vans
                                  <small class="contacts-list-date pull-right">2/10/2015</small>
                                </span>
                                                    <span class="contacts-list-msg">Where is your new...</span>
                                                </div><!-- /.contacts-list-info -->
                                            </a>
                                        </li><!-- End Contact Item -->
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="/dist//img/user6-128x128.jpg">
                                                <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  John K.
                                  <small class="contacts-list-date pull-right">1/27/2015</small>
                                </span>
                                                    <span class="contacts-list-msg">Can I take a look at...</span>
                                                </div><!-- /.contacts-list-info -->
                                            </a>
                                        </li><!-- End Contact Item -->
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="/dist//img/user8-128x128.jpg">
                                                <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Kenneth M.
                                  <small class="contacts-list-date pull-right">1/4/2015</small>
                                </span>
                                                    <span class="contacts-list-msg">Never mind I found...</span>
                                                </div><!-- /.contacts-list-info -->
                                            </a>
                                        </li><!-- End Contact Item -->
                                    </ul><!-- /.contatcts-list -->
                                </div><!-- /.direct-chat-pane -->
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                        <span class="input-group-btn">
                            <button type="button" class="btn btn-warning btn-flat">Send</button>
                          </span>
                                    </div>
                                </form>
                            </div><!-- /.box-footer-->
                        </div>
                    </div>
                    <!-- /.box -->

                    <!-- solid sales graph -->
                    <div class="box box-solid bg-teal-gradient">
                        <div class="box-header">
                            <i class="fa fa-th"></i>
                            <h3 class="box-title">Sales Graph</h3>
                            <div class="box-tools pull-left">
                                <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body border-radius-none">
                            <div class="chart" id="line-chart" style="height: 250px;"></div>
                        </div><!-- /.box-body -->
                        <div class="box-footer no-border">
                            <div class="row">
                                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">
                                    <div class="knob-label">Mail-Orders</div>
                                </div><!-- ./col -->
                                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">
                                    <div class="knob-label">Online</div>
                                </div><!-- ./col -->
                                <div class="col-xs-4 text-center">
                                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">
                                    <div class="knob-label">In-Store</div>
                                </div><!-- ./col -->
                            </div><!-- /.row -->
                        </div><!-- /.box-footer -->
                    </div><!-- /.box -->


                </section><!-- right col -->
            </div><!-- /.row (main row) -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <script>
        $(document).ready(function() {

            $(".date-picker").pDatepicker({});
        });
    </script>
@endsection
