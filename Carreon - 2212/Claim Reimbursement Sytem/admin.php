<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['Account_type'] !== '1') {
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
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
<body>
<style>
     a {
            text-decoration: none;
        }

.breadcrumb-item.active {
font-size: 15px;
margin-left: -8px;
}
.sidebar-header {
    display: flex;
    justify-content: center;
}

.sidebar-header h3 {
    margin: 0;
    text-align: center;
}
.cards {
    display: flex;  
    justify-content: space-around;
    align-items: flex-start; 
    flex-wrap: wrap;
}
 
.card1 {
    width: 200px;  
    margin: 20px;
    background-color:#1e90ff;
    border-radius: 10px;
    padding: 20px 15px;
    text-align: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.card2{
    width: 200px;  
    margin: 20px;
    background-color:#367588;
    border-radius: 10px;
    padding: 20px 15px;
    text-align: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.card3{
    width: 200px;  
    margin: 20px;
    background-color:#ef3038;
    border-radius: 10px;
    padding: 20px 15px;
    text-align: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.card4{
    width: 200px;  
    margin: 20px;
    background-color:#32cd32;
    border-radius: 10px;
    padding: 20px 15px;
    text-align: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
 
.box1, .box2, .box3, .box4 {
    display: flex; 
    flex-direction: column;  
    justify-content: center; 
    align-items: center; 
    padding: 20px;
    text-align: center;
}

 
.box1 h1, .box2 h1, .box3 h1, .box4 h1 {
    font-size: 16px;
    color: white;
}

 
.box1 h2, .box2 h2, .box3 h2, .box4 h2 {
    font-size: 15px;
    color: white;
}
</style>
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Hi, Admin</h3>
        </div>
        <ul class="list-unstyled components">
                        <li>
                            <a href="admin.php"><i class='bx bxs-dashboard'></i>Dashboard</a>
                        </li>
            
                        <li>
                            <a href="add claim.php"><i class='bx bx-money-withdraw'></i>Add Claim</a>
                        </li>
                        <li>
                            <a ><i class='bx bx-user-circle'></i>User</a>
                        </li>
                        
                        <li>
                            <a ><i class='bx bxs-report'></i>Report</a>
                        </li>
                        <li>
                            <a ><i class='bx bx-cog'></i>Settings</a>
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
                <h4 class="page-title">Claim Reimbursement System</h4>  
                <h4 class="breadcrumb-item active" ></h4>
                   
                    
                        
            </div>
			
		   </div>
           <div class="content">
            <div class="cards">
                <div class="card1">
                    <div class="box1">
                        <h1>Total Members</h1>
                        <h2>10</h2>
                    </div>
                </div>
                <div class="card2">
                    <div class="box2">
                        <h1>Total Claims</h1>
                        <h2>23</h2>
                    </div>
                </div>
                <div class="card3">
                    <div class="box3">
                        <h1>Pending Claims</h1>
                        <h2>6</h2>
                    </div>
                </div>
                <div class="card4">
                    <div class="box4">
                        <h1>Approved Claims</h1>
                        <h2>15</h2>
                    </div>
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




