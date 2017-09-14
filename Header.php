<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/header.css">
<script>
$(document).ready(function() {   
            var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
            });
        });
</script>

</head>

<body>

<header role="banner" class="navbar navbar-fixed-top navbar-inverse">
	<div class="container">
		<div class="navbar-header">
		  <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left">
		  	<span class="icon-bar"></span>
		  	<span class="icon-bar"></span>
		  	<span class="icon-bar"></span>
		  </button>
		</div>

		<div class="row">
    <div class="col-sm-4 col-xs-6">
			<div class="site-logo"></div>
		</div>
		
    <div class="col-sm-8 col-xs-6">
		<div class="navbar-inverse side-collapse in">
			<nav role="navigation" class="navbar-collapse">
				<ul class="nav navbar-nav">

				  <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          SERVICES
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				        <ul>
				          <li class="list-item"><a class="dropdown-item" href="#">Website Design & Development</a></li>
				          <li class="list-item"><a class="dropdown-item" href="#">e-Commerce Solutions</a></li>
				          <li class="list-item"><a class="dropdown-item" href="#">Application Development & Maintenance</a></li>
				          <li class="list-item"><a class="dropdown-item" href="#">Consulting</a></li>
				      	  <li class="list-item"><a class="dropdown-item" href="#">Business Reputation Analytics</a></li>    
						  <li class="list-item"><a class="dropdown-item" href="#">Test Automation</a></li>
						  <li class="list-item"><a class="dropdown-item" href="#">MVP Development for Startups</a></li>		   			<li class="list-item"><a class="dropdown-item" href="#">Research & Development</a></li>
				         </ul> 
			        </div>
      			  </li>

				  <li class="nav-item dropdown">
				  	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  		TECHNOLOGIES
				  	</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				        <ul>
				          <li class="list-item"><a class="dropdown-item" href="#">Open Source Technologies</a></li>
				          <li class="list-item"><a class="dropdown-item" href="#">Artificial Intelligence</a></li>
				          <li class="list-item"><a class="dropdown-item" href="#">Blockchain</a></li>
				          <li class="list-item"><a class="dropdown-item" href="#">Cloud</a></li>  
				         </ul> 
			        </div>				  	
				  </li>

				  <li>
				  	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  		INDUSTRY
				  	</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				        <ul>
				          <li class="list-item"><a class="dropdown-item" href="#">Small & Medium Business</a></li>
				          <li class="list-item"><a class="dropdown-item" href="#">Retail</a></li>
				          <li class="list-item"><a class="dropdown-item" href="#">Finance</a></li>
				          <li class="list-item"><a class="dropdown-item" href="#">Manufacturing</a></li>
				          <li class="list-item"><a class="dropdown-item" href="#">Hotel</a></li>				            
				         </ul> 
			        </div>				  	
				  </li>
				  <li><a class="nav-link" href="#users">WHITEPAPERS</a></li>

				  <li class="nav-item dropdown">
				  	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  		RFP
				  	</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				        <ul>
				          <li class="list-item"><a class="dropdown-item" href="#">Action Action</a></li>
				          <li class="list-item"><a class="dropdown-item" href="#">Another action</a></li>
				          <li class="list-item"><a class="dropdown-item" href="#">Something else here</a></li>
				        </ul> 
			        </div>				  	
				  </li>
          <li><a class="nav-link" href="#Home">CONTACT</a></li>

             
				</ul>
			</nav>
		</div>
    </div>
    </div>
    
	</div>
</header>
   <div class="container side-collapse-container">
    </div>

</body>

</html>