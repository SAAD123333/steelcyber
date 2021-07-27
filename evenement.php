<?php $evenement=''; /* xdebug_session_start=dsi */
include('include/connexion.php');
$req="SELECT * FROM `events` ORDER BY `id_event` DESC ";/* LIMIT 9 */
$res=mysqli_query($link,$req) or die("echec");
$num_rows=$res->num_rows;/*how mush articals we have */
/* mysqli_num_rows() in the case of non oop */

?>
<!-- I have to take a dessetion 1 to oad all the events tables or 2 -load only 6 but if he click for second page I should start from the other 9 rows -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cards.css">
    <link rel="stylesheet" href="evenement.CSS">
  
    
</head>
<body>

<?php include("NAV BAR/NAV.php");?>
 
<section class="evenements">
    <div class="container_evenements">
        <div class="evenements_real_container">
            <div class="events">
                
                <?php
                $j=0;
                for ($i=0; $i <9 && $j !=1 ; $i++) { 
                    $data=mysqli_fetch_assoc($res);
                    if (!$data) {
                        $j=1;
                        
                    }
                    if ($j==1 && ($i==0 ||$i==3 ||$i==6)) {
                       break;
                    }
                    if ($i==0 ||$i==3 ||$i==6) {
                        echo ' <div class="row">';
                    }
                        if ($j==0) {
                            
                    include("cards.php");
                             }

                    if ($i==8 ||$i==2 ||$i==5 || $j==1) {
                        echo '</div>';
                    }
                }

                

                
                
                ?>



            </div>
        </div>
    </div>




</section>

 

 
    </main>
    <?php 
 include("FOOTER/footer.html");
 //
 ?>

</body>
</html>