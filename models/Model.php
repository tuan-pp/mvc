<?php
class Model 
{
    private $conn = null;
    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "news");
    }
    public function getNews(){
        $data = $this->conn->query("select * from news");
        if($data){
            $arr = array();
            while($row = $data->fetch_assoc()){
                array_push($arr, $row);
            }
            return $arr;
        }
        return null;
    } 
}
