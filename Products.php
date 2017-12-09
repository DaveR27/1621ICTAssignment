<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Frank's Plumbing</title>
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" media="screen and (min-device-width:451px)" href="StyleSheet.css"/>
        <link rel="stylesheet" type="text/css" media="screen and (max-device-width:450px)" href="mobile.css"/>
        <?php
            $search=null;
            require_once "queryDb.php";
            if (isset($_GET['products'])) {
            $search = $_GET["products"];
            }
            $data = getProducts($search);
        ?>
    </head>
    <body>
        <div class="mainContainer">
            <div class="heading">
                <header>Products</header>
            </div>
          <!--Navigation throughout the webpages-->
            <div class="navBar">
                <nav>
                    <a href="root.php" class="button">Home Page</a>
                    <a href="ContactUs.html" class="button">Contact Us</a>
                    <a href="Gallery.html" class="button">Gallery</a>
                    <a href="Products.php" class="button">Products</a>
                </nav>
            </div>
          <!-- Sets up search bar for products page-->
            <div class="contentBubble" id="searchBubble">
              <div class="container" id="search">
                  <form class="form-inline" method="get" action="Products.php">
                      <fieldset>
                          <label>Search</label>
                          <input type="text" class="form-control" id="products" name="products"
                                 placeholder="Product Name"/>
                          <input type="submit" value="Search" class="btn-default">
                      </fieldset>
                  </form>
              </div>
              <!--Gives table for which the products are stored in-->
              <div class="container" id="data">
                  <table>
                      <thead>Products sold by Frank's</thead>
                      <tr>
                          <th>Product Name</th>
                          <th>Manufacturer</th>
                          <th>Description</th>
                          <th>Price</th>
                      </tr>
                      <?php
                          foreach ($data as $data){
                              echo "<tr>";
                              echo "<td>".$data['PRODUCTNAME']."</td>";
                              echo "<td>".$data['MANUFACTURER']."</td>";
                              echo "<td>".$data['DESCRIPTION']."</td>";
                              echo "<td>".$data['PRICE']."</td>";
                          }
                      ?>
                  </table>
              </div>
          </div>
        </div>
    </body>
</html>
