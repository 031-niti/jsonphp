<?php 

    $narutos = json_decode(file_get_contents('data.json'));

?>  
   <?php foreach($narotos as $naruto){ ?> 
    <li>picture ID <?=$naruto -> id?></li>
    <img src="<?=$naruto->img;?>" alt="" style="hight:200px;width:200px;">
<?php } ?>