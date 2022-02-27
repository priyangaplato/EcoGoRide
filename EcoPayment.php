<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Times New Roman;
  font-size: 17px;
  padding: 0px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  } 
}
*{
    margin: 0;
    padding: 0;
}
body {
  background-image: url('bg1.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
.logo
{
    width:80px;
    cursor:pointer;
    align-self: center;
    background-color: white;
    height: fit-content;
    padding:0;
}
.navbar{
    width: 100%;
    height: 13vh;
    margin: auto;
    display: flex;
    align-items:flex-start;
    padding-left: 60px;
 
}
nav {
    flex: 1;
    
    height: 10vh;
    align-items:flex-end;
    background-color: rgb(242,242,242);
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
    font-size: 19px;
    float: right;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: 300;
    text-shadow: 5mm;
    align-self: center;

}
.active
{
    background-color:rgb(191,57,76);
    color: black;
    height: 8vh;

}
nav ul li a:hover {
    background-color:gainsboro;
        color: black;
  }

</style>
</head>
<body>
          <div class="navbar">
            <img src="images/logo.png" class="logo">
            <nav>
                <ul>
                  <li><a class="active" href ="#EcoPayment">PAYMENT</a></li>
                      <li><a href ="Daily-Rentals.php">DAILY RENTALS</a></li>
                          <li><a href ="gocontact.php">CONTACT</a></li>
                              <li><a href ="About.php">ABOUT</a></li>
                    <li><a  href ="Home.php">HOME</a></li>
                </ul>
            </nav>
        </div>


<div class="row"  style="padding:100px 300px;">
  <div class="col-50">
    <div class="container" >
      <form  action="pay.php" method="post" style="padding: 25px;" >
        <div class="row" >
          <div class="col-25">
            <h3 style="text-align: center;margin:20px 10px;font-family: lato;">EcoGo PAYMENT </h3>
          

            <label for="fname"><i class="fa fa-user"></i> Name</label>
            <input type="text" id="fname" name="name" placeholder="Enter Full Name.." required>
            <label for="email"><i class="fa fa-envelope"></i> Email ID</label>
            <input type="text" id="email" name="email" placeholder="abcd@gmail.com" required>
            <input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>" name="orderid">
            <input type="hidden" value="<?php echo 1;?>" name="amount">
            <label for="city"><i class="fa fa-mobile"></i> Phone No.</label>
            <input type="text" id="city" name="mobile" placeholder="Enter Phone No.." required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Enter Address.." required>
          
        </div>
       
        <input type="submit"  value="PAY NOW" class="btn">
      </form>
    </div>
  </div>
 
</div>

</body>
</html>
