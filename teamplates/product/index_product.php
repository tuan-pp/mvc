 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
</head>


<body>
<div class="container">
    <div class="card">
        <div class="card--header">
            <div class="card--header--left">
            <h1 >Danh sách sản phẩm</h1>
            </div>
            <div class="card--header--right">
            <a href="create.php"> <h3>Thêm mới</h3></a>
            </div>
            
        </div>
        
        <div class="card--body">
            <table  class="table">
                <thead padding = 5px class="thead">
                    <tr >
                        <th >ID sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Nội dung sản phẩm</th>
                        <th width = 50px; > Sửa </th>
                        <th width = 50px;> Xoá</th>
                    </tr>

                </thead>

                <!-- <tbody>
                    //<?php
                    //$i = 1;
                       // while($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td> //<?php// echo $i++  ?> </td>
                            <td> //<?php//  echo $row['name_sp'] ?> </td>
                            <td> <?php //echo $row['gia_sp']  ?> </td>
                            <td>
                                <img style="width:100px;" src="image/<?php// echo $row['image'] ?> " >
                            </td>
                            <td> <?php // echo $row['content'] ?> </td>
                            <td> <a href="index.php?page_layout=sua&id=<?php //echo $row['id_sp']; ?>"> <h4>Sửa</h4> </a></td>
                            <td>  <a href="index.php?page_layout=xoa&id=<?php// echo $row['id_sp']; ?>"><h4>Xoá</h> </a></td>
                        </tr>

                    <?php //  } ?>  
                </tbody> -->
            </table>
            
        </div>
        <div class="btn--primary">
                
        </div>
    </div>
</body>