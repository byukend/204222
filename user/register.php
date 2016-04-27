<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dormitory</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/LoginStyle.css">
    <style type="text/css">
    body {
        padding-top: 20px;
        padding-bottom: 20px;        
    }
    </style>
</head>

<body>
    <div class="container">
    <div class="page-header">
        <div class='row'>
            <div class='col-sm-6'>
                <h1 style="color:#9e76b2" ;=>Dormitory <small>Register</small> </h1>
            </div>
            <div class="col-sm-5"></div>
            <div class="col-sm-1">
        <a href="../index.php">
            <button type="button" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            </button>
                </a></div>
        </div>
    
    </div>
    <div class="col-xs-3"></div>
        <div class="col-xs-6">
        <div class="form-group">
                    <label for="InputStudentid">รหัสนักศึกษา</label>
                    <div class="input-group">
                        <input type="Student_id" class="form-control" id="InputStudentid" name="InputStudentid" placeholder="รหัสนักศึกษา" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
            <label class="radio-inline"><input type="radio" name="optradio">นาย</label>
            <label class="radio-inline"><input type="radio" name="optradio">นาง</label>
            <label class="radio-inline"><input type="radio" name="optradio">นางสาว</label>
            <from action="createStu.php" method = "POST">
                <div class="form-group">
                    <label for="InputFirstName">ชื่อ</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputFirstName" name="InputFirstName" placeholder="กรอกชื่อ" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputLastName">นามสกุล</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputnameLast" name="InputLastName" placeholder="กรอกนามสกุล" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputCitizenId">บัตรประชาชน</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputCitizenId" name="InputCitizenId" placeholder="อีเมล์" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputCitizenId">วันเกิด</label>
                    <div class="input-group">
                        <input type="date" class="form-control" id="InputBirthDay" name="InputBirthDay" placeholder="วันเกิด" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputPhone">เบอร์โทรศัพท์</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputPhone" name="InputPhone" placeholder="เบอร์โทรศัพท์" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">อีเมล์</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="อีเมล์" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">ยืนยันอีเมล์</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="ยืนยันอีเมล์" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputMessage">ที่อยู่</label>
                    <div class="input-group">
                        <textarea name="InputAddress" id="InputAddress" class="form-control" rows="5" required></textarea>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
        </from>
        </div>
        </div>
    <div class="col-xs-3"></div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/j
query.min.js"></script>
</body>
    
    <script src="js/jquery-2.2.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</html>
