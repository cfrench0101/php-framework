<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );


switch ( $route->getAction() ) {

    case 'clear':
        $_SESSION['cart'] = 0;
        unset($_SESSION['cart']);
        header('Location: ' . APP_DOC_ROOT . '/cart/cartView');

    case 'view':
        $categories = listCategories();
        $productId = $route->getParams()[2];
        $product = getProduct($productId);
        $productImage = APP_IMG . '/products/' . $product['id'] . '.jpg';
        include( APP_VIEW .'/cart/listSubNav.php' );
        include( APP_VIEW .'/cart/cartView.php' );
        break;

    case 'remove':
        $categories = listCategories();
        $productId = $route->getParams()[2];
        $product = getProduct($productId);
        removeCart($_POST, $productId);
        $productImage = APP_IMG . '/products/' . $product['id'] . '.jpg';
        include( APP_VIEW .'/cart/listSubNav.php' );
        include( APP_VIEW .'/cart/cartView.php' );
        break;

    default:
        $categories = listCategories();
        $productId = $route->getParams()[2];
        $product = getProduct($productId);
        $productImage = APP_IMG . '/products/' . $product['id'] . '.jpg';
        include( APP_VIEW .'/cart/listSubNav.php' );
        include( APP_VIEW .'/cart/cartView.php' );
        break;
}


# Include html footer
include( APP_VIEW . '/footer.php' );


// Local functions

function removeCart($formArray, $productId) {
    if(isset($formArray['qty'])) {
        if (isset($_SESSION['cart'][$productId])) {
          $_SESSION['cart'][$productId] -= $formArray['qty'];
        }
        else {
          $_SESSION['cart'][$productId] = $formArray['qty'];
        }
    }
}

function getProduct($productId) {

  $sql = "SELECT
            *
          FROM
            product
          WHERE
            id = ?";

  $dbObj = new db();
  $dbObj->dbPrepare($sql);
  $dbObj->dbExecute([$productId]);
  $product = $dbObj->dbFetch("assoc");

  return $product;

}

function listCategories() {

  $sql = "SELECT
            *
          FROM
            category
          ORDER BY
            id";

  $dbObj = new db();
  $dbObj->dbPrepare($sql);
  $dbObj->dbExecute();
  $category = $dbObj->dbFetch("all");

  return $category;

}

function listProducts($categoryId) {

  $sql = "SELECT
            *
          FROM
            product
          WHERE
            category = ?
          ORDER BY
            id";

  $dbObj = new db();
  $dbObj->dbPrepare($sql);
  $dbObj->dbExecute([$categoryId]);
  $products = $dbObj->dbFetch("all");

  return $products;

}
