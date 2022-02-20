<?php $this->view("minima/header",$data);?>
 
          
          <section class="section background-white">

          	 
          	
            <div class="s-12 m-12 l-4 center">
              <h4 class="text-size-20 margin-bottom-20 text-dark text-center"><?=$data['post']->title?></h4>
               <img src="<?=ROOT.$data['post']->image?>" />
               <br>
               <?=$data['post']->description?>
            </div>           
          </section> 

<?php $this->view("minima/footer",$data);?>