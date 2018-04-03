<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<body>
	<?php
	 	$this->load->view($pageToLoad); 
		$this->load->view('template/main_footer.php'); 	
	?>
	
</body>