<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
    <form action="/zswin1.5/index.php/Admin/Group/update/navTabId/<?php echo CONTROLLER_NAME;?>" id="j_custom_form" class="pageForm form-validate" method="post" callback="dialogAjaxDone" noEnter>
      <input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" />
        <div class="pageFormContent form-horizontal" layouth="60">
            <div class="form-group">
                <label for="j_name" class="control-label col-sm-2">名称：</label>
                <input type="text" size="20" class="form-control validate[required,custom[onlyLetterNumber]] required" name="name" id="j_name" value="<?php echo ($vo["name"]); ?>"  >
            </div>
            <div class="form-group">
                <label for="j_title" class="control-label col-sm-2">说明：</label>
                <input type="text" size="30" class="form-control  validate[required] required" name="title" id="j_title" value="<?php echo ($vo["title"]); ?>" >
            </div>
            <div class="form-group">
                <label for="j_sort" class="control-label col-sm-2">排序：</label>
                <input type="text" size="5" class="form-control validate[required,custom[integer]] required" name="sort" id="j_sort" value="<?php echo ($vo["sort"]); ?>" >
            </div>
            <div class="form-group">
                <label for="j_show" class="control-label col-sm-2">显示：</label>
                <select name="show"  data-container="body"  id="j_show" class="selectpicker show-tick validate[required]" data-style="btn-default btn-sm" data-width="auto">
                               
                                 <option <?php if(($vo["show"]) == "1"): ?>selected<?php endif; ?> value="1">是</option>
                                    <option <?php if(($vo["show"]) == "0"): ?>selected<?php endif; ?> value="0">否</option>
                 </select>
            </div>
            <div class="form-group">
                <label for="j_status"  class="control-label col-sm-2">状态：</label>
               <select name="status"  data-container="body"  id="j_status" class="selectpicker show-tick validate[required]" data-style="btn-default btn-sm" data-width="auto">
                               
                                 <option <?php if(($vo["status"]) == "1"): ?>selected<?php endif; ?> value="1">启用</option>
                                <option <?php if(($vo["status"]) == "0"): ?>selected<?php endif; ?> value="0">禁用</option>
                 </select>
            </div>
		</div>
		<div class="formBar">
            <ul>
                <li><button type="submit" class="btn btn-default btn-sm">保存</button></li>
                <li><button type="button" url="/zswin1.5/index.php/Admin/Group" class="btn btn-close btn-sm ">取消</button></li>
            </ul>
		</div>
    </form>
</div>