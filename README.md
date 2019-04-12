# [Scraper Dunia21 / LK21](https://github.com/ardzz/dunia21)
### Scraper Dunia21 / LK21 
*Scraper* ini adalah *scraper* buatan saya yang pertama dan juga berbasis **API** dengan output **JSON**<br>
Saya menulis kode ini secara *native* dan tidak menggunakan framework
## Persyaratan :
* PHP 7.x
* Library cURL (php-curl)
* OS Linux only, *karena saya belum mencobanya di OS **Windows***

## Penggunaan :
* Clone repository ini didalam folder path webserver (misalnya di */var/www/html/*)
#### Mencari Film
Base URL : `http://localhost/dunia21/cari_film/{query}` <br>
Query silahkan diganti dengan judul film yang dicari, contoh<br>
```
http://localhost/dunia21/cari_film/how+to+train+your+dragon
```
URL diatas sudan diencode menjadi rawurl
#### Mencari Informasi Film
Base URL : `http://localhost/dunia21/info_film/{slug}` <br>
Secara default url `https://dunia21.me/how-to-train-your-dragon-the-hidden-world2019/`<br>
Jadi *slug*nya adalah `how-to-train-your-dragon-the-hidden-world2019`<br>
##### Rawurl :
```
http://localhost/dunia21/info_film/how-to-train-your-dragon-the-hidden-world-2019
```
