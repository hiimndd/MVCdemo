<?php
ob_start();
    class insert extends Controller {
        public $Umodel;
        function __construct(){
            $this->Umodel = $this->model("SinhVienManagerModel");
        }
        function display(){
            $this->view("layout",["page"=>"AddView"]);
            
            
            
        }
        function add(){
            $this->view("layout",["page"=>"AddView"]);
            if(isset($_POST["btn_insert"])){
                
                if(empty($_POST["hoten"]) == true or empty($_POST["mssv"]) == true or empty($_POST["ngaysinh"]) == true){
                    $chain = array($_POST["hoten"],$_POST["mssv"],$_POST["ngaysinh"]);
                    $_SESSION["chain"] = $chain;
                    $_SESSION["massage"] = "Không thể để trống!";
                    header("Refresh:0");
                    return $_SESSION["chain"];
                    
                  }
                  
                  if($this->Umodel->add_SinhVien($_POST["hoten"],$_POST["mssv"],$_POST["ngaysinh"])==0){
                    $_SESSION["chain"] = array($_POST["hoten"],$_POST["mssv"],$_POST["ngaysinh"]);
                    
                    $_SESSION["massage"] = "Trùng Mã sinh viên!"; 
                    header("Refresh:0");
                    return $_SESSION["chain"];
                  }
                  
                  if(isset($_SESSION["chain"])){
                    session_unset();
                  }
                  
                  
                  header("Refresh:0");
                  
                  
            }
            
            
        }
        
        
    }

ob_flush();
?>