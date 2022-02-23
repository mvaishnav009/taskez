<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskez Projects</title>
    <link rel="stylesheet" href="./style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="dash-container">
 <section id="menu">
     <div class="logo">
         <h2>.taskez</h2>
     </div>
     <div class="items">
         <li><i class="fas fa-briefcase"></i><a href="#">Overview</a></li>
         <li><i class="fas fa-users"></i><a href="#">Stats</a></li>
         <li><i class="fas fa-vector-square ic-act"></i><a class="men-act" href="#">Projects</a></li>
         <li><i class="fas fa-briefcase"></i><a href="#">Calendar</a></li>
         <li class="space-bet"><i class="fas fa-user-cog"></i><a href="#">Setting</a></li>
         <li><i class="fas fa-sign-out-alt"></i><a href="index.php">Sign Out</a></li>
     </div>
 </section>
 <section id="interface">
    <div class="navigation">
        <div class="n1">
            <div>
                <i id="menu-btn" class="fas fa-bars"></i>
            </div>
            <div class="search">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
                <input type="text" placeholder="Search">
            </div>
            
        </div>
        <div class="profile">
            <span>Hi Saundarya </span>
           <a href="#"><img src="./img/07.jpg" alt="User Image"></a>
        </div>
    </div>
     <h3 class="dash-name">Projects</h3>
     
         <div class="modal" id="todo_form">
      <div class="header">
        <div class="title">Add Todo</div>
        <button class="btn close-modal">&times;</button>
      </div>
      <div class="body">
        <input type="text" id="todo_input" />
        <input type="submit" value="Add Todo" id="todo_submit" />
      </div>
    </div>
    <!-- todo -->
    <div class="todo-container">
      <div class="status" id="no_status">
        <h1>No Status</h1>
        <button id="add_btn" data-target-modal="#todo_form">+ Add Todo</button>
        <div class="todo" draggable="true">
          Buy a Pizza
          <span class="close">&times;</span>
        </div>
      </div>
      <div class="status">
        <h1>In Progress</h1>
      </div>
      <div class="status">
        <h1>Completed</h1>
      </div>
    </div>

    <div id="overlay"></div>
         
 </section>
 
</div>
<script src="drag.js"></script>
<script>
    $('#menu-btn').click(function(){
        $('#menu').toggleClass("active");

    })
</script>
</body>
</html>