<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Danh sách sinh viên</h2>
  
  
  
  
  
  <p>MYSQL PDO</p>
  <table class="table table-striped">
  <thead>
      <tr>
        <th>Họ tên</th>
        <th>Mã số sinh viên</th>
        <th>Ngày sinh</th>
        <th><th>
        <th><th>
      </tr>
    </thead>
  <tbody>
  <?php 
          
          
          
          
         

            
          $sv = $data["datasv"];
          $index = 0;
          if(!empty($sv)){
          foreach($sv as $row){
          
          ?>
        <tr>
        <td><?php   echo $sv[$index]->get_hoten()."<br>"; ?></td>
        <td><?php   echo $sv[$index]->get_mssv()."<br>"; ?></td>
        <td><?php   echo $sv[$index]->get_ngaysinh()."<br>"; ?></td>
        <td><a href = "<?php echo "../update/display/".$sv[$index]->get_ID(); ?>"><button type="button" class="btn btn-primary">sửa</button><a> </a><a href = "<?php echo "../delete/display/".$sv[$index]->get_ID(); ?>" onclick="return confirm('Bạn có chắc muốn xóa thông tin này trong file json?')"><button type="button" class="btn btn-primary">xóa</button></a></td>
        
        <?php  
      
        $index++;
        } }?>
      </tr>
    </tbody>
  </table>
  <?php
      if(isset($data["massage"])){
        echo $data["massage"];
      }
  ?>
</div>

</body>
</html>


