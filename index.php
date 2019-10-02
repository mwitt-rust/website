<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="MW super fun Rust Server">
    <meta name="keywords" content="Rust, rust server, mwitt rust server, mwitt, fun rust server">
    <meta name="author" content="Derek Milbert">
    <title>MW Rust-Server | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">MW</span> Rust-Server</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="./index.php">Home</a></li>
            <li><a href="./join_server.html">Join Server</a></li>
            <li><a href="./donate.html">Donate</a></li>
            <li><a href="./store.html">Store</a></li>
            <li><a href="#">Steam Group</a></li>
            <li><a href="#">Discord</a></li>
          </ul>
      </div>
    </header>
    <section id="showcase">
      <div class="container">
        <h1> </h1>
        <p>
          
        </p>
      </div>
    </section>
    <section id="devider">
      <div class="container">

      </div>
    </section>
    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="./img/icon_1.jpg">
          <h3>Vanilla+ x2</h3>
          <?php
            // Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://rust-servers.net/api/?object=servers&element=detail&key=k0T76bh5bNYIjCNVMAI3XYTJZljF3vVYeqj');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($ch);
            $pos = strpos($result, '"is_online"');
            $pos_1 = strpos($result, ",", $pos);
            $pos_1 = $pos_1 - $pos;
            $server_online = substr($result, $pos, $pos_1);
            if ($server_online == '"is_online":"1"') {
              echo "<h3 style=\"border: 3px solid #099610; background: #099610\">Online</h3>";
            } else {
              echo "<h3 style=\"border: 3px solid rgb(219, 49, 43); background: rgb(219, 49, 43)\">Offline</h3>";
            }
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close($ch);
          ?>
        </div>
        <div class="box">
          <img src="./img/icon_1.jpg">
          <h3>Vanilla+ x2</h3>
          <?php
            // Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://rust-servers.net/api/?object=servers&element=detail&key=k0T76bh5bNYIjCNVMAI3XYTJZljF3vVYeqj');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($ch);
            $pos = strpos($result, '"is_online"');
            $pos_1 = strpos($result, ",", $pos);
            $pos_1 = $pos_1 - $pos;
            $server_online = substr($result, $pos, $pos_1);
            if ($server_online == '"is_online":"1"') {
              echo "<h3 style=\"border: 3px solid #099610; background: #099610\">Online</h3>";
            } else {
              echo "<h3 style=\"border: 3px solid rgb(219, 49, 43); background: rgb(219, 49, 43)\">Offline</h3>";
            }
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close($ch);
          ?>
        </div>
        <div class="box">
          <img src="./img/icon_1.jpg">
          <h3>Vanilla+ x2</h3>
          <?php
            // Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://rust-servers.net/api/?object=servers&element=detail&key=k0T76bh5bNYIjCNVMAI3XYTJZljF3vVYeqj');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($ch);
            $pos = strpos($result, '"is_online"');
            $pos_1 = strpos($result, ",", $pos);
            $pos_1 = $pos_1 - $pos;
            $server_online = substr($result, $pos, $pos_1);
            if ($server_online == '"is_online":"1"') {
              echo "<h3 style=\"border: 3px solid #099610; background: #099610\">Online</h3>";
            } else {
              echo "<h3 style=\"border: 3px solid rgb(219, 49, 43); background: rgb(219, 49, 43)\">Offline</h3>";
            }
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close($ch);
          ?>
        </div>
    </section>
    <section>
      <div class="container">
        <div class="wrapper">
          <h1 style="text-align: center; font-size: 38px">Become a Member</h1>
          <div class="single-price">
            <h1>Free</h1>
            <div class="price">
              <h2>0€</h2>
            </div>
            <div class="deals">
              <h4>AMAZING BENEFIT #1</h4>
              <h4>AMAZING BENEFIT #2</h4>
              <h4>AMAZING BENEFIT #3</h4>
              <h4>AMAZING BENEFIT #4</h4>
            </div>
            <a href="join_server.html">Join Server</a>
          </div>
          <div class="single-price">
            <h1>Standard</h1>
            <div class="price">
              <h2>5€</h2>
            </div>
            <div class="deals">
              <h4>AMAZING BENEFIT #1</h4>
              <h4>AMAZING BENEFIT #2</h4>
              <h4>AMAZING BENEFIT #3</h4>
              <h4>AMAZING BENEFIT #4</h4>
            </div>
            <a href="store.html">Go To Store</a>
          </div>
          <div class="single-price">
            <h1>VIP</h1>
            <div class="price">
              <h2>10€</h2>
            </div>
            <div class="deals">
              <h4>AMAZING BENEFIT #1</h4>
              <h4>AMAZING BENEFIT #2</h4>
              <h4>AMAZING BENEFIT #3</h4>
              <h4>AMAZING BENEFIT #4</h4>
            </div>
            <a href="store.html">Go To Store</a>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <p>MW Rust-Server Copyright &copy; 2019</p>
    </footer>
  </body>
</html>