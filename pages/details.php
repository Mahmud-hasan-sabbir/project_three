<?php include 'includes/header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center text-danger">Details page</h3>
            </div>
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <img src="<?php echo $details['image']?>" alt="" class="card-img-top" style="height: 300px">
                    <div class="card-body">
                        <h3><?php echo $details['title']?></h3>
                        <p><?php echo $details['description']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'?>
