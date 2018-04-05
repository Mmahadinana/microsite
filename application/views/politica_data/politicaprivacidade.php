<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
?>
<div class="politica-header">
  <fieldset class="container text-center">
    <legend>
      <h1>POLÍTICA DE PRIVACIDADE <br>E TRATAMENTO DE DADOS </h1>
    </legend>
    <h3>ACIN iCloud Solutions</h3>
  </fieldset>
</div>
<div class="container">
  <!-- panel group-->
  <div class="panel-group" id="accordion">
    <?php 
    //check if the variable array has been set 
      if (isset($private_data)) {
        //loop thru the content
        foreach ($private_data as $index => $data) { ?>
          <!-- panel-->
          <div class="panel">
            <!-- panel heading-->
            <div class="panel-heading clickable">
              <a class="<?php echo ($index=="data1")?'collapsed':'' ?>"
                data-toggle="collapse" 
                  data-parent="accordion" href="#collapse-<?php echo $index; ?>" 
                  aria-expanded="true" aria-controls="collapse">
                <h4 class="panel-title">
                  <span>// <?php echo $data[0]; ?></span> 
                  <span >
                    <img class="pull-right arrows" src="<?php echo base_url(($index=="data1")? 'assets/images/arrow_opened.svg': 'assets/images/arrow_closed.svg') ?>" 
                    id="img_collapse-<?php echo $index; ?>"  alt="">
                  </span>
                </h4>
              </a>
            </div>
            <div id="collapse-<?php echo $index; ?>" class="panel-collapse collapse <?php echo ($index=="data1")?'in':'' ?>">
              <!-- panel body-->
              <div class="panel-body">
                <!-- panel body-->
               <?php echo $data[1]; ?>
              </div><!-- /panel body-->
            </div>
          </div> <!-- /panel-->
        <?php
        }
      }
     ?>
  </div><!-- /panel group-->

</div><!-- /container-->




