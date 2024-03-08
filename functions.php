<?php


			function clean_input($string)
			{
				
			global $con;
			$string=trim($string);
			return $con->real_escape_string($string);
			}
		 
			
			
			function clean_output($string)
			{	
			$string=stripslashes($string);
			return htmlentities($string);	
			}


			// Function to set flash message
			function setFlashMessage($message, $type) {
					$_SESSION['flash_message'] = array(
					'message' => $message,
					'type' => $type
				);
			}


			// Function to get and clear flash message
			function getFlashMessage() {
				if (isset($_SESSION['flash_message'])) {
					$message = $_SESSION['flash_message'];
					unset($_SESSION['flash_message']);
					return $message;
					} else {
					return '';
				}
			}

			// Helper function to handle the condition check and building query
			function buildQueryPart($paramName, $columnName) {
				global $built_query;
				global $con;

				if (!empty($_GET[$paramName])) {
					$paramValue = mysqli_real_escape_string($con, $_GET[$paramName]);
					$built_query .= " OR ($columnName LIKE '%$paramValue%')";
				}
			}




			function getCarDetails($registration_number){


				//$registration_number = "FV66AOK";
				//$registration_number = "lr61rgo";

				

				

				  // Init cURL session
				  $curl = curl_init();

				  // Set API Key
				  global $ApiKey;

				  // Construct URL String
				  $url = "https://uk1.ukvehicledata.co.uk/api/datapackage/%s?v=2&api_nullitems=1&key_vrm=%s&auth_apikey=%s";
				  $url = sprintf($url, "VehicleData", $registration_number, $ApiKey); // Syntax: sprintf($url, "PackageName", "VRM", ApiKey);
				  // Note your package name here. There are 5 standard packagenames. Please see your control panel > weblookup or contact your account manager

				  // Create array of options for the cURL session
				  curl_setopt_array($curl, array(
					CURLOPT_URL => $url,
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_SSL_VERIFYPEER => false,
					CURLOPT_TIMEOUT => 30,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => "GET"
				  ));

				  // Execute cURL session and store the response in $response
				  $response = curl_exec($curl);

				  // If the operation failed, store the error message in $error
				  $error = curl_error($curl);

				  // Close cURL session
				  curl_close($curl);

				  // If there was an error, print it to screen. Otherwise, unserialize response and print to screen.
				  if ($error) {

					return response()->json([
					  "cURL Error:" => "$error"
					  ], 200);

				  } else {
					//var_dump(json_decode($response, true)); // For demonstration purposes - Unserialize response & dump array contents to screen

					$api_result = json_decode($response, true);
					
					$status_message = $api_result['Response']['StatusMessage'];				
					$status_message = ($status_message == "Success") ? "success" : "failed";



					$car_make = isset($api_result['Response']['DataItems']['VehicleRegistration']['Make']) ? $api_result['Response']['DataItems']['VehicleRegistration']['Make'] : '';
					$car_model = isset($api_result['Response']['DataItems']['VehicleRegistration']['Model']) ? $api_result['Response']['DataItems']['VehicleRegistration']['Model'] : '';
					$car_body_style = isset($api_result['Response']['DataItems']['SmmtDetails']['BodyStyle']) ? $api_result['Response']['DataItems']['SmmtDetails']['BodyStyle'] : '';
					$car_year = isset($api_result['Response']['DataItems']['VehicleRegistration']['YearOfManufacture']) ? $api_result['Response']['DataItems']['VehicleRegistration']['YearOfManufacture'] : '';
					$car_body_color = isset($api_result['Response']['DataItems']['VehicleRegistration']['Colour']) ? $api_result['Response']['DataItems']['VehicleRegistration']['Colour'] : '';
					$car_transmission = isset($api_result['Response']['DataItems']['VehicleRegistration']['TransmissionType']) ? $api_result['Response']['DataItems']['VehicleRegistration']['TransmissionType'] : '';
					$car_engine = isset($api_result['Response']['DataItems']['SmmtDetails']['NominalEngineCapacity']) ? $api_result['Response']['DataItems']['SmmtDetails']['NominalEngineCapacity'] : '';
					$car_no_of_gears = isset($api_result['Response']['DataItems']['VehicleRegistration']['GearCount']) ? $api_result['Response']['DataItems']['VehicleRegistration']['GearCount'] : '';
					$car_fuel_type = isset($api_result['Response']['DataItems']['SmmtDetails']['FuelType']) ? $api_result['Response']['DataItems']['SmmtDetails']['FuelType'] : '';
					
					return array($car_make, $car_model, $car_body_style, $car_year, $car_body_color, $car_transmission, $car_engine, $car_no_of_gears, $car_fuel_type,$status_message);

				  }
		 


		 
		  }
	
?>