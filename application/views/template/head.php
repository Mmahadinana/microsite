<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
	<title>RGDP Portugal</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<?php 
    $css_files =['bootstrap.min.css',
                'font-awesome.min.css',
                'fontawesome-all.min.css',
    			'micro.css',
                'master.css'
    			];
    foreach ($css_files as $css_file) {?>
        <link href='<?php echo base_url("assets/css/$css_file")?>' rel="stylesheet">
    <?php }?>

</head>
