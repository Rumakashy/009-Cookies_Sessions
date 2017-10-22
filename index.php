<?php require 'inc/head.php'; ?>

<?php

if (!empty($_COOKIE["panier"])) {
	$panier = $_COOKIE["panier"]; 
}

?>

<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
            <form action="addCart.php" method="POST">
                <input type="hidden" name="addToCart" value="46">
                <button type="submit" class="btn btn-primary btn-bottom-right">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
            <form action="addCart.php" method="POST">
                <input type="hidden" name="addToCart" value="36">
                <button type="submit" class="btn btn-primary btn-bottom-right">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
            <form action="addCart.php" method="POST">
                <input type="hidden" name="addToCart" value="58">
                <button type="submit" class="btn btn-primary btn-bottom-right">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
            <form action="addCart.php" method="POST">
                <input type="hidden" name="addToCart" value="32">
                <button type="submit" class="btn btn-primary btn-bottom-right">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </button>
            </form>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
