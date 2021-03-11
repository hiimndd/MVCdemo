
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


<?php
    
    $sv = $data["datasv"];
    
      
      
    

?>
<div class="container">
    <h2>sửa thông tin sinh viên</h2>
    
  <form action="<?php if(isset($data["id"])){
      echo "../edit/".$data["id"];
  } ?>" method="POST">
    <div class="form-group">
    
      <label for="hoten">Họ Tên :</label>
      <input type="text" class="form-control" value="<?php echo $sv[0]->get_hoten(); ?>" id="hoten" placeholder="Họ tên sinh viên" name="hoten">
    </div>
    <div class="form-group">
        <label for="mssv">Mã số sinh viên :</label>
        <input type="text" class="form-control" id="mssv" value="<?php echo $sv[0]->get_mssv(); ?>" placeholder="mã số sinh viên" name="mssv">
      </div>
      <div class="form-group">
        <label for="ngaysinh">Ngày sinh :</label>
        <input type="date" class="form-control" id="ngaysinh"  value="<?php echo $sv[0]->get_ngaysinh(); ?>" name="ngaysinh">
      </div>
    <button type="submit" class="btn btn-default" name="btn_update">Lưu</button>
    

 
  
<?php
    
    
    if(isset($data["message"])){
        
        echo $data["message"];
      }

    // if(isset($_POST["btn_update"])){
    //     if(empty($_POST["hoten"]) == true or empty($_POST["mssv"]) == true or empty($_POST["ngaysinh"]) == true){
    //         echo "Không để trống thông tin sinh viên";
    //         return 0;
    //     }
    //     $update->edit_SinhVien($id,$magoc,$_POST["hoten"],trim($_POST["mssv"]),$_POST["ngaysinh"]);
    // }
    
    
?>