<?php

		if(isset($_POST)&&!empty($_POST['sendAdhesion'])){
			
			var_dump($_POST);
			
			$lastname = (isset($_POST['lastname']) && !empty($_POST['lastname']))?$_POST['lastname']:"";
			$fistname = (isset($_POST['fistname']) && !empty($_POST['fistname']))?$_POST['fistname']:"";
			$email = (isset($_POST['email']) && !empty($_POST['email']))?$_POST['email']:"";
			$pseudo = (isset($_POST['pseudo']) && !empty($_POST['pseudo']))?$_POST['pseudo']:"";
			$addresse = (isset($_POST['addresse']) && !empty($_POST['addresse']))?$_POST['addresse']:"";
			$postal_code = (isset($_POST['postal_code']) && !empty($_POST['postal_code']))?$_POST['postal_code']:"";
			$city = (isset($_POST['city']) && !empty($_POST['city']))?$_POST['city']:"";
			$phone = (isset($_POST['phone']) && !empty($_POST['phone']))?$_POST['phone']:"";
			$membre = (isset($_POST['membre']) && !empty($_POST['membre']))?$_POST['membre']:"";
			
			
			
			$sql = "insert into users (
			firstname,
			name,
			pseudo,
			password,
			c_password,
			email,
			addresse,
			postal_code,
			city,
			phone,
			membre
			)values (
			$firstname,
			$lastname,
			$pseudo,
			$email,
			$addresse,
			$postal_code,
			$city,
			$phone,
			$membre
			)
			";
			
			$conn = mysqli_connect('localhost','admin','admin',"aldn2");
			
			// if(mysqli_query($conn, $sql)){
				// echo "ok";
			// }
			
			
			
			
			
		}
		
		
