<!DOCTYPE html>
<html>
<head>
<title></title>
   <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/menu.css">    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
<nav class="menu">
    <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open">
    <label class="menu-open-button" for="menu-open">
      <span class="lines line-1"></span>
      <span class="lines line-2"></span>
      <span class="lines line-3"></span>
    </label>
  
    <a  href="#" onclick = "startArtyom()" class="menu-item item-1"><i class="fas fa-microphone"></i></a>
    <a  class="menu-item item-2" style="width: 300%; border-radius: 10px"><span id="output"></span><span id="time"></span></a>
    <a  href="#" onclick = "stopArtyom()" class="menu-item item-3"><i class="fas fa-microphone-slash"></i></a>
  </nav>
</body>
</html>

