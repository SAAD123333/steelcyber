

<div class="card" >
  <img src="<?php echo $data['img'];?>" alt="" class="the_img"  />

  <div class="card_content"> <!-- we dont give a specific height to card because this what will indecate the height -->
        <h5 class="title_content"><?php echo $data['title'];?></h5>
        <p class="centent_card"> 
          <?php
          /* in he case of a big paragraphe to avoid the overflow we select only few words that fit in the div  */
             $para= explode(" ",$data['content'])   ;     
             $para=implode(" ", array_splice($para,0,7));
             echo $para;
              echo "...";
          ?>
        </p>
        <a href="<?php echo $data['link'];?>" class="btn_redirection">know more</a>
  </div>




</div>




