<?php

/**
 * 
 * @author Ardhana <zeebploit212@gmail.com>
 * @package Scraper Dunia21
 * 
 */

require_once "vendor/autoload.php";
header("Content-type: application/json");
header("Scraper: Dunia21.net");
header("Version: 1.0 Beta");

$dunia21 = new \Scrape\Dunia21\Scrape;

if (isset($_GET["cari_film"], $_GET["query"])) {
    echo $dunia21->Cari_Film($_GET["query"])->json()->get_result();
}

elseif(isset($_GET["info_film"], $_GET["query"])){
    echo $dunia21->Info_Film($_GET["query"])->json()->get_result();
}

elseif(isset($_GET["genre"], $_GET["query"])){
    echo $dunia21->Genre($_GET["query"])->json()->get_result();
}

elseif (isset($_GET["tahun"], $_GET["query"])) {
    echo $dunia21->Tahun_Film($_GET["query"])->json()->get_result();
}

elseif(isset($_GET["film_populer"])){
    echo $dunia21->Film_Populer()->json()->get_result();
}

elseif (isset($_GET["film_bluray"])) {
    echo $dunia21->Film_Bluray()->json()->get_result();
}

else{
    echo $dunia21->json(["error" => true, "error_msg" => "kesalahan parameter"])->get_result();
}

?>