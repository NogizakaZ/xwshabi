<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Public/css/index.css" media="all" type="text/css">
    <title>旅游随感</title>
    <script  src="/steptu/Web/Tpl/ueditor/ueditor.config.js"></script>
    <script src="/steptu/Web/Tpl/ueditor/ueditor.all.min.js"></script>

    <script src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>
   
    <script src="../Public/js/register.js"></script>
    <script src="../Public/js/traveBook.js"></script>
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">
    <link rel="stylesheet" href="../Public/css/css.css" media="all">
    <link href="../Public/css/travelFelling.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        $(document).ready(function(){
        　　$("#like").click(function(){
        　　　　$.post('<?php echo U("Index/travelBook/upadateLikeNumber");?>',{id:<?php echo $data['id']?>},function(data) {
                $('#likeNumber').html(data);
                });
        　　});

            $('#sub').click(function() {
                
                if (UE.getEditor('text').getContent()) {
                    $.post(
                        '<?php echo U("Index/travelBook/fellingComment");?>',
                        {id:<?php echo $data['id']?>,content:UE.getEditor('text').getContent()},
                        function(data){
                            if (data['msg'] == 'sussess') {
                                window.location.href="<?php echo U('Index/travelBook/felling','','');?>/id/<?php echo ($data["id"]); ?>";
                            }else{
                                alert(data['msg'])
                            }
                         
                    });
                }else{
                     alert("请填写评论类容");
                }
               
            });
        }); 
    </script>
