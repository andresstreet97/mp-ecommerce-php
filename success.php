<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <header>
    </header>
    <body>
      <h1>Pago Aprobado</h1>
      <?php
        echo("
          <p>Payment Id : ".$_GET['payment_id']."</p></br>
          <p>Status : ".$_GET['status']."</p></br>
          <p>External reference : ".$_GET['external_reference']."</p></br>
          <p>Merchant Id : ".$_GET['merchant_order_id']."</p></br>
        ");
      ?>
    </body>
    <footer>
    </footer>
  </body>
</html>
