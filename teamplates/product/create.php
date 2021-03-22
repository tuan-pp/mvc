<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index_product.php">
              <img style = "" src="https://vuighe.net/assets/img/logo_v6.png" alt="">
            </a>
            
    </nav>

    <div class="container">
        <div class="card">
            <div class="card--header">
                <h2 style="margin-left: 300px; margin-top: 20px">Thêm sản phẩm</h2>
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
                        <button name="sbm" class="btn--submit" type="submit">Thêm mới</button>
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
margin-left: 350px;
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

.navbar-light .navbar-nav .nav-link {
    color: rgba(0,0,0,.55);
}

.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0;
}
.nav-link {
    display: block;
    padding: .5rem 1rem;
    text-decoration: none;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}
a {
    color: #0d6efd;
    text-decoration: underline;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.navbar-nav {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body {
    margin: 0;
    font-family: var(--bs-font-sans-serif);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}
</style>