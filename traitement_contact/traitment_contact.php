<?php
	   
       include('../include/connexion.php');
       


		
		if (isset($_POST['envoyer'])) {
			/* include('include/connexion.php');    use this to be connected to the db  */

		/* for the firsrt if the entety type */	
            $entety=$_POST['entety'];

            if ($entety=="person") {
                $name=$_POST['name'];
                $phone=$_POST['phone'];
            }

			if ($entety=="association") {
                $name_ass=$_POST['ass_name'];
                $phone=$_POST['phone2'];
            }

		/* for the services */	
			$services=$_POST['services'];

            if ($services=="cours") {
                $course=$_POST['courses'];
               
            }

			if ($services=="services") {
                $serv_service=$_POST['story'];
                
            }
            $email=$_POST['email'];

            /* stockage dans la base de donner  */
            if($entety=="person"&& $services=="cours"){
                $req=" INSERT INTO `countact` ( `entity`, `name`, `phone`, `the_services`, `cours`, `problemes`, `email`) VALUES ( '$entety', '$name', '$phone', '$services', '$course', NULL, '$email');";
                
            }
            if ($entety=="association"&& $services=="cours") {
                $req=" INSERT INTO `countact` ( `entity`, `name`, `phone`, `the_services`, `cours`, `problemes`, `email`) VALUES ( '$entety', '$name_ass', '$phone', '$services', '$course', NULL, '$email');";
                
            }
            if ($entety=="person"&& $services=="services") {
                $req=" INSERT INTO `countact` ( `entity`, `name`, `phone`, `the_services`, `cours`, `problemes`, `email`) VALUES ( '$entety', '$name', '$phone', '$services', NULL, '$serv_service',  '$email');";
                
            }
            if ($entety=="association"&& $services=="services") {
                $req=" INSERT INTO `countact` ( `entity`, `name`, `phone`, `the_services`, `cours`, `problemes`, `email`) VALUES ( '$entety', '$name_ass', '$phone', '$services', NULL, '$serv_service',  '$email');";
                
            }
            $res=mysqli_query($link,$req) or die("echec");
            header("Location: http://localhost/dsi/contactez_nous.php");






    /* i have to add in the case where he delet the required  or in js add a function that look if its empty and also if number was not int  */
            

			}
            else{
                header("Location: http://localhost/dsi/contactez_nous.php");
                
            }

		
	 ?>