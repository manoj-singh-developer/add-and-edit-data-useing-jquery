
username<input type="text" name="username" class="user" value="<?php echo $sex[0]['username'];?>">

male<input type="radio" name="sex" class="sex" value="male" <?php if($sex[0]['sex']=="male") { ?> checked="checked" <?php } ?>>

femail<input type="radio" name="sex" class="sex" value="female" <?php if($sex[0]['sex']=="femail") { ?>  checked="checked" <?php } ?>>

<select class="country">
   <?php foreach($country as $cun) { ?>
    
    <option <?php if ($sex[0]['country']==$cun['country']) { ?> selected="selected" <?php } ?> value="<?php echo $cun['country'];?>"><?php echo $cun['country'];?></option>
   <?php } ?>
</select>
<input type="hidden" name="id" class="well" value="<?php echo $sex[0]['id'];?>">
<button class="hello" >submit</button>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        
        var sex;     
        var country

       var id=$('.well').val();
      
       $('.sex').on("click",function(){
           sex = $(this).val();
       });
          $('.country').on("change",function(){
           country = $(this).val(); 
       });
           $('.hello').on("click",function(){
             var us = $('.user').val();
           $.post('/users/test',{"username":us,"sex":sex,"country":country,"id":id},function(d){
               console.log(d);
           })
           
       });
       
        
        
        
        
        
        
        
        
        
        
        
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </script>