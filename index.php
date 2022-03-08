  <?php 

/*header("location:comingsoon.php"); */



?>

<!DOCTYPE html>
<html>
<head>
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
<title>Thread Fred</title>

<br></br><br></br><br></br><br>
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
body {
  height: 100%;
}


.parent {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
   <div class="parent">
  <img src="https://threadfred.madforgames.repl.co/Images/threadfredlogo.png">
</div>

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
  </head>
  <body>
    <h3>Welcome to the official website of Thread Fred</h3>
        <a class="button" href="https://threadfred.madforgames.repl.co/">Reload</a>
    <a class="button" href="https://threadfred.madforgames.repl.co/about.php">About</a>
    <a class="button" href="https://threadfred.madforgames.repl.co/github.php">Github Repo</a>
  </body>
</html>


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






</body>
</html>

</div>

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

</body>
</html>


<br></br>

<div class="background">
  <div class="container">
    <div class="panel pricing-table">
      
      <div class="pricing-plan">
        <h2 class="pricing-header">Thread Fred Game Download</h2>
        </ul>
        <a href="https://threadfred.madforgames.repl.co/download.php" class="pricing-button">Download</a>
      </div>
      

      </div>
      
    </div>
  </div>
</div>


<style>

  html {
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.background {
  padding: 0 25px 25px;
  position: relative;
  width: 100%;
  color: #ff9e9e;
}

.background::after {
  content: '';
  background: #ffff;
  background: -moz-linear-gradient(top, #ffff 0%, #ffff 100%);
  background: -webkit-linear-gradient(top, #ffb0ac 0%,#ffb0ac 100%);
  background: linear-gradient(to bottom, #ffff 0%,#ffff 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffff', endColorstr='#ffff',GradientType=0 );
  height: 350px;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1;
}



.container {
  margin: 0 auto;
  padding: 50px 0 0;
  max-width: 960px;
  width: 100%;
}

.panel {
  background-color: #fff;
  border-radius: 10px;
  padding: 15px 25px;
  position: relative;
  width: 100%;
  z-index: 10;
}

.pricing-table {
  box-shadow: 0px 10px 13px -6px rgba(0, 0, 0, 0.08), 0px 20px 31px 3px rgba(0, 0, 0, 0.09), 0px 8px 20px 7px rgba(0, 0, 0, 0.02);
  display: flex;
  flex-direction: column;
}

@media (min-width: 900px) {
  .pricing-table {
    flex-direction: row;
  }
}

.pricing-table * {
  text-align: center;
  text-transform: uppercase;
}

.pricing-plan {
  border-bottom: 1px solid #ffb0ac;
  padding: 25px;
}

.pricing-plan:last-child {
  border-bottom: none;
}

@media (min-width: 900px) {
  .pricing-plan {
    border-bottom: none;
    border-right: 1px solid #ffb0ac;
    flex-basis: 100%;
    padding: 25px 50px;
  }

  .pricing-plan:last-child {
    border-right: none;
  }
}

.pricing-img {
  margin-bottom: 25px;
  max-width: 100%;
}

.pricing-header {
  color: #ffb0ac;
  font-weight: 600;
  letter-spacing: 1px;
}

.pricing-features {
  color: #ffb0ac;
  font-weight: 600;
  letter-spacing: 1px;
  margin: 50px 0 25px;
}

.pricing-features-item {
  border-top: 1px solid #ffb0ac;
  font-size: 12px;
  line-height: 1.5;
  padding: 15px 0;
}

.pricing-features-item:last-child {
  border-bottom: 1px solid #ffb0ac;
}

.pricing-price {
  color: #ffb0ac;
  display: block;
  font-size: 32px;
  font-weight: 700;
}

.pricing-button {
  border: 1px solid #ffb0ac;
  border-radius: 10px;
  color: #ffb0ac;
  display: inline-block;
  margin: 25px 0;
  padding: 15px 35px;
  text-decoration: none;
  transition: all 150ms ease-in-out;
}

.pricing-button:hover,
.pricing-button:focus {
  background-color: #ebc0be;
}

.pricing-button.is-featured {
  background-color: #ffb0ac;
  color: #fff;
}

.pricing-button.is-featured:hover,
.pricing-button.is-featured:active {
  background-color: #ffb0ac;
}
</style>