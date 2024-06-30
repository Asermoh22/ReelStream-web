<?php 
$actors=[
    [
        "image" => "images/alp.jpg",
        "name" => "Alfredo James Pacino"
    ],[
         "image" => "images/Michelle_Pfeiffer_Ant-Man_&_The_Wasp_premiere.jpg",
        "name" => "Michelle Pfeiffer"
    ],[
        "image" => "images/StevenBauer08.jpg",
       "name" => "Steven Bauer"
    ],[
        
            "image" => "images/Mark_Margolis.jpg",
           "name" => "Mark Margolis"
       
    ],
    [
        
        "image" => "images/kc0I4h9fTY8WP3wyQbwVWEzbmil.jpg",
       "name" => "Paul Shenar"
   
]


    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scarface.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playwrite+CO:wght@100..400&family=Tiny5&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="scarface.css">
    <title>Scarface</title>
</head>
<body>
   <div class="headimage">
    <img src="images/999.jpg" alt="" id="seconed">
    <img src="images/1000.jpg" alt="" id="first">
    <img src="images/888.jpg" alt="" id="third">
   </div>

   <h1>Scarface</h1>
   <h2>Actors</h2>
   <div class="actor">
    <?php 
       foreach($actors as $act){
          echo "<div class='card' style='width: 13rem;'>";
          echo "<img class='card-img-top' src='" . htmlspecialchars($act['image']) . "' alt='Card image cap'>";
          echo "<div class='card-body'>";
          echo "<p class='card-text'>" . htmlspecialchars($act['name']) . "</p>";
          
          echo "</div>";
          echo "</div>";
      }
      
      
      ?>

      
   
   </div>
   <h2 class="wat">Watch</h2>

   <div class="cont">
   <div class="vid">
      <video controls autoplay>
        <source src="images/vv.mp4" type="video/mp4">
      </video>
   </div>
   </div>
   

   <div class="foo" id="ft">
            <h1 id="cont">Enjoy your time</h1>
           

        </div>
</body>
</html>
