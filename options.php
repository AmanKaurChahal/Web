<!DOCTYPE html>
<html>
    <!-- style to use icon in front of buttons-->
    <head>
        <title>MyWeB Home Page</title>
        
        <style>
         #image {
                width: 10px;
                height: 10px;
                background: url(icons/image_icon.jpg) 0 0;
                }

        #video {
                width: 10px;
                height: 10px;
                background: url(icons/video_icon.jpg) 0 0;
                }
            body,html{
            background-image: url(icons/home.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            
        }
            
            </style>
        
       
    </head>

    
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" >Log Out</a>
    

 </div>
</div>

    
 

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
     
      <br>
      
      <!-- Accordion -->
     
      
      <!-- Interests --> 
      
      <br>
      
      <!-- Alert Box -->
      
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
      <!-- Upload text -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">What's on your mind?</h6>
              
              <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  <a href="text_upload.php">Write Someting</a></button> 
            </div>
          </div>
        </div>
      </div>
      <!-- Upload Image-->  
      <br>
       <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Its time to Upload your Favourite Picture...</h6>
              
              <button type="button" class="w3-button w3-theme"><img id="home" src="icons/image_icon.jpg" width="90" height="30"> <a href="imageUpload.php">Post</a></button> 
            </div>
          </div>
        </div>
      </div>
        <br>
        <!-- Upload Video -->
         <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Add a new video....Make new memories...</h6>
            
                <button type="button" class="w3-button w3-theme"><img id="home" src="icons/video_icon.jpg" width="90" height="30"><a href="uploadVideos.php"> Post</a></button> 
            </div>
          </div>
        </div>
      </div>
      
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
   
    <!-- End Right Column -->
    
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->

<br>
    <br>

<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>




</body>
</html> 

