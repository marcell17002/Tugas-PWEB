<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
 	<link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard.css') ?>"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header>
		<div class = "navbar">
		<ul class ="ul1">
	        <li><a href="<?php echo base_url('index.php/Home/manajer');?>">Home</a></li>
	        <li><a href="<?php echo base_url('index.php/Home/WhatsOnManage');?>"">Whats On</a></li>
	        <li><a href="<?php echo base_url('index.php/Home/EventManage');?>">Event</a></li>
	        <li><a href="<?php echo base_url('index.php/Home/pilih');?>">Upload</a></li>
	        <li><a href="<?php echo base_url('index.php/Home/contain');?>">Contain</a></li>
	        <li><a href="<?php echo base_url('index.php/Home/AboutUsManage');?>">About us</a></li>
      	</ul>
      	</ul>
		</div>
	</header>

	<br><br>
	<h1 style="text-align: center;">Welcome , Insert Your Data Here </h1>
	<h4 style="text-align: center;">Hot news event</h4>
	<br>
	<br><br>
	<div class="konten">
		<form action="" method="">
			<div class="Container-fluid">
				<div class="row1">
					<div class="col-md-3">
						NPM 
					</div>
					<div class="col-md-8">
						<input type="text" name="npm" value="">
					</div>
				</div>
				<br><br>
				<div class="row1">
					<div class="col-md-3">
						Judul
					</div>
					<div class="col-md-8">
						<input type="text" name="judul" value="">
					</div>
				</div>
				<br><br>
				<div class="row1">
					<div class="col-md-3">
						Kategori
					</div>
					<div class="col-md-8">
						<select name="kategori">
						  <option value="Ekonomi">Ekonomi</option>
						  <option value="Sport">Sport</option>
						  <option value="Sains and Social">Sains and Social</option>
						  <option value="Entertaiment">Entertaiment</option>
						  <option value="Edukasi">Edukasi</option>
						  <option value="Promotion">Promotion</option>
						</select>
					</div>
				</div>
				<br><br>
				<div class="row1">
					<div class="col-md-3">
						Deksripsi 
					</div>
					<div class="col-md-8">
					<textarea name="desk" style="width:250px;height:150px;"></textarea>
					</div>
				</div>
				<input type="submit" name="submit" value="input" style="margin-left: 650px;">	
			</div>
		</form>
	</div><br><br>
	<footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6" >
          <br>
          <div class="foot">
            <p><a href="tugas.html">Home</a></p>
            <p><a href="WhatsOn.html">Whats On</a></p>
            <p><a href="ticket.html">Events</a></p>
            <p><a href="login.html">Log in</a></p>
            <p><a href="#">Sign up</a></p>
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