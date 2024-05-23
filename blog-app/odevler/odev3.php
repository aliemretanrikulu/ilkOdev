<?php 

$data = getData();
$isactiveMoviesCount = 0;

foreach($data["movies"] as $movie){
    if($movie["is-active"]){
        $isactiveMoviesCount++;
    }
}

$categoryCount = count($data["categories"]);
$ozet = $categoryCount. 'kategoride'. $isactiveMoviesCount . 'film listelenmiştir';
const baslik = "Popüler Filmler"; ?>

<h1 class="mb-4"><?php echo baslik?></h1>
<p class="text-muted">
    <?php echo $ozet?> 
</p>
