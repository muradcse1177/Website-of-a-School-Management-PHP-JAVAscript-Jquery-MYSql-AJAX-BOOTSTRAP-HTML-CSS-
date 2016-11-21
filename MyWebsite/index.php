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
       <td width="250"><form id="form1" name="form1" method="post" action="index.php" >
              <table width="200" border="0" float="left" cellpadding="0" cellspacing="0";margin-top:15px;>
                <tr>
                  <td width="100" class="search">Quick Search : </td>
                  <td width="110"><input name="textfield" type="text" class="field" style="width:150px;" /></td>
                  <td width="30px;"><input type="image" name="imageField" src="images/index_08.gif" /></td>
                </tr>
              </table>
                  </form>
            </td>
    </div>
    <?php
    if (!isset($_SESSION['user_id'])) {

     ?>
    <form action="login.php" method="post" id="login">
      <fieldset>
        <legend><p>Student Login</p></legend>
         <input type="password" name="password"pattern=".{8,32}" title="Password" placeholder="Password"   required/>
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
      </ul>
      <li><a href="Contact Us.php">Contact Us </a></li>
      <li class="last"><a href="gallery.php">Gallery</a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div id="featured_slide">
   <!--  ####################################################################################################### -->
    <ol>
      <li>
        <h2><span>Slide 1</span></h2>
        <div><img src="image22/Capture.PNG" alt="" /></div>
      </li>
      <li>
        <h2><span>Slide 2</span></h2>
        <div><img src="image22/Capture22.png" alt="" /></div>
      </li>
      <li>
        <h2><span>Slide 3</span></h2>
        <div><img src="image22/Capture1.PNG" alt="" /></div>
      </li>
      <li>
        <h2><span>Slide 4</span></h2>
        <div><img src="image22/1015903_718989724799775_698118988_o.jpg" alt="" /></div>
      </li>
      <li>
        <h2><span>Slide 5</span></h2>
        <div><img src="image22/images (10).jpg" alt="" /></div>
      </li>
    </ol>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <h2 class="title">MY School</h2>
        <img src="images/index_16.gif" alt="" height="61" width="366">
        <td class="welcome" style="padding-left:24px; padding-right:25px; " bgcolor="#3C2D21" height="152" valign="top"><br>
                 <P> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam quis turpis eu libero varius vestibulum. In feugiat. Sed et turpis ac risus aliquet rhoncus.</P><br>
                  <br>
                  <p>Nam cursus molestie metus. Aliquam ac neque nec leo condimenlis congue mauris. Cum sociis natoque penatibus et magnis.</p><br>
                  <br>
                  <img src="images/index_23.gif" alt="" height="7" width="28"> <a href="full-width.php">read more... </a></td>
        <div id="hpage_quicklinks">
        </div>
        <h2 class="title">Latest Gallery Images</h2>
        <div id="hpage_gallery">
          <ul class="clear">
            <li><a href="#"><img src="image22/images (4).jpg" alt="" /></a></li>
            <li class="last"><a href="#"><img src="image22/images (5).jpg" alt="" /></a></li>
            <li><a href="#"><img src="image22/images (6).jpg" alt="" /></a></li>
            <li class="last"><a href="#"><img src="image22/images.jpg" alt="" /></a></li>
          </ul>
        </div>
        <h2 class="title">Keep Up With What's Happening</h2>
        <div id="hpage_socialize">
          <ul>
            <li><span>Facebook:</span> <a href="#">www.facebook.com/myhandel</a></li>
            <li><span>Twitter:</span> <a href="#">www.twitter.com/myhandel</a></li>
          </ul>
          <?php  if (!isset($_SESSION['user_id'])) { ?>
          <form action="signup.php" method="post">
            <fieldset>
              <legend>Newsletter Signup:</legend>
              <h2 class="form_hint,color:red">* Sign Up Here</h2>
              <input type="text" id="newsletter" name="username" placeholder="Your Username" /><br><br>
              <input type="password" id="newsletter" name="password" placeholder="Your Password"/>
              <input type="image" id="subscribe" src="images/sign-up.gif" alt="Submit" />
            </fieldset>
          </form> 
          <?php } ?>
        <h2 class="title">Quicklinks</h2>
        <div id="hpage_quicklinks">
        </div>
          <div id="hpage_quicklinks";>
          <ul class="clear">
            <li><a href="#">Academic Class</li>
            <li><a href="#">Alumni</a></li>
            <li><a href="#">Groups Of Students</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Job opportunities</a></li>
            <li><a href="#">Lifelong Learning</a></li>
            <li><a href="#">Maps and Directions</a></li>
            <li><a href="#">Online Courses</a></li>
            <li><a href="#">Parents</a></li>
            <li><a href="#">Research</a></li>
            <li><a href="#">Students</a></li>
            <li><a href="#">Teaching &amp; Learning</a></li>
            <li><a href="#">Videos</a></li>
          </ul>
        </div>
       
        
        </div>
      </div>
      <!-- ############### -->
      <div class="fl_right">
        <h2 class="title">Latest News</h2>
        <div id="hpage_latestnews">
          <ul>
            <li>
              <div class="imgl"><img src="image22/Capture25.PNG" alt="" /></div>
              <p class="latestnews">Important news </p>
              <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
            </li>
            <li>
              <div class="imgl"><img src="image22/Capture155.PNG" alt="" /></div>
              
              <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
            </li>
            <li class="last">
              <div class="imgl"><img src="image22/Capture666.PNG" alt="" /></div>
              
              <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
            </li>
          </ul>
        </div>
        <div id="hpage_specials" class="clear">
          <ul>
            <li>
              <h2 class="title">Virtual Tour</h2>
              <div class="box">
                <div class="imgholder"><img src="image22/Capture55.PNG" alt="" /></div>
                      <p class="readmore"><a href="#">Take The Tour &raquo;</a></p>
              </div>
            </li>
            <li>
              <h2 class="title">Sporting Activities</h2>
              <div class="box">
                <p><strong> ~01:</strong> <a href="#">Cricket</a></p>
                 <p><strong>~02:</strong> <a href="#">Volleyball</a></p>
                  <p><strong>~03:</strong> <a href="#">Football</a></p>
              <div class="imgholder"><marquee><img src="images/demo/160x80.gif" alt="images/demo/160x80.gif"alt="images/demo/160x80.gif" /></marquee> </div>
            </li>
            <li class="last">
              <h2 class="title">Upcoming Events</h2>
              <div class="box">
                <p><a href="#">Sports</a></p>
              </div>
              <div class="box">
                <p><a href="#">Examination</a></p>
              </div>
              <div class="box">
                <p><a href="#">Academy</a></p>
              </div>
              <div class="box">
                <p><a href="#">Cultural Function</a></p>
              </div>
                </li>
          </ul>
        </div>
        <h2 class="title">Comment For Students<br> Please Submit Your Identity & Give Your Valuable Comment</h2>
        <div id="hpage_quicklinks">
        </div>
               <div class="comment">
                  <td style="padding-top:15px; padding-bottom:15px;" valign="top" bgcolor="#F0E2D0"><table align="center" border="0" cellpadding="0" cellspacing="0" width="295" float:"left">
                  <tbody><tr>
                    <td valign="top"><form id="form2" name="form2" method="post" action="cmnt.php">
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
                          <td  width="66%"><input name="textfield34" type="date" style="width:180px; height:13px;" requred></td>
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
                          <td ><input name="textfield36" type="email" style="width:180px; height:13px;" type="text"requred></td>
                        </tr>
                        <tr>
                          <td>Comment :</td>
                          <td><textarea name="textarea" rows="5" cols="" style="width:180px;"requred></textarea></td>
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
        <li><a href="#">Disclaimer</a></li>
        <li><a href="#">Accessibility</a></li>
        <li><a href="#">Freedom of Information</a></li>
        <li><a href="#">Website Privacy</a></li>
        <li><a href="#">Press Release Information</a></li>
        <li><a href="#">Annual Report</a></li>
        <li><a href="#">Financial Statements</a></li>
        <li><a href="#">Job Vacancies</a></li>
        <li class="last"><a href="#">Exam Dates</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>For Students</h2>
      <ul>
        <li><a href="#">School</a></li>
        <li><a href="#">Student Activities</a></li>
        <li><a href="#">Student Affairs</a></li>
        <li><a href="#">Student Development</a></li>
        <li><a href="#">Student Financial Services</a></li>
        <li><a href="#">Student Group Directory</a></li>
        <li><a href="#">Student Life</a></li>
        <li class="last"><a href="#">Global Learning</a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Academy</h2>
      <ul>
        <li><a href="#">Academic Advisory</a></li>
        <li><a href="#">Academic Assistance</a></li>
        <li><a href="#">Academic Calendars</a></li>
        <li><a href="#">Academics Office</a></li>
        <li><a href="#">Administration</a></li>
        <li><a href="#">Adult Learners</a></li>
        <li><a href="#">Alumni Chapters</a></li>
        <li><a href="#">Alumni Events</a></li>
        <li class="last"><a href="#">Residential School</a></li>
      </ul>
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2013 - All Rights Reserved - <a href="#">Domain Name</a></p>
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
    autoPlay: false, // automatically cycle through slides
    pauseOnHover: true, // pause slides on hover
    rounded: false, // square or rounded corners
    enumerateSlides: true, // put numbers on slides

    slideSpeed: 800, // slide animation speed
    cycleSpeed: 6000, // time between slide cycles
});
</script>
</body>
</html>