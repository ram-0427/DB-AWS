

<!DOCTYPE html>
<html lang="en">
<head> 
<title>TRAINING PROJECT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}

</style> 
</head>
<body>


<!-- Navbar --> 

<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="{{ url('/admin') }}"></a><a href="{{ url('/admin') }}" class="w3-bar-item w3-button w3-padding-large">HOME</a>

    <div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="{{ url('/admin') }}"></a><a href="{{ url('/admin') }}" class="w3-bar-item w3-button w3-padding-large"><img src="logo.png" alt="pic not working" width="100" height="50"></a>


<div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-padding-large w3-button" title="More">DEPARTMENT<i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
   <a href="{{ route('departments.create') }}" class="w3-bar-item w3-button">ADD DEPARTMENT</a>
   <a href="{{ url('/departments') }}" class="w3-bar-item w3-button">VIEW DEPARTMENT</a>
</div>
</div>
<div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-padding-large w3-button" title="More">STAFF<i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
   <a href="{{ route('staffs.create') }}" class="w3-bar-item w3-button">ADD STAFF</a>
   <a href="{{ url('/staffs') }}" class="w3-bar-item w3-button">VIEW STAFF</a>
</div>
</div>
<div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-padding-large w3-button" title="More">COURSE<i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
   <a href="{{ route('courses.create') }}" class="w3-bar-item w3-button">ADD COURSE</a>
   <a href="{{ url('/courses') }}" class="w3-bar-item w3-button">VIEW COURSE</a>
   <a href="facultycourselink.php" class="w3-bar-item w3-button">ADD COURSE WITH FACULTY</a>
</div>
</div>
<div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-padding-large w3-button" title="More">FACULTY<i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
   <a href="{{ route('faculties.create') }}" class="w3-bar-item w3-button">ADD FACULTY</a>
   <a href="{{ url('/faculties') }}" class="w3-bar-item w3-button">VIEW FACULTY</a>
</div>
</div>
<div class="w3-dropdown-hover w3-hide-small">
   <button class="w3-padding-large w3-button" title="More">BATCH<i class="fa fa-caret-down"></i></button>
   <div class="w3-dropdown-content w3-bar-block w3-card-4">

  <a href="{{ route('batches.create') }}" class="w3-bar-item w3-button">ADD BATCHES</a>
  <a href="{{ url('/batches') }}" class="w3-bar-item w3-button">VIEW BATCHES</a>
  <a href="viewbatchwisefaculty.php" class="w3-bar-item w3-button">VIEW BATCH WISE FACULTY</a>
  <a href="viewbatchwithstudent.php" class="w3-bar-item w3-button">VIEW BATCH WISE STUDENTS</a>
</div>
</div>
<div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-padding-large w3-button" title="More">STUDENTS<i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
   <a href="{{ route('students.create') }}" class="w3-bar-item w3-button">REGISTER STUDENTS</a>
   <a href="studentmstWITHbatch.php" class="w3-bar-item w3-button">REGISTER STUDENTS WITH BATCH</a>

   <a href="{{ url('/students') }}" class="w3-bar-item w3-button">VIEW STUDENTS</a>
</div>
</div>
  

<div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-padding-large w3-button" title="More">PAYMENTS<i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
    <a href="salarymst.php" class="w3-bar-item w3-button w3-padding-large">PAY SALARY</a>
   <a href="studentmst.php" class="w3-bar-item w3-button">STUDENT PAYMENTS</a>
  <a href="viewsalarymst.php" class="w3-bar-item w3-button w3-padding-large">ALL PAYMENTS</a>
</div>
</div>   
 

<div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-padding-large w3-button" title="More">ROOM<i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
    <a href="formroommst.php" class="w3-bar-item w3-button">REGISTER ROOM</a>
    <a href="viewroommst.php" class="w3-bar-item w3-button">VIEW ROOM</a>
</div>
</div> 
<div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-padding-large w3-button" title="More">SLOTS<i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
    <a href="slotmst.php" class="w3-bar-item w3-button">REGISTER SLOTS</a>
    <a href="viewslotmst.php" class="w3-bar-item w3-button">VIEW SLOT</a>
</div>
</div>
<div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-small w3-button" title="More" style="padding:15px;"><b>TIMETABLE</b><i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
    <a href="formtimetable.php" class="w3-bar-item w3-button">ADD TIMETABLE</a>
    <a href="viewtimetable.php" class="w3-bar-item w3-button">VIEW TIMETABLE</a>
</div>
</div>
<a href="logout.php" class="w3-bar-item w3-button w3-padding-small" style="padding:25px;">LOGOUT</a>

  
  
</div>


     
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
 
  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
  <h2 class="w3-wide"><b>WELCOME    
<b></h2>



  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  
<!-- End Page Content -->
</div>

 <footer style="position: fixed; bottom: 0; left: 0; right: 0; background-color: black; text-align: center; padding: 0px;">
  <h6 style="color: white;">© Copyright 2023, All Rights Reserved</h6>
</footer>


 

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>


<?php

?>