# Sayıyı Binliğe Yuvarlama

```
$sayi        = 10,347;
$sayikontrol = str_replace(',', '', $sayi);

  if ($sayikontrol > 999) {
      echo number_format(str_replace(',', '.', $sayi), 1) . "K";
  }
  else {
      echo $sayi;
  }
```

#### Eğer sayı 1000 veya üzerinde ise
Ekran Çıktısı

```
10.3K
```

#### Sayı 1000'in altında ise
Ekran Çıktısı

```
10,347
```
