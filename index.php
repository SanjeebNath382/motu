<!DOCTYPE html>
<html>
    <head>
        <title>Happy Birthday Anshika</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style>
    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body{
    background-color:#2F2FA2
}

h1 {
  font-weight: normal;
}

li {
  display: inline-block;
  font-size: 1.5em;
  list-style-type: none;
  padding: 1em;
  text-transform: uppercase;
}

li span {
  display: block;
  font-size: 4.5rem;
}
.spec{
    display:none;
}















/* general styling */

.container {
  color: #333;
  margin: 0 auto;
  padding: 0.5rem;
  text-align: center;
}
               .pic-ctn {
  width: 100vw;
  height: 200px;
}

@keyframes display {
  0% {
    transform: translateX(200px);
    opacity: 0;
  }
  10% {
    transform: translateX(0);
    opacity: 1;
  }
  20% {
    transform: translateX(0);
    opacity: 1;
  }
  30% {
    transform: translateX(-200px);
    opacity: 0;
  }
  100% {
    transform: translateX(-200px);
    opacity: 0;
  }
}

.pic-ctn {
  position: relative;
  width: 100vw;
  height: 300px;
  margin-top: 15vh;
}

.pic-ctn > img {
  position: absolute;
  top:0px;
  left: 280px;
  opacity: 0;
  animation: display 10s infinite;
  width: 800px;
  height: 600px;
}
.btday{
    color: #ccff00;
}


img:nth-child(2) {
  animation-delay: 2s;
}
img:nth-child(3) {
  animation-delay: 4s;
}
img:nth-child(4) {
  animation-delay: 6s;
}
img:nth-child(5) {
  animation-delay: 8s;
}
img:nth-child(6) {
  animation-delay: 10s;
}
img:nth-child(7) {
  animation-delay: 12s;
}
img:nth-child(8) {
  animation-delay: 14s;
}
img:nth-child(9) {
  animation-delay: 16s;
}
img:nth-child(10) {
  animation-delay: 18s;
}
img:nth-child(11) {
  animation-delay: 20s;
}
img:nth-child(12) {
  animation-delay: 22s;
}
img:nth-child(13) {
  animation-delay: 24s;
}
img:nth-child(14){
    animation-delay: 26s;
}
img:nth-child(15){
    animation-delay: 28s;
}
img:nth-child(16){
    animation-delay: 30s;
}
    </style>
    </head>
    <body>
   
    <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#"><img src="./assets/logo.png" style="width:130px;height:65px"></img></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color:white">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./birthday.php" style="color:white">Greetings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./wishes.php" style="color:white">Wishes</a>
      </li>
      
        
    </ul>
    
  </div>
</nav>

<div class="container">
  <h1 id="hello" style="color:white">Countdown to Motu's birthday:</h1>
  <ul>
    <li id="1"><span id="days" style="color: #F64C72" ></span>Days</li>
    <li id="2"><span id="hours"  style="color: #F64C72" ></span>Hours</li>
    <li id="3"><span id="minutes"  style="color: #F64C72"></span>Minutes</li>
    <li id="4"><span id="seconds"  style="color: #F64C72"></span>Seconds</li>
  </ul>
</div>


<h3 class="display-4 ml-2" style="margin-left:30px;color:#F64C72" >Some memories from past are always good to look upon</h3>

<div class="pic-ctn">
    <img src="./assets/WhatsApp Image 2020-05-05 at 12.17.53 PM.jpeg" alt="" class="pic">
    <img src="./assets/WhatsApp Image 2020-05-05 at 12.21.05 PM(1).jpeg" alt="" class="pic">
    <img src="./assets/WhatsApp Image 2020-05-07 at 6.54.55 PM.jpeg" alt="" class="pic">
    <img src="./assets/WhatsApp Image 2020-05-05 at 12.21.05 PM(2).jpeg" alt="" class="pic">
    <img src="./assets/WhatsApp Image 2020-05-05 at 12.21.05 PM.jpeg" alt="" class="pic">
    <img src="./assets/WhatsApp Image 2020-05-07 at 6.53.28 PM.jpeg" alt="" class="pic">
    <img src="./assets/WhatsApp Image 2020-05-07 at 6.53.29 PM.jpeg" alt="" class="pic">
    <img src="./assets/WhatsApp Image 2020-05-07 at 6.53.31 PM(1).jpeg" alt="" class="pic">
    <img src="./assets/WhatsApp Image 2020-05-07 at 6.53.31 PM.jpeg" alt="" class="pic">
    <img src="./assets/WhatsApp Image 2020-05-07 at 6.53.32 PM(1).jpeg" alt="" class="pic">
    <img src="./assets/WhatsApp Image 2020-05-07 at 6.53.32 PM.jpeg" alt="" class="pic">
    <img src="./assets/WhatsApp Image 2020-05-07 at 6.53.33 PM.jpeg" alt="" class="pic">
    <img src="./assets/WhatsApp Image 2020-05-07 at 6.53.34 PM.jpeg" alt="" class="pic">
    <img src="./assets/WhatsApp Image 2020-05-07 at 6.54.56 PM.jpeg" alt="" class="pic">
    <img src="./assets/WhatsApp Image 2020-05-07 at 7.05.35 PM.jpeg" alt="" class="pic">
    <img src="./assets/WhatsApp Image 2020-05-11 at 3.22.25 PM.jpeg" alt="" class="pic">
    

  </div>
    
    </body>
    <script>
    console.log("heyaa");
// Set the date we're counting down to
var countDownDate = new Date("May 12, 2020 00:00:00").getTime();

// Update the count down every 1 second
// var x = setInterval(function() {

//   // Get today's date and time
//   var now = new Date().getTime();

//   // Find the distance between now and the count down date
//   var distance = countDownDate - now;

//   // Time calculations for days, hours, minutes and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   // Display the result in the element with id="demo"
//   document.getElementById("demo").innerHTML = days + "d " + hours + "h "
//   + minutes + "m " + seconds + "s ";
  

//   // If the count down is finished, write some text
//   if (distance < 0) {
//     clearInterval(x);
//     document.getElementById("demo").innerHTML = "EXPIRED";
//   }
// }, 1000);

const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('May 12, 2020 00:00:00').getTime(),
    x = setInterval(function() {  
       // var days = Math.floor(distance / (1000 * 60 * 60 * 24));  

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

      //do something later when date is reached
      if (distance < 0) {
        clearInterval(x);
        document.getElementById('hello').classList.add("btday");
        document.getElementById('hello').classList.add("display-1");
        document.getElementById('hello').innerHTML= "Happy Birthday Bhakli";
        document.getElementById('days').classList.add("spec");
        document.getElementById('1').classList.add("spec");
        document.getElementById('2').classList.add("spec");
        document.getElementById('3').classList.add("spec");
        document.getElementById('4').classList.add("spec");
        //document.getElementsByClassName("item").ineerHTML="";
       


       
        
      }

    }, second)

var slides = document.getElementsByClassName("mySlides");
console.log(slides);



var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 



var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
} 
</script>

</html>