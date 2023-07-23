<?php include "header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="<?php echo $product['image']?>" alt="" height="350">
                        </div>
                    </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <hr/>
                        <p><?php echo $product['description']?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "footer.php"?>