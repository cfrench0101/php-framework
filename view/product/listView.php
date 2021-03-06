
        <!-- page content -->
        <div class="col-md-9">
          <div class="well pageContent">
            <span class="pageTitle"><h3>Gallery</h3></span>
            <hr>


<?php foreach ($products as $key => $product) {
  $productUrl   = APP_DOC_ROOT . '/product/view/' . $product['id'];
  $productImage = APP_IMG . '/products/' . $product['id'] . '.jpg';
  echo "<br>" . "<br>";
?>

            <div class="row product">
              <div class="col-md-3">
                <div class="productImage">
                <a href="<?= $productUrl; ?>"><img
                  class="img-responsive"
                  src="<?= $productImage; ?>"
                /></a>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row">
                <div class="productTitle">
                  <a href="<?= $productUrl; ?>"><h3><?= $product['name']; ?><h3></a>
                </div>
              </div>
              <div class="row">
                <div class="productPrice">
                  <?= '$' . $product['price']; ?>
                  </div>
                </div>
              </div>
            </div>

<?php } ?>

          </div>
        </div>
        <!-- end page content -->
