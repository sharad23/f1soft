<?php 

        $data = array("esmeid"=>"39","appReferenceId"=>"100034", "number" => "9841793035", "message" => "no added msg");                                                                    
		$data_string = json_encode($data);                                                                                   
		$ch = curl_init('http://web-sms.f1soft.com.np/sms-server/api/sendsms');                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
		    
		    
		        'Content-Type: application/json',                                                                                
		        'Content-Length: ' . strlen($data_string))                                                                       
		
		);                                                                                                                   
		$result = curl_exec($ch);
		print_r($result);

?>
