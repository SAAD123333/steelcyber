<?php $accueil='';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ACCUEIL.CSS">
</head>
<body>
<?php 
 include("NAV BAR/NAV.php");
 //we need to close a main .used to add more section in the html page 
 ?>
 <section class="about_us">
     <div class="about_us_title">
        ABOUT-US
     </div>
    <div class="container_about_us">
       <div class="the_content_about_us_flex">
        <article class='text_content_about_us'>
          <p>the cybersecurity services steel cybersecurity offers and much more with the steel cybersecurity Services Catalog. </p> <br>
        <p> The catalog is all of steel cybersecurity,all in one place – a single resource that provides users 
         with access to information on services across all of steel cybersecurity’s mission areas that are available to Federal Government; 
         State, Local, Tribal and Territorial Government; Private Industry; Academia; NGO and Non-Profit; and General Public stakeholders.</p><br>
         <p> The catalog is interactive, allowing users to filter and quickly hone in on applicable services with just a few clicks.</p><br>

        </article>
        <article class='text_content_about_us'>
          <p>the cybersecurity services steel cybersecurity offers and much more with the steel cybersecurity Services Catalog. </p> <br>
        <p> The catalog is all of steel cybersecurity,all in one place – a single resource that provides users 
         with access to information on services across all of steel cybersecurity’s mission areas that are available to Federal Government; 
         State, Local, Tribal and Territorial Government; Private Industry; Academia; NGO and Non-Profit; and General Public stakeholders.</p><br>
         <p> The catalog is interactive, allowing users to filter and quickly hone in on applicable services with just a few clicks.</p><br>

        </article><!-- there is some probleme with the responsive here  -->
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
