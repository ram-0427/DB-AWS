
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
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


.center-text {
      text-align: center;
    }

</style> 

</head>
<body>

    <header>
        <nav>
            
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
  
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>

    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
