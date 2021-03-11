
<?php

class delete extends Controller {
    public $Umodel;
    function __construct(){
        $this->Umodel = $this->model("SinhVienManagerModel");
    }
    function display($id){
        if($this->Umodel->remove_SinhVien($id)){
            echo "<script>alert('Xóa thành công!');</script>"; 
            header("refresh: 0; url = ../../home/display");
        }else{
            echo "<script>alert('Xóa thất bại!');</script>"; 
        }
          
        
    }
    
    
}
?>












<?php
    
    
    
    


?>