<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
</head>
<body>
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body border-0">
                        <ul class="navbar navbar-expand">
                            <li class=" navbar-nav w-25"><a href="" class="nav-link"><i class="fa-solid fa-bars"></i></a></li>
                            <li class="navbar-nav"><a href="" class="nav-link"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                        </ul>
                        <p>রোববার, ০৪ জুন ২০২৩</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body border-0">
                        <a href="action.php?page=home" class="mx-auto"><img src="assets/img-2/1.jpg" alt="" height="100"></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body border-0">
                        <ul class="navbar-nav">
                            <li class="navbar navbar-expand"><i class="fa-sharp fa-solid fa-bell"></i></li>
                            <li class="mx-4"><button class="w-25 ms-auto">Login</button></li>
                        </ul>
                        <p class="ms-auto">English Edition</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <nav class="card card-body col">
        <div class="container">
            <div class="row">
                <div class="card card-body border-0">
                    <ul class="navbar navbar-expand-md mx-auto">
                        <?php foreach ($categories as $category){?>
                            <li class="navbar-nav"><a href="action.php?page=category&id=<?php echo $category['id'];?>" class="nav-link"><?php echo $category['name'];?></a></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>