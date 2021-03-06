<!DOCTYPE html>
<html>
<head>
	<title>Tiket</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/styletiket.css') ?>"/>
</head>
<body>
  <header>
  <div class="main">
       <a href="<?php echo base_url('index.php/Home/AboutUs');?>">About us</a>
       <a href="<?php echo base_url('index.php/Home/Event');?>">Event</a>
       <a href="<?php echo base_url('index.php/Home/WhatsOn');?>">WhatsOn</a>
       <a href="<?php echo base_url('index.php/Home');?>">Home</a>>
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
  <div class="container">
  <div class="row">
    <div class="col-sm-9">
      <div class="col-sm-4" id="tiket">
        <img src="image/blazture.jpg" width="100%">
        <p>Presale 2 : Rp 40.000 </p> 
        <p> Available Ticket :</p>
        <p class="price-button" style="padding: 5px;"><a href="buyticket.html" class="button"> Buy Now </a></p>
  	  </div>
      <div class="col-sm-4">
        <img src="image/blazture.jpg" width="100%">
        <p>Presale 2 : Rp 40.000 </p> 
        <p> Available Ticket :</p>
        <p class="price-button" style="padding: 5px;"><a href="#" class="button"> Buy Now </a></p>
  	  </div>
  	  <div class="col-sm-4">
        <img src="image/blazture.jpg" width="100%">
        <p>Presale 2 : Rp 40.000 </p> 
        <p> Available Ticket :</p>
        <p class="price-button" style="padding: 5px;"><a href="#" class="button"> Buy Now </a></p>
  	  </div>
  	  <div class="col-sm-4">
        <img src="image/blazture.jpg" width="100%">
        <p>Presale 2 : Rp 40.000 </p> 
        <p> Available Ticket :</p>
        <p class="price-button" style="padding: 5px;"><a href="#" class="button"> Buy Now </a></p>
  	  </div>
  	</div>
    <div class="col-sm-3">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      <div id="calendar">
      	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="js/jquery-ui-datepicker.min.js"></script>
		<script>
    	$('#calendar').datepicker({
        	inline: true,
        	firstDay: 1,
        	showOtherMonths: true,
        	dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    	});
		</script>
      </div>
      <script language="javascript" type="text/javascript">
      var dateTime = dateTime || {
        getMonthLastDay : function(year, month) {
          for (var i = 29; i < 33; i++) {
            if (new Date(year, month, i).getMonth() != month) return --i;
          }
        },
        
        getRawCalendar : function() {
          var arr = [], cur, i;
          with (new Date()) {
            cur = new Date(getFullYear(), getMonth(), 1).getDay();
            if (cur != 0) {
              for (i = 1; i <= cur; i++) arr.push(' ');
            }
            
            for (i = 1; i <= this.getMonthLastDay(getFullYear(), getMonth()); i++) {
              arr.push(i);
            }

            return arr;
          }
        },
        
        getToday : function() {
          return (new Date()).getDate();
        }
      }
    </script>
  </head>
  <body>
    <table>
      <tr>
        <th id='sunday'>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th>
      </tr>
      <script language="javascript" type="text/javascript">
        var i, j, row, raw = dateTime.getRawCalendar();
        for (i = 0; i <= raw.length; i += 7) {
          row = raw.slice(i, i + 7);
          document.write('<tr>');
          for (j = 0; j < row.length; j++) {
            row[j] == dateTime.getToday() ? document.write('<td id="today">' +
                row[j] + '</td>') : document.write('<td>' + row[j] + '</td>');
          }
          document.write('</tr>');
        }
      </script>
    </table>
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
