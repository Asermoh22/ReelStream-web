<?php 
session_start();

if(isset($_SESSION['first_name'])){
    $name= $_SESSION['first_name'];

}

$arr = [
    [
        "image" => "images/Bad.jpg",
        "title" => "Bad Boys: Ride or Die"
    ],
    [
        "image" => "images/ind.jpeg",
        "title" => "Indiana Jones and the Dial of Destiny"
    ],
    [
         "image" => "images/ali.jpeg",
        "title" => "Alien: Romulus"
    ],[
    
       "image" => "images/nn.jpeg",
   "title" => "KINGDOM OF THE PLANET OF THE APES (2024)"
   ]
   ,[
     "image" => "images/art_of_a_hit.jpg",
       "title" => "Art of a Hit (2024)"
   ]
   

   
];

$popul = [
    [
        "image" => "images/scar3.jpg",
        "title" => "scarface ( episode 5 )"
    ],
    [
        "image" => "images/beak.jpg",
        "title" => "Peaky Blinders - Season 5 (2013) ( episode 6 ) "
    ],
    [
         "image" => "images/nar.jpg",
        "title" => "Narcos season 3 ( episode 1 )"
    ],[
    
       "image" => "images/king.jpg",
   "title" => "The Walking Dead - Season 4 - ( episode 4 ) "
   ]
   ,[
     "image" => "images/str.jpg",
       "title" => "Stranger Things Season 3 - ( episode 2 )"
   ]
   

   
];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playwrite+CO:wght@100..400&family=Tiny5&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="main.css">
    <title>Home</title>
    <div class="navbar">
        <h1>ReelStream</h1>
        <div class="header_search">
        <div class="inp"><input type="text" name="" id="filmname" placeholder="Film name"></div>
    </div>
    <form action="login.php">
        <input type="submit" value="Logout" name="logout" id="loout">
    </form>
        

    </div>
    
   
</head>
<body>
<div class="films">
<div class="slider-wrapper">
    <div class="slider">
        <span>Series -</span>
        <span>Films -</span>
        <span>cartoons -</span>
        <span>Enjoy..!!</span>

    </div>
</div>
        <?php 
        echo "<h2> Hi $name ! </h2>";
        echo "<h1 class='trend'> Trending now  </h1>"

        ?>

        

        <?php 
         foreach($arr as $num){
            echo "<div class='card' style='width: 13rem;'>";
            echo "<img class='card-img-top' src='" . htmlspecialchars($num['image']) . "' alt='Card image cap'>";
            echo "<div class='card-body'>";
            echo "<p class='card-text'>" . htmlspecialchars($num['title']) . "</p>";
            
            echo "</div>";
            echo "</div>";
        }
        
        
        ?>


        


    </div>

    <div class="ess">
            <?php 
        
        echo "<h1 id='vv'> Latest episodes  </h1>"

        ?> 
     </div>




 <div class="episodes">

        
        
       

        
    <?php 
         foreach($popul as $num){
            echo "<div class='card' style='width: 13rem;'>";
            echo "<img class='card-img-top' src='" . htmlspecialchars($num['image']) . "' alt='Card image cap'>";
            echo "<div class='card-body'>";
            echo "<p class='card-text'>" . htmlspecialchars($num['title']) . "</p>";
            
            echo "</div>";
            echo "</div>";
        }
        
        
        ?>
        


        


 </div>

        

        
    </div>

 
   



</body>

<div class="foo" id="ft">
            <h1 id="cont">Contact Me</h1>
            <a href="mailto:asermuhamed311@gmail.com" id="c1">
                <i class="fa-solid fa-inbox fa-lg" style="color: #ffffff;"></i> 
               </a>
                <a href="https://github.com/Asermoh22" id="c2">
                    <i class="fa-brands fa-github fa-lg" style="color: #ffffff;"></i>
                </a>
                <a href="https://www.facebook.com/aser.mohamed.9655?mibextid=ZbWKwL" id="c3">
                    <i class="fa-brands fa-facebook fa-lg" style="color: #ffffff;"></i>
                </a>
                <a href="https://www.linkedin.com/in/aser-mohamed" id="c4">
                    <i class="fa-brands fa-linkedin fa-lg" style="color: #ffffff;"></i>
                </a>
                <p>copyright &copy;2024; Designed by <span class="designer">Aser Mohamed</span></p>

        </div>

</html>