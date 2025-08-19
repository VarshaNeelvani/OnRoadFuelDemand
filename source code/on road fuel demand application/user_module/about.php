<html>
<head>
<title> About  </title>
 <style>
  input[type=text]{
	  width:20%;
	  padding:15px 20px;
	  margin:8px 0;
	  box-sizing:border-box;
  }
  input[type=submit]
  {
	  margin:4px 2px;
	  padding:5px 22px;
	  cursor:pointer;
	  width:5%;
  }
  
  input::placeholder{
	  font-size:20px;
	  text-align:center;
	  letter-spacing:2px;
  }
  body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow:hidden ;
  margin:10;
  padding:0;
  background-color: #82E0AA; //box sizing:border-box
}

.topnav a {
  float: left;
  border-right:1px solid #bbb;
  color: white;
  text-align: center;
 padding: 10px 10px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
   background-color:#641E16;
  color: white;
}

.topnav a.active {
  background-color:#641E16;
  color: white;
}
      .button{
	  background:#641E16;
	  border:none;
	  border-radius:35%;
	  color:white;
	  padding:30px 50px;
	  text-align: left;
	  text-decoration:none;
	  dispaly:inline-block;
	  font-size:16px;
	  margin:4px 2px;
	  cursor:pointer;
	}
		 .box {
        width: 230px;
        height: 50px;
        border: 1px solid #999;
        font-size: 18px;
        color: #1c87c9;
        background-color: #eee;
        border-radius: 5px;
        box-shadow: 4px 4px #ccc;
      }
 </style>
 </head>
<body background="bg.jpeg" style="background-repeat:no-repeat;background-size:99% 99%;">
<center>
<h1 style = "font-family: Georgia, serif;" ><font color="black">ON ROAD FUEL DEMAND APPLICATION</font color></h1><br/>
<h2><marquee direction="left"><font color="#2874A6">"On-road fuel supply applications for developing on-demand fuel supplies depend on user orders and
requirements."</font color></marquee></h2><br/>
<div class="topnav">
  <a  href="userhomepage.php">Home</a>
  <a href="fuelstation.php">Fuel station</a>
  <a   href="myenquiry.php">My Enquiry</a>
  <a class="active" href="about.php">About</a>
  <a href="logout.php">Log out</a>
</div>
<br/>
<h1><font color="#641E16" >--ABOUT--</font color><h1/></center>
<h3> &nbsp &nbsp &nbsp  > Due to growth of automobiles in market, fuel consumption became more.  In existing systm, unfortunately because of some reason if vehicle stops due to lack of petrol, it will be very hard  for the owner to push the vehicle to the nearest petrol pump.</h3>
<h3> &nbsp &nbsp &nbsp  > In this application three modules using user, fuel station, admin. Admin can verify Fuel Station details, then it will see user modules. Fuel Station can add their branch information like address and google map geo location and kind of fuel provide.</h3>
<h3> &nbsp &nbsp &nbsp  > User can search by locality or station name and book the fuel on online app. Our objective develop using angular java script and MySQL as our backend database with responsive applicaion.
</h3><br/>
<h3>
&nbsp &nbsp <font color="#641E16" >MODULE  LIST</font color> <br/><br/>
&nbsp &nbsp &nbsp  USER <br/><br/>
&nbsp &nbsp &nbsp>	LOGIN<br/>
&nbsp &nbsp &nbsp>	REGISTER <br/>
&nbsp &nbsp &nbsp>SEARCH FUEL STATION<br/>
&nbsp &nbsp &nbsp>	HOME PAGE<br/> 
&nbsp &nbsp &nbsp>	MY ENQUIRY<br/><br/>
&nbsp &nbsp ADMIN<br/><br/>
&nbsp &nbsp &nbsp>	LOGIN<br/>
&nbsp &nbsp &nbsp>	REGISTER <br/>
&nbsp &nbsp &nbsp>CREATE FUEL STATION<br/>
&nbsp &nbsp &nbsp>	HOME PAGE<br/> 
&nbsp &nbsp &nbsp>	ENQUIRY<br/>
</h3>
</body>
</html>
