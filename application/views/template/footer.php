<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php 
	$jsFiles=['bootstrap.min.js',

			 ];
	foreach ($jsFiles as $jsFile) {?>
        <script src='<?php echo base_url("assets/js/$jsFile")?>'></script>
    <?php }?> 