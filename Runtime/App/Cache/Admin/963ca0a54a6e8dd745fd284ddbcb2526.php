<?php if (!defined('THINK_PATH')) exit();?><script language="javascript">
$(function(){
	
$('#invert').on('click', function(){
   $('.c').iCheck('toggle');
});
$('#all').on('click', function(){
	
	$(".c").iCheck('check'); 
});
$('#none').on('click', function(){
	
	$(".c").iCheck('uncheck'); 
});
$('.one').each(function(){

	$(this).on('ifChecked', function(){
         $(":checkbox[id='"+$(this).attr('cid')+"']").iCheck('check'); 
	 });
});
$('.all').each(function(){

	$(this).on('ifClicked', function(){


		if($(this).attr('checked')){
			
			$(":checkbox[cid='"+$(this).attr('id')+"']").iCheck('uncheck'); 
		}else{
			
			$(":checkbox[cid='"+$(this).attr('id')+"']").iCheck('check'); 
		}

	});

});	


});
</script>

<div class="pageContent">
    <form action="/zswin1.5/index.php/Admin/Role/setGroupAll/navTabId/<?php echo CONTROLLER_NAME;?>" id="j_custom_form" class="pageForm form-validate" method="post" callback="dialogAjaxDone" noEnter>
      <input type="hidden" name="groupId" VALUE="<?php echo ($groupId); ?>" />
    <input type="hidden" name="c[]"  value="<?php echo ($nodeid); ?>"/>
        <div class="pageFormContent" layouth="60">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="panel panel-default"> 
                  <div class="panel-heading" style="padding:0;padding-left:10px;"><h4> <label><input type="checkbox" class="all c j-icheck" name="c[]" id="list_<?php echo ($vo["id"]); ?>"   value="<?php echo ($vo["id"]); ?>"  <?php echo in_array($vo['id'], $currentMenu) ? "checked" : "" ?> />&nbsp;<?php echo ($vo["title"]); ?></label></h4></div>
                         
                 <div class="panel-body">
                    <?php if(is_array($vo['sub_node'])): $i = 0; $__LIST__ = $vo['sub_node'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><label><input type="checkbox"  class="one c j-icheck"  name="c[]" cid="list_<?php echo ($vo["id"]); ?>"   value="<?php echo ($sub["id"]); ?>" <?php echo in_array($sub['id'], $currentMenu) ? "checked" : "" ?>/><?php echo ($sub["title"]); ?>&nbsp;</label><?php endforeach; endif; else: echo "" ;endif; ?>
                     </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
               
           
        
		</div>
		<div class="formBar">
            <ul>
             <li><button type="button" class="btn btn-green btn-sm" id="all">全选</button></li>
            <li><button type="button" class="btn btn-green btn-sm" id="none">全不选</button></li>
            <li><button type="button" class="btn btn-green btn-sm" id="invert">反选</button></li>

                <li><button type="submit" class="btn btn-default btn-sm">设置</button></li>
                <li><button type="button" class="btn btn-close btn-sm">取消</button></li>
            </ul>
		</div>
    </form>
</div>