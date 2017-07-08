
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<title>Live Example</title>
<style type="text/css">



#pic img {

width:500px;
height:500px;

}
#photo img {

width:500px;
height:500px;
float:right;

}


 #pic #loading {
	background-color: #900;
	height: 500px;
	width: 500px;
	
}

 #photo #lo {
	background-color: red;
	height: 500px;
	width: 500px;
float:right;
	
}


.spinner {

   
  margin-top:50%;
 
  margin-left:50%;
  
  width: 40px;
  height: 40px;
  background-color: #333;

  -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
  animation: sk-rotateplane 1.2s infinite ease-in-out;
}

@-webkit-keyframes sk-rotateplane {
  0% { -webkit-transform: perspective(120px) }
  50% { -webkit-transform: perspective(120px) rotateY(180deg) }
  100% { -webkit-transform: perspective(120px) rotateY(180deg)  rotateX(180deg) }
}

@keyframes sk-rotateplane {
  0% { 
    transform: perspective(120px) rotateX(0deg) rotateY(0deg);
    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg) 
  } 50% { 
    transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg) 
  } 100% { 
    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
  }
}



</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" language="javascript">
</script>


<script language="javascript">
$(window).load(function(){ // This runs when the window has loaded
var img = $("<img />").attr('src', 'http://farzikam.cf/pexels-photo-196659-1.jpeg').load(function() { 
            $("#loading").fadeOut(0);
			$("#pic").append(img); 
			
// When the image has loaded, stick it in a div
    });

});

</script>


</head>

<body>

  
   <div id="pic">
    <div id="loading">LOADING</div>
  </div>
  
 <script language="javascript">
$(window).load(function(){ // This runs when the window has loaded
var img = $("<img />").attr('src', 'https://static.pexels.com/photos/199503/pexels-photo-199503.jpeg').load(function() { 
            $("#lo").fadeOut(0);
			$("#photo").append(img); 
			
// When the image has loaded, stick it in a div
    });

});

</script>

<div id="photo">
    <div id="lo"><div class="spinner"></div></div>
  </div>



</body>
</html>
