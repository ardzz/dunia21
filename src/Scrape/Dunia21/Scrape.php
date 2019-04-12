<?php

/**
* 
* @author Ardhana <zeebploit212@gmail.com>
* @package Dunia21-Scraper
*
*/

namespace Scrape\Dunia21;

date_default_timezone_set("Asia/Jakarta");

class Scrape{

	public $base_url = "https://dunia21.me";
		
	function Format_Menit($time, $format = '%02d:%02d') {
		if ($time < 1) {
			return;
			 	}
			$hours = floor($time / 60);
			$minutes = ($time % 60);
			return sprintf($format, $hours, $minutes);
		}

	function get_string($str, $find_start, $find_end) {
		$start = @strpos($str,$find_start);
		if (!$start) {
			return false;
		}
		$length = strlen($find_start);
		$end    = strpos(substr($str,$start +$length),$find_end);
		return trim(substr($str,$start +$length,$end));
	}

	function json($data = null){
		((isset($data)) ? $this->return = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) : $this->return = json_encode($this->return, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
		return $this;
	}

	function get_result(){
		return $this->return;
	}
		
	function GET($url){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		$headers = array();
		$headers[] = 'Connection: keep-alive';
		$headers[] = 'User-Agent: '.\Scrape\Dunia21\UAgent::random();
		$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8';
		$headers[] = 'Accept-Language: id,en;q=0.9,en-US;q=0.8';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			return false;
		}else{
			return $result;
		}
	}
		
	function Cari($query){
		return $this->GET("https://search.layarkaca21.vip/?s=".rawurlencode($query));
	}
		
	function Cari_Film($query){
		$get = $this->GET("{$this->base_url}/?s=".urlencode($query));
		if (!$get) {
			$this->return = [
				"error" => true,
				"error_msg" => "unable to retrieve data"
			];
			return $this;
		}
		$data = $this->get_string(
			$get, 
			'<div class="search-wrapper"><header class="search-header"><h1>Hasil Pencarian: '.$this->get_string($get, '<h1>Hasil Pencarian: ', '</h1></header>').'</h1></header><div class="search-item"><div class="row"><div class="col-xs-3 col-sm-2 search-poster">',
			"<h2 class=\"title\">Hasil Pencarian Google :</h2>"
			);
		$data = explode('<div class="search-item"><div class="row"><div class="col-xs-3 col-sm-2 search-poster">', $data);
		$array = [];
		foreach($data as $video){
			preg_match("/<a href=\"(.*?)\" title=\"(.*?)\" rel=\"bookmark\"><img src=\"\/\/(.*?)\" alt=\"(.*?)\" class=\"img-thumbnail\"><\/a>/", $video, $match);
			$judul 		= $match[2];
			$thumbnail 	= "https://".$match[3];
			$url   		= $match[1];

			preg_match_all("/\/genre\/(.*?)\//", $video, $genre);
			$genre 		= $genre[1];
			$url 		= $this->get_string($video, '<h2><a href="', '"');
			$year 		= $this->get_string($video, "/year/", "/");
			$quality 	= $this->get_string($video, "/quality/", "/");
			$country 	= $this->get_string($video, "/country/", "/");
			$size 	 	= $this->get_string($video, "/size/", "/");
			$sutradara 	= $this->get_string($video, 'Sutradara:</strong>', '</p>');
			$bintang 	= $this->get_string($video, 'Bintang:</strong>', '</p>');
			
			array_push($array, 
			[ 
				"judul" 	=> $judul,
				"thumbnail" => $thumbnail,
				"tautan" 	=> $url,
				"genre" 	=> $genre,
				"tahun" 	=> $year,
				"negara" 	=> $country,
				"kualitas" 	=> $quality,
				"ukuran" 	=> $size,
				"sutradara" => $sutradara,
				"bintang" 	=> $bintang
			]
			);
		}
		
		$this->return = [ 
			"total_hasil" => count($array),
			"hasil_pencarian" => $array
		];
		return $this;
	}
		
