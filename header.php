<?php session_start(); ?>
<br>
<h1>Resume Maker</h1>
<button type="button" class="btn btn-danger"><a href="index.php" style="color:white;">Home</a></button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Feedback
</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-1">
  Contact
</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-2">
  Other Tools
</button> 
<button type="button" class="btn btn-primary"><a href="login.php" style="color:white; "> Logout</a> </button> <br><br> 

<button class="btn btn-Success"><?PHP echo "Welcome".'&nbsp;'.'<b>'.$_SESSION['name'] .'</b>';?> </button>   
