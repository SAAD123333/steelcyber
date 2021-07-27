<?php $contac=''; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CONTACT.CSS">
</head>
<body>

<?php include("NAV BAR/NAV.php");?>
 
 
 <section class="contact">
     
    <div class="container_contact">
       <div class="the_form_container">
       
      <form action="traitement_contact/traitment_contact.php" method="post" class="to_give_form_themaxsize">
<!--          this to know the entety that gona choose if its a person we have a traitement and if its a asso we have an other -->
         <div class="row just_for_padding">
            <label for="list_entety" >you are :</label>
                  <select id="list_entety" class="select" onchange="getSelectValue();" name="entety"><!---after learning js you should custumise the option -->
                    <option value="person">personne</option>
                    <option value="association">Asoociation</option>
                  </select>
         </div>                   
<!--                in thee case of a person   -->
          <div class="row">  

              <div class="person">
                <label for="name_person">Name:</label>
                <input  name="name" type="text" id="name" class="imput_style "> <!-- I ve delet the required due to some js propleme -->
              </div>

              <div class="person">
                <label for="phone">Phone:</label>
                <input  name="phone" type="text" id="phone" class="imput_style ">
              </div>
         </div>  
<!-- in the case of an association --->
         <div class="row">  
              <div class="association">
                <label for="ass_name">Association name:</label>
                <input  name="ass_name" type="text" id="ass_name" class="imput_style ">
              </div>
              <div class="association">
                <label for="phone2">Phone:</label>
                <input  name="phone2" type="text" id="phone2" class="imput_style ">
              </div>
         </div>

   
<!--          this to know the spetialities formation or services -->
<div class="row just_for_padding" style="margin-bottom:10PX;">
            <label for="list_entety1" >you want  :</label>
                  <select id="list_entety1" class="select" onchange="getSelectValue();" name="services"><!---after learning js you should custumise the option -->
                    <option value="cours">cours</option>
                    <option value="services">services</option>
                  </select>
         </div>              

<!--      in the case of chosin services  -->
 <div class="row">  
              <div class="services">
                 <label for="story">Tell us your  probleme:</label>

                  <textarea id="story" name="story" rows="5" cols="33" class="textarea_contact"></textarea>
              </div>
</div>
<!-- in the case of chosing  cours-->
 <div class="row just_for_padding course" style="margin-top:10PX;">
            <label for="list_courses" >the cours about :</label>
                  <select id="list_courses" class="select" name="courses"><!---after learning js you should custumise the option and add the ability to chose more than one -->
                    <option value="sm">Security Management</option>
                    <option value="IaAM">Identity and Access Management</option>
                    <option value="se">Security Engineering </option>
                    <option value="Cryptography">Cryptography</option>
                    <option value="sds">Software Development Security</option>
                    <option value="ps">Physical Security</option>
                  </select>
         </div>  


<!--    now we add the email -->
<div class="row">  
              <div class="email">
                <label for="emai">email :</label>
                <input required type="email" id="emai" class="imput_style " name="email">
              </div>
              
         </div>


         <div class="sub">
         <input  type="submit" name="envoyer" value="SUBMIT" class="submition_buttion">
        </div>
      </form>

       
    </div>
 </section>
 
    </main>
    <?php 
 include("FOOTER/footer.html");
 //
 ?>

</body>
</html>

<script>
 
                                 function getSelectValue()
                                 {
                                     var selectedValue = document.getElementById("list_entety").value;
                                     var person = document.getElementsByClassName('person');
                                     var association = document.getElementsByClassName('association');

                                     var selectedValue1 = document.getElementById("list_entety1").value;
                                     var course=document.getElementsByClassName('course');
                                     var services=document.getElementsByClassName('services');

                                     if(selectedValue=='person'){
                                        association[0].style.display = "none";
                                      association[1].style.display = "none";
                                      association[0].removeAttribute("required");
                                      association[1].removeAttribute("required");


                                      person[0].style.display = "block";
                                      person[1].style.display = "block";
                                      person[0].setAttribute("required","required");
                                      person[1].setAttribute("required","required");

                                      //we could add one to the top element but there is no time 
                                     }
                                    if (selectedValue=="association") {
                                      person[0].style.display = "none";
                                      person[1].style.display = "none";
                                      person[0].removeAttribute("required");
                                      person[1].removeAttribute("required");

                                      association[0].style.display = "block";
                                      association[1].style.display = "block";
                                      association[0].setAttribute("required","required");
                                      association[1].setAttribute("required","required");
                                      /* setAttribute("class","none"); */
                                      //set atrribute add html attribute
                                      
                                    }

                                    //in the case of courses or services 
                                    if (selectedValue1=="cours") {
                                      course[0].style.display="block";

                                      services[0].style.display="none";
                                    }

                                    if (selectedValue1=="services") {
                                      course[0].style.display="none";

                                      services[0].style.display="block";
                                    }
                                        /* by the way there is a fault we need to add select id to delet the required  */
                                 }
                                  
                             </script>


