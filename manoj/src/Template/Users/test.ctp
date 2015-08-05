
 

<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js"></script>
<script type="text/javascript">
    var checkVm=function(){
        var me=this;
        me.wantsSpam=ko.observable(true);
        me.spamFlavors=ko.observableArray(['cherry','almond']);
        me.clicked=function(){
            var v=e.currentTarget.val();
            alert(v);
        }
    }
    var obj=new checkVm();
    ko.applyBindings(obj);
</script>