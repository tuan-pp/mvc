<?php
require_once "Model.php";
require_once "View.php";

class Controller
{
    private $db = null;
    private $view = null;
    public function __construct() {
        $this->db = new Model();
        $this->view = new View();
    }
    public function getNews()
    {
        $new = $this->db->getNews();
        $this->view->showNews($new);
    }
    public function upload()
    {
        echo "Hello";
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["file_upload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if($_POST["submit"]) {
                $check = getimagesize($_FILES["file_upload"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }else{
                echo "khong co file";
            }
    }
}
