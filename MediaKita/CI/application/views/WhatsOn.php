<!DOCTYPE html>
<html>
<head>
	<title>Whats On</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/styleWhatsOn.css') ?>"/>
</head>
<body>
	<header>
  <div class="main" style="margin-left: 500px;">
       <a href="<?php echo base_url('index.php/Home/AboutUs');?>">About us</a>
       <a href="<?php echo base_url('index.php/Home/Event');?>">Event</a>
       <a href="<?php echo base_url('index.php/Home/WhatsOn');?>">WhatsOn</a>
       <a href="<?php echo base_url('index.php/Home');?>">Home</a>
    </div>
  </header>
  <div class="event-header">
    <span class="text-light">Upcoming Event</span>
    <div class="search-container">
      <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit" class="search-box-button"><i class="material-icons">search</i></button>
      </form>
    </div>
  </div>
  <div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-6">
      <p><span class="date"> Sep 29, 2018</span></p>
      <h1 style="width: 800px; font-family: Helvetica; font-weight: bold;">Mahasiswa Teknik Sipil UNS Sulap Tulang Sapi dan Marmer Jadi Beton</h1>
      <div>
        <img src="<?php echo base_url ('assets\image\uns.jpg');?>" style="height:400px; width:100%; float: left;">
      </div>
    </div>
    <div class="col-sm-3" style="top: 130px; padding: 0;">
      <div class="newsitem">
        <p>Mahasiswa Universitas Sebelas Maret (UNS) Surakarta menciptakan inovasi teknologi beton mutu tinggi
          dengan menggunakan limbah marmer dan tulang sapi. Mereka adalah Adhirajasa, Yesika Azzukhruf,
          Panji Pramayswara Pamilih dan Farhan Nurfi Afriansyah, mahasiswa D3 Teknik Sipil (FT).
          Keempat mahasiswa yang tergabung dalam grup Semar Solid itu menciptakan sebuah betok jenis Self Compacting
          Concrete(SCC). <a href="">read more</a>
        </p>
      </div>
    </div>
    <div class="col-sm-3" id="slide">
      <div class="boxes">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>
      <h2 style="font-family:Helvetica;padding-top: 10px;font-weight: bold;">Read More</h2>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <div class="mySlides fade">
        <div class="slide2">
          <img class="fakeimg">
          <p><a href="">Titanic letter could fetch</a></p>
        </div>
      </div>
      <div class="mySlides fade">
        <div class="slide2">
          <img class="fakeimg">
          <p><a href="">ASDFGHJK</a></p>
        </div>
      </div>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
       <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
        </script>
        <ul class="link">
        <p><a href="">BBC News Channel</a></p>
        <p><a href="">BBC News Channel</a></p>
        <p><a href="">BBC News Channel</a></p>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-5" style="margin-top: 20px;">
    <table>
      <tr>
        <th> Berita Terkini </th>
      </tr>
      <tr>
        <td> Faperta Unpad Jalin Kerja Sama dengan Faperta Universitas Borneo Tarakan </td>
      </tr>
      <tr>
        <td> FKG Unpad Gelar “Gotra Sawala” Peringati Dies Natalis ke-59 </td>
      </tr>
      <tr>
        <td> Lebih dari 500 Penulis dari 9 Negara Hadiri Konferensi Internasional PKSPL IPB </td>
      </tr>
      <tr>
        <td> Paduan Suara Mahasiswa Agriaswara IPB Diundang Tampil di Jepang </td>
      </tr>
      <tr>
        <td> 11 Tahun Berturut-turut Inovasi IPB Terbanyak di Inovasi Indonesia Paling Prospektif </td>
      </tr>
    </table>
  </div>
  <div class="col-sm-7">
    <div class="grid-container"">
      <div class="sblock2">
        <img src="<?php echo base_url ('assets\image\itbpalu.jpg');?>" style="height: 200px; width: 100%;">
          <div class="textonimg">
          <p><a href="" class="textonimg2">Ahli Tsunami ITB Lakukan Penelitian di Lokasi Tsunami Palu</a></p>
          </div>
      </div>
      <div class="sblock2">
        <img src="<?php echo base_url ('assets\image\ub.jpg"');?> style="height: 200px; width: 100%;">
          <div class="textonimg">
          <p><a href="" class="textonimg2">Mahasiswa FPIK UB melakukan Ekspedisi di Pulau Terpencil Madura</a></p>
          </div>
      </div>
      <div class="sblock2">
        <img src="<?php echo base_url ('assets\image\uns.jpg');?>pg" style="height: 200px; width: 100%;">
          <div class="textonimg">
          <p><a href="" class="textonimg2">Atasi Limbah Makanan, Mahasiswa Teknologi Pangan Unpad Raih Prestasi di India</a></p>
          </div>
      </div>
      <div class="sblock2">
        <img src="<?php echo base_url ('assets\image\unair.jpeg');?>peg" style="height: 200px; width: 100%;">
          <div class="textonimg">
          <p><a href="" class="textonimg2">Tinggalkan Donggala, RST ”Ksatria Airlangga” Lanjutkan Misi Kemanusiaan di Ambon</a></p>
          </div>
      </div>
    </div>
  </div>
  </div>
</div>
<footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6" >
          <br>
          <div class="foot">
            <p><a href="<?php echo base_url('index.php/Home');?>">Home</a></p>
            <p><a href="<?php echo base_url('index.php/Home/WhatsOn');?>">WhatsOn</a></p>
            <p><a href="<?php echo base_url('index.php/Home/Event');?>">Event</a></p>
            <p><a href="login.html">Log in</a></p>
            <p><a href="">Sign up</a></p>
            <p><a href="<?php echo base_url('index.php/Home/AboutUs');?>">About us</a></p>
          </div>
        </div>
        <div class="col-md-6">
          <br>
          <a href="#"><i class="fa fa-facebook-official" style="font-size:36px "></i></a>

          <a href="#"><i class="fa fa-google" style="font-size:36px"></i></a>

          <a href="#"><i class="fa fa-instagram" style="font-size:36px"></i></a>

          <a href="#"><i class="fa fa-linkedin" style="font-size:36px"></i></a>
          <br>
        </div>
        <div class="col-md-3">
          <br>
          <div class="kontak">
          <p >Email</p>
          <p>Hello.MediaKita@gmail.com</p>
          </div>
        </div>
        <div class="col-md-3">
          <br>
          <div class="kontak">
          <p>Working Hours</p>
          <p>Weekdays 09.00-22.00 wib</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h6 style="color:#ffff;"><center>©2018 MediaKita</center></h6>
        </div>
      </div>
    </div>
  </footer>

  </body>
</html>
