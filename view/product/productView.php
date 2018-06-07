
        <!-- page content -->
        <div class="col-md-9">
          <div class="well pageContent">


            <div class="product">
              <div class="productTitle"><h3><?= $product['name'];?><h3></div>
              <div class="productDetailImage">
                <img
                class="img-responsive"
                  src="<?= $productImage; ?>"
                />
              </div>
              <div class="productDescription">Description: <?= $product['description'];?></div>
              <div class="productInStock">In Stock: <?= $product['qty'];?></div>
              <div class="productCost">Price: $ <?= $product['price'];?></div>
            </div>

          </div>
        </div>
        <!-- end page content -->
