<?php if (!defined('THINK_PATH')) exit();?><div class="pageHeader form-inline">
 <div class="form-group" >
    <a href="javascript:;" autocomplete="off" id="export" class="btn btn-primary btn-xs">立即备份</a>
    <a id="optimize" class="btn btn-green btn-xs"  href="<?php echo U('optimize');?>">优化表</a>
    <a id="repair" class="btn btn-warning btn-xs"  href="<?php echo U('repair');?>">修复表</a>

        </div>

    
</div>
<div class="pageContent">
<form id="export-form" method="post" action="<?php echo U('export');?>">
    <table class="j-table" width="100%" layoutH="80">
        <thead>
            <tr>
            <th width="30"></th>
                <th>表名</th>
                        <th>数据量</th>
                        <th>数据大小</th>
                        <th>创建时间</th>
                        <th>备份状态</th>
                       
                <th><input type="checkbox" class="checkboxCtrl j-icheck" group="tables[]"></th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>

          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$table): $mod = ($i % 2 );++$i;?><tr>
            
               <td></td>
                <td><?php echo ($table["name"]); ?></td>
                            <td><?php echo ($table["rows"]); ?></td>
                            <td><?php echo (format_bytes($table["data_length"])); ?></td>
                            <td><?php echo ($table["create_time"]); ?></td>
                            <td class="info">未备份</td>
                             <td><input type="checkbox" class="j-icheck" name="tables[]" value="<?php echo ($table["name"]); ?>"></td>
                            <td class="action">
                                <a  target="ajaxTodo" class="btn btn-green btn-xs" href="<?php echo U('optimize?tables='.$table['name']);?>">优化表</a>&nbsp;
                                <a  target="ajaxTodo" class="btn btn-warning btn-xs" href="<?php echo U('repair?tables='.$table['name']);?>">修复表</a>
                            </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
 </form>
</div>


    <script type="text/javascript">
    (function($){
        var $form = $("#export-form"), $export = $("#export"), tables
            $optimize = $("#optimize"), $repair = $("#repair");

        $optimize.add($repair).click(function(){
            $.post(this.href, $form.serialize(), function(data){
                if(data.status){
                	alertMsg.correct(data.info);
                   // updateAlert(data.info,'alert-success');
                } else {
                	alertMsg.error(data.info);
                    //updateAlert(data.info,'alert-error');
                }
                setTimeout(function(){
	                $('#top-alert').find('button').click();
	                $(that).removeClass('disabled').prop('disabled',false);
	            },1500);
            }, "json");
            return false;
        });

        $export.click(function(){
            $export.parent().children().addClass("disabled");
            $export.html("正在发送备份请求...");
            $.post(
                $form.attr("action"),
                $form.serialize(),
                function(data){
                   
                    if(data.status){
                        tables = data.tables;
                        $export.html(data.info + "开始备份，请不要关闭本页面！");
                        backup(data.tab);

                        
                        window.onbeforeunload = function(){ return "正在备份数据库，请不要关闭！" }
                    } else {

                    	alertMsg.error(data.info);
                        //updateAlert(data.info,'alert-error');
                        $export.parent().children().removeClass("disabled");
                        $export.html("立即备份");
                        setTimeout(function(){
        	                $('#top-alert').find('button').click();
        	                $(that).removeClass('disabled').prop('disabled',false);
        	            },1500);
                    }
                },
                "json"
            );
            return false;
        });

        function backup(tab, status){
            status && showmsg(tab.id, "开始备份...(0%)");
            $.get($form.attr("action"), tab, function(data){
                if(data.status){
                    showmsg(tab.id, data.info);
                    
                    if(!$.isPlainObject(data.tab)){
                        $export.parent().children().removeClass("disabled");
                        $export.html("备份完成，点击重新备份");
                        window.onbeforeunload = function(){ return null }
                        return;
                    }
                    backup(data.tab, tab.id != data.tab.id);
                } else {
                	alertMsg.error(data.info);
                    //updateAlert(data.info,'alert-error');
                    $export.parent().children().removeClass("disabled");
                    $export.html("立即备份");
                    setTimeout(function(){
    	                $('#top-alert').find('button').click();
    	                $(that).removeClass('disabled').prop('disabled',false);
    	            },1500);
                }
            }, "json");

        }

        function showmsg(id, msg){
            $form.find("input[value=" + tables[id] + "]").closest("tr").find(".info").html(msg);
        }
    })(jQuery);
    </script>