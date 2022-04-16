<!DOCTYPE html>
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

*{
	list-style: none;
	text-decoration: none;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Open Sans', sans-serif;
  width: auto;
}

body{
	background: #f5f6fa;
}

.wrapper .sidebar{
	background: rgb(5, 68, 104);
	position: fixed;
	top: 0;
	left: 0;
	width: 225px;
	height: 100%;
	padding: 20px 0;
	transition: all 0.5s ease;
}

.wrapper .sidebar .profile{
	margin-bottom: 30px;
	text-align: center;
}

.wrapper .sidebar .profile img{
	display: block;
	width: 100px;
	height: 100px;
    border-radius: 50%;
	margin: 0 auto;
}

.wrapper .sidebar .profile h3{
	color: #ffffff;
	margin: 10px 0 5px;
}

.wrapper .sidebar .profile p{
	color: rgb(206, 240, 253);
	font-size: 14px;
}

.wrapper .sidebar ul li a{
	display: block;
	padding: 13px 30px;
	border-bottom: 1px solid #10558d;
	color: rgb(241, 237, 237);
	font-size: 16px;
	position: relative;
}

.wrapper .sidebar ul li a .icon{
	color: #dee4ec;
	width: 30px;
	display: inline-block;
}



.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
	color: #0c7db1;

	background:white;
    border-right: 2px solid rgb(5, 68, 104);
}

.wrapper .sidebar ul li a:hover .icon,
.wrapper .sidebar ul li a.active .icon{
	color: #0c7db1;
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
	display: block;
}

.wrapper .section{
	width: calc(100% - 225px);
	margin-left: 225px;
	transition: all 0.5s ease;
}

.wrapper .section .top_navbar{
	background: rgb(7, 105, 185);
	height: 50px;
	display: flex;
	align-items: center;
	padding: 0 30px;

}

.wrapper .section .top_navbar .hamburger a{
	font-size: 28px;
	color: #f4fbff;
}

.wrapper .section .top_navbar .hamburger a:hover{
	color: #a2ecff;
}
.center
{
    position: absolute;
    top:50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.search{
  position: absolute;
  top:110%;
  left: 60%;
  transform: translate(-50%,-50%);
}
.reset{
  position: absolute;
  top:110%;
  left: 90%;
  transform: translate(-50%,-50%);
}
.title{
  position: absolute;
  color: white;
  top:5%;
  left: 60%;

  transform: translate(-50%,-50%);
}
body.active .wrapper .sidebar{
	left: -225px;
}

body.active .wrapper .section{
	margin-left: 0;
	width: 100%;
}
.table {
border: 2px solid black;
padding: 0px;
background-color: #f2f2f2;
position: absolute;
float: center;
left: 30%;
top: 70%;
}
th {
border: 2px solid black;
padding: 5px;
background-color: green;
color: white;
}
td {
border: 2px solid black;
padding: 5px;
}
.home_page
{
position: absolute;
top:50%;
left:60%;
transform: translate(-50%,-50%);
}
.info{
    position: absolute;
    top:100%;
    left:50%;
    transform: translate(-50%,-50%);
  color: black;
  font-size: 10px;
}
.home_page{
    color: blue;
    font-size: 40px;
}
.button_home{
    position: absolute;
    top:70%;
    left:60%;
    transform: translate(-50%,-50%);
}
.btn{
    border: 1px solid blue;
    padding: 1px 30px;
    color: red;
    text-decoration: none;
}
.btn:hover{
    background-color: black;
    color: white;
}
.WebContainer{
    width:100%;
    height:auto;
}
    </style>
</head>
<body class="webcontainer">
   <!-- <H1>HOSTEL MANAGEMENT SYSTEM</H1> -->
    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>

        </div>
        <div class="sidebar">
            <div class="profile">
                <img src="JNTUlogo.png" alt="profile_picture">
                <h3>JNTUH CEM</h3>
                <!-- <p>Designer</p> -->
            </div>
            <ul>
                <li>
                    <a href="index.php" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">My Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="student.php">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Students</span>
                    </a>
                </li>
                <li>
                    <a href="reports.php">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="admin.php">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Admin</span>
                    </a>
                </li>
                <li>
                    <a href="settings.php">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <h2 class="title"> Hostel  Management  System</h2>
    <div class="home_page">

    <h2 class="info">A PATH TO EXCELLENCE </h2>
    <h1> JNTUH </h1>
        </div>
    <div class="button_home">
        <a class="btn"href="https://jntuh.ac.in/?msclkid=6120351db82b11ecbcbd810f453476c5">know more</a>
        <a class="btn"href="signup.html">signup</a>
    </div>
<script>
       var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>
</body>
</html>
