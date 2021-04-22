<html>

<head>
  <title>contoh Penggunaan IF</title>
</head>

<body>
  <?php
  if (isset($_POST['submit'])) {
    $total_beli = $_POST['total_beli'];
    $diskon = 0;
    if ($total_beli >= 200000) {
      $diskon = 0.1;
    } else if ($total_beli >= 100000) {
      $diskon = 0.05;
    } else {
      $diskon = 0.01;
    }
  }
  ?>
  <form method="post" action="latihan2.php">
    Besar Pembelian :
    <input type=text value="<?php echo $total_beli; ?>" name=total_beli><br><br>
    <input type=submit name="submit" value="Tentukan Diskon">
  </form>
  <br />
  <?php if (isset($_POST['submit'])) {
    $diskon = $diskon * intval($total_beli);
    printf("Diskon = %s <br>\n", $diskon);
    printf("Pembayaran = %s <br>\n", $total_beli - $diskon);
  } else {
    printf("Belum ada operasi");
  } ?>
</body>

</html>