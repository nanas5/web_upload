<?php
    session_start();
    require_once 'tea_database.php';

    class ITEM extends DAtabase{
        public function insertItem($iname,$price,$quant){
            $sql = "INSERT INTO items(item_name,item_price,quantity)
                    VALUES('$iname', '$price', '$quant')";
            if($this->conn->query($sql)){
                return 1;
            }else{
                echo "Insertion failed".$this->conn->error;
                return 0;
            }
        }
    }
?>