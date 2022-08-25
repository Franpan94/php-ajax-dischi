<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <header class="text-center pt-2 ms_bg ms_color_white">
        <h1>Vue dischi</h1>
    </header>
    <main class="container-fluid ms_bg">
        <div class="row">
            <div class="col-2 m-3">
              <?php 
                $musicposters = [
                    
                    ['poster' => "https://www.onstageweb.c…/bon-jovi-new-jersey.jpg",
                     'title' => "New Jersey",
                     'author' => "Bon Jovi",
                     'genre' => "Rock",
                     'year' => "1988"
                    ],

                    ['poster' => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
                     'title' => "Live at Wembley 86",
                     'author' => "Queen",
                     'genre' => "Pop",
                     'year' => "1992"
                    ],

                    ['poster' => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
                     'title' => "Ten's Summoner's Tales",
                     'author' => "Sting",
                     'genre' => "Pop",
                     'year' => "1993"
                    ],

                    ['poster' => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
                     'title' => "Steve Gadd Band",
                     'author' => "Steve Gadd Band",
                     'genre' => "Jazz",
                     'year' => "2018"
                    ],

                    ['poster' => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
                     'title' => "Brave new World",
                     'author' => "Iron Maiden",
                     'genre' => "Metal",
                     'year' => "2000"
                    ],

                    ['poster' => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
                     'title' => "One more car, one more raider",
                     'author' => "Eric Clapton",
                     'genre' => "Rock",
                     'year' => "2002"
                    ],

                    ['poster' => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
                     'title' => "Made in Japan",
                     'author' => "Deep Purple",
                     'genre' => "Rock",
                     'year' => "1972"
                    ],

                    ['poster' => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
                     'title' => "And Justice for All",
                     'author' => "Metallica",
                     'genre' => "Metallica",
                     'year' => "1988"
                    ],

                    ['poster' => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
                     'title' => "Hard Wired",
                     'author' => "Dave Weckl",
                     'genre' => "Jazz",
                     'year' => "1994"
                    ],

                    ['poster' => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
                     'title' => "Bad",
                     'author' => "Michael Jacjson",
                     'genre' => "Pop",
                     'year' => "1987"
                ],
                ]
              ?>
            </div>
        </div>
    </main>
</body>

</html>