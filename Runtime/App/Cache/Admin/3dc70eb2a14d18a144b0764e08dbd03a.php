<?php if (!defined('THINK_PATH')) exit();?>

<div class="pageContent">
    <form action="/zswin1.5/index.php/Admin/Node/update/navTabId/<?php echo CONTROLLER_NAME;?>" id="j_custom_form" class="pageForm form-validate" method="post" callback="dialogAjaxDone" noEnter>
      
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" >
		
		<input type="hidden" name="pid" value="<?php echo ($vo["pid"]); ?>">
        <div class="pageFormContent form-horizontal" layouth="60">
            <div class="form-group">
                <label for="j_name" class="control-label col-sm-3">控制器名：</label>
                <div class="col-sm-5">
                <input type="text" class="form-control validate[required,custom[onlyLetterSp]] required" size="10" name="name" id="j_name" value="<?php echo ($vo["name"]); ?>"  >
                <p class="help-block">填写的为Controller的名称标识</p>
                </div>
            </div>
            
            <div class="form-group">
                <label for="j_title" class="control-label col-sm-3">显示名：</label>
                <input type="text" class="form-control validate[required] required" size="30" name="title" id="j_title" value="<?php echo ($vo["title"]); ?>" >
            </div>
          
            <div class="form-group">
                <label for="j_group_id" class="control-label col-sm-3">分组：</label>
                <select name="group_id"  data-container="body"  id="j_group_id" class="selectpicker show-tick validate[required]" data-style="btn-default btn-sm" data-width="auto">
                            <option value="">未分组</option>
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?><option value="<?php echo ($group["id"]); ?>" <?php if(($group["id"]) == $vo['group_id']): ?>selected<?php endif; ?>><?php echo ($group["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
                 
            </div>
             <div class="form-group">
                <label for="j_sort" class="control-label col-sm-3">排序：</label>
                <input type="text" class="form-control validate[required,custom[integer]] required" size="30" name="sort" id="j_sort" value="<?php echo ($vo["sort"]); ?>" >
            </div>
            <div class="form-group">
                <label for="j_status" class="control-label col-sm-3">状态：</label>
               <select name="status"  data-container="body"  id="j_status" class="selectpicker show-tick validate[required]" data-style="btn-default btn-sm" data-width="auto">
                               
                                 <option <?php if(($vo["status"]) == "1"): ?>selected<?php endif; ?> value="1">启用</option>
                                <option <?php if(($vo["status"]) == "0"): ?>selected<?php endif; ?> value="0">禁用</option>
                 </select>
            </div>
            <div class="form-group">
                <label for="j_remark" class="control-label col-sm-3">操作模块名：</label>
                <div class="col-sm-5">
                <input type="text" class="form-control validate[custom[onlyLetterSp]]" size="10" name="remark" id="j_remark" value="<?php echo ($vo["remark"]); ?>"  >
               
                <p class="help-block">不填默认为index模块</p>
                </div>
            </div>
		</div>
		<div class="formBar">
            <ul>
                <li><button type="submit" class="btn btn-default btn-sm">保存</button></li>
                <li><button type="button" class="btn btn-close btn-sm">取消</button></li>
            </ul>
		</div>
    </form>
</div>