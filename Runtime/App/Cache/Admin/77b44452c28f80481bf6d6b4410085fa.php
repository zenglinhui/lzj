<?php if (!defined('THINK_PATH')) exit();?><div class="pageHeader">

    
</div>
<div class="pageContent">
  <table class="j-table" width="100%" layoutH="80">
        <thead>
            <tr>
            <th width="30"></th>
                <th>备份名称</th>
                    <th>卷数</th>
                    <th>压缩</th>
                    <th>数据大小</th>
                    <th>备份时间</th>
                    <th width="100">状态</th>
                    <th>操作</th>
                       
                
               
            </tr>
        </thead>
        <tbody>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr><td></td>
                        <td><?php echo (date('Ymd-His',$data["time"])); ?></td>
                        <td><?php echo ($data["part"]); ?></td>
                        <td><?php echo ($data["compress"]); ?></td>
                        <td><?php echo (format_bytes($data["size"])); ?></td>
                        <td><?php echo ($key); ?></td>
                        <td>-</td>
                        <td class="action">
                            <a href="javascript:void(0);" onclick="importdata(this);"  class="btn btn-primary btn-sm" url="/zswin1.5/index.php/Admin/Dataimport/import/time/<?php echo ($data['time']); ?>">还原</a>&nbsp;
                            <a target="ajaxTodo" class="btn btn-danger btn-sm" href="/zswin1.5/index.php/Admin/Dataimport/del/time/<?php echo ($data['time']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"  title="确定要删除该备份吗？">删除</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
       
        </tbody>
    </table>

</div>
 

    <script type="text/javascript">
   
    	
    	   


    	    function importdata(obj){
    	    	 var status = ".",obj;

    	    	   
    	    	    $.get($(obj).attr('url'), success, "json");
    	    	    window.onbeforeunload = function(){ return "正在还原数据库，请不要关闭！" }
    	    	    return false;
    	    	    function success(data){
    	    	        if(data.status){
    	    	            if(data.gz){
    	    	                data.info += status;
    	    	                if(status.length === 5){
    	    	                    status = ".";
    	    	                } else {
    	    	                    status += ".";
    	    	                }
    	    	                $(obj).html(data.info);
    	    	            }
    	    	            $(obj).parent().prev().text(data.info);
    	    	            if(data.part){
    	    	                $.get($(obj).attr('url'), 
    	    	                    {"part" : data.part, "start" : data.start}, 
    	    	                    success, 
    	    	                    "json"
    	    	                );
    	    	            }  else {
    	    	                window.onbeforeunload = function(){ return null; }
    	    	            }
    	    	        } else {
    	    	        	alertMsg.error(data.info);
    	    	        }
    	    	    }

    	    }

    	    

 
    </script>