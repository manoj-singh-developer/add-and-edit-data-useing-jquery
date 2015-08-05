<select>
   <?php foreach($country as $cun) { ?>
    
    <option <?php if ($sex[0]['country']==$cun['country']) { ?> selected="selected" <?php } ?> value="<?php echo $cun['country'];?>"><?php echo $cun['country'];?></option>
   <?php } ?>
</select>