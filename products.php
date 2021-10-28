<html>
 <head>
  <title>My Online Store</title>
 </head>
 <body>
    <ul>
        <li><a href="/product.php?<?php echo http_build_query(['id' => 1]) ?>">iPhone</a></li>
        <li><a href="/product.php?id=2">Pixel Phone</a></li>
        <li><a href="/product.php?id=3">Samsung</a></li>
    </ul>
 </body>
</html>
