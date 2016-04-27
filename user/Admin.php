<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dormitory</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/page.css">
    <script src="js/jquery-2.2.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body class="container">
    <div class="page-header">
        <h1 style="color:#9e76b2" ;=>Dormitory </h1>
        <h4 style="color:#000000;  text-align: right;" ;=><a href="index.html"> Log out</a> </h4>
        <a href="index.html">
        </a>
        
    </div>
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active"><a href="#">เพิ่ม-ย้ายข้อมูลนักศึกษา</a></li>
                <li role="presentation"><a href="#">Profile</a></li>
                <li role="presentation"><a href="#">Messages</a></li>
            </ul>
        </div>
        <div class="col-md-9">
        <div id="tableAd">
        <!--nav tab-->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab1" aria-controls="home" role="tab" data-toggle="tab">หอช.1</a></li>
            <li role="presentation"><a href="#tab1" aria-controls="profile" role="tab" data-toggle="tab">หอช.3</a></li>
            <li role="presentation"><a href="#tab1" aria-controls="messages" role="tab" data-toggle="tab">หอช.4</a></li>
            <li role="presentation"><a href="#tab1" aria-controls="settings" role="tab" data-toggle="tab">หอช.5</a></li>
            <li role="presentation"><a href="#tab1" aria-controls="settings" role="tab" data-toggle="tab">หอช.6</a></li>
            <li role="presentation"><a href="#tab1" aria-controls="settings" role="tab" data-toggle="tab">หอช.7</a></li>
        </ul>
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="#tab2" aria-controls="settings" role="tab" data-toggle="tab">หอญ.1</a></li>
            <li role="presentation"><a href="#tab2" aria-controls="settings" role="tab" data-toggle="tab">หอญ.2</a></li>
            <li role="presentation"><a href="#tab2" aria-controls="settings" role="tab" data-toggle="tab">หอญ.3</a></li>
            <li role="presentation"><a href="#tab2" aria-controls="settings" role="tab" data-toggle="tab">หอญ.4</a></li>
            <li role="presentation"><a href="#tab2" aria-controls="settings" role="tab" data-toggle="tab">หอญ.5</a></li>
            <li role="presentation"><a href="#tab2" aria-controls="settings" role="tab" data-toggle="tab">หอญ.6</a></li>
            <li role="presentation"><a href="#tab2" aria-controls="settings" role="tab" data-toggle="tab">หอญ.7</a></li>
            <li role="presentation"><a href="#tab2" aria-controls="settings" role="tab" data-toggle="tab">หอญ.8</a></li>
        </ul>
        <div class="tab-content">
            <div id="tab2" role="tabpanel" class="tab-pane">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width=" 20%">หมายเลขห้อง</th>
                            <th width=" 40%">ชื่อ-นามสกุล</th>
                            <th width=" 20%">สถานะ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">101</th>
                            <td>
                                <p>นาย 22222222</p>
                            </td>
                            <td>ว่าง</td>
                            <td><div class="checkbox">
  <label><input type="checkbox" value="">Option 1</label>
</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="tab1" role="tabpanel" class="tab-pane active">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width=" 20%">หมายเลขห้อง</th>
                            <th width=" 40%">ชื่อ-นามสกุล</th>
                            <th width=" 20%">สถานะ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">101</th>
                            <td>นาย กกกกกกก ขขขขขข</td>
                            <td>ว่าง</td>
                            <td><div class="checkbox">
                                <label><input type="checkbox" value=""></label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="buttonAd">
            <a class="btn btn-warning" href="addInfoStudent.html" role="button">ย้าย</a>
            <a class="btn btn-warning" href="addInfoStudent.html"    role="button">เพิ่ม</a>
            </div>
            </div>
        </div>
    </div>
        </div>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/j
query.min.js"></script>
</body>

</html>
