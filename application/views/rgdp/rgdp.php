<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!--main body-->

	
	<section id="splash" class="">
		<?php $this->load->view('landing/landing') ?>
	</section>
	
	<section id="home" class="">
		<?php $this->load->view('home/home') ?>
	</section>	
	<section id="about" class="container">
		<?php $this->load->view('about/about') ?>
	</section>
	
	<section id="laws" class="container">
		<?php $this->load->view('laws/laws') ?>
	</section>
	<section class="">
		<?php $this->load->view('politica_data/politicaprivacidade') ?>
	</section>

