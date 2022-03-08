<?php 

/*header("location:comingsoon.php"); */



?>

<!DOCTYPE html>
<html>
<head>


  <title>Download</title>
  <link rel="icon" type="image/x-icon" href="/Images/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #ffb0ac;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;

}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
</head>
<body onload="myFunction()" style="margin:10;">

<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">

<br></br><br></br><br></br><br></br><br></br><br></br>
     <div class="parent">
  <img src="https://threadfred.madforgames.repl.co/Images/threadfredlogo.png">
</div>
<h1>Thread Fred is still under development!</h1>
<h3>You will be able to download the game when it's released here!</h3>
</style>


<div class="bgimg">
  <div class="topleft">
  </div>
  <div class="middle">
    </br>
        <style>
      .button {
        display: inline-block;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        color: #ffffff;
        background-color: #ffb0ac;
        border-radius: 6px;
        outline: none;
      }
    </style>
<style>
body {
  color: white;
}


  h1 {
  color: black;
}
  h2 {
  color: black;
}
h3 {
  color: black;
}
  p {
  color: black;
}
  

h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}
p {text-align: center;}
div {text-align: center;}

</style>

<div class="bgimg">
  <div class="topleft">
  </div>
  <div class="middle">
    </br><br>
        <style>
      .button {
        display: inline-block;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        color: #ffffff;
        background-color: #ffb0ac;
        border-radius: 6px;
        outline: none;
      }
    </style>

<a class="button" href="https://threadfred.madforgames.repl.co/">Homepage</a>




<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>