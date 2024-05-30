<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['Account_type'] !== '0') {
    header("Location: login.php");
    exit();
}

?> 

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    
	   
      
	   
        <link rel="stylesheet" href="custom.css">
		
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   

   
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
     
  </head>
  <body>
  <style>
a{
    text-decoration: none;
}
       
</style>



<div class="wrapper">


	
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="haha.jpg" class="img-fluid"/><span>Hi, User</span></h3>
            </div>
            <ul class="list-unstyled components">
			
		

           
            
           
                <li class="icon">
                    <a href="#"><i class='bx bx-home-heart' ></i>Home</a>
                    <a href="#"><i class='bx bx-user-circle' ></i>Profile</a>
                    <a href="#"><i class='bx bxs-graduation'></i>Course</a>
                    <a href="#"><i class='bx bx-book'></i>Student</a>
                    <a href="#"><i class='bx bxs-dollar-circle' ></i>Payment</a>
                    <a href="#"><i class='bx bxs-report' ></i>Report</a>
                    <a href="#"><i class='bx bx-cog' ></i>Settings</a>
                </li>
                

			   
			     
				
				 <li  class="logout">
                    <a href="login.php"> <i class='bx bx-log-out-circle' ></i><span>Logout</span></a>
                    
                </li>
               
               
            </ul>

           
        </nav>
		
		
		
		

		
		<div id="content">
		   
		 
		   
		   <div class="top-navbar">
		      <div class="xp-topbar">

               
                <div class="row"> 
                    
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                               <span class="material-icons text-white">signal_cellular_alt
							   </span>
                         </div>
                    </div> 
                   
                   <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                         <div class="xp-profilebar text-right">
							 <nav class="navbar p-0">
                        <ul class="nav navbar-nav flex-row ml-auto">   
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                  
                               
							

								</a>
                          
							
                        </div>
                    </div>
                

                </div> 
               

            </div>
		     <div class="xp-breadcrumbbar text-center">
                <h4 class="page-title">Welcome to User</h4>  
                <h4 class="breadcrumb-item active" ></h4>
                   
                    
                        
            </div>
			
		   </div>
		   
		   
		  
		   
    
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
        
		$(document).ready(function(){
		  $(".xp-menubar").on('click',function(){
		    $('#sidebar').toggleClass('active');
			$('#content').toggleClass('active');
		  });
		  
		   $(".xp-menubar,.body-overlay").on('click',function(){
		     $('#sidebar,.body-overlay').toggleClass('show-nav');
		   });
		  
		});
		
</script>


  </body>
  
  </html>




