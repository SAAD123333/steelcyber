<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>steel cybersecurity</title>
    <link rel="stylesheet" href="aceulle style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="./jquery/jquery-3.6.0.min.js"></script>
    <script src="nav_script.js" defer></script>
    
</head>

<body>
    <header>
        <nav class="NAVIGATION">


            <img src="logo.png" alt="">

            <!-- this is for the nav when it scall down -->
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </label>

            <ul>
                    
                    
                    
                   
                <!-- this is the nav elments -->
                <li class="first"> <a href=<?php if(isset($accueil)){ echo ('"#"'); }        else{  echo ('"ACCUEIL.php"'); } ?>>ACCUEIL</a></li>
                <li class="second"> <a href="" class="seconde">SERVICES</a></li>
                <li class="third"><a href="evenement.php">EVENEMENTS</a></li>
                <li class="dropdown"> <a href="#" >
                        CONTACTEZ NOUS
                        <i class="fa fa-angle-down" style="color:rgb(255, 255, 255)">
                        </i>
                    </a>
                    <ul class="cont_drop">
                            <li><a href="#">LOGIN</a></li>
                            <li><a href="./contactez_nous.php">CONTUCT-US</a></li>
                    </ul>
                </li>

            </ul>

        </nav>

    </header>



    <main>
        <section>
            <div class="word_on_navimg">
                <h1><?php
                if(isset($accueil)){
                   echo ("the Modern Connected World with Security"),"</br>", ("Made for People");
                }
                if(isset($contac)){
                    echo ("CONTACTEZ NOUS");
                 }
                 if(isset($evenement)){
                    echo ("EVENTS");
                 }


                ?>
                    </h1>
            </div>


        </section>
    
  
</body>

</html>