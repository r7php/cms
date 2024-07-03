<?php


class Config extends model{

// public function __construct(){
//     $array = array();
//      $sql = "SELECT * FROM config";
//      $sql = $this->conn->query($sql);
//      if($sql->rowCount()>0){
//         foreach($sql->fetchAll() as $c){
//             $array[$c["nome"]] = $c["valor"];
//         }
//      }

//     return $array;

//     }

    public function getConfig(){
        $array = array();
         $sql = "SELECT * FROM config";
         $sql = $this->db->query($sql);
         foreach($sql->fetchAll() as $c){
            $array[$c["name"]] = $c["valor"];
        }
        
        //  if($sql->rowCount()>0){
        //     foreach($sql->fetchAll() as $c){
        //         $array[$c["name"]] = $c["valor"];
        //     }
        //  }
    
        return $array;
    
        }


}



?>