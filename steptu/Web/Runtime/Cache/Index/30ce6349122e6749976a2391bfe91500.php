<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Public/css/index.css" media="all" type="text/css">
    <title>写给未来的信</title>
     <script  src="__UEDITOR__/ueditor.config.js"></script>
    <script src="__UEDITOR__/ueditor.all.min.js"></script>
    <script src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src='..Public/js/jquery.form.jss'></script>
    <script src="../Public/js/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
    <script src="../Public/js/jquery-easyui-1.4.2/locale/easyui-lang-zh_CN.js"></script>
    <script src="../Public/js/jquery.cookie.js"></script>
    <script src="../Public/js/vipcenter.js"></script>
    
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">
    <link rel="stylesheet" href="../Public/css/css.css" media="all">
    <link href="../Public/css/vipCenter.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
    $(document).ready(function() {
       $("#realTravealBook").hide();
    });
    jQuery(document).ready(function($) {
        $('.theme-login').click(function(){
            $('.theme-popover-mask').fadeIn(100);
            $('.theme-popover').slideDown(200);
        });
        $('.theme-poptit .close').click(function(){
            $('.theme-popover-mask').fadeOut(100);
            $('.theme-popover').slideUp(200);
        })
    })
    </script>
    <style type="text/css">
        #content{
           margin-left: 72px;
        }
    </style>
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
        <img src="__IMG__/xuanchuan.png" class="xuanchuan">
        <img src="__IMG__/phone.png" class="phone">
        
    </div>
    
    <div id="afterLogin" style="display: none">
        <img src="../Public/images/afterLogin.png" class="login">
        <button class="register" id="exitLogin">退出登录</button>
    </div>
    <div class="mainbox"></div>

    <div class="container">
        <img src="../Public/images/vipCenter/headtitle.png"><br><br/>
        <div class="dearVIP">
            <img src="../Public/images/vipCenter/point.png">
            <div class="realDearVIP">
                尊敬的会员<span><?php echo ($user["name"]); ?></span>，欢迎你！<br/>
                手机号码：<span><?php echo ($user["phone"]); ?></span>  |  邮箱地址：<span><?php echo ($user["phone"]); ?></span>
            </div>
        </div>
        <div class="border">
            <div class="empty"></div>
            <div id="myTravealBook">
                
                <div class="buttonbox">
                    <button class="letterToFuture" onclick="showLetter()">什么</button>
                    <button class="letterToFuture" onclick="showWriter()">写信</button>
                </div>
                   
                <form id="realTravealBook" method="post" enctype="multipart/form-data" action="<?php echo U('Index/vipCenter/DoWriteLetter');?>">
                    <div class="background">
                        <div class="singleLine">
                            <div class="hateWords">邮箱：</div>
                            <label><input class="easyui-textbox" name='emaile' type="email" style="width: 550px" required id="emaile"></label>
                        </div>
                        <div class="singleLine">
                            <div class="hateWords">主题：</div>
                            <label><input class="easyui-textbox" style="width: 550px"  name='theme' id="theme" required></label>
                        </div>
                        <div class="singleLine">
                            <div class="hateWords">内容：</div>
                         
                            <textarea id="content" name='content'></textarea>
                   
                         <script type="text/javascript">
                            window.UEDITOR_HOME_URL = '__UEDTOR__';
                            window.UEDITOR_CONFIG.toolbars = [['undo', 'redo','|',
                                                               'bold', 'italic',
                                                                'emotion','date', 'time','insertimage'
                                                               ]];
                            window.UEDITOR_CONFIG.scaleEnabled  = true;
                            window.UEDITOR_CONFIG.elementPathEnabled = false;
                            var ue = UE.getEditor('content',{initialFrameWidth:550,initialFrameHeight:20});
                         </script>

                        </div>
                        <div class="singleLine">
                            <div class="hateWords">发送时间：</div>
                            <label><input class="easyui-datebox" name='time'></label>
                        </div>
                        <div class="singleLine">
                            <div class="hateWords">添加图片：</div>
                            <label><input type="file" accept="image/gif, image/png, image/jpeg" style="width: 550px;border-radius: 3px" required name='image'></label>
                        </div>
                        <div class="singleLine">
                            <div class="hateWords">发送形式：</div>
                            <label><input type="radio" name="status" value="0"  required>自己看</label>
                            <label><input type="radio" name="status" value="1" checked="checked" required>可以公开</label>
                        </div>
                    </div>
                    <button id="commit" type="submit" style="background-image: url('../Public/images/vipCenter/sendButton.png');border: none;width: 80px;height: 30px;margin-left: 10%;margin-top: 20px"></button>
                </form>

                 <script type="text/javascript">
                //     $(function(){
                //         $("#commit").click(function(){
                //             // alert($("#emaile").val() == '');
                //             if($("#emaile").val() == ''){
                //                 alert("邮箱不能为空");
                //             }else if($("#theme").val() == ""){
                //                 alert("主题不能为空");
                //             }else if (UE.getEditor('content').getContent() == '') {
                //                 alert("编辑内容不能为空");
                //             }
                //         });
                //     })
                 </script>
                <div id="realLetter" style="display:block">
                     <?php if(is_array($list)): foreach($list as $key=>$v): ?><div class="detialLetter"> <!-- 从这里开始循环，每一篇文章，一个div-->
                            <div class="letterTitle">
                                【<span><?php echo ($v["theme"]); ?></span>】
                            </div>
                            <div class="dateContainer">
                                <span style="font-size: 13px;color: #2c42ea">发送日期:<?php echo ($v["time"]); ?></span>
                            </div>
                            <div class="realPassage">
                                <?php echo (htmlspecialchars_decode($v["content"])); ?>
                            </div>
                        </div>  <!-- 循环到这里结束--><?php endforeach; endif; ?>
                    <?php echo ($show); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar">
        <div class="userHead">
            <div class="imageBox">
                 <?php if($user["image"] == ''): ?><img id="imgHead" src="../Public/images/vipCenter/head.png">
                <?php else: ?>
                <img id="imgHead" src="<?php echo ($user["image"]); ?>"><?php endif; ?>    
                <a onclick="fileSelect()">上传头像</a>  <!-- -->
            </div>
            <span><?php echo ($user["name"]); ?></span>
            <form id="form_face" method="post" enctype="multipart/form-data" style="width:auto;">  <!--  上传头像提交表单-->
                <input type="file" accept="image/gif, image/png, image/jpeg" name="fileToUpload" id="fileToUpload" onchange="fileSelected();" style="display:none;">
            </form>
             <script type="text/javascript">  <!--上传头像函数 -->
            function fileSelect() {
                document.getElementById("fileToUpload").click();
            }
            function fileSelected() {
                // 文件选择后触发次函数
                var option = {
                    url: "<?php echo U('Index/vipCenter/handUploadImage','','');?>",
                    success: showResponse

                };
                $('#form_face').ajaxForm(option).submit();

            }
            function showResponse(data){
                if (data["msg"] == 1) {
                     $("#imgHead").attr('src',data["path"]);
                }else{
                    alert(data["path"]);
                }
            }
            </script>
        </div>
        <div class="realNavbar">
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myOrders','','');?>">我的订单</a>
            </div>
            <div class="realNavbarContent">
                    <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myGrades','','');?>">我的积分 | 奖励</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myEvaluations','','');?>/juge/3">我的评价</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myInformation','','');?>">我的信息</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="myMoneyPot.html">我的储钱罐旅行计划</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myTravealBook','','');?>">写给未来的信</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myFelling','','');?>">旅游随感</a>
            </div>
        </div>
    </div>
    <div>
        <div class="bottom"></div>
        <div class="bottomsm">
            <span class="bottombiao">旅游超市</span>
            <div class="bottomxuanxiang">
                <a href="<?php echo U('Index/travelStore/smsousuojieguo');?>">住</a><br>
                <a href="<?php echo U('Index/travelStore/travelStore');?>">吃货</a>
            </div>
        </div>
        <div class="bottompersonal">
            <span class="bottombiao">会员中心</span>
            <div class="bottomxuanxiang1">
                <a href="<?php echo U('Index/vipCenter/myOrders');?>"> 我的订单</a><br>
                <a href="<?php echo U('Index/vipCenter/myGrades');?>">我的积分</a> <br>
                <a href="<?php echo U('Index/vipCenter/myEvaluations');?>"> 我的评价</a><br>
                <a href="<?php echo U('Index/vipCenter/myInformation');?>">我的信息</a> <br>
                <a href="<?php echo U('Index/vipCenter/myMoneyPot');?>">我的储钱罐旅行计划</a><br>
            </div>
        </div>
        <div class="bottombook">
            <span class="bottombiao">旅游志</span>
            <div class="bottomxuanxiang">
                <a href="<?php echo U('Index/travelBook/travelBook');?>">旅游随感</a> <br>
                <a href="<?php echo U('Index/travelBook/letterList');?>"> 写给未来的信</a></div>
        </div>
        <div class="weishenme">
            <span class="bottombiao">主题旅游</span>
            <div class="bottomxuanxiang"><a href="<?php echo U('Index/travelTheme/travelTheme');?>">城市之间</a><br>
                <a href="<?php echo U('Index/travelTheme/travelTheme');?>"> 学子游</a><br>
                <a href="<?php echo U('Index/travelTheme/travelTheme');?>">年休假</a><br>
                <a href="<?php echo U('Index/travelTheme/travelTheme');?>">美食游</a></div></div>
        <div class="bottomaboutus"><span class="bottombiao">关于游记</span><div class="bottomxuanxiang">
            <a href="<?php echo U('Index/index/aboutUs');?>">关于我们</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">联系我们</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">一起合作</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">用户协议</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">诚聘英才</a></div>
        </div>
    </div>
    <img src="../Public/images/steptu.png" class="steptu">
    <img src="../Public/images/banquan.png" class="banquan">
    <img src="../Public/images/renzhengwang.png" class="renzhengwang">
    <img src="../Public/images/kexin.png" class="kexin">
    <img src="../Public/images/chengxin.png" class="chengxin">
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
                <li><strong>用户名：</strong><input class="ipt" id="loginUsername" type="text" name="log" value="jq22" size="20" /></li>
                <li><strong>密码：</strong><input class="ipt" id="loginPassword" type="password" name="pwd" value="***" size="20" /></li>
                <li><input class="btn btn-primary" id="loginButton" type="submit" name="submit" value=" 登 录 " /></li>
            </ol>
        </form>
    </div>
</div>
<div class="theme-popover-mask"></div>
</body>
</html>