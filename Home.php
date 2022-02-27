<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> EcoGo Ride</title>
        <!--link rel="stylesheet" href="style.css" type="text/css"-->
        <style>
            
*{
    margin: 0;
    padding: 0;
}
.logo
{
    width:80px;
    cursor:pointer;
    align-self: center;
    background-color: white;
    height: fit-content;
}
.navbar{
    width: 100%;
    height: 13vh;
    margin: auto;
    display: flex;
    align-items:flex-start;
 
}
nav {
    flex: 1;
    padding-left: 60px;
    background-color: #B8A7C7;
}
nav ul li{
    
display: inline;
list-style: none;

margin: 0px 15px;
}

nav ul li a{
    float: left;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    float: right;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: 300;
    text-shadow: 5mm;
    align-self: center;

}
.active
{
    background-color: #eeeb31;
    color: black;
}
nav ul li a:hover {
    background-color:gainsboro;
        color: black;
  }

.heading{
    color:#eeeb31;
    font-weight: 100;
    font-size: 60px;
    font-family:Arial, Helvetica, sans-serif;
    text-align:center;
}
.route{
    
    width:80px;
    cursor:pointer;
    align-self: center;

}


.content
{
    font-size: 30px;
    margin-top: 24px;
    margin-bottom: 15px;
    color:#070606;
    right:80%;
    text-align:center;

}
.content1{
    text-align: right;
    right:80%;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;   margin-top: 24px;
    margin-bottom: 15px;
    text-align:center;
}
.left{
    width: 42.5%;
}
.bike{
    height:89.5%;
    position: absolute;
    bottom:0;
    left:0px;
    
}
.right
{
    width: 58.5%;
        display:table-cell; 
        vertical-align:middle; 
        padding:0 10px;
        float:right;
     
}
.back{
    max-width: 100%;
    max-height: 90.5%;
    right: 0px;
    height:91.5%;
    width: 100%;

}
.centered {
    position: absolute;
    top: 30%;
    left: 50%;
}
body{
    background-image: url("images/dffg.jpg");
}
.signin{
        width:140px;
        padding: 0 15px;
}
.signout{
        width:140px;
        padding: 0 15px;
}
            </style>
       
    </head>
    <body>
         <div class="navbar">
            <img src="images/logo.png" class="logo">
            <nav>
                <ul>
                <li><a href="logout.php"> LOGOUT </a></li>
                <li><a href ="gocontact.php">CONTACT</a></li>
                     <li><a  href ="About.php">ABOUT</a></li>
                      <!--li><a href ="EcoPayment.php">PAYMENT</a></li-->
                     <li><a href ="Daily-Rentals.php">DAILY RENTALS</a></li>
                     <li><a class="active" href ="#Home">HOME</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <table style="width:100%" >
                <tbody>
                    <tr>
                        <td class="left">
                            <img src="images/cc-min.jpg" class="bike"/>  
                        </td>
                        <td class="right">     
                            <img src="images/dffg.jpg" class="back"/>
                            <div class="centered">
                                <table>
                                    <tr><td><h1 class="heading">ECOGO</h1></td>
                                        <td><img src="images/route.png" class="route"></td>
                                    </tr>
                                </table>
                                <div>
                                    <h2 class="content">Rent Bikes or Scooters</h2></div></br>
                                    <p class="content1">An initiative to promote rental bikes and scooters for your</br> comfortable rides. To make that happen we make it possible</br> with daily rental or subscription for your rides. &nbsp;
                                    </p>
                                    </br>
                            
                                    </br>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>    
        </div>
    </body>
</html>
