<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php 
	//load the bootstrap
	$js_files=['bootstrap.min.js',
				'micro.js'];

	foreach ($js_files as $js_file) {?>
        <script src='<?php echo base_url("assets/js/$js_file")?>'></script>
    <?php
    }
    ?> 