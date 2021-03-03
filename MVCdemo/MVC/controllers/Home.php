<?php
    class Home extends Controller{
        function SayHi(){
            $move = $this->model("SinhvienModel");
            $rows = $move->display();
            $this->view("layout",["datasv"=>$rows]);
            // foreach($rows as $row){
            //     echo $row["hoten"];
            // }
        }
        function Show(){
            echo "Home - sayba 1gwfdsu1v";
        }
    } 
?>
