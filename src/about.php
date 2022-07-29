<!-- About page, contains information to read about the band -->
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
    <title>About SEATBELTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="mediafiles/seatbelts.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <?php 
        include "accessories/header.php";
    ?>

    <?php
        include "accessories/top-background.php";
    ?>

    <div class="container-fluid aboutSeatBelts">
        <div class="row">
            <div class="col-sm-4">
                <img src="aboutimages/secondimage.jpg" class="img-fluid mx-auto d-block rounded SeatbeltImages" alt="">
            </div>
            <div class="col-sm-8">
                Seat Belts, or Yoko Kanno Seatbelts is a jazz/blues/rock/fusion band from Japan.
                They are most well known for producing the soundtrack of the Cowboy Bebop anime series.
                The band consists of many musicians, professionals, who all contribute to the mistery,
                that make this band stand out from the rest.
                <br>
                <br>
                Each individual song can represent many different emotions, because the composer, or producer
                Yoko Kanno chose to deliver everything with a gentle, metaphoric touch. The music feels alive, as if it is
                trying to tell you something, that words are not sufficient enough to do. Every note feels at exactly the right place of no matter which instrument.
            </div>
        </div>

        <div class="row quote">
            <div class="col">
                "Where words fail, music speaks."<br>
                Hans Christian Andersen
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <img src="aboutimages/cowboy-bebop.jpg" class="img-fluid mx-auto d-block rounded SeatbeltImages" alt="">
            </div>
            <div class="col-sm-8">
                The main reason of the creation of the band, was to build music around the series, Cowboy Bebop.
                Some say the success of the series mainly derives from the songs, which together with the story
                create the atmosphere, that made it a legendary show. If there was a need to philosopise, or debate, the soundtrack
                will prove a nice background music, if nobody wants to dance.
                <br>
                <br>
                The key takeaway of this music is, that it generates a certain mood, that will try to show the listener the real
                and undoubtable human condition we need to go through every day in our life. The highlight was set on this characteristic,
                which is a very unusual thought, since there is no human being, that does not share this fate. This way, we can be
                united with the feel and sound of music.
                <br>
                <br>
                The collective human consciousness is addressed by the genius of Yoko Kanno's composing, which we can only be thankful for.
            </div>
        </div>

        <div class="row quote">
            <div class="col-sm-12">
                "You're gonna carry that weight."<br>
                Cowboy Bebop, Session 26
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center secondMainText">
                <h5>If you would like to listen to some of their music</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center">
                <button type="button" class="btn btn-dark clickmeButton">Click me</button>
            </div>
        </div>

        <div class="row navigation">
            <div class="col-sm-12">
                <h5>For further navigation, click on the SEATBELTS logo on the top!</h5>
            </div>
        </div>

        <div class="row members">
            <div class="col-sm-12 text-center">
                <br>
                <br>
                Members and roles of the band:<br>
                Vocals, Producer, Composer, Arrangement, Keyboards, Noises - Yoko Kanno<br>
                Recording & Mixing - Masashi Yabuhara<br>
                Strings - Masatsugu Shinozaki<br>
                Synthesizer - Keishi Urata<br>
                Tuba - Kiyoshi Sato<br>
                Guitars - Masayoshi Furokawa, Tsuneo Imahori<br>
                Harmonicas - Ryuichiro Senoo, Nobuo Yagi<br>
                Drums - Suzuki Bakabon, Maki Kitada, Hitoshi Watanabe<br>
                Flutes - Mika Hayashi, Kazuhiro Iwasa, Hideyo Takakuwa<br>
                Percussion - Ikuo Kakehashi, Mataro Misawa, Yoichi Okabe<br>
                Saxophones - Shigeo Fuchino, Masato Honda, Naruyoshi Kikuchi, Osamu Koike, Masakuni Takeno, Takuo Yamamoto<br>
                Trombones - Yoshiaka Hashimoto, Masanori Hirohara, Satoshi Kawano, Yoichi Murata, Hideaki Nakaji, Junko Yamashiro<br>
                Trumpets - Koshio Araki, Yusuke Hayashi, Koshi Nishimura, Akio Terashima<br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 endPageImages">
                <img src="aboutimages/firstimage.jpg" class="rounded mx-auto d-block" alt="">
            </div>
            <div class="col-lg-4 endPageImages">
                <img src="mediafiles/fullogo.jpg" class="rounded mx-auto d-block" alt="">
            </div>
            <div class="col-lg-4 endPageImages">
                <img src="aboutimages/yokokanno.jpeg" class="rounded mx-auto d-block" alt="">
            </div>
        </div>
    </div>

    <?php 
        include "accessories/cookie.php" 
    ?>

    <audio id="mainAudioplay" autoplay loop>
        <source src="allsongs/Felt Tip Pen.mp3">
    </audio>

<link rel="stylesheet" type="text/css" href="styles.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.0-rc.1/dist/js.cookie.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="jsActivated/cookieButton.js"></script>
    <script src="jsActivated/background-sound.js"></script>
    <script src="jsActivated/aboutButtonListener.js"></script>
</body>
</html>