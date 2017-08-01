$sayi        = $getir['sayi']; // $sayi = 10,347
$sayikontrol = str_replace(',', '', $sayi);

  // 1000 ve üzeri ise
  if ($sayikontrol > 999) {
      echo number_format(str_replace(',', '.', $sayi), 1) . "K"; // ÇIKTI: 10.3K
  }
  // 1000'nin altında ise
  else {
      echo $sayi; // NORMAL ÇIKTI
  }
