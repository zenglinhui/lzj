<?php if (!defined('THINK_PATH')) exit();?>

<div class="pageContent">

    <form action="/zswin1.5/index.php/Admin/User/insert/navTabId/<?php echo CONTROLLER_NAME;?>" id="j_custom_form" class="pageForm form-validate" method="post" callback="dialogAjaxDone" noEnter>
      
        <div class="pageFormContent form-horizontal" layouth="60">
            <div class="form-group">
                <label for="j_account" class="col-sm-2 control-label">用户名：</label>
               
                <input type="text" size="30" class="form-control validate[required,custom[onlyLetterNumber],minSize[3]] required"  name="account" id="j_account" value=""  >
               
            </div>
            
            <div class="form-group">
                <label for="j_nickname" class="control-label col-sm-2 ">姓名：</label>
               
                <input type="text" class="form-control validate[required] required" size="30" name="nickname" id="j_nickname" value="" >
               
            </div>
            <div class="form-group">
                <label for="j_password" class="control-label col-sm-2 ">密码：</label>
               
                <input type="password" class="form-control validate[required,minSize[6]] required" name="password" id="j_password" value="" size="24">
                
            </div>
            <div class="form-group">
                <label for="j_roleId" class="control-label col-sm-2 ">权限组：</label>
                

				<input name="roleId" class="zs-lookup" value="1" type="hidden" id="j_roleId" zs-name="role.id">
				<input  type="text" class="zs-lookup form-control validate[required] required pull-left" size="18" class="form-control validate[required] required"  zs-name="role.name"  value="" readonly="readonly" >
                
                <a class="pull-left" href="<?php echo U('rolelist');?>" lookupgroup="role"><i class="icon-search"></i></a>
                
                 
            </div>
            <div class="form-group">
                <label for="j_status" class="control-label col-sm-2 ">状态：</label>
              
               <select name="status"  data-container="body"  id="j_status" class="selectpicker show-tick validate[required]" data-style="btn-default btn-sm" data-width="auto">
                               
                                 <option value="1">启用</option>
                                <option value="0">禁用</option>
                 </select>
                
            </div>
            <div class="form-group">
                <label for="j_remark" class="control-label col-sm-2">备注：</label>
               
                <textarea name="remark" id="j_remark" class="form-control autosize" rows="4" cols="30"></textarea>
               
            </div>
		</div>
		<div class="formBar">
            <ul>
                <li><button type="submit" class="btn btn-primary btn-sm">保存</button></li>
                <li><button type="button" class="btn btn-close btn-sm">取消</button></li>
            </ul>
		</div>
    </form>
</div>