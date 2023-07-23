<?php include "header.php"?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product ) {?>
           <div class="col-md-4 mb-4">
               <div class="card">
                   <img src="<?php echo $product['image']?>" alt="" height="350">
                   <div class="card-body">
                       <hr/>
                       <h1><?php echo $product['title']?></h1>
                       <p></p>
                       <a href=" action.php?page=detail&id=<?php echo $product['id']?>" class="btn btn-success">Read More</a>
                   </div>
               </div>
           </div>
            <?php }?>
        </div>
    </div>
</section>
<?php include "footer.php"?>