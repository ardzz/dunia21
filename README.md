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
#### Film Berdasarkan Genre
Genre yang ada
```
drama, comedy, action, thriller, romance, horror, crime, adventure, 
mystery, animation, fantasy, sci-fi, family, wrestling, biography, 
history, war, music, documentary, sport, western, musical, science-fiction, 
short, film-noir, tv-movie, shounen, school, news, magic, supernatural, mecha, 
military, historical, foreign, slice-of-life, horor, suspense, psychological, sports, 
live-action, samurai, erotic, adult, recommend, police, youth, kids, costume, super-power, 
actin-comedy, detective, investigation, doraemon, movies, oscar-nominated-short-film, mandarin, 
mature, mistery, omnibus, adventures, time-travel, special, ova, parody, seinen, actiom, shoujo
```
Base URL : `http://localhost/dunia21/{genre}`<br>
##### Rawurl : 
```
http://zplo.it/scraper/lk21/genre/animation
```
