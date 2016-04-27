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
          .table th{
           text-align: center;   
         }

         .table td{
          text-align: center;
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
          <h1 class="page-header">หอพัก ...(ข้อมูลกิจกรรมหอพัก)</h1>
        </div> 

        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->

      <div class="container">
        <div class ="container" style="padding-bottom: 20px">
          <a button type='button' class="btn btn-lg btn-primary"href='acc_new.php'>เพิ่มกิจกรรม</button></a>
          <a button type='button' class="btn btn-lg btn-primary" href=''>ดูคะแนนนักศึกษาทั้งหมด</button></a>


        </div>
        <div class="row">
          <div class="col-sm-10">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="col-sm-4">ชื่อกิจกรรม</th>
                  <th class="col-sm-1">คะแนน</th>
                  <th class="col-sm-2">วันที่</th>
                  <th class="col-sm-2">เวลา</th>
                  <th class="col-sm-2" colspan="6"></th>
                </tr>
              </thead>
              <tbody>

                <?php 
                $sql = "SELECT * FROM activities"; 
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                      // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td style='text-align:left '>".$row['Activity_name']."</td>";
                    echo "<td>".$row['Activity_point']."</td>";
                    echo "<td>".$row['date']."</td>";
                    echo "<td>".$row['time']."</td>";
                    echo "<td style='text-align:center'>"."<a class='glyphicon glyphicon-pencil' style='color:green' href=''></a>"."<a class='glyphicon glyphicon-remove' style='color:red' href=''></a>"."
                    <a button type='button' style='color:green' class=btn btn-lg btn-primary' href=''>เพิ่ม/ลบนักศึกษา</button></a>"."</td>";
                    echo "</tr>";

                  }
                } else {
                  echo "0 results";
                }
                $con->close();
                ?>                
              </tbody>
            </table>
          </div>
        </div>



      </div>




    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

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