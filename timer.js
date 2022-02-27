window.onload = function () {
 
  var seconds = 00;
  var tens = 00;
  var appendTens = document.getElementById("tens")
  var appendSeconds = document.getElementById("seconds")
  var buttonStart = document.getElementById("button-start");
  var buttonStop = document.getElementById("button-stop");
  var buttonReset = document.getElementById("button-reset");
  var Interval ;
  var cost ;
  var tsec ;
    buttonStart.onclick = function() {
   
    clearInterval(Interval);
     Interval = setInterval(startTimer, 10);
  }
 
    buttonStop.onclick = function() {
        window.alert("Your Ride Has Come to an end!!\nGetting directed to payment page...\n");
        ridecost();
        clearInterval(Interval);
 }
 
  function ridecost ()
  {
 tsec = seconds+(tens/1000);
 cost =tsec*0.00277;
 $.post("pay.php",cost) ;//Rs10 per hr => 10/3600 gives 0.00277rs per sec
  }
 
 
 
  buttonReset.onclick = function() {
     clearInterval(Interval);
    tens = "00";
  seconds = "00";
    appendTens.innerHTML = tens;
  appendSeconds.innerHTML = seconds;
  }
 
   
 
  function startTimer () {
    tens++;
   
    if(tens <= 9){
      appendTens.innerHTML = "0" + tens;
    }
   
    if (tens > 9){
      appendTens.innerHTML = tens;
     
    }
   
    if (tens > 99) {
      console.log("seconds");
      seconds++;
      appendSeconds.innerHTML = "0" + seconds;
      tens = 0;
      appendTens.innerHTML = "0" + 0;
    }
   
    if (seconds > 9){
      appendSeconds.innerHTML = seconds;
    }
 
  }
 

}