	function Download_Film($url){
		$url = $this->base_url."/{$url}/";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://asdahsdkjajslkfbkaujsgfbjaeghfyjj76e8637e68723rhbfajkl.akurat.co/verifying.php');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "slug=".$this->Slug($url));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		$headers   = array();
		$headers[] = 'Host: asdahsdkjajslkfbkaujsgfbjaeghfyjj76e8637e68723rhbfajkl.akurat.co';
		$headers[] = 'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:60.0) Gecko/20100101 Firefox/60.0';
		$headers[] = 'Accept: */*';
		$headers[] = 'Accept-Language: en-US,en;q=0.5';
		$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
		$headers[] = 'X-Requested-With: XMLHttpRequest';
		$headers[] = 'Dnt: 1';
		$headers[] = 'Connection: close';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
		curl_close ($ch);
		$rapid 		= []; 
		$fcloud 	= []; 
		$doupload 	= []; 
		$mirror 	= []; 
		$go4 		= []; 
		$embed 		= [];
		$terra 		= [];
		$unknown 	= [];
		foreach(explode('<td align="center">', $result) as $url){
			if (preg_match("/nofollow/", $url)) {
				$urld = $this->get_string($url, 'href="', '"');
				$quality = $this->get_string($url, 'class="btnx btn-', '"');
					if (preg_match("/rapidvideo/", $url)) {
						array_push($rapid, ["url" => $urld, "quality" => $quality]);
					}
					elseif (preg_match("/filecloud/", $url)) {
						array_push($fcloud, ["url" => $urld, "quality" => $quality]);
					}
					elseif (preg_match("/douploads/", $url)) {
						array_push($doupload, ["url" => $urld, "quality" => $quality]);
					}
					elseif (preg_match("/mirrorace/", $url)) {
						array_push($mirror, ["url" => $urld, "quality" => $quality]);
					}
					elseif (preg_match("/go4up/", $url)) {
						array_push($go4, ["url" => $urld, "quality" => $quality]);
					}
					elseif (preg_match("/embedupload/", $url)) {
						array_push($embed, ["url" => $urld, "quality" => $quality]);
					}
					elseif (preg_match("/tera/", $url)) {
						array_push($terra, ["url" => $urld, "quality" => $quality]);
					}
					else{
						array_push($unknown, ["url" => $urld, "quality" => $quality]);
					}
				}
			}	
			$output = [
						"Rapidvideo" 	=> $rapid,
						"Filecloud" 	=> $fcloud,
						"Doupload" 		=> $doupload,
						"Mirrorace" 	=> $mirror,
						"Go4up" 		=> $go4,
						"Embedupload" 	=> $embed,
						"Terrafile"		=> $terra,
						"Unknown" 		=> $unknown
					];
					return $output;
	}
		
	function Slug($url){
		$get = $this->GET($url);
		if (!$get) {
			return false;
		}
		else{
			$slug = $this->get_string($get, "{slug:'","'}");
			return $slug;
		}
	}
		
	function Nama_Negara($code){
		if (empty($code) or !isset($code)) {
			return "Unknown";
		}
		$data = json_decode($this->GET("https://restcountries.eu/rest/v2/name/{$code}"), 1)[0]["name"];
		if (!$data) {
			return "Unknown";
		}else{
			return $data;
		}
	}
		
	function Info_Film($url){
		$get = $this->GET($this->base_url."/{$url}/");
		if (!$get) {
			$this->return = [
				"error" => true,
				"error_msg" => "unable to retrieve data"
			];
			return $this;
		}
		$slug = $this->get_string($get, "{slug:'","'}");
		$data = $this->get_string(
			$get, 
			'<div class="content-wrapper" id="movie-detail">', 
			'TAMPILKAN LEBIH BANYAK'
			);
		if(preg_match_all("/Genre\">(.*?)</", $data, $genre)){
			$genre = $genre[1];
		}else{
			$genre = "Unknown";
		}
		if(preg_match_all("/\/artist\/(.*?)\/\" rel=\"tag\">(.*?)<\/a>/", $data, $artis)){
			$artis = $artis[2];
		}else{
			$artis = "Unknown";
		}
		if(preg_match("/<img src=\"\/\/(.*?)\" alt=\"(.*?)\"/", $data, $match)){
			$thumbnail = $match[1];
			$judul = $match[2];
		}else{
			$thumbnail = "Unknown";
			$judul = "Unknown";
		}
		if(preg_match_all("/\/tag\/(.*?)\/\" rel=\"tag\">(.*?)<\/a>/", $data, $tag)){
			$tag = $tag[2];
		}else{
			$tag = "Unknown";
		}
		$output = 
		[
			"judul" => $judul,
			"durasi" => $this->get_string($data, 'Durasi</h2><h3>','</h3>'),
			"thumbnail" => "https://".$thumbnail,
			"negara" => $this->Nama_Negara($this->get_string($data, "/country/","/")),
			"kualitas" => $this->get_string($data, "/quality/","/"),
			"genre" => $genre,
			"artis" => $artis,
			"tag" => $tag,
			"slug" => $slug,
			"url_download" => $this->Download_Film($url)
		];
		$this->return = $output;
		return $this;
	}
		
