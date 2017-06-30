<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent"   layouth="1">
	<div class="pageFormContent">
       
        <h3 style="text-align:center;">网站设置</h3>

 
		 <div class="tab-Header">
        
		<ul class="nav  nav-tabs" style="margin-bottom:10px;">
			<?php if(is_array(C("CONFIG_GROUP_LIST"))): $i = 0; $__LIST__ = C("CONFIG_GROUP_LIST");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?><li <?php if(($key) == "1"): ?>class="active"<?php endif; ?>><a data-toggle="tab" href="#tab<?php echo ($key); ?>" ><?php echo ($group); ?>配置</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		</div>
   
	
	 <form action="/zswin1.5/index.php/Admin/Config/save/navTabId/<?php echo CONTROLLER_NAME;?>" id="j_custom_form" class="pageForm form-validate" method="post" callback="navTabAjaxDone" noEnter>
	
<div class="tab-content form-horizontal">
	<?php if(is_array(C("CONFIG_GROUP_LIST"))): $i = 0; $__LIST__ = C("CONFIG_GROUP_LIST");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?><div id="tab<?php echo ($key); ?>" class="tab-pane  fade <?php if(($key) == "1"): ?>in active<?php endif; ?>">
	
		
			<?php if(is_array($list[$key])): $i = 0; $__LIST__ = $list[$key];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$config): $mod = ($i % 2 );++$i;?><div class="form-group">
			<label class="control-label col-sm-2 "><?php echo ($config["title"]); ?>: </label>
			
			<div class="col-sm-7">
			<?php switch($config["type"]): case "0": ?><input type="text" class="form-control" size="6" name="config[<?php echo ($config["name"]); ?>]" value="<?php echo ($config["value"]); ?>"><?php break;?>
			<?php case "1": ?><input type="text" class="form-control" name="config[<?php echo ($config["name"]); ?>]" value="<?php echo ($config["value"]); ?>"><?php break;?>
			<?php case "2": ?><textarea class="form-control autosize"  rows="4" cols="30" name="config[<?php echo ($config["name"]); ?>]"><?php echo ($config["value"]); ?></textarea><?php break;?>
			<?php case "3": ?><textarea class="form-control autosize"  rows="4" cols="30" name="config[<?php echo ($config["name"]); ?>]"><?php echo ($config["value"]); ?></textarea><?php break;?>
			<?php case "4": ?><select name="config[<?php echo ($config["name"]); ?>]"  class="selectpicker show-tick"  data-style="btn-default btn-sm" data-width="auto" data-container="body">
				<?php $_result=parse_config_attr($config['extra']);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>" <?php if(($config["value"]) == $key): ?>selected<?php endif; ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select><?php break;?>
			<?php case "5": ?><!--增加富文本和非明文-->
			
				
               <textarea name="config[<?php echo ($config["name"]); ?>]"  class="j-content" style="width: 700px;" uploadJson="<?php echo U('File/ke_upimg');?>" fileManagerJson="<?php echo U('File/editorfilemanager');?>"  minheight="200"><?php echo ($config["value"]); ?></textarea><?php break;?>
			<?php case "6": ?><input type="password"  class="form-control" name="config[<?php echo ($config["name"]); ?>]" value="<?php echo ($config["value"]); ?>"><?php break; endswitch;?>
			
			<p class="help-block"><?php echo ($config["remark"]); ?></p>
			</div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
		 
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
		<div class="formBar">
            <ul>
                <li><button type="submit" class="btn btn-default btn-sm">保存</button></li>
                <li><button type="button" url="/zswin1.5/index.php/Admin/Config" class="btn btn-close btn-sm ">取消</button></li>
            </ul>
		</div>
		
    </form>

	
	</div>
	</div>
	</div>