</head>
<body>
<div class="quanbu">
    <div>
        <a href="<?php echo U('Index/travelStore/travelStore');?>"><img src="__IMG__/travelsm.png" class="travelsm"></a>
        <a href="<?php echo U('Index/vipCenter/myInformation');?>"><img src="__IMG__/personal.png" class="personal"></a>
        <a href="<?php echo U('Index/travelTheme/travelTheme');?>"> <img src="__IMG__/travel.png" class="travel" ></a>
        <a href="<?php echo U('Index/makePlan/makePlan');?>"> <img src="__IMG__/makeplan.png" class="makeplan"></a>
        <a href="<?php echo U('Index/index/index');?>"><img src="__IMG__/index.png" class="index"></a>
        <a href="<?php echo U('Index/travelBook/travelBook');?>"><img src="__IMG__/travelbook.png" class="travelbook"></a>
        <img src="../Public/images/xuanchuan.png" class="xuanchuan">
        <img src="../Public/images/phone.png" class="phone">
        <img src="../Public/images/register.png" class="register">
    </div>
    <div ><a href="javascript:;" class=" btn-large theme-login"><img src="../Public/images/login.png"class="login"></a>
    </div>

    <div class="mainbox"></div>

    <div class="container">

       
        <img src="../Public/images/travelBook/headtitle_felling.png"><br><br/>
        <img src="../Public/images/travelBook/title.png"><br/>
        <div id="mainboxrealFelling">
            <div class="contentsFromUser">
                <div class="realContents">
                    <div class="image">
                        <img src="../Public/images/travelBook/upload.png" style="float: left">
                    </div>
                    <div class="textword" >
                        <div class="information">
                            <img src="../Public/images/travelBook/headimg.png" class="imgeye">
                            <div class="titlebox">
                                <a href=""><p style="color: #0055FF"><b><?php echo ($data["name"]); ?></b></p></a><br/>
                                <a href=""><?php echo ($data["userName"]); ?></a> &nbsp;&nbsp;&nbsp;&nbsp;<span id="dataBox"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="../Public/images/travelBook/eye.png"  style="height: 13px;">&nbsp;<span id="readerNumber" ><?php echo ($data["readNumber"]); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="../Public/images/travelBook/message.png" style="height: 13px">&nbsp;<span id="replayNumber"><?php echo ($count); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="../Public/images/travelBook/like.png" id='like' style="height: 13px;">&nbsp;<span id="likeNumber" ><?php echo ($data["likeNumber"]); ?></span>
                            </div>
                        </div>
                        <div class="passage">
                            <!--<p>Welcome to SYSLAB! We do hands-on systems research on topics ranging from wireless ad-hoc networks to cloud computing to computer security. Principal ...Welcome to SYSLAB! We do hands-on systems research on topics ranging from wireless ad-hoc networks to cloud computing to computer security. Principal ...Welcome to SYSLAB! We do hands-on systems research on topics ranging from wireless ad-hoc networks to cloud computing to computer security. Principal ...</p>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="detialContents">
                <div class="realDetials">
                    <?php echo ($note["note"]); ?> 
                    <!-- 内容 -->
                <br>
                </div>
            </div>
            <span><b>发表评论</b></span><br/>
            <img src="../Public/images/travelBook/headimg.png" class="imgeye">
            <textarea id='text'></textarea>
            <!-- 添加文本编辑器 -->
            <script type="text/javascript">
                window.UEDITOR_HOME_URL = '/steptu/Web/Tpl/ueditor/';
                window.UEDITOR_CONFIG.toolbars = [['undo', 'redo','|',
                                                   'bold', 'italic',
                                                    'emotion',
                                                   ]];
                window.UEDITOR_CONFIG.scaleEnabled  = true; 
                window.UEDITOR_CONFIG.elementPathEnabled = false;
                var ue = UE.getEditor('text',{initialFrameWidth:720,initialFrameHeight:90});
        </script>
            <button class="btn btn-primary" style="margin-left: 50px" id='sub'>  提 交  </button><br/><br/>
            <span><b>网友评论</b></span><br/>
            <?php if(is_array($list)): foreach($list as $key=>$v): ?><div class="comments">
                    <img src="../Public/images/travelBook/headimg.png" class="imgeye">
                    <span style="color: #0055FF"><b><?php echo ($v["name"]); ?></b> </span><br><br/>
                    <span id="dataBox_2"><?php echo ($v["time"]); ?></span><br/><br/>
                    <div class="commentContent">
                        <p>
                            <?php echo (htmlspecialchars_decode($v["content"])); ?>
                        </p><br/>
                    </div>
                </div><?php endforeach; endif; ?>
            <div class="btnbox" style="margin-top: 10px">
                <?php echo ($page); ?>
            </div>
        </div>
    </div>
  <div>
        <div class="bottom_1"></div>
        <div class="bottomsm_1"><span class="bottombiao">旅游超市</span><div class="bottomxuanxiang">住<br>吃货</div></div>
        <div class="bottompersonal_1"><span class="bottombiao">会员中心</span><div class="bottomxuanxiang1">我的订单<br>我的奖励<br>我的积分<br>我的评价<br>我的信息<br>我的储钱罐旅行计划</span><br>找朋友</div> </div>
        <div class="bottombook_1"><span class="bottombiao">旅游志</span><div class="bottomxuanxiang">旅游随感<br>写给未来的信</div></div>
        <div class="weishenme_1"><span class="bottombiao">主题旅游</span><div class="bottomxuanxiang">城市之间<br>学子游<br>年休假<br>美食游</div></div>
        <div class="bottomaboutus_1"><span class="bottombiao">关于游记</span><div class="bottomxuanxiang">关于我们<br>联系我们<br>一起合作<br>用户协议<br>诚聘英才</div></div>
    </div>
    <img src="../Public/images/steptu.png" class="steptu_1">
    <img src="../Public/images/banquan.png" class="banquan_1">
    <img src="../Public/images/renzhengwang.png" class="renzhengwang_1">
    <img src="../Public/images/kexin.png" class="kexin_1">
    <img src="../Public/images/chengxin.png" class="chengxin_1">
    <div class="twoBtn">
        <a style="top: 242px;left: 37%" href="<?php echo U('Index/travelBook/travelBook');?>"> 旅 游 随 感 </a>
        <a style="top: 242px;left: 54%" href="<?php echo U('Index/travelBook/letterList');?>">写 给 未 来 的 信</a>
    </div>
</div>

<div class="theme-popover">
    <div class="theme-poptit">
        <a href="javascript:;" title="关闭" class="close">×</a>
        <h3>旅行是一种生活</h3>
    </div>
    <div class="theme-popbod dform">
        <form class="theme-signin" name="loginform" action="" method="post">
            <ol>
                <li><h4>请登录</h4></li>
                <li><strong>用户名：</strong><input class="ipt" type="text" name="log" value="jq22" size="20" /></li>
                <li><strong>密码：</strong><input class="ipt" type="password" name="pwd" value="***" size="20" /></li>
                <li><input class="btn btn-primary" type="submit" name="submit" value=" 登 录 " /></li>
            </ol>
        </form>
    </div>
</div>
<div class="theme-popover-mask"></div>
</body>
</html>