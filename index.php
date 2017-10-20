
<?php 
//DATA COMMUNICATIONS ASSIGNMENT DUE 19TH OCTOBER 2017

;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA COMMUNICATIONS ASSIGNMENT DUE 19TH OCTOBER 2017</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500|Source+Code+Pro:300,400,600,700" rel="stylesheet">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

    <!-- custom main stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    
 <div class="container">   
<div class="align-center-1">


 <h2>DATA COMM. ASSIGNMENT. </h2> <br> 
 <h4>(DUE: 19TH OCTOBER 2017)  </h4>
  <h3 class="student-id">STUDENT ID: 218012411 </h3>

 <h2>Units of Period and Frequency. </h2>
  <p>This converts Units of a period you enter into the form to: Seconds (s), Milliseconds (ms), Microseconds (Ils), Nanoseconds (ns) and Picoseconds (ps) </p>

  <br />


<form  method="post">
 <br> 
<input type="float" name="seconds" step="any" placeholder="Enter Value to convert:">  <br />
<input type="submit" class="btn btn-info" value="Click to Convert">
</form>

 <?php
 $seconds = $_POST["seconds"];

?> 
  
</div> 

                            <!--  This is what does the conversion. Takes a value from the input-->
<ul class="list-group align-center" >
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Seconds (s)
        <span class="badge badge-primary badge-pill"><?php echo $seconds ; ?> (seconds)</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Milliseconds (ms) 
        <span class="badge badge-primary badge-pill"><?php echo $seconds  * 1000; ?> (ms)</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Microseconds (us)
        <span class="badge badge-primary badge-pill"><?php echo $seconds  * 1000000; ?> (us)</span>
    </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
        Nanoseconds (ns)
        <span class="badge badge-primary badge-pill"><?php echo $seconds  * 1000000000; ?> (ns)</span>
    </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
        Picoseconds (ps)
        <span class="badge badge-primary badge-pill"><?php echo $seconds  * 1000000000000; ?> (ps)</span>
    </li>
</ul>
         
 
 </div>  

 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108372931-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108372931-1');
</script>
 
</body>
</html>
