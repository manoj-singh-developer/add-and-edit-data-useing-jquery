<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="users form large-10 medium-9 columns">
    
    username:<br>
<input type="text" name="username" class="username">
<br>
sex:<input type="radio" name="sex" value="male" class="well">Male

<input type="radio" name="sex" value="female" class="well">Female
</br>
image:<br>
<input type="file" class="img" name="image">

select car:<br>
 <select name="country" class="car">
  <option value="1">Volvo</option>
  <option value="2">Saab</option>
  <option value="3">Mercedes</option>
  <option value="4">Audi</option>
</select> 

<button  class="hello">submit</button>
    
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        var v;
        var img;
        var user;
        var car;
        $('.well').on("click",function(){
             v=$(this).val();
              });

         
        $('.img').on("change",function(){
             img=$(this).val();
            
         });
        $('.car').on("change",function(){
         car=$(this).val();
        
        });
        
    
    $('.hello').on("click",function(){
        user=$('.username').val();
    $.post('/users/add',{"username":user,"sex":v,"image":img,"country":car},function(d){
            
            console.log(d);
            alert(d);
    
    });
    
    });
    
    });
</script>



<!--<script type="text/javascript">
    $(document).ready(function(){
        
        $('.well').on("click",function(){
            var v=$(this).val();
            
              });
              
         var user=$('.username').val();
         
        $('.img').on("change",function(){
            var img=$(this).val();
            
         });
        $('.car').on("change",function(){
        var car=$(this).val();
        $.post('/users/add',{"username":user,"sex":well,"image":img,"country":car},function(d){
            
            console.log(d);
        });
        
    });
    
    });
    
    
</script>-->