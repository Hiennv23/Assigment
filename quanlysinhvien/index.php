<?php
  $connect = mysql_connect("localhost","root","") or die("Không thể kết nối tới server!");
  mysql_select_db("qlsv",$connect) or die("Không thể kết nối tới database!");
  $sql = 'SELECT * FROM thanhvien ORDER BY ID_thanhvien ASC';

  $query = mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>Assigment- Điện toán đám mấy</h3>
            </div>
            <div class="row">
              <p>
                    <a href="create.php" class="btn btn-success">Thêm thành viên</a>
                </p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                    	<th>Tên</th>
                    	<th>Họ Đệm</th>
                    	<th>Ngày Sinh</th>
                    	<th>Giới Tính</th>
                    	<th>Địa Chỉ</th>
                    	<th>Ảnh Đại Điện</th>
                      	<th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                      while ($rows = mysql_fetch_assoc($query)) { ?>
    							     <tr>
                        <td><?php echo $rows['ID_thanhvien']; ?></td>
                        <td><?php echo $rows['Ten']; ?></td>
                        <td><?php echo $rows['Hodem']; ?></td>
                        <td><?php echo $rows['Ngaysinh']; ?></td>
                        <?php if($rows['Gioitinh'] ==1){
                          echo"<td>Nam</td>";
                        }else{
                          echo"<td>Nữ</td>";
                        }
                         ?>
                        <td><?php echo $rows['Diachi']; ?></td>
                        <td><img src="images/<?php echo $rows['Anhdaidien']; ?>"></td>
                        <td>
                          	<a class="btn" href='thongtincanhan.php?id=<?php echo $rows['ID_thanhvien']; ?>'>Chi tiết</a>
    						<a class="btn btn-success" href='update.php?id=<?php echo $rows['ID_thanhvien']; ?>'>Sửa</a>
             				<a class="btn btn-danger" href='delete.php?id=<?php echo $rows['ID_thanhvien']; ?>'>Xóa</a>
                        </td>
                      </tr>
                    <?php 
                  } ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>
