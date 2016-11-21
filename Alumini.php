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
      <li><a href="administration.php">Administration</a></li>
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
             <h1 class="title">Comments For Alumini </h1>
               <div class="comment">
                  <td style="padding-top:15px; padding-bottom:15px;" valign="top" bgcolor="#00E2D0"><table align="center" border="0" cellpadding="0" cellspacing="0" width="295" float:"right">
                  <tbody><tr>
                    <td valign="top"><form id="form2" name="form2" method="post" action="alumini_cmt.php">
                      <table class="border" align="center" border="0" cellpadding="2" cellspacing="2" width="98%">
                        <tbody><tr>
                          <td colspan="3" class="heading" style="padding-top:8px; color:#0066FF;" valign="top" height="35"><span class="style2"><strong>Contact Us :</strong></span></td>
                        </tr>
                        <tr>
                          <td width="34%">Name:</td>
                          <td  width="66%"><input name="textfield3" style="width:180px; height:13px;" type="text"></td>
                        </tr>
                        <tr>
                          <td width="34%">Birthday:</td>
                          <td  width="66%"><input name="textfield34" type="date" style="width:180px; height:13px;" required></td>
                        </tr>
                        <tr>
                          <td>Gender:</td>
                          <td>
                           
                            <select name="Gender"<br/>
                            <option value="male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">others</option>
                          </td>
                        </tr>
                        <tr>
                          <td> Education:</td>
                          <td >
                           <select name="education"><br/>
                           <option value="Graduate">Graduate</option>
                           <option value="HSC">HSC</option>
                           <option value="SSC">SSC</option>
                           <option value="Others">OHTERS</option>
                           </select>
                           <br/>
                          </td>
                        </tr>
                        <tr>
                          <td >Phone no:</td>
                          <td >
                                <input name="phone"  type="tel"  title='Phone Number (Format: +8801999-999999)'required style="width:180px;" /> 
                          </td>
                        </tr>
                        <tr>
                          <td >Email ID:</td>
                          <td ><input name="textfield36" type="email" style="width:180px; height:13px;" type="text"required></td>
                        </tr>
                        <tr>
                          <td>Comment :</td>
                          <td><textarea name="textarea" rows="5" cols="" style="width:180px;"required></textarea></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="2"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tbody><tr>
                                <td width="38%"><input name="imageField2" src="images/submit.gif" type="image"></td>
                                <td width="62%"><input name="imageField3" src="images/reset.gif" type="image"></td>
                              </tr>
                          </tbody></table></td>
                        </tr>
                      </tbody></table>
                      </form>
                    </td>
                  </tr>
                </tbody></table></td>
                </a></div>

      </div>
      <!-- ############### -->
      <div class="fl_right">
	   <h1 class="title">Comments Details </h1>
        <?php
     require_once("includes/connection.php"); 
    $res = mysql_query("SELECT * FROM comments WHERE category='alumini' ORDER BY id DESC");
   
    while($row = mysql_fetch_array($res)){ ?>
      <div class="single_request" style="padding:20px">
          <h2 class="title"><?php echo "ID: ".$row['id'].", Name: ".$row['name'].", Education: ".$row['edu'].", Email: ".$row['email'].", Phone: ".$row['pn_num'];?></h2>
          <h1 class="title">Massage : <br><?php echo $row['cmt']; ?></h1>
		  
		  
		   <!-- ####################################################################################################### -->
		  <?php if (isset($_SESSION['user_title']) && ($_SESSION['user_title']=='teacher')) { ?>
		<p><a href="delete_comments.php?id=<?php echo $row['id'] ?>">Delete</a></p> 
		<?php  } ?>
		<!-- ####################################################################################################### -->
		
		
      </div>

    <?php }?>
          
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