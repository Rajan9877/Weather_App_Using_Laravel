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
        <div class="location">{{ $data['name'] }}, {{ $data['sys']['country'] }}</div>
        <small>{{ date('D, d M') }}</small>
        <div class="temparature">
            {{ round($data['main']['temp'] - 273.15, 2) }}<sup>°C</sup>      
        </div>
        
        <div class="weatherdes">
            {{ $data['weather'][0]['main'] }}
        </div>
        <div class="info">
            <small>Feels Like {{ round($data['main']['feels_like'] - 273.15, 2) }}°C</small> |
            <small>Sunset {{ date('H:i', $data['sys']['sunset']) }}</small>
        </div>
    </div>
   
    <div class="firstcontainer">
        <div class="leftcontainer">
            <small>Sunrise {{ date('H:i', $data['sys']['sunrise']) }}</small>
            <p class="para">Real Feel</p>
            <div class="heading">{{ round($data['main']['feels_like'] - 273.15, 2) }}°C</div>
            <p class="para">Chance Of Rain</p>
            <div class="heading">{{ $data['clouds']['all'] }}%</div>
            <p class="para">Wind Speed</p>
            <div class="heading"> {{ $data['wind']['speed'] }} km/h</div>
        </div>
        <div style="margin-left: 15px;" class="rightcontainer">
            <small>Sunset {{ date('H:i', $data['sys']['sunset']) }}</small>
            <p class="para">Humidity</p>
            <div class="heading">{{ $data['main']['humidity'] }}%</div>
            <p class="para">Pressure</p>
            <div class="heading">{{ $data['main']['pressure'] }} hPa</div>
            <p class="para">Description</p>
            <div class="heading"> {{ $data['weather'][0]['description'] }}</div>
        </div>
    </div>
    <footer>
        <p>Copyright &copy; {{ date("Y") }} | Created By Rajan</p>
    </footer>
</body>
</html>