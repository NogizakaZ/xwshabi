<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>发起活动管理</title>
		 <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
   
    <script type="text/javascript" src="__JS__/jquery-easyui-1.4.2/jquery.min.js"></script>
      <script type="text/javascript" src="__JS__/jquery.cookie.js"></script>
<script type="text/javascript" src="../Public/js/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
  <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
  <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">
  <script language="javascript" src="/steptu/Web/Tpl/Index/background/city.js"></script>
</head>

 <body>
	<table border="1" cellspacing="10">
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/yonghuguanli');?>'">用户管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/taocanguanli');?>'">套餐管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/haohuajiudianguanli');?>'">豪华酒店管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/lvyouchaoshijiudian');?>'">旅游超市酒店管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/shouyeguanli');?>'">首页管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/faqihuodongguanli');?>'">发起活动管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/lvyouchaoshiguanli');?>'">旅游超市管理</td>
<!-- 以下陈亚东来做 包括用户管理详情页面-->
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/zhutilvyouguanli');?>'">主题旅游管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/guanyuyoujiguanli');?>'">关于游迹管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/lvyouzhiguanli');?>'">旅游志管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/taocandingdan');?>'">套餐订单管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/jiudiandingdan');?>'">酒店订单管理</td>
</table>
<br>

<form action="" name="huodongsousuo" method="post">活动搜索<br>
    旅游超市酒店id&nbsp&nbsp<input name="lvyouchaoshiid" type="text" value=""><br>
    旅游超市酒店名&nbsp&nbsp<input name="lvyouchaoshiming" type="text" value=""><br>
   	旅游超市酒店价格&nbsp&nbsp<input name="lvyouchaoshijiage" type="text" value=""><br>
   	旅游超市酒店所在地<br>城市&nbsp&nbsp<input name="lvyouchaoshichengshi" type="text" value=""><br>
   	区县&nbsp&nbsp<input name="lvyouchaoshiquxian" type="text" value=""><br>
   	
<input type="submit" value="搜索" />
</form>
<br> <br> <br>

<table border="1" cellspacing="10">
	<tr><td>活动id</td><td>活动时间</td><td>活动始发地</td><td>活动目的地</td><td>活动内容</td><td>最大参与人数</td><td>发起人</td><td>活动备注</td><td style="cursor:pointer;" id="zengjia"><font size="3" color="red">增加</font></td></tr>

	<!-- 以下是一层 name需要你渲染上去对应的套餐id-->
	<tr ><tr><td>活动id</td><td>活动时间</td><td>活动始发地</td><td>活动目的地</td><td>活动内容</td><td>最大参与人数</td><td>发起人</td><td>活动备注</td><td style="cursor:pointer;" id="xiugai" name="活动id"><font size="3" color="red">修改</font></td><td style="cursor:pointer;" name="活动id" id="shanchu" ><font size="3" color="red">删除</font></td></tr>
	</table>
	<div id="yonghuxinxi" style="display:none;">
<form action="" name="yonghuguanli" id="yonghuguanli" method="post">
	  <div>活动id:&nbsp&nbsp</div><br>
       	活动时间&nbsp&nbsp<input name="huodongshijian" type="text" value="">按格式输入<br>
   	  活动始发地&nbsp&nbsp<input name="huodongshifadi" type="text" value=""><br>
       活动目的地&nbsp&nbsp<input name="huodongmudidi" type="text" value=""><br>
           活动内容 &nbsp  <textarea name="huodongneirong" cols="29" rows="14" ></textarea><br>
              <br>
最大参与人数&nbsp&nbsp<input name="zuidacanyurenshu" type="text" value=""><br>
发起人&nbsp&nbsp<input name="faqiren" type="text" value="">按照格式填写<br>
活动备注&nbsp  <textarea name="huodongbeizhu" cols="29" rows="14" ></textarea><br>
    <input type="submit" value="提交修改" />
   &nbsp &nbsp &nbsp
    <input type="reset" value="重置" /> 
</form>
</div>
<script type="text/javascript">
$("#xiugai").click(function(){
url=""
 $.post(url,{data:$(this).attr("name")},function(data){
     yonghuxinxi.style.display="block";
  });
})

$("#shanchu").click(function(){
	// alert($(this).attr("name"));
	url=""
 $.post(url,{data:$(this).attr("name")},function(data){
    location.reload();
  });
})

$("#zengjia").click(function(){

     url=""
 $.post(url,"xiugai",function(data){
     yonghuxinxi.style.display="block";
  });
 
})

</script>
</body>
</html>