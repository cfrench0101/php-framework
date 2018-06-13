
        <!-- page content -->
        <div class="col-md-9">
          <div class="well pageContent">

            <div class="cart"><h3>Shopping Cart</h3></div>
            <hr>

            <div class="table">
              <table cellpadding="10" cellspacing="1">
                <tbody>

                  <tr>
                    <th><strong>Image        </strong></th>
                    <th><strong>Name         </strong></th>
                    <th><strong>Quantity     </strong></th>
                    <th><strong>Size         </strong></th>
                    <th><strong>Price        </strong></th>
                    <th><strong>Action       </strong></th>
                  </tr>

<?php
  foreach ($_SESSION['cart'] as $key=>$value){
?>

                  <tr>
                    <td><?= $productImage;                      ?></td>
                    <td><?= $product['name'];                   ?></td>
                    <td><?= $formArray['qty'];                  ?></td>
                    <td><?= $formArray['size'];                 ?></td>
                    <td align=right><?= "$" . $product['cost']; ?></td>
                    <td><a class="btn cart-action">Remove Item</a></td>
                  </tr>

<?php
  $cartTotal += ($product['cost'] * $formArray['qty']);
  }
?>

                  <tr>
                    <td colspan="6" align=right><strong>Total:</strong><?= " $" . $cartTotal; ?></td>
                  </tr>

                </tbody>
              </table>
            </div>

            <div>
              <form>
                <a class="btn btn-primary" href="<?php echo APP_DOC_ROOT . '/cart/clear'; ?>">Empty Cart</a>
              </form>
            </div>

          </div>
        </div>
        <!-- end page content -->
