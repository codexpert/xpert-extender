<?php 

function view($file, $data){
	
	extract($data);

	ob_start();
		require $file;
		$output = ob_get_contents();
	ob_end_clean();

	return $output;
}
