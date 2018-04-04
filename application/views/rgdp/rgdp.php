<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!--main body-->

	<!--landing view-->
	<section id="splash" class="">
		<?php $this->load->view('landing/landing') ?>
	</section>
	<!--main body-->
	<section id="home" class="">
		<?php $this->load->view('home/home') ?>
	</section>
	<!--main body-->
	<section id="about" class="container">
		<?php $this->load->view('about/about') ?>
	</section>
	<!--main body-->
	<section id="laws" class="container">
		<?php $this->load->view('laws/laws') ?>
	</section>
	<section class="">
		<?php $this->load->view('politica_data/politicaprivacidade') ?>
	</section>
	<section class="footer">
		<?php $this->load->view('template/main_footer') ?>
	</section>
