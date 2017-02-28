<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/Fatcow-Farm-Fresh-Jeans.ico">
        <title>THAI JEANS</title>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="theme.css" rel="stylesheet">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <script language="javascript">
            function CheckNum() {
                if (event.keyCode < 48 || event.keyCode > 57) {
                    event.returnValue = false;
                }
            }

            $('#zip_code').click(function ()
            {
                var zip = $('#zip').val();

                var zipRegex = /^\d{5}$/;

                if (!zipRegex.test(zip))
                {
                } else
                {
                }
            });
        </script>
    </head>
    <body>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">ThaiJeans</a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" role="search">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="ค้นหาสินค้า.....">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">ค้นหา</button>
                                </span>
                            </div><!-- /input-group -->
                        </div>
                    </form>
                    <ul class="nav navbar-nav  navbar-right" >
                        <li><a href="#Login" data-toggle="modal" data-target="#Log-in-modal">เข้าสู่ระบบ</a></li>
                        <li><a href="#Signin" data-toggle="modal" data-target="#Sign-in-modal">สมัครสมาชิก</a></li> 
                        <!--                        <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ค้นหาสินค้า<span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">สินค้าประเภทที่1</a></li>  
                                                        <li><a href="#">สินค้าประเภทที่2</a></li>  
                                                                                        <li><a href="#">ผู้ชายขาเดฟ</a></li>                            
                                                                                        <li><a href="#">กระโปรง</a></li> 
                                                                                        <li><a href="#">ขาสั้น</a></li> 
                                                                                        <li><a href="#">ผู้หญิงขาเดฟเอวต่ำ</a></li> 
                                                                                        <li><a href="#">ผู้หญิงขาเดฟเอวสูง</a></li> 
                                                                                        <li><a href="#">สกินนี่สี</a></li> 
                                                                                        <li><a href="#">เฮี้ยมยีนส์</a></li> 
                                                                                        <li><a href="#">ทรงบอยเฟรนด์</a></li>                                                           
                                                        <li role="separator" class="divider"></li>
                        
                                                    </ul>
                                                </li>-->
                    </ul> 
                </div>
            </div>
        </nav>

        <div class="modal fade bs-example-modal-sm" id="Log-in-modal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content ">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">เข้าสู่ระบบ</h4>
                        <hr>
                        <form data-toggle="validator" role="form" class="form" id="myform" name="form1" method="post" action="" >
                            <div class="modal-body">                            
                                <fieldset>                                    
                                    <div class="form-group  has-feedback">
                                        <input type="text" class="form-control css-require" id="username" name="username" placeholder="ชื่อเข้าระบบ" data-error="*กรอกชื่อเพื่อเข้าสู่ระบบ" required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <input type="password" class="form-control css-require" id="password" name="password" placeholder="รหัสผ่าน" data-error="*กรอกรหัสผ่านเพื่อเข้าสู่ระบบ" required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                </fieldset>                            
                            </div>
                            <div class="modal-footer">
                                <button id="logInSubmit" type="submit" class="btn btn-default">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bs-example-modal-lg" id="Sign-in-modal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">สมัครสมาชิก <small style="color: maroon">*ต้องกรอกให้ครบทุกช่อง</small></h4>
                        <hr>
                        <form data-toggle="validator" role="form1" class="form" id="myform1" name="form1" method="post" action="" >
                            <div class="modal-body">
                                <fieldset>
                                    <div class="form-group has-feedback col-lg-12">
                                        <input type="text" class="form-control" id="signin_username" name="username" placeholder="ชื่อ" data-error="กรุณากรอกชื่อ" required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                    <div class="form-group has-feedback col-lg-12">
                                        <input type="text" class="form-control" id="signin_sernume" name="surname" placeholder="ชื่อสกุล" data-error="กรุณากรอกนามสกุล" required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                    <div class="form-group has-feedback col-lg-4">
                                        <input type="text" class="form-control" id="signin_No" name="house_No" placeholder="บ้านเลขที่" data-error="กรุณากรอกบ้านเลขที่" required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                    <div class="form-group has-feedback col-lg-8">
                                        <input type="text" class="form-control" id="signin_street" name="house_street" placeholder="ถนน" data-error="กรุณากรอกชื่อถนน" required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                    <div class="form-group has-feedback col-lg-12">
                                        <select class="form-control" id="province_id" name="province_id" data-error="กรุณาเลือกจังหวัด" required>
                                            <option value=""></option>     
                                        </select>
                                        <span class="help-block with-errors"></span>
                                    </div>

                                    <div class="form-group has-feedback col-lg-6">
                                        <select class="form-control" id="district_id" name="district_id" data-error="กรุณาเลือกเขต/อำเภอ" required>
                                            <option value=""></option>     
                                        </select>
                                        <span class="help-block with-errors"></span>
                                    </div>

                                    <div class="form-group has-feedback col-lg-6">
                                        <select class="form-control" id="canton_id" name="canton_id" data-error="กรุณาเลือกแขวง/ตำบล" required>
                                            <option value=""></option>
                                        </select>
                                        <span class="help-block with-errors"></span>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control"  maxlength="5" onkeypress="CheckNum()" 
                                               id="zip_code" name="house_zip_code" placeholder="รหัสไปรษณีย์" 
                                               required pattern="^\d{5}$"
                                               oninvalid="this.setCustomValidity('กรุณากรอกรหัสไปรษณีให้ถูกต้อง')"
                                               oninput="setCustomValidity('')">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="tel" class="form-control" maxlength="10" onkeypress="CheckNum()"
                                               id="phone" name="house_phone" placeholder="หมายเลขโทรศัพท์" 
                                               required pattern="^\d{10}$"
                                               oninvalid="this.setCustomValidity('กรุณากรอกหมายเลขโทรศัพท์ให้ถูกต้อง')"
                                               oninput="setCustomValidity('')">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group has-feedback col-lg-12">
                                        <input type="email" class="form-control" id="signin_street" name="house_email" placeholder="email" data-error="กรอกอีเมลให้ถูกต้อง" required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                    <div class="form-group has-feedback col-lg-6">
                                        <input type="password" data-minlength="6" class="form-control" id="pass" name="house_pass" placeholder="รหัสผ่าน" data-error="กรุณากรอกรหัสผ่าน" required>
                                        <span class="help-block with-errors">ตั้งรหัสอย่างน้อย 6 ตัวอักษร</span>

                                    </div>
                                    <div class="form-group has-feedback col-lg-6">
                                        <input type="password" class="form-control" data-match="#pass" data-match-error="รหัสผ่านไม่ตรงกัน" id="conpass" name="house_conpass" placeholder="ยืนยันรหัสผ่าน" required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="modal-footer">
                                <button id="logInSubmit" type="submit" class="btn btn-default">สมัครสมาชิก</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <footer>
            <p>&copy; Company 2015 Chakkarin Yinghan</p>
        </footer>



        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="js/validator.min.js"></script>
    </body>
</html>
