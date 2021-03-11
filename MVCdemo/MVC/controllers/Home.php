
<?php

    class Home extends Controller{
        function display(){
            $move = $this->model("SinhVienManagerModel");
            $query = "SELECT * FROM `thongtin`";
            $rows = $move->getListSinhVien($query);
            $this->view("layout",["datasv"=>$rows,"page"=>"HomeView"]);
            
        }
        
    } 


?>
