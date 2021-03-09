<?php
ob_start();
    class update extends Controller {
        public $Umodel;
        function __construct(){
            $this->Umodel = $this->model("SinhvienModel");
        }
        function display(){
            $this->view("layout",["page"=>"AddView"]);
            
            
            
        }
        function insert(){
            echo "ádkijasdlk";
            // if(isset($_POST["btn_insert"])){
            //     if(empty($_POST["hoten"]) == true or empty($_POST["mssv"]) == true or empty($_POST["ngaysinh"]) == true){
            //         $chain = array($_POST["hoten"],$_POST["mssv"],$_POST["ngaysinh"]);
            //         $_SESSION["chain"] = $chain;
            //         $_SESSION["message"] = "Không thể để trống!";
            //         header("Refresh:0");
            //         return $_SESSION["chain"];
                    
            //       }
                  
            //       if($this->Umodel->add_SinhVien($_POST["hoten"],$_POST["mssv"],$_POST["ngaysinh"])==0){
            //         $_SESSION["chain"] = array($_POST["hoten"],$_POST["mssv"],$_POST["ngaysinh"]);
                    
            //         $_SESSION["message"] = "Trùng Mã sinh viên!"; 
            //         header("Refresh:0");
            //         return $_SESSION["chain"];
            //       }
            //       if(isset($_SESSION["chain"])){
            //         session_unset();
            //       }
            //       $_SESSION["message"] = "Thêm thành công!";
            //       header("Refresh:0");
                  

            // }
            $this->view("layout",["page"=>"AddView"]);
        }
        
        
    }

ob_flush();
?>