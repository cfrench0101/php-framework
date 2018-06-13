
        <!-- page content -->
        <div class="col-md-9">
          <div class="well pageContent">


            <div class="product">
              <div class="productTitle"><h3><?= $product['name'];?><h3></div>
              <hr>

              <div class="productDetailImage">
                <img
                  class="img-responsive"
                  src="<?= $productImage; ?>"
                />
              </div>
              <br>
              <div class="productDescription"><strong>Description:</strong> <?= $product['description'];?></div>
              <div class="productInStock"><strong>In Stock:</strong> <?= $product['qty'];?></div>
              <div class="productCost"><strong>Price:</strong> $ <?= $product['price'];?></div>
              <br>
              <form
                method="post"
                action="<?= APP_DOC_ROOT . '/product/add/' . $product['id']; ?>"
              >
              <strong>Qty:</strong>
              <select name="qty">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <strong>Size:</strong>
              <select name="size">
                <option value="1">8x10</option>
                <option value="2">16x20</option>
                <option value="3">22x30</option>
              </select>
              <input
                name="add"
                class="btn btn-primary"
                type="submit"
                value="Add to Cart"
              >
            </form>
            </div>

          </div>
        </div>
        <!-- end page content -->
