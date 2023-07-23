<?php include "header.php"?>
<div class="container">
    <div class="row">
        <?php foreach ($products as $product){?>
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo $product['image']?>" alt=""/>
                <div class="card-body">
                    <h1><?php echo $product['title']?></h1>
                    <a href=" action.php?page=detail&id=<?php echo $product['id']?>" class="btn btn-success">Read More</a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<?php include "footer.php"?>