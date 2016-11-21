<!DOCTYPE html>
<?php
session_start();
 if (isset($_GET['msg'])) {
      echo $_GET['msg'];
    }
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Education Time</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />

<script type="text/javascript" src="scripts/jquery-1.8.2.min.js"></script>
<!-- liteAccordion is Homepage Only -->
<link rel="stylesheet" href="scripts/liteaccordion-v2.2/css/liteaccordion.css" type="text/css" />
<link href="css.css" rel="stylesheet" type="text/css" />
</head>
<body id="top";background:<div id="logo">
  </div>

<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.php">Naildi B.S.S High School</a></h1>
       
    </div>
    <?php
    if (!isset($_SESSION['user_id'])) {

     ?>
    <form action="login.php" method="post" id="login">
      <fieldset>
        
          <br>
          <br>
        <legend><p>Student Login</p></legend>
         <input type="password" name="password"pattern=".{2,32}" title="Password" placeholder="Password"   required/>
        <input type="username" id="newsletter" name="username"  placeholder="Username" required/>
        <input type="image" src="images/sign_in.gif" id="signin" alt="Sign In" /> 
      </fieldset>
    </form>
    <?php 
    }
    else
    {
      echo " <a href='logout.php' style='float:right;margin-right: -80px;margin-top: 20px;'>logout</a>".'<h1 class="userpanelec">Welcome '."{$_SESSION['user_name']}</h1>";
    }
     ?>
    
  </div>
</div>
                         
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
      <li class="active"><a href="index.php">Homepage</a></li>
      <li><a href="About Teachers.php">About Teachers</a></li>
      <li><a href="full-width.php">About</a></li>
      <li><a href="NoticeBoard.php">NoticeBoard</a></li>
      <li><a href="Alumini.php">Alumini</a></li>
      <li><a href="Articles.php">Articles</a></li>
      <li><a href="rerult.php">Result</a></li>
        <li><a href="gallery.php">Gallery</a></li>
      </ul>
      
      <?php
      if (isset($_SESSION['user_title']) && ($_SESSION['user_title']=='student')) {
    ?>
    <li class="last"><a href="students.php">Student Corner</a></li>
    <?php 
    }
    else
    {
     ?>
     
   
      <?php
      } 
       ?>


       <?php
      if (isset($_SESSION['user_title']) && ($_SESSION['user_title']=='teacher')) {
    ?>
    <li class="last"><a href="AdminPanel.php">Admin Panel</a></li>
    <?php 
    }
    else
    {
     ?>
     
  
      <?php
      } 
       ?>


    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ##########
<!-- ####################################################################################################### -->

    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear">
           <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
            
            <h1 class="title">To See Examination Notice<h1>
			<h1 class="title"><a href="examination.php"> click here</a><h1>
		
          	<h1 class="title">To See Result Notice<h1>
            <h1 class="title"><a href="rerult.php"> click here</a><h1>			
            <h1 class="title">To See Sports Notice<h1>
			<h1 class="title"><a href="sports.php"> click here</a><h1>
			<h1 class="title">To See Academic Notice<h1>
			<h1 class="title"><a href="academic.php"> click here</a><h1>
            <h1 class="title">To See NoticeBoard <h1>
			<h1 class="title"><a href="noticeboard.php"> click here</a><h1>
            <h1 class="title">To See Articles of Students <h1>
            <h1 class="title"><a href="Articles.php"> click here</a><h1>			
         </div>
         <!-- ############### -->
         <div class="fl_right">
	   <h2 class="title">Latest News</h2>
        <div id="hpage_latestnews">
          <ul>
            <li>
              <div class="imgl"><marquee><img src="image22/Capture25.PNG " alt="image22/Capture25.PNG" /></marquee></div>
              <p class="latestnews">Important news for examination notice </p>
              <p class="readmore"><a href="examination.php">Continue Reading &raquo;</a></p>
            </li>
            <li>
              <div class="imgl"><marquee><img src="image22/Capture155.PNG" alt="" /></marquee></div>
              <p class="latestnews">Important news for Academic notice </p>
              <p class="readmore"><a href="academic.php">Continue Reading &raquo;</a></p>
            </li>
            <li class="last">
              <div class="imgl"><marquee><img src="image22/Capture666.PNG" alt="" /></marquee></div>
              <p class="latestnews">Important news for Result notice </p>
              <p class="readmore"><a href="rerult.php">Continue Reading &raquo;</a></p>
            </li>
          </ul>
        </div>
        <div id="hpage_specials" class="clear">
          <ul>
            <li>
              
            </li>
            <li>
              <h2 class="title">Sporting Activities</h2>
              <div class="box">
                <p><strong> </strong> <a href="sports.php">Sports</a></p>
                 
              <div class="imgholder"><marquee><img src="images/demo/160x80.gif" alt="images/demo/160x80.gif"alt="images/demo/160x80.gif" /></marquee> </div>
            </li>
            <li class="last">
              <h2 class="title">Upcoming Events</h2>
              <div class="box">
                <p><a href="sports.php">Sports</a></p>
              </div>
              <div class="box">
                <p><a href="examination.php">Examination</a></p>
              </div>
              <div class="box">
                <p><a href="academic.php">Academy</a></p>
              </div>
              <div class="box">
                <p><a href="cultural.php">Cultural Function</a></p>
              </div>
                </li>
          </ul>
          </div>

      
          
      </div>
   </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="footer" class="clear">
    <!-- ####################################################################################################### -->
    <div class="foot_contact">
      <h2>School Name:Naildi B.S.S High School</h2>
      <address>
      Address Line 1:Naildi,Lohagora,Narail <br />
      Town/City:Naildi,Narail <br />
      Postcode/Zip:xxxxxxxx
      </address>
      <ul>
        <li><strong>Tel:</strong> xxxxx xxxxxxxxxx</li>
        <li><strong>Fax:</strong> xxxxx xxxxxxxxxx</li>
        <li class="last"><strong>Email:</strong> <a href="#">contact@mydomain.com</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Administration</h2>
      <ul>
        <li><a href="annual.php">Annual Report</a></li>
        <li><a href="financial.php">Financial Statements</a></li>
        <li><a href="job.php">Job Vacancies</a></li>
        
      </ul>
    </div>
    <div class="footbox">
      <h2>For Students</h2>
      <ul>
        <li><a href="st_financial.php">Student Financial Services</a></li>
        <li><a href="student_life.php">Student Life</a></li>
        <li><a href="examination.php">Exam Dates</a></li>

      </ul>
    </div>
    <div class="footbox last">
      <h2>Academy</h2>
      <ul>
       
        <li><a href="administration.php">Administration</a></li>
        <li><a href="alumin_ev.php">Alumni Events</a></li>
      </ul>
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#"> Name</a></p>
    </div>
<!-- liteAccordion is Homepage Only -->
<script type="text/javascript" src="scripts/liteaccordion-v2.2/js/liteaccordion.jquery.min.js"></script>
<script type="text/javascript">
$("#featured_slide").liteAccordion({
    theme: "os-tpl",
	
    containerWidth: 960, // fixed (px)
    containerHeight: 360, // fixed (px) - overall height of the slider
    headerWidth: 48, // fixed (px) - slide spine title

    firstSlide: 1, // displays slide (n) on page load
	activateOn: "click", // click or mouseover
    autoPlay: true, // automatically cycle through slides
    pauseOnHover: false, // pause slides on hover
    rounded: true, // square or rounded corners
    enumerateSlides: false, // put numbers on slides

    slideSpeed: 800, // slide animation speed
    cycleSpeed: 2000, // time between slide cycles
});
</script>
</body>
</html>