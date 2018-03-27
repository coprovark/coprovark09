<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>webapp</title>

    <!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{ URL::asset('asset/css/bootstrap/css/bootstrap.min.css') }}">

<!-- MetisMenu CSS -->
<link rel="stylesheet" href="{{ URL::asset('asset/css/metisMenu/metisMenu.min.css') }}">

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ URL::asset('asset/css/sb-admin-2.css') }}">

<!-- Custom Fonts -->
<link rel="stylesheet" href="{{ URL::asset('asset/css/font-awesome/css/font-awesome.min.css') }}">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">CO_PROVARK09</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                     <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> ข้อมูลพื้นฐาน<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="show_user">> ประเภทผู้ใช้งาน</a>
                                </li>
                                <li>
                                    <a href="show_title">> ชื่อ-สกุล</a>
                                </li>
                                <li>
                                    <a href="show_faculty">> คณะ</a>
                                </li>
                                <li>
                                    <a href="show_mojor">> สาขา</a>
                                </li>
                                <li>
                                    <a href="show_type">> ประเภทการศึกษา</a>
                                </li>
                                <li>
                                    <a href="show_institute">> สถาบันการศึกษา</a>
                                </li>
                                <li>
                                    <a href="show_learning">> Learning style</a>
                                </li>
                                <li>
                                    <a href="show_birthday">> วัน เดือน ปีเกิด</a>
                                </li>
                                <li>
                                    <a href="show_gender">> เพศ</a>
                                </li>
                                <li>
                                    <a href="show_status">> สถานภาพ</a>
                                </li>
                                <li>
                                    <a href="show_blood">> หมู่เลือด</a>
                                </li>
                                <li>
                                    <a href="show_nation">> สัญชาติ</a>
                                </li>
                                <li>
                                    <a href="show_race">> เชื้อชาติ</a>
                                </li>
                                <li>
                                    <a href="show_religion">> ศาสนา</a>
                                </li>
                                <li>
                                    <a href="show_address">> ที่อยู่</a>
                                </li>
                                <li>
                                    <a href="show_contact">> ติดต่อ</a>
                                </li>
                            </ul>
                             <!-- /.nav-second-level  -->
                        </li> 
                        <li>
                            <a href="/form_login2"><i class="glyphicon glyphicon-user"></i> เข้าสู้ระบบ</a>
                        </li>
                        <li>
                            <a href="/form_resume"><i class="fa fa-file"></i> บันทึกข้อมูล</a>
                        </li>
                        <li>
                            <a href="/show_resume"><i class="fa fa-bars"></i> แสดงข้อมูล</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                       

               
                @yield('content')


                   
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="css/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
