<?php

$kategori = array("Macera", "Dram", "Komedi", "Korku");
array_push($kategori, "Fantastik");
sort($kategori);

$filmler = array(
    "1" => array(
        "baslik" => "Paper Lives",
        "aciklama" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
        "resim" => "1.jpeg",
        "yorumSayisi" => "Yorum: 55",
        "begeniSayisi" => "Beğeni: 85",
        "vizyon" => "Viyonda: Evet"
    ),
    "2" => array(
        "baslik" => "Walking Dead",
        "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "resim" => "2.jpeg",
        "yorumSayisi" => "Yorum: 55",
        "begeniSayisi" => "Beğeni: 85",
        "vizyon" => "Viyonda: Evet"
    )
);

$yeni_film = array(
    "baslik" => "Lucifer",
    "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
    "resim" => "3.jpeg",
    "yorumSayisi" => "Yorum: 55",
    "begeniSayisi" => "Beğeni: 85",
    "vizyon" => "Viyonda: Evet"
);

foreach ($filmler as &$film) {
    $film['aciklama'] = ucfirst(strtolower($film['aciklama']));
}

foreach ($filmler as &$film) {
    $aciklama = $film['aciklama'];
    if (strlen($aciklama) > 50) {
        $aciklama = substr($aciklama, 0, 50) . "...";
    }
    $film['aciklama'] = ucfirst(strtolower($aciklama));
}

foreach ($filmler as &$film) {
    $url = strtolower(str_replace(' ', '-', $film['baslik']));
    $film['url'] = 'http://www.ornek.com/filmler/' . $url;
}

define('BASLIK', 'Film Başlığı');

$filmler["0"] = $yeni_film;

?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Film Listesi</title>
</head>

<body>
    <div class="container my-3">
        <h1><?php echo BASLIK; ?></h1>
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <?php foreach ($kategori as $kategoriler): ?>
                        <li class="list-group-item"><?php echo $kategoriler; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-9">
                <?php foreach ($filmler as $film): ?>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-3">
                                <img class="img-fluid" src="img/<?php echo $film['resim']; ?>" alt="<?php echo $film['baslik']; ?>">
                            </div>
                            <div class="col-9">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="<?php echo $film['url']; ?>"><?php echo $film['baslik']; ?></a>
                                    </h5>
                                    <p class="card-text">
                                        <?php echo $film['aciklama']; ?>
                                    </p>
                                    <div>
                                        <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                        <span class="badge bg-success"><?php echo $film['yorumSayisi']; ?></span>
                                        <span class="badge bg-success"><?php echo $film['begeniSayisi']; ?></span>
                                        <span class="badge bg-success"><?php echo $film['vizyon']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>