	function Genre($genre){
		if (in_array($genre, $this->List_Genre())) {
			$get = $this->GET("{$this->base_url}/genre/{$genre}/");
			if (!$get) {
				$this->return = [
					"error" => true,
					"error_msg" => "unable to retrieve data"
				];
				return $this;
			}
			$this->return = $this->Parse_Halaman($get);
			return $this;
		}else{
			$this->return = [
				"error" => true,
				"error_msg" => "genre doesn't exist",
				"available_genre" => $this->List_Genre(),
			];
			return $this;
		}
	}
		
	function Parse_Halaman($data){
		$output = [];
		$data = $this->get_string($data, '<div class="collapse navbar-collapse" id="primary-menu">',"Bingung mau nonton apa");
		$data = (explode('<div class="col-lg-2 col-sm-3 col-xs-4 page-0 infscroll-item">', $data));
		foreach(array_slice($data, 1) as $data){
			preg_match_all("/\/genre\/(.*?)\//", $data, $genre);
			preg_match_all("/\/country\/(.*?)\//", $data, $negara);
			$negara = json_decode(str_replace("-", " ", json_encode($negara[1])));
			$genre = $genre[1];
			$url   = $this->get_string($data, 'a href="','" title=');
			$thum  = $this->get_string($data, '<img src="//','"');
			$judul = $this->get_string($data, 'alt="','"');
			$nilai = $this->get_string($data, '<i class="fa-star"></i>','</div>');
			$qlty  = $this->get_string($data, '/quality/','/');
			$thn   = $this->get_string($data, '/year/', '/');
			$HD	   = (($this->get_string($data, "quality-",'"') == "HD") ? TRUE : FALSE);
			$dura  = $this->Format_Menit($this->get_string($data, '"duration":"PT','M'), '%02d jam %02d menit');
			array_push($output, [
				"url" => $url,
				"judul" => $judul,
				"genre" => $genre,
				"durasi" => $dura,
				"negara" => $negara,
				"tahun" => $thn,
				"thumbnail" => "https://".$thum,
				"rating" => $nilai,
				"kualitas" => $qlty,
				"isHD" => $HD,
				]);
		}
		return $output;
	}
		
	function Film_Populer(){
		$get = $this->GET("{$this->base_url}/populer/");
		if (!$get) {
			$this->return = [
				"error" => true,
				"error_msg" => "unable to retrieve data"
			];
			return $this;
		}
		$this->return = $this->Parse_Halaman($get);
		return $this;
	}
		
	function Film_Bluray(){
		$get = $this->GET("{$this->base_url}/quality/bluray/");
		if (!$get) {
			$this->return = [
				"error" => true,
				"error_msg" => "unable to retrieve data"
			];
			return $this;
		}
		$this->return = $this->Parse_Halaman($get);
		return $this;
	}
		
	function Tahun_Film($tahun){
		$get = $this->GET("{$this->base_url}/year/{$tahun}/");
		if (!$get) {
			$this->return = [
				"error" => true,
				"error_msg" => "unable to retrieve data"
			];
			return $this;
		}
		$this->return = $this->Parse_Halaman($get);
		return $this;
	}
		
	function List_Genre(){
		return [
			"drama", "comedy", "action", "thriller",
			"romance", "horror", "crime", "adventure",
			"mystery", "animation", "fantasy", "sci-fi",
			"family", "wrestling", "biography", "history",
			"war", "music", "documentary", "sport",
			"western", "musical", "science-fiction", "short",
			"film-noir", "tv-movie", "shounen", "school",
			"news", "magic", "supernatural", "mecha", 
			"military", "historical", "foreign", "slice-of-life",
			"horor", "suspense", "psychological", "sports",
			"live-action", "samurai", "erotic", "adult",
			"recommend", "police", "youth", "kids",
			"costume", "super-power", "actin-comedy", "detective",
			"investigation", "doraemon", "movies", "oscar-nominated-short-film",
			"mandarin", "mature", "mistery", "omnibus",
			"adventures", "time-travel", "special", "ova",
			"parody", "seinen", "actiom", "shoujo"
		];
	}
		
	function Tulis($name, $isi){
		$fopen = fopen($name, "a");
		fwrite($fopen, $isi);
		fclose($fopen);
	}
}
?>