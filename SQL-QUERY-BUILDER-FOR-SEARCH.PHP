<?PHP
		if($_GET["car_location"]			!=		"") {	
			$car_location_q					=		$_GET["car_location"];
			
			mysqli_real_escape_string($con, "%$car_location_q%");
			
				$car_location_query			=		" AND (car_location LIKE '$car_location_q')";
			}
			else
			{
				$car_location_query			=		"";
			}



		if($_GET["car_year"]				!=		"") {	
			$car_year_q				 		=		$_GET["car_year"];
			
			mysqli_real_escape_string($con, "%$car_year_q%");

				$car_year_query	 =		" AND (car_year	= '$car_year_q')";
			}
			else
			{
				$car_year_query			=		"";
			}


		if($_GET["car_condition"]				!=		"") {	
			$car_condition_q				 		=		$_GET["car_condition"];
			
			mysqli_real_escape_string($con, "%$car_year_q%");

				$car_condition_query	 =		" AND (car_condition	= '$car_condition_q')";
			}
			else
			{
				$car_condition_query			=		"";
			}

		if($_GET["car_transmission"]				!=		"") {	
			$car_transmission_q				 		=		$_GET["car_transmission"];
			
			mysqli_real_escape_string($con, "%$car_year_q%");

				$car_transmission_query	 =		" AND (car_transmission	= '$car_transmission_q')";
			}
			else
			{
				$car_transmission_query			=		"";
			}


		if($_GET["car_make"]				!=		"") {	
			$car_make_q				 		=		$_GET["car_make"];
			
			mysqli_real_escape_string($con, "%$car_year_q%");

				$car_make_query	 =		" AND (car_make LIKE '$car_make_q')";
			}
			else
			{
				$car_make_query			=		"";
			}
			
			ECHO $built_query		=		$car_location_query . $car_year_query . $car_condition_query . $car_transmission_query . $car_make_query;