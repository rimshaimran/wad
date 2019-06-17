<!DOCTYPE html>
<?php
$con=mysqli_connect("localhost","root","","techboxdb");
if(isset($_POST['insert_cat']))
{
    $title=$_POST['category_title'];

    print_r($_POST);
    $q = "insert into categories(category_title)
values ('$title')";
    echo $q;
    mysqli_query($con,$q);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Startup</title>
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span>
        Product </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Category </span>
                    Title:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="pro_title" name="category_title"
                           placeholder="Enter Category Title">
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <button type="submit" name="insert_cat" class="btn btn-primary btn-block"><i class="fas fa-plus"></i>
                    Insert Now
                </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>