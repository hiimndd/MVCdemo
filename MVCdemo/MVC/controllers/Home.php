<?php

session_start();
?>

<?php
    class Home extends Controller{
        function display(){
            $move = $this->model("SinhvienModel");
            $query = "SELECT * FROM `thongtin`";
            $rows = $move->getListSinhVien($query);
            $this->view("layout",["datasv"=>$rows,"page"=>"HomeView"]);
            
        }
        function add(){
            $this->view("layout",["page"=>"AddView"]);

            $move = $this->model("SinhvienModel");
            $model->add_SinhVien($_POST["hoten"],$_POST["mssv"],$_POST["ngaysinh"]);
            if(isset($_POST["btn_insert"])){
                if(empty($_POST["hoten"]) == true or empty($_POST["mssv"]) == true or empty($_POST["ngaysinh"]) == true){
                    $chain = array($_POST["hoten"],$_POST["mssv"],$_POST["ngaysinh"]);
                    $_SESSION["chain"] = $chain;
                    $_SESSION["message"] = "Không thể để trống!";
                    header("Location: insert.php");
                    return $_SESSION["chain"];
                  }
                  if(isset($_SESSION["chain"])){
                    session_unset();
                  }
                  if($model->add_SinhVien($_POST["hoten"],$_POST["mssv"],$_POST["ngaysinh"])==0){
                    $_SESSION["chain"] = array($_POST["hoten"],$_POST["mssv"],$_POST["ngaysinh"]);
                    $_SESSION["message"] = "Trùng Mã sinh viên!";
                    header("Location: insert.php");
                  }

            }
            
            
        }
    } 
?>
