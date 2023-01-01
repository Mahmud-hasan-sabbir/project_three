<?php include 'includes/header.php'?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-danger text-uppercase">all blogs site</h2>
            </div>
            <?php  foreach ($addBlog as $blog) { ?>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="<?php echo $blog['image']?>" alt="" class="card-img-top" style="height: 250px">
                    <div class="card-body">
                        <h3><?php echo $blog['title']?></h3>
                        <p><?php echo substr_replace($blog['description'],'.....',200)?></p>
                        <a href="action.php?page=details&&id=<?php echo $blog['id'] ?>" class="btn btn-outline-danger">View</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'?>
