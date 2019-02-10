<!DOCTYPE html>

<html>
<head>
<title>Vyners School Event Organiser</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top">
<!-- ################################################################################################ --> 
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="ContactUs.html">Contact Us</a></li>
        <li> Login:
			<a>
			<form action="index.php" method="POST" class="moveinlineblack">
					<select id="userType" name="userType" placeholder='userType' type='text' value="">
						<option value="-1" >select user type</option>
						<option value="Student">Student</option>
						<option value="Teacher">Teacher</option>
						<option value="Contacts">Contacts</option>
					</select> 
					
					<input id='btn' name="submit" type='submit' value='Submit'>
					
					<?php
						include "login.php";
					?>
			</form>
			</a>
		</li>	
			
			
		

      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">Vyners School Event Orgainser</a></h1>
      
    </div>
    <div class="fl_right">
      <form class="clear" method="post" action="https://www.vynersschool.org.uk/search/default.asp?">
        <fieldset>
          <legend>Search:</legend>
          <input type="search" name="searchValue" placeholder="Search Here">
          <button class="fa fa-search" type="submit" title="Search" href=""><em>Search</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear" > 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="About us.html">About us</a>
      </ul>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper">
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear center"> 
      <!-- ################################################################################################ -->
      <figure id="slide-1"><a class="view" href="#"><img src="images/demo/slider/schoolpic.png" alt=""></a>
      </figure>
      <figure id="slide-2"><a class="view" href="#"><img src="images/demo/slider/2.png" alt=""></a>
        <figcaption>
          <h2>About us</h2>
          <p>Please login only using the contacts login page. If you forget your password please contact the IT Technicians at Vyners</p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-3"><a class="view" href="#"><img src="images/demo/slider/3.png" alt=""></a>
        <figcaption>
          <h2></h2>
          <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-4"><a class="view" href="#"><img src="images/demo/slider/students.png" alt=""></a>
        <figcaption>
          <h2>Contacts</h2>
          <p>Please login only using the contacts login page. If you forget your password please contact the IT Technicians at Vyners</p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-5"><a class="view" href="#"><img src="images/demo/slider/5.png" alt=""></a>
        <figcaption>
          <h2>n/a</h2>
          <p>n/a</p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <!-- ################################################################################################ -->
      <ul id="slide-tabs">
        <li><a href="#slide-1">All About Vyners</a></li>
        <li><a href="#slide-2">Alumni</a></li>
        <li><a href="#slide-3">Students</a></li>
      </ul>
      <!-- ################################################################################################ --> 
    </div>
  </div>
</div>
<!-- ################################################################################################ --> 
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-30"> 
        <!-- Left Column -->
        <div class="one_quarter first"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li class="btmspace-15"><a href="#"><em class="heading">Teachers</em> <img class="borderedbox" src="images/demo/slider/teacher.png" alt=""></a></li>
            <li class="btmspace-15"><a href="#"><em class="heading"> Students</em> <img class="borderedbox" src="images/demo/slider/students.png" alt=""></a></li>
            <li class="btmspace-15"><a href="#"><em class="heading">Alumni</em> <img class="borderedbox" src="images/demo/slider/Alumni.png" alt=""></a></li>
           <!--## <li><a href="#"><em class="heading">External Contacts</em> <img class="borderedbox" src="images/demo/220x95.gif" alt=""></a></li> -->
          </ul>
          <!-- ################################################################################################ --> 
        </div>
        <!-- / Left Column --> 
        <!-- Middle Column -->
        <div class="one_half"> 
          <!-- ################################################################################################ -->
          <h2>Latest News &amp; Events</h2>
          <ul class="nospace listing">
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/slider/KS3.png" alt=""></div>
              <p class="nospace btmspace-15"><a href="#">KS3 Events></a></p>

            </li>
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/slider/KS4.png" alt=""></div>
              <p class="nospace btmspace-15"><a href="#">KS4 Events></p>
             
            </li>
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/slider/Sixthform.png" alt=""></div>
              <p class="nospace btmspace-15"><a href="#">Sixth Form Events></a></p>
              
            </li>
          </ul>
          <p class="right"><a href="#">Click here to view all of the latest news and events &raquo;</a></p>
          <!-- ################################################################################################ --> 
        </div>
        <!-- / Middle Column --> 
        <!-- Right Column -->
        <div class="one_quarter sidebar"> 

        </div>
        <!-- / Right Column --> 
      </div>
      <div class="group">
        <h2>Quickly Find What You Are Looking For</h2>
        <div class="one_quarter first"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li><a href="#">students</a></li>
			<li><a href="#">teachers</a></li>
			<li><a href="#">contacts</a></li>
          </ul>

          <ul class="nospace">
            
            
          </ul>
          <!-- ################################################################################################ --> 
        </div>
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

      <div class="one_third">
        <address>
        Vyners School<br>
        Warren road<br>
        Ickenham<br>
        UB10 8AB<br>
        <br>
        <i class="fa fa-phone pright-10"></i>  01895 234342 <br>
        <i class="fa fa-envelope-o pright-10"></i> <a href="#">office@vynersschool.org.uk</a>
        </address>
      </div>

      <!-- ################################################################################################ --> 
    </footer>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>