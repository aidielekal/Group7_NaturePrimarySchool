<!-- =====Admin==== -->
<?php

session_start();

if(isset($_SESSION['Status']))
{
	if($_SESSION['Status'] != 'admin') //in admin file
	{
		header('Location: homepageAdmin.php'); //user
	}
}
else
{
	header('Location: login.php');
}

?>

<html lang="en">
<head>
<title>Nature Primary School</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="HeaderFooter.css">
<link rel="stylesheet" href="css/responsive.css" media="screen and (max-width:1024px)">
<!--<script src="text.js"></script>-->

<!-- =====position fixed===== -->
<body>
 <header>
   <div class="banner">
     <img class="banner" src="images/Banner2b.png" alt="Nature School Banner">
   </div>
 </header>



<!-- =====navigation===== -->

<div class="wrapper">
	<div class="menu">
	<ul class="nav">
	 <li><a class="home" href="homepageAdmin.php">HOME</a></li>
	 <li><a class="home" href="#">STUDENTS AND TEACHERS</a>
		 <ul class="drop">
				 <li><a href="manageStudents.php">Manage Students</a></li>
				 <li><a href="manageTeachers.php">Manage Teachers</a></li>
			</ul>
	 <li><a class="home" href="#">INQUIRIES</a>
		 <ul class="drop">
				 <li><a href="manageInquiries.php">Manage Inquiries </a></li>
			</ul>
	 <li><a class="home" href="logout.php" onclick="return confirm('Are you sure to LOG OUT?')">LOGOUT</a></li>
 </ul>
	</div>
 </div>



<!-- =====CONTENT===== -->


<img src="images/homepagetop.png" alt="Homepage Picture" >


<div class="top-part">
    <h1>What makes us different?</h1>

    <p class="note">We cater to the needs of Future Leaders. It is important for us that the children gets the education and care that they need in order for them to learn experience and grow in life. As we offer this service, we will do everything in our power to help your child grow to their full potential. Our promise to you is to help empower them by giving them the exposure they deserve.
    Every one of our students is unique and special.<br> We are a one-form entry school that favours personalised attention, with excellent coordination between the teaching staff, the department heads and the school’s psycho-pedagogy department.
	We analyse and accompany every one of our students throughout their school life in order to understand their needs, know their potential and stimulate their educational curiosity.our objective is to experience learning in a positive, balanced and complete way so that we can get the best out of our students.
	Our objective is to experience learning in a positive, balanced and complete way so that we can get the best out of our students.
	</p>
</div>


<div class="box">
<h1>Purpose</h1>
<table>
<tr>
<td>
<div class="smallbox sm1">
    <img src="images/handraise.jpg" alt="Handraise">

	 <div class="box2">

      <p class="text">TOP</p>
	  <h2>Assure the best for the children to achieve the best</h2>


     </div>
	 </div>
</td>

<td>
<div class="smallbox sm1">
       <img src="images/goal.jpg" alt="Goal">

	    <div class="box2">

      <p class="text">CLASSES</p>
	  <h2>Interactive classes for further development</h2>

     </div>
</div>

</td>

<td>
<div class="smallbox sm1">
	<img src="images/learn.jpg" alt="Learning">

	 <div class="box2">

       <p class="text">AGES</p>
	  <h2>Age ranges from 6 to 12</h2>

     </div>
</div>
</td>

<td>
<div class="smallbox sm2">
	<img src="images/books.jpg" alt="Kids with books">

	 <div class="box2">

      <p class="text">Nationalities</p>
	  <h2>Over 30 Nationalities</h2>

     </div>
</div>
</td>
</tr>

</table>
</div>

<br>


<h1>Inspirational Quotes For You!</h1>

<div class="quote">
  <p>"Don't let what you <em>cannot</em> do interfere with what you <em>can</em> do "</p>
  <p>&mdash; John Wooden </p>

  <p>"There is no substitute for hard work"</p>
  <p>&mdash; Thomas Edison </p>
</div>




<!-- =====box===== -->

<div class="achieve">
<h1>Why Choose Us?</h1>

<table>
<tr>
<td>
<div class="icon">
    <img src="images/folder.png" alt="Folder">
</div>
<td>
Useful subjects are taught for easy adaptations in the future
</td>

<td>
<div class="icon">
       <img src="images/idea.png" alt="Idea">
</div>
<td>
Expands students thinking in class and let their mind roam free
</td>


<td>
<div class="icon">
	<img src="images/badge.png" alt="Badge">
</div>
<td>
Medals are given from time-to-time for excel students
</td>
</tr>


<tr>
<td>
<div class="icon">
	<img src="images/desk.png" alt="Desk">
</div>
<td>
Classrooms built in a spacious clean environment
</td>

<td>
<div class="icon">
	<img src="images/soccer.png" alt="Soccer">
</div>
<td>
Many sports to choose from for extra co-curricular activities
</td>

<td>
<div class="icon">
	<img src="images/tv.png" alt="TV">
</div>
<td>
Digital learning space for convenient interactive learning
</td>
</tr>

</table>
</div>

<a class="topButton" href="#top"><img class="topButton" src="images/top.png"  alt="Back to Top"></a>
<br><br><br>


  <footer>
    <p class="footer">Nature Primary School Kuala Lumpur, 16, Jalan Kiara 3, Off Jalan Bukit Kiara,
    <br>50480 Kuala Lumpur, Malaysia.
    <br>Email: <a href="mailto:natureprimaryschool@gmail.com">natureprimaryschool@gmail.com</a>
    </p>
  </footer>

</body>
</html>
