<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if($_POST["name_sp"]!= '') {
        $name_sp = $_POST['name_sp']; 
    }
    if($_POST["gia_sp"] != '') { 
        $gia_sp = $_POST['gia_sp'];
    }
    if($_FILES["image"]['name'] != '') { 
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        
    }
    if($_POST["content"] != '') {
            $content = $_POST['content']; 
    }

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO danh_sach_sp (name_sp , gia_sp , image , content)
    VALUES('$name_sp' , $gia_sp , '$image' , '$content')" ;

    //$query = mysqli_query($connect, $sql);
    move_uploaded_file($image_tmp,'image/'.$image);
    //header('location: index.php');
    if ($connect->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công"; 
        header( "header:location: index.php");
    exit();
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

?>

<div class="container">
<div class="card">
    <div class="card--header">
        <h2 style="margin-left: 200px; margin-top: 20px">Sửa sản phẩm</h2>
    </div>
    <div class="card--body">
        <form action="" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label style="margin-left: 10px; margin-right: 20px;" for="">Tên sản phẩm </label>
                <input type="text" name="name_sp" class="form-control" required>
            </div>
            <br/>
            <div class="form-group">
                <label style="margin-left: 10px; margin-right: 22px" for="">Giá sản phẩm </label>
                <input type="number" name="gia_sp" class="form-control" required>
            </div>
            <br/>
            <div class="form-group">
                <label style="margin-left: 10px; margin-right: 17px" for="">Ảnh sản phẩm </label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <br/>
            <div class="form-group">
                <label style="margin-left: 10px; margin-right: 9px;" for="">Mô tả sản phẩm</label>
                <input type="text" name="content" class="form-control" required>
            </div>
            <br/>
            <div class="form--submit">
                <button name="sbm" class="btn--submit" type="submit">Sửa</button>
            </div>
            
        </form>
</div>
</div>


<style>
.card-header {
margin-left: 200px;
margin-right: 200px;
}

.form--submit {
width: auto;
height: 60px;
background-color: bule;
}

.btn--submit {
margin-left: 250px;
background-color: bule;
}

.container {
margin-left:30% ;
width: 40%;
height: 400px;
background-color: #2355;
}

.form-control {
width : 70%;
height: 35px;
font-size: 16px;

}
</style>