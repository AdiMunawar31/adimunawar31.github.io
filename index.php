<?php

function get_Curl($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

$result = get_Curl('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCx7GJoa9DAyngsmAQJ_uGLA&key=AIzaSyBdQXqeJRdFl93PLoSN3SzDhz4adaiv3zE');

$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$namaChannel = $result['items'][0]['snippet']['title'];
$bio = $result['items'][0]['snippet']['description'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

// latest video
$videoId = 'https://www.googleapis.com/youtube/v3/search?part=snippet&key=AIzaSyBdQXqeJRdFl93PLoSN3SzDhz4adaiv3zE&channelId=UCx7GJoa9DAyngsmAQJ_uGLA&maxResults=1&order=viewCount';
$result = get_Curl($videoId);

$latestVideo = $result['items'][0]['id']['videoId'];

?>

<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>MuNawar.com</title>

</head>

<body id="home" class="scrollspy">
  <div class="navbar-fixed">
    <nav class="blue darken-1">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo">MuNawar.com</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#sosmed">Sosial Media</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#clients">Client</a></li>
            <li><a href="#services">Service</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- sidenav -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#sosmed">Sosial Media</a></li>
    <li><a href="#about">About Us</a></li>
    <li><a href="#clients">Client</a></li>
    <li><a href="#services">Service</a></li>
    <li><a href="#portfolio">Portfolio</a></li>
    <li><a href="#contact">Contact Us</a></li>
  </ul>


  <!-- slider -->
  <div id="slider" class="slider scrollspy">
    <ul class="slides">
      <li>
        <img src="img/slider/dy1.jpg">

      </li>
      <li>
        <img src="img/slider/hm1.jpg">

      </li>
      <li>
        <img src="img/slider/mn1.jpg">

      </li>


    </ul>

  </div>


  <section id=sosmed class="about grey lighten-1 scrollspy">
    <div class="container">

      <div class="row">
        <h3 class="center">Sosial Media</h3>
        <div class="col s12 m6">
          <div class="row">
            <div class="col m4">
              <img src="<?= $youtubeProfilePic; ?>" class="responsive-img circle z-depth-3">
            </div>
            <div class="col m8">
              <h5><?= $namaChannel; ?></h5>
              <p>
                <div class="g-ytsubscribe" data-channelid="UCx7GJoa9DAyngsmAQJ_uGLA" data-layout="default" data-count="default"></div><br><?= $subscriber; ?> Subscriber <br>
                <h6><i><?= $bio; ?></i></h6>
              </p>

            </div>
          </div>
          <div class="video-container">
            <iframe width="780" height="450" src="//www.youtube.com/embed/<?= $latestVideo; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="row">
            <div class="col m4">
              <img src="ig/5.jpg" class="responsive-img circle z-depth-3 ">
            </div>
            <div class="col m8">
              <h5>@mhunawar31</h5>
              <p> 70.000 Follower</p>
            </div>
          </div>
          <div class="row">
            <div class="col m3 s12">
              <img src="ig/1.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="ig/2.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="ig/5.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="ig/6.jpg" class="responsive-img materialboxed">
            </div>
          </div>
          <div class="row">
            <div class="col m3 s12">
              <img src="ig/7.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="ig/8.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="ig/9.jpg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="ig/11.jpg" class="responsive-img materialboxed">
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>



  <section id=about class="about scrollspy">
    <div class="container">
      <div class="row">
        <h3 class="center">About Us</h3>
        <div class="col m6">
          <h5>We Are Profesionals</h5>
          <p>Our company was founded in Kuningan, but our mission is to facillitate access to information for the entire
            world and in every leanguage.<i>~MuNawar.com~</i></p>
        </div>
        <div class="col m6 light">
          <p>WEB DEVELOPMENT</p>
          <div class="progress">
            <div class="determinate" style="width: 90%"></div>
          </div>
          <p>MOBILE APP DEVELOPMENT</p>
          <div class="progress">
            <div class="determinate" style="width: 80%"></div>
          </div>
          <p>GAME DEVELOPMENT</p>
          <div class="progress">
            <div class="determinate" style="width: 75%"></div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- Client -->
  <div id="clients" class="parallax-container scrollspy">
    <div class="parallax"><img src="img/slider/4.png"></div>

    <div class="container clients ">
      <h3 class="center light white-text">Our Client</h3>
      <div class="row">
        <div class="col m4 s12 center">
          <img src="img/clients/gojek.png">
        </div>
        <div class="col m4 s12 center">
          <img src="img/clients/tokopedia.png">
        </div>
        <div class="col m4 s12 center">
          <img src="img/clients/traveloka.png">
        </div>
      </div>
    </div>
  </div>


  <!-- services -->
  <section id="services" class="services grey lighten-3 scrollspy">
    <div class="container">
      <div class="row">
        <h3 class="center light grey-text text-darken-3">Our Services</h3>
        <div class="col m4 s12">
          <div class="card-panel center">
            <i class="medium material-icons">web</i>
            <h5>Web Development</h5>
            <p>Desain bagus, harga kompetitif, respons cepat, dukungan penuh. Layanan luar biasa!</p>
          </div>
        </div>
        <div class="col m4 s12">
          <div class="card-panel center">
            <i class="medium material-icons">developer_mode</i>
            <h5>Mobile App</h5>
            <p><b><i>MuNawar.com</i></b> benar-benar Mitra yang profesional dan handal. Dengan passion yang hebat.</p>
          </div>
        </div>
        <div class="col m4 s12">
          <div class="card-panel center">
            <i class="medium material-icons">games</i>
            <h5>Game Development</h5>
            <p>Mitraterpercaya yang dapat Anda andalkan untuk membuat berbagai jenis Game dan Yang lainnya.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- portfolio -->
  <section id="portfolio" class="portfolio scrollspy">
    <div class="container">
      <h3 class="center light grey-text text-darken-3">Portfolio</h3>
      <div class="row">
        <div class="col m3 s12">
          <img src="img/portfolio/1.png" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="img/portfolio/2.png" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="img/portfolio/7.png" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="img/portfolio/4.png" class="responsive-img materialboxed">
        </div>
      </div>
      <div class="row">
        <div class="col m3 s12">
          <img src="img/portfolio/5.png" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="img/portfolio/3.jpg" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="img/portfolio/1.jpg" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="img/portfolio/4.jpg" class="responsive-img materialboxed">
        </div>
      </div>
    </div>
  </section>


  <!-- contact us -->
  <section id="contact" class="contact grey lighten-3 scrollspy">
    <div class="container">
      <h3 class="center light grey-text text-darken-3">Contact Us</h3>
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel blue darken-2 center white-text">
            <i class="small material-icons">email</i>
            <h5>Contact</h5>
            <p>Silahkan isi form di bawah ini untuk menghubugi kami, Terima Kasih!</p>
          </div>
          <ul class="collection with-header">
            <li class="collection-header">
              <h4>Our Office</h4>
            </li>
            <li class="collection-item">MuNawar.com</li>
            <li class="collection-item">Jl. Mandirancan-Kuningan</li>
            <li class="collection-item">West Java, Indonesia</li>
          </ul>
        </div>

        <div class="col m7 s12">
          <form>
            <div class="card-panel">
              <h5>Please fill out this form</h5>
              <div class="input-field">
                <input type="text" name="name" id="name" required class="validate">
                <label for="name">Name</label>
              </div>
              <div class="input-field">
                <input type="email" name="email" id="email" class="validate">
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <input type="text" name="phone" id="phone">
                <label for="phone">Phone Number</label>
              </div>
              <div class="input-field">
                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                <label for="message">Message</label>
              </div>
              <button type="submit" class="btn blue">Send!</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

  <footer class="blue darken-2 white-text center">

    <p>Copyright <i class="tiny material-icons">copyright</i> Adi Munawar - All right reversed | Tentang | Kontak |
      Desclaimer | Privacy policy <b><i>MuNawar.com</i></b> </p>


  </footer>







  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav')
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider')
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      duration: 600,
      interval: 4000
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 50
    });
  </script>

  <script src="https://apis.google.com/js/platform.js"></script>



</body>

</html>
AIzaSyBdQXqeJRdFl93PLoSN3SzDhz4adaiv3zE