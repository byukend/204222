<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CMU Dorm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/page.css">
    <script src="js/jquery-2.2.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            background-color: #EEE;

            padding-bottom: 20px;
        }
    </style>
</head>

<body >    
    <!--start navbar-->
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color: #9e76b2;">CMU Dorm</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#" style="color: #9e76b2;">หน้าแรก <span class="sr-only">(current)</span></a></li>
                    <li><a href="Admin.html" style="color: #9e76b2;"></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #9e76b2;">หอพัก <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="infoDormman.html" style="color: #9e76b2;">ข้อมูลหอพัก</a></li>
                            <li><a href="Reserve.html" style="color: #9e76b2;">ลงทะเบียนจองหอหอพัก</a></li>
                            <li><a href="ReportDorm.html" style="color: #9e76b2;">รายงานห้องพัก</a></li>
                            
                            
                            <li role="separator" class="divider"></li>
                            <li><a href="ActivityDorm.html" style="color: #9e76b2;">กิจกรรมหอ</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <?php session_start();if(isset($_SESSION['logged_in'])){ ?>
                    <li><a href=""  style="color: #9e76b2;"><?php echo "Hi, ".$_SESSION['logged_in']; ?></a></li>
                    <li><a href="admin/pages/valid.php?logout=1" style="color: #9e76b2;">Log out</a></li>
                    <?php }else{?>
                    <li><a href="admin/pages/login.php"  style="color: #9e76b2;">Log In</a></li>
                    <li><a href="user/register.php" style="color: #9e76b2;">Register</a></li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <section class="container">
        <!--SlideShow-->
        <!--end navbar-->
        <div id="page" >
            <div id="myCarousel" class="carousel slide " data-ride="carousel" style="max-width: 50%">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/m1.jpg" alt="0">
                    </div>
                    <div class="item">
                        <img src="images/m3.jpg" alt="1">
                    </div>
                    <div class="item">
                        <img src="images/m4.jpg" alt="1">
                    </div>
                    <div class="item">
                        <img src="images/m5.jpg" alt="1">
                    </div>
                    <div class="item">
                        <img src="images/m6.jpg" alt="1">
                    </div>
                    <div class="item">
                        <img src="images/m7.jpg" alt="1">
                    </div>
                    <div class="item">
                        <img src="images/f1.jpg" alt="1">
                    </div>
                    <div class="item">
                        <img src="images/f2.jpg" alt="1">
                    </div>
                    <div class="item">
                        <img src="images/f3.jpg" alt="1">
                    </div>
                    <div class="item">
                        <img src="images/f4.jpg" alt="1">
                    </div>
                    <div class="item">
                        <img src="images/f5.jpg" alt="1">
                    </div>
                    <div class="item">
                        <img src="images/f6.jpg" alt="1">
                    </div>
                    <div class="item">
                        <img src="images/f7.jpg" alt="1">
                    </div>
                    <div class="item">
                        <img src="images/f8.jpg" alt="1">
                    </div>

                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <section>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">ข่าวประกาศ</h3>
                    </div>
                    <div class="panel-body">
                        <div class="contentBoxNews">
                            <ul>
                                <h5><li><p style="color:black;"><strong><a href="..">ลงทะเบียนหอพัก
                                </a></strong></p>
                                <div style="display: none" id="__hggasdgjhsagd_once">&nbsp;</div>[7 มี.ค. 2559] </li>
                            </h5>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


    </div>

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/j
query.min.js"></script>
</body>

</html>
