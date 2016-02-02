<?php 
   
        $json = file_get_contents('php://input');
        //do our tasks
       
        //
        $data = json_decode($json);
        if(!empty($data)){
		        
		        $response = array('number'=>$data->number,'message'=>'success');
		        echo json_encode($response);
		}
        
?>