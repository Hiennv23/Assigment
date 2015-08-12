<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 <?php
    $firstname = $lastname = $birthday = $gender = $address = $images = "";
    if(isset($_POST['add'])){
        if($_POST['firstname']==""){
            $errorfirstname = "Bạn chưa nhập tên rồi !";
        }else{
            $firstname = $_POST['firstname'];
        }
        if($_POST['lastname']==""){
            $errorlastname = "Bạn chưa nhập tên đệm rồi !";
        }else{
            $lastname =$_POST['lastname'];
        }
        if($_POST['birthday']==""){
            $errorbirthday = "Bạn chưa nhập ngày sinh rồi !";
        }else{
            $birthday = $_POST['birthday'];
        }
        if(!isset($_POST['gender'])){
            $errorgender = "Bạn chưa nhập ngày sinh rồi !";
        }else{
            $gender = $_POST['gender'];
        }
        if($_POST['address']==""){
            $erroraddress = "Bạn chưa nhập địa chỉ rồi !";
        }else{
            $address = $_POST['address'];
        }
        if($_FILES['images'] == ""){
            $errorimages = "Bạn phải chèn ảnh đại diện vào !";
        }

    }
    if(isset($_POST['add'])){
        $images = $_FILES['images']['name'];
        move_uploaded_file($_FILES['images']['tmp_name'], "images/".$images);
    }
    //Insert Database
    if($firstname && $lastname && $birthday && $gender && $address && $images){
        //Connect database
        $connect = mysql_connect("localhost", "root", "") or die ("Không thể kết nối tới database!");
        mysql_select_db("qlsv",$connect);
        mysql_query("SET name 'utf8'");
        $sql = "INSERT INTO thanhvien(Ten, Hodem, Ngaysinh, Gioitinh, Diachi, Anhdaidien) 
        VALUES('".$firstname."','".$lastname."','".$birthday."','".$gender."','".$address."','".$images."')";
        mysql_query("SET name 'utf8'");
        mysql_query($sql);
        echo "<h4>Thêm thành viên thành công!</h4>" ;
    }

?>
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Thêm thành viên mới !</h3>
                    </div>
             
                    <form class="form-horizontal" action="create.php" method="post" enctype="multipart/form-data">
                      <div class="control-group">
                        <label class="control-label">Tên :</label>
                        <div class="controls">
                            <input name="firstname" type="text"  placeholder="Tên của bạn"/>
                            <?php echo isset($errorfirstname) ? $errorfirstname : ""; ?>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Họ Đệm :</label>
                        <div class="controls">
                            <input name="lastname" type="text" placeholder="Họ và tên đệm của bạn !">
                            <?php echo isset($errorlastname) ? $errorlastname : ""; ?>
                        </div>
                      </div>
                        <div class="control-group">
                        <label class="control-label">Ngày Sinh :</label>
                        <div class="controls">
                            <input name="birthday" type="text" placeholder="yyyy/mm/dd">
                            <?php echo isset($errorbirthday) ? $errorbirthday : ""; ?>
                        </div>
                      </div>
                        <div class="control-group">
                        <label class="control-label">Giới Tính</label>
                        <div class="controls">
                            Nam &nbsp;<input name="gender" type="radio" value="1">
                            Nữ &nbsp;<input name="gender" type="radio" value="2">
                            <?php echo isset($errorgender) ? $errorgender : ""; ?>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Địa Chỉ :</label>
                        <div class="controls">
                            <input name="address" type="text" placeholder="Nhập địa chỉ của bạn !">
                            <?php echo isset($erroraddress) ? $erroraddress : ""; ?>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Ảnh Đại Diện :</label>
                        <div class="controls">
                            <input name="images" type="file">

                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success" name="add">Thêm</button>
                          <a class="btn" href="index.php">Trở lại</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
