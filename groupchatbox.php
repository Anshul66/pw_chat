<?php  
session_start();
echo '<!DOCTYPE html>
<html>
<head>
  <title>';
  echo $_SESSION["name_store"]."'s page";
  echo '</title>
<link rel="stylesheet" href="bsjs/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="php/messages.css">
<script src="bsjs/jquery.min.js"></script>
<script src="bsjs/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/search.css" type="text/css"><script src="js/nsc.js"></script>
<link rel="stylesheet" type="text/css" href="css/wall.css">




</head>
<body class="body2">



<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" >[';
  echo " ".$_SESSION['GROUPNAME']." ";
  echo ']</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
<li id="Not" ><a href="#S">Notifications</a><div class="ntdv""></div></li>
        <li><a href="wall.php#S" id="s">Search</a></li>
        <li><a href="friends.php" id="f">Friends</a></li>
        <li><a href="groups.php" id="g">Groups</a></li>
        <li><a href="php/logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="unclick">
<div class="chatdiv2">

<div class="messagediv2">

';



echo'
</div>
<div class="textmessagebox" ><input type="text" class="form-control customa tm" name="textmessage" ></input></div>
';



echo'
</div>
<div class="footer"></div>
<script type="text/javascript" src="js/search.js"></script></div>
</body>
</html>';

?>
<script src="js/notification.js"></script>
<script src="bsjs/jquery.min.js"></script>
<script src="js/groupmain.js"></script>