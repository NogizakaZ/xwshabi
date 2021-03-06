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

	<form action="<?php echo U('Index/background/faqihuodongguanli');?>" name="huodongsousuo" method="post">活动搜索 活动id&nbsp&nbsp
		<input id="taocanid" name="taocanid" type="text" value="" >
		<br> 活动类别&nbsp&nbsp
		<input id="huodongleibie" name="leibie" type="text" value="" >
		<br> 活动时间&nbsp&nbsp
		<input id="huodongshijian" name="huodongshijian" type="text" value="">按格式输入
		<br> 活动始发地&nbsp&nbsp
		<input id="huodongshifadi" name="huodongshifadi" type="text" value="">
		<br> 活动目的地&nbsp&nbsp
		<input id="huodongmudidi" name="huodongmudidi" type="text" value="">
		<br> 活动内容 &nbsp
		<textarea id="huodongneirong" name="huodongneirong" cols="29" rows="14"></textarea>
		<br>
		<br> 最大参与人数&nbsp&nbsp
		<input id="zuidacanyurenshu" name="zuidacanyurenshu" type="text" value="">
		<br> 发起人&nbsp&nbsp
		<input id="faqiren" name="faqiren" type="text" value="">按照格式填写
		<br> 活动备注&nbsp
		<textarea id="huodongbeizhu" name="huodongbeizhu" cols="29" rows="14"></textarea>
		<br>

		<input type="submit" value="搜索" />
	</form>
	<br>
	<br>
	<br>

	<table border="1" cellspacing="10">
		<tr>
			<td>活动id</td>
			<td>活动类别</td>
			<td>活动时间</td>
			<td>活动始发地</td>
			<td>活动目的地</td>
			<td>活动内容</td>
			<td>最大参与人数</td>
			<td>发起人</td>
			<td>活动备注</td>
			<td style="cursor:pointer;" id="zengjia">
				<font size="3" color="red">增加</font>
			</td>
		</tr>

		<!-- 以下是一层 name需要你渲染上去对应的套餐id-->
		<tr>
			<tr>
				<?php if(is_array($content)): foreach($content as $key=>$u): ?><td><?php echo ($u["id"]); ?></td>
					<td id="kind<?php echo ($u["id"]); ?>">活动类别</td>
					<td id="time<?php echo ($u["id"]); ?>"><?php echo ($u["startTime"]); ?></td>
					<td id="shifadi<?php echo ($u["id"]); ?>"><?php echo ($u["startarea"]); ?></td>
					<td id="mudidi<?php echo ($u["id"]); ?>"><?php echo ($u["intentarea"]); ?></td>
					<td id="neirong<?php echo ($u["id"]); ?>"><?php echo ($u["content"]); ?></td>
					<td id="zuidacanyu<?php echo ($u["id"]); ?>"><?php echo ($u["maxnumber"]); ?></td>
					<td id="faqiren<?php echo ($u["id"]); ?>"><?php echo ($u["initiator"]); ?></td>
					<td id="huodongbeizhu<?php echo ($u["id"]); ?>"><?php echo ($u["remark"]); ?></td>
					<td style="cursor:pointer;" class="xiugai" name="<?php echo ($u["id"]); ?>">
						<font size="3" color="red">修改</font>
					</td>
					<td style="cursor:pointer;" name="<?php echo ($u["id"]); ?>" class="shanchu">
						<font size="3" color="red">删除</font>
					</td>
			</tr><?php endforeach; endif; ?>
			<?php echo ($page); ?>
	</table>
	<div id="yonghuxinxi" style="display:none;">
		<form action="<?php echo U('Index/background/hdadd');?>" name="yonghuguanli" id="yonghuguanli" method="post">
			活动id&nbsp&nbsp

			<input id="huodongid" name="taocanid" type="text" value="" readonly="true">
			<br>	活动类别&nbsp&nbsp
			<input id="huodongleibie1" name="theme" type="text" value="" readonly="true">

			<br> 活动时间&nbsp&nbsp
			<input id="huodongshijian1" name="huodongshijian" type="text" value="">按格式输入
			<br> 活动始发地&nbsp&nbsp
			<input id="huodongshifadi1" name="huodongshifadi" type="text" value="">
			<br> 活动目的地&nbsp&nbsp
			<input id="huodongmudidi1" name="huodongmudidi" type="text" value="">
			<br> 活动内容 &nbsp
			<textarea id="huodongneirong1" name="huodongneirong" cols="29" rows="14"></textarea>
			<br>
			<br> 最大参与人数&nbsp&nbsp
			<input id="zuidacanyurenshu1" name="zuidacanyurenshu" type="text" value="">
			<br> 发起人&nbsp&nbsp
			<input id="faqiren1" name="faqiren" type="text" value="">按照格式填写
			<br> 活动备注&nbsp
			<textarea id="huodongbeizhu1" name="huodongbeizhu" cols="29" rows="14"></textarea>
			<br>
			<input type="submit" value="提交修改" /> &nbsp &nbsp &nbsp
			<input type="reset" value="重置" />
		</form>
	</div>
	<script type="text/javascript">
		$(".xiugai").click(function() {
			yonghuxinxi.style.display = "block";
			var changshi = $(this).attr("name");
			// namechangshi="name"+changshi;
			// alert($("#name"+changshi).html());
			// document.getElementById("taocanid").innerHTML =changshi;
			$("#huodongid").val(changshi);
			$("#huodongleibie1").val($("#kind" + changshi).html());

			$("#huodongshijian1").val($("#time" + changshi).html());
			$("#huodongshifadi1").val($("#shifadi" + changshi).html());
			$("#huodongmudidi1").val($("#mudidi" + changshi).html());
			$("#huodongneirong1").val($("#neirong" + changshi).html());
			$("#zuidacanyurenshu1").val($("#zuidacanyu" + changshi).html());
			$("#faqiren1").val($("#faqiren" + changshi).html());
			$("#huodongbeizhu1").val($("#huodongbeizhu" + changshi).html());
		})

		$(".shanchu").click(function() {
			// alert($(this).attr("name"));
			url = '<?php echo U('Index/background/hddelete');?>'
			$.post(url, {
				data: $(this).attr("name")
			}, function(data) {
				location.reload();
			});
		})

		$("#zengjia").click(function() {



			$("#huodongid").val("kong");
			$("#huodongleibie1").val("");
			$("#huodongshijian1").val("");
			$("#huodongshifadi1").val("");
			$("#huodongmudidi1").val("");
			$("#huodongneirong1").val("");
			$("#zuidacanyurenshu1").val("");
			$("#faqiren1").val("");
			$("#huodongbeizhu1").val("");

			yonghuxinxi.style.display = "block";
		})
	</script>
</body>

</html>