<html lang="en">
<head>
  <?php include("../connectdb.php"); ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DORM ADMIN</title>

  <!-- Bootstrap Core CSS -->
  <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

  <!-- Timeline CSS -->
  <link href="../dist/css/timeline.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Morris Charts CSS -->
  <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
          .botpad{
            padding-bottom: 10px;
          }
          body{
           font-family:Monospace;
         }
        </style>
      </head>

      <body>

        <div id="wrapper">

          <!-- Navigation -->
          <nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">ADMIN</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right in">
              <li class="dropdown active">
                <a class="dropdown-toggle active" data-toggle="dropdown" href="#">
                  <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user in">
                  <li><a href="#" class="active"><i class="fa fa-user fa-fw"></i> User Profile</a>
                  </li>
                  <li class="divider"></li>
                  <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                  </li>
                </ul>
                <!-- /.dropdown-user -->
              </li>
              <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
              <div class="sidebar-nav navbar-collapse active">
                <ul class="nav in" id="side-menu">
                  <ul class="nav nav-pills nav-stacked">
                    <li role="presentation"><a href="stu.php">ข้อมูลนักศึกษา</a></li>
                    <li role="presentation"><a href="acc.php">ข้อมูลกิจกรรมหอพัก</a></li>
                    <li role="presentation"><a href="room.php">ข้อมูลห้องพัก</a></li>
                  </ul>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
      </nav>

      <div id="page-wrapper" style="min-height: 592px;">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">หอพัก ...</h1>
          </div> 
          <!-- /.col-lg-12 -->
          <!-- /.row -->
          <div class="container col-sm-8" style="padding-bottom: 20px">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-4">
                <div id="imaginary_container"> 
                  <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="รหัสนักศึกษา" >
                    <span class="input-group-addon">
                      <a href="stu_edit.php"><button type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                      </button></a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        $sql = "SELECT * FROM person, students WHERE studentid='570510651' AND citizenid=student_citizenid"; 
        $result = $con->query($sql); 
        if ($result->num_rows > 0){
          while($row = $result->fetch_assoc()) {
            $name = $row['Firstname'];
            echo $row['Firstname']."<br>";
            echo $row['Lastname']."<br>";
            echo $row['CitizenID']."<br>";
            echo $row['Address']."<br>";
            echo $row['Birthday']."<br>";
            echo $row['Phone']."<br>";
            echo $row['Email']."<br>";
            echo $row['StudentID']."<br>";
            if(!$row['dorm'])
              echo "NULL<br>";
            else
              echo $row['dorm']."<br>";            
            echo $row['dormpoint']."<br>";
            if(!$row['reserveRoom'])
              echo "NULL<br>";
            else
              echo $row['reserveRoom']."<br>";
            if(!$row['reserveDate'])
              echo "NULL<br>";
            else
              echo $row['reserveDate']."<br>";
            if(!$row['checkoutDate'])
              echo "NULL<br>";
            else
              echo $row['checkoutDate']."<br>";
          }
        }
        else{
          echo "no record<br>";
        }
        ?>
        <div class="container">
          <form class="form-inline">
            <div class="form-group">
              <label for="name">ชื่อ</label>
              <input type="text" class="form-control" id="name">
            </div>
          </form>
        </div>

        <!-- jQuery -->
        <script src="../bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../bower_components/raphael/raphael-min.js"></script>
        <script src="../bower_components/morrisjs/morris.min.js"></script>
        <script src="../js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>




      </body></html>