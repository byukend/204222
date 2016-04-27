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
    <script type="text/javascript">
    
    </script>
    <style type="text/css">
    body {
        background-color: #ffffff;
    }       
    </style>
</head>

<body class="container">
    <!--Page Headwe-->
    <div class="page-header">
        <h1 style="color:#9e76b2" ;=>Dormitory <small></small></h1>
        <a href="index.html">
            <button type="button" class="btn btn-default btn-lg" style="position: fixed;right:100px;top:40px;">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            </button>
        </a>
    </div>
    <!--End page header-->
   <div id="table">
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
                            <th width=" 10%">เดือน</th>
                            <th width=" 30%">จำนวนห้องที่ว่าง(ห้อง)</th>
                            <th width=" 30%">จำนวนผู้พักอาศัย(คน)</th>
                            <th width=" 30%">จำนวนที่ว่าง(คน)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">101</th>
                            <td>
                                <p>นาย 22222222</p>
                            </td>
                            <td>ว่าง</td>
                            <td><a class="btn btn-success" href="#" role="button">จอง</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">102</th>
                            <td>นาย 3333333</td>
                            <td>ว่าง</td>
                            <td><a class="btn btn-success" href="#" role="button">จอง</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">111</th>
                            <td>นาย แน่มากกก อากาศร้อนนน</td>
                            <td>ไม่ว่าง</td>
                            <td><a class="btn btn-success" href="#" role="button">จอง</a>
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
                            <td><a class="btn btn-success" href="#" role="button">จอง</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">102</th>
                            <td>นาย งงงงงงงงงง คคคคคคค</td>
                            <td>ว่าง</td>
                            <td><a class="btn btn-success" href="#" role="button">จอง</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">103</th>
                            <td>นาย แน่มากกก อากาศร้อนนน</td>
                            <td>ว่าง</td>
                            <td><a class="btn btn-success" href="#" role="button">จอง</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
