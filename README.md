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
URL diatas sudan diencode menjadi rawurl<br>
Contoh output
```json
{
    "total_hasil": 3,
    "hasil_pencarian": [
        {
            "judul": "The SpongeBob SquarePants Movie (2004)",
            "thumbnail": "https://s3.layarkaca21.vip/wp-content/uploads/2016/04/film-spongebob-squarepants-movie-2004.jpg",
            "tautan": "https://dunia21.me/spongebob-squarepants-movie-2004/",
            "genre": [
                "adventure",
                "animation",
                "comedy"
            ],
            "tahun": "2004",
            "negara": "usa",
            "kualitas": "bluray",
            "ukuran": "1080",
            "sutradara": "Stephen Hillenburg, Mark Osborne",
            "bintang": "Tom Kenny, Clancy Brown, Rodger Bumpass, Bill Fagerbakke"
        },
        {
            "judul": "SpongeBob SquarePants: Sea Side Story (2017)",
            "thumbnail": "https://s3.layarkaca21.vip/wp-content/uploads/2017/04/images.jpg",
            "tautan": "https://dunia21.me/spongebob-squarepants-sea-side-story-2017/",
            "genre": [],
            "tahun": "2017",
            "negara": "united-states",
            "kualitas": "dvdrip",
            "ukuran": "360",
            "sutradara": "Stephen Hillenburg",
            "bintang": "Tom Kenny"
        },
        {
            "judul": "The SpongeBob Movie: Sponge Out of Water (2015)",
            "thumbnail": "https://s7.layarkaca21.vip/wp-content/uploads/2015/12/film-the-spongebob-movie-sponge-out-of-water-2015.jpg",
            "tautan": "https://dunia21.me/the-spongebob-movie-sponge-out-of-water-2015/",
            "genre": [
                "adventure",
                "animation",
                "comedy"
            ],
            "tahun": "2015",
            "negara": "usa",
            "kualitas": "bluray",
            "ukuran": "720",
            "sutradara": "Paul Tibbitt, Mike Mitchell",
            "bintang": "Antonio Banderas, Eric Bauza, Tim Conway, Eddie Deezen"
        }
    ]
}
```
### Mencari Informasi Film
Base URL : `http://localhost/dunia21/info_film/{slug}` <br>
Secara default url `https://dunia21.me/how-to-train-your-dragon-the-hidden-world2019/`<br>
Jadi *slug*nya adalah `how-to-train-your-dragon-the-hidden-world2019`<br>
##### Rawurl :
```
http://localhost/dunia21/info_film/how-to-train-your-dragon-the-hidden-world-2019
```
Contoh output
```json
{
    "judul": "How to Train Your Dragon: The Hidden World (2019)",
    "durasi": "1 jam 44 menit",
    "thumbnail": "https://s5.layarkaca21.vip/wp-content/uploads/2019/01/film-how-to-train-your-dragon-the-hidden-world2019-lk21.jpg",
    "negara": "United States of America",
    "kualitas": "bluray",
    "genre": [
        "Action",
        "Adventure",
        "Animation",
        "Comedy",
        "Family",
        "Fantasy"
    ],
    "artis": [
        "Cate Blanchett",
        "Gerard Butler",
        "Jonah Hill",
        "Kit Harington"
    ],
    "tag": [
        "Based On Novel Or Book",
        "Cgi",
        "Cgi Animation",
        "Dragon",
        "Featured",
        "Finale",
        "flying",
        "Sequel",
        "Sequel,finale,dragon,cgi Animation,viking",
        "Viking"
    ],
    "slug": "how-to-train-your-dragon-the-hidden-world-2019",
    "url_download": {
        "Rapidvideo": [
            {
                "url": "https://www.rapidvideo.com/d/G1XEMEO1OT",
                "quality": "360"
            },
            {
                "url": "https://www.rapidvideo.com/d/G1XEMEO1OT",
                "quality": "480"
            },
            {
                "url": "https://www.rapidvideo.com/d/G1XEMEO1OT",
                "quality": "720"
            },
            {
                "url": "https://www.rapidvideo.com/d/G1XEMEO1OT",
                "quality": "1080"
            }
        ],
        "Filecloud": [],
        "Doupload": [
            {
                "url": "https://douploads.com/fqbahfomcq6r",
                "quality": "1080"
            }
        ],
        "Mirrorace": [
            {
                "url": "https://mirrorace.com/m/3xGP1",
                "quality": "1080"
            }
        ],
        "Go4up": [
            {
                "url": "http://dl.go4up.com/dl/e4e6b17cd184c9",
                "quality": "1080"
            }
        ],
        "Embedupload": [
            {
                "url": "http://www.embedupload.com/?d=9QB2VSL2F4",
                "quality": "1080"
            }
        ],
        "Terrafile": [],
        "Unknown": [
            {
                "url": "https://static-mp4-b.fastcdn21.com/multi/how-to-train-your-dragon-the-hidden-world-2019/how-to-train-your-dragon-the-hidden-world-2019-360p.mp4",
                "quality": "360"
            },
            {
                "url": "https://static-mp4-b.fastcdn21.com/multi/how-to-train-your-dragon-the-hidden-world-2019/how-to-train-your-dragon-the-hidden-world-2019-480p.mp4",
                "quality": "480"
            },
            {
                "url": "https://static-mp4-b.fastcdn21.com/multi/how-to-train-your-dragon-the-hidden-world-2019/how-to-train-your-dragon-the-hidden-world-2019-720p.mp4",
                "quality": "720"
            },
            {
                "url": "https://static-mp4-b.fastcdn21.com/multi/how-to-train-your-dragon-the-hidden-world-2019/how-to-train-your-dragon-the-hidden-world-2019-1080p.mp4",
                "quality": "1080"
            }
        ]
    }
}
}
```
### Film Berdasarkan Genre
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
http://localhost/dunia21/genre/animation
```
Contoh output
```json
[
    {
        "url": "https://dunia21.me/mfkz-mutafukaz-2017/",
        "judul": "MFKZ (Mutafukaz) (2017)",
        "genre": [
            "action",
            "animation",
            "comedy",
            "sci-fi",
            "thriller"
        ],
        "durasi": "01 jam 30 menit",
        "negara": [
            "france",
            "japan"
        ],
        "tahun": "2018",
        "thumbnail": "https://s7.layarkaca21.vip/wp-content/uploads/2019/04/film-mfkz-mutafukaz-2017-lk21.jpg",
        "rating": "6.7",
        "kualitas": "webdl",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/ralph-breaks-the-internet-2018/",
        "judul": "Ralph Breaks the Internet (2018)",
        "genre": [
            "adventure",
            "animation",
            "comedy",
            "family",
            "fantasy"
        ],
        "durasi": "01 jam 52 menit",
        "negara": [
            "usa"
        ],
        "tahun": "2018",
        "thumbnail": "https://s5.layarkaca21.vip/wp-content/uploads/2018/12/film-ralph-breaks-the-internet-2018-lk21.jpg",
        "rating": "7.4",
        "kualitas": "bluray",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/crystal-sky-of-yesterday-zuo-ri-qing-kong-2018/",
        "judul": "Crystal Sky of Yesterday (Zuo ri qing kong) (2018)",
        "genre": [
            "animation",
            "romance"
        ],
        "durasi": "01 jam 22 menit",
        "negara": [
            "china"
        ],
        "tahun": "2018",
        "thumbnail": "https://s5.layarkaca21.vip/wp-content/uploads/2019/03/film-crystal-sky-of-yesterday-zuo-ri-qing-kong-2018-lk21.jpg",
        "rating": "6.0",
        "kualitas": "webdl",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/eiga-hugtto-precure-x-futari-wa-precure-all-stars-memories2018/",
        "judul": "Eiga Hugtto! Precure x Futari wa Precure: All Stars Memories(2018)",
        "genre": [
            "adventure",
            "animation",
            "family",
            "fantasy"
        ],
        "durasi": "01 jam 40 menit",
        "negara": [
            "japan"
        ],
        "tahun": "2018",
        "thumbnail": "https://s5.layarkaca21.vip/wp-content/uploads/2019/03/film-eiga-hugtto-precure-x-futari-wa-precure-all-stars-memories2018-lk21.jpg",
        "rating": false,
        "kualitas": "webdl",
        "isHD": true
    },
    {
        "dan seterusnya ..."
    }
]
```
