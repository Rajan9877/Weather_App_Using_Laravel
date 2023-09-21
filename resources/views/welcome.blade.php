<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Weather App</title>
    <style>
        *{
            color: white;
        }
       body {
            background: url("img/1.jpg");
            background-size: cover; /* This scales the background image */
            background-repeat: no-repeat; /* Prevents repeating the image */
            background-attachment: fixed; /* Optional: Keeps the image fixed in the viewport */     
       }
       .fa-solid{
        font-size: 35px;
       }
       .headcontainer{
        display: flex;
       }
       .location{
        font-size: 35px;
        text-align: center;
       }
       .contentcontainer{
        text-align: center;
       }
       .temparature{
        font-size: 100px;
       }
       .weatherdes{
        font-size: 37px;
       }
       .info{
        font-weight: bold;
       }
       sup{
        font-size: 50px;
       }
       .firstcontainer{
        height: 50vh;
        width: 30%;
        margin: auto;
        margin-top: 30px;
        padding: 25px;
        border-radius: 50px;
        background-color: rgb(1,38,55);
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
       }
       footer p{
        font-weight: bold;
        text-align: center;
       }
       .heading{
        font-size: 30px;
       }
       .para{
        font-size: 19px;
       }
       input{
        padding: 15px;
        border-radius: 50px;
        border: none;
        outline: 1px solid rgb(1,38,55);
        color: rgb(1,38,55);
        font-size: 20px;
       }
       form{
        position: fixed;
        right: 5px;
       }
       button{
        background-color: transparent;
        padding: 35px;
        border: none;
        cursor: pointer;
       }
    </style>
</head>
<body>
    <div class="searchbar">
        <form action="/weather" method="post">
            @csrf
            <input type="search" name="searchcity" id="searchcity" placeholder="Enter City">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
    <div class="headcontainer">
        <i class="fa-solid fa-cloud"></i>
        <div><h1>Weather</h1></div>
    </div>
    <div class="contentcontainer">
        <div class="location">Delhi, India</div>
        <small>Thu, 15 Mar</small>
        <div class="temparature">
            18<sup>°C</sup>      
        </div>
        
        <div class="weatherdes">
            Cloudy
        </div>
        <div class="info">
            <small>Feels Like 28</small> |
            <small>Sunset 19:28</small>
        </div>
    </div>
   
    <div class="firstcontainer">
        <div class="leftcontainer">
            <small>Sunrise 17:42</small>
            <p class="para">Real Feel</p>
            <div class="heading">3.3 c</div>
            <p class="para">Chance Of Rain</p>
            <div class="heading">3%</div>
            <p class="para">Wind Speed</p>
            <div class="heading">5.1 km/h</div>
        </div>
        <div class="rightcontainer">
            <small>Sunset 05:49</small>
            <p class="para">Humidity</p>
            <div class="heading">55%</div>
            <p class="para">Pressure</p>
            <div class="heading">1030 mbar</div>
            <p class="para">UV Index</p>
            <div class="heading">0</div>
        </div>
    </div>
    <footer>
        <p>Copyright &copy; {{ date("Y") }} | Created By Rajan</p>
    </footer>
</body>
</html>