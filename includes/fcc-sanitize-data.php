<?php
	
	function sanitize_px($data){
		$output = strip_tags( stripslashes( $data ) );

		if($output != 'auto'){
			if(ends_with($output, 'px'))
				return $output;
			else
				return $output.'px';
		}
		else 
			return $output;
	}

	function starts_with($data, $sub_string) {
    	return $sub_string === "" || strrpos($data, $sub_string, -strlen($data)) !== FALSE;
	}

	function ends_with($data, $sub_string) {
	    return $sub_string === "" || (($temp = strlen($data) - strlen($sub_string)) >= 0 && strpos($data, $sub_string, $temp) !== FALSE);
	}