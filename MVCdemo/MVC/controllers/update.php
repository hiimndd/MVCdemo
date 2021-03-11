<?php

class update extends Controller {
    public $Umodel;
    function __construct(){
        $this->Umodel = $this->model("SinhVienManagerModel");
    }
    function display($id){
        $query = "SELECT * FROM thongtin Where ID = '$id'";
        $sv = $this->Umodel->getListSinhVien($query);
        $this->view("layout",["page"=>"EditView","id"=>$id,"datasv"=>$sv]);
        
        
        
    }
    function edit($id){
        $query = "SELECT * FROM thongtin Where ID = '$id'";
        $sv = $this->Umodel->getListSinhVien($query);
        $magoc = $sv[0]->get_mssv();
        if(isset($_POST["btn_update"])){
            if(empty($_POST["hoten"]) == true or empty($_POST["mssv"]) == true or empty($_POST["ngaysinh"]) == true){
                $message = "Không để trống thông tin sinh viên";
                $this->view("layout",["page"=>"EditView","id"=>$id,"datasv"=>$sv,"message"=>$message]);
                return 0;
            }
            if($this->Umodel->edit_SinhVien($id,$magoc,$_POST["hoten"],trim($_POST["mssv"]),$_POST["ngaysinh"]) == 0){
                $message = "Trùng khóa chính";
                $this->view("layout",["page"=>"EditView","id"=>$id,"datasv"=>$sv,"message"=>$message]);
                return 0;
            }
            
        }
        header("Location:../../home/display");
          
        
    }
    
    
}
?>