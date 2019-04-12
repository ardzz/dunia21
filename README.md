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
#### Mencari Informasi Film
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
http://localhost/dunia21/genre/animation
```
Contoh output
```json
[
    {
        "url": "https://dunia21.me/how-to-train-your-dragon-the-hidden-world-2019/",
        "judul": "How to Train Your Dragon: The Hidden World (2019)",
        "genre": [
            "action",
            "adventure",
            "animation",
            "comedy",
            "family",
            "fantasy"
        ],
        "durasi": "01 jam 44 menit",
        "negara": [
            "usa"
        ],
        "tahun": "2019",
        "thumbnail": "https://s5.layarkaca21.vip/wp-content/uploads/2019/01/film-how-to-train-your-dragon-the-hidden-world2019-lk21.jpg",
        "rating": "8.2",
        "kualitas": "bluray",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/trinity-seven-the-movie-2-heavens-library-crimson-lord-trinity-seven-heavens-library-crimson-lord-2019/",
        "judul": "Trinity Seven: The Movie 2 &#8211; Heavens Library &#038; Crimson Lord (Trinity Seven: Heavens Library &#038; Crimson Lord) (2019)",
        "genre": [
            "action",
            "animation",
            "comedy",
            "fantasy",
            "romance"
        ],
        "durasi": "01 jam 01 menit",
        "negara": [
            "japan"
        ],
        "tahun": "2019",
        "thumbnail": "https://s5.layarkaca21.vip/wp-content/uploads/2019/04/film-trinity-seven-the-movie-2-heavens-library-crimson-lord-trinity-seven-heavens-library-crimson-lord-2019-lk21.jpg",
        "rating": "6.9",
        "kualitas": "bluray",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/justice-league-vs-the-fatal-five-justice-league-vs-the-fatal-five-2019/",
        "judul": "Justice League vs the Fatal Five (Justice League vs. the Fatal Five) (2019)",
        "genre": [
            "animation",
            "fantasy",
            "sci-fi"
        ],
        "durasi": "01 jam 27 menit",
        "negara": [
            "usa"
        ],
        "tahun": "2019",
        "thumbnail": "https://s7.layarkaca21.vip/wp-content/uploads/2019/03/film-justice-league-vs-the-fatal-five-justice-league-vs-the-fatal-five-2019-lk21.jpg",
        "rating": "6.9",
        "kualitas": "webdl",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/gekijouban-fate-stay-night-heavens-feel-ii-lost-butterfly2019/",
        "judul": "Gekijouban Fate/Stay Night: Heaven&#8217;s Feel &#8211; II. Lost Butterfly(2019)",
        "genre": [
            "animation",
            "drama",
            "fantasy"
        ],
        "durasi": "02 jam 00 menit",
        "negara": [
            "japan"
        ],
        "tahun": "2019",
        "thumbnail": "https://s6.layarkaca21.vip/wp-content/uploads/2019/03/film-gekijouban-fate-stay-night-heavens-feel-ii-lost-butterfly2019-lk21.jpg",
        "rating": "7.9",
        "kualitas": "cam",
        "isHD": false
    },
    {
        "url": "https://dunia21.me/the-lego-movie-2-the-second-part2019/",
        "judul": "The Lego Movie 2: The Second Part(2019)",
        "genre": [
            "action",
            "adventure",
            "animation",
            "comedy",
            "family",
            "fantasy",
            "musical"
        ],
        "durasi": "01 jam 46 menit",
        "negara": [
            "australia",
            "denmark",
            "norway",
            "usa"
        ],
        "tahun": "2019",
        "thumbnail": "https://s2.layarkaca21.vip/wp-content/uploads/2019/03/film-the-lego-movie-2-the-second-part2019-lk21.jpg",
        "rating": "7.0",
        "kualitas": "hdrip",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/reign-of-the-supermen-2019/",
        "judul": "Reign of the Supermen (2019)",
        "genre": [
            "action",
            "animation",
            "sci-fi"
        ],
        "durasi": "01 jam 27 menit",
        "negara": [
            "usa"
        ],
        "tahun": "2019",
        "thumbnail": "https://s7.layarkaca21.vip/wp-content/uploads/2019/01/film-reign-of-the-supermen2019-lk21.jpg",
        "rating": "7.1",
        "kualitas": "bluray",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/scooby-doo-and-the-curse-of-the-13th-ghost-2019/",
        "judul": "Scooby-Doo! and the Curse of the 13th Ghost (2019)",
        "genre": [
            "action",
            "adventure",
            "animation",
            "comedy",
            "fantasy",
            "horror"
        ],
        "durasi": "01 jam 22 menit",
        "negara": [
            "usa"
        ],
        "tahun": "2019",
        "thumbnail": "https://s0.layarkaca21.vip/wp-content/uploads/2019/02/film-scooby-doo-and-the-curse-of-the-13th-ghost-2019-lk21.jpg",
        "rating": "6.5",
        "kualitas": "webdl",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/the-legend-of-secret-pass2019/",
        "judul": "The Legend of Secret Pass(2019)",
        "genre": [
            "animation",
            "family",
            "fantasy"
        ],
        "durasi": "01 jam 32 menit",
        "negara": [
            "usa"
        ],
        "tahun": "2019",
        "thumbnail": "https://s7.layarkaca21.vip/wp-content/uploads/2019/01/film-the-legend-of-secret-pass2019-lk21.jpg",
        "rating": "5.0",
        "kualitas": "webdl",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/my-hero-academia-the-movie-boku-no-hero-academia-the-movie-2018/",
        "judul": "My Hero Academia: The Movie (Boku no Hero Academia the Movie) (2018)",
        "genre": [
            "action",
            "animation",
            "comedy",
            "fantasy"
        ],
        "durasi": "01 jam 30 menit",
        "negara": [
            "japan"
        ],
        "tahun": "2018",
        "thumbnail": "https://s2.layarkaca21.vip/wp-content/uploads/2019/02/film-my-hero-academia-the-movie-boku-no-hero-academia-the-movie-2018-lk21.jpg",
        "rating": "8.1",
        "kualitas": "bluray",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/penguin-highway2018/",
        "judul": "Penguin Highway(2018)",
        "genre": [
            "adventure",
            "animation",
            "family",
            "fantasy"
        ],
        "durasi": "01 jam 58 menit",
        "negara": [
            "japan"
        ],
        "tahun": "2018",
        "thumbnail": "https://s1.layarkaca21.vip/wp-content/uploads/2019/02/film-penguin-highway2018-lk21.jpg",
        "rating": "7.0",
        "kualitas": "bluray",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/incredibles-2-2018/",
        "judul": "Incredibles 2 (2018)",
        "genre": [
            "action",
            "adventure",
            "animation",
            "comedy",
            "family",
            "sci-fi"
        ],
        "durasi": "01 jam 58 menit",
        "negara": [
            "usa"
        ],
        "tahun": "2018",
        "thumbnail": "https://s5.layarkaca21.vip/wp-content/uploads/2018/06/film-incredibles-2-2018-lk21.jpg",
        "rating": "8.3",
        "kualitas": "bluray",
        "isHD": true
    },
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
        "url": "https://dunia21.me/racetime2018/",
        "judul": "Racetime(2018)",
        "genre": [
            "adventure",
            "animation",
            "comedy"
        ],
        "durasi": "01 jam 30 menit",
        "negara": [
            "canada"
        ],
        "tahun": "2018",
        "thumbnail": "https://s0.layarkaca21.vip/wp-content/uploads/2019/03/film-racetime2018-lk21.jpg",
        "rating": "6.3",
        "kualitas": "bluray",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/non-non-biyori-the-movie-vacation-gekijo-ban-non-non-biyori-vacation-2018/",
        "judul": "Non Non Biyori the Movie: Vacation (Gekijo-ban Non Non Biyori: Vacation) (2018)",
        "genre": [
            "animation",
            "comedy"
        ],
        "durasi": "01 jam 11 menit",
        "negara": [
            "japan"
        ],
        "tahun": "2018",
        "thumbnail": "https://s1.layarkaca21.vip/wp-content/uploads/2019/03/film-non-non-biyori-the-movie-vacation-gekijo-ban-non-non-biyori-vacation-2018-lk21.jpg",
        "rating": "8.0",
        "kualitas": "bluray",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/spider-man-into-the-spider-verse-2018/",
        "judul": "Spider-Man: Into the Spider-Verse (2018)",
        "genre": [
            "action",
            "adventure",
            "animation",
            "family",
            "sci-fi"
        ],
        "durasi": "01 jam 57 menit",
        "negara": [
            "usa"
        ],
        "tahun": "2018",
        "thumbnail": "https://s4.layarkaca21.vip/wp-content/uploads/2019/02/film-spider-man-into-the-spider-verse-2018-lk21.jpg",
        "rating": "8.7",
        "kualitas": "bluray",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/white-fang-croc-blanc-2018/",
        "judul": "White Fang (Croc-Blanc) (2018)",
        "genre": [
            "adventure",
            "animation"
        ],
        "durasi": "01 jam 27 menit",
        "negara": [
            "france",
            "luxembourg",
            "usa"
        ],
        "tahun": "2018",
        "thumbnail": "https://s6.layarkaca21.vip/wp-content/uploads/2018/07/film-white-fang-croc-blanc-2018-lk21.jpg",
        "rating": "6.9",
        "kualitas": "bluray",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/bao-2018/",
        "judul": "Bao (2018)",
        "genre": [
            "animation",
            "family",
            "fantasy",
            "short"
        ],
        "durasi": "00 jam 08 menit",
        "negara": [
            "canada",
            "usa"
        ],
        "tahun": "2018",
        "thumbnail": "https://s4.layarkaca21.vip/wp-content/uploads/2019/03/film-bao-2018-lk21.jpg",
        "rating": "7.5",
        "kualitas": "bluray",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/feng-yu-zhou-2018/",
        "judul": "Feng Yu Zhou (The Wind Guardians) (2018)",
        "genre": [
            "action",
            "animation",
            "fantasy"
        ],
        "durasi": "01 jam 40 menit",
        "negara": [
            "china"
        ],
        "tahun": "2018",
        "thumbnail": "https://s7.layarkaca21.vip/wp-content/uploads/2019/02/film-feng-yu-zhou-2018-lk21.jpg",
        "rating": "7.9",
        "kualitas": "webdl",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/the-seven-deadly-sins-the-movie-prisoners-of-the-sky-the-seven-deadly-sins-prisoners-of-the-sky-2018/",
        "judul": "The Seven Deadly Sins the Movie: Prisoners of the Sky (The Seven Deadly Sins: Prisoners of the Sky) (2018)",
        "genre": [
            "action",
            "animation",
            "fantasy"
        ],
        "durasi": "01 jam 39 menit",
        "negara": [
            "japan"
        ],
        "tahun": "2018",
        "thumbnail": "https://s6.layarkaca21.vip/wp-content/uploads/2019/02/film-the-seven-deadly-sins-the-movie-prisoners-of-the-sky-the-seven-deadly-sins-prisoners-of-the-sky-2018-lk21.jpg",
        "rating": "7.0",
        "kualitas": "bluray",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/dragon-ball-super-broly-doragon-boru-cho-burori-dragon-ball-super-broly-2018/",
        "judul": "Dragon Ball Super: Broly (Doragon boru cho: Burori &#8211; Dragon Ball Super: Broly) (2018)",
        "genre": [
            "action",
            "animation",
            "fantasy"
        ],
        "durasi": "01 jam 40 menit",
        "negara": [
            "japan"
        ],
        "tahun": "2018",
        "thumbnail": "https://s0.layarkaca21.vip/wp-content/uploads/2018/12/film-dragon-ball-super-broly-doragon-boru-cho-burori-dragon-ball-super-broly-2018-lk21.jpg",
        "rating": "9.3",
        "kualitas": "webrip",
        "isHD": true
    },
    {
        "url": "https://dunia21.me/the-grinch-2018/",
        "judul": "The Grinch (2018)",
        "genre": [
            "animation",
            "comedy",
            "family",
            "fantasy",
            "musical"
        ],
        "durasi": "01 jam 30 menit",
        "negara": [
            "china",
            "france",
            "japan",
            "usa"
        ],
        "tahun": "2018",
        "thumbnail": "https://s3.layarkaca21.vip/wp-content/uploads/2019/01/film-the-grinch-2018-lk21.jpg",
        "rating": "6.4",
        "kualitas": "bluray",
        "isHD": true
    }
]
```
