<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Public/css/index.css" media="all" type="text/css">
    <title>旅游随感</title>
    <script src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>
    <script src="../Public/js/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
    <script type="text/javascript" src='../Public/js/jquery.form.js'></script>
    <script src="../Public/js/jquery-easyui-1.4.2/locale/easyui-lang-zh_CN.js"></script>
    <script  src="__UEDITOR__/ueditor.config.js"></script>
    <script src="__UEDITOR__/ueditor.all.min.js"></script>
    <script src="../Public/js/jquery.cookie.js"></script>
    <script src="../Public/js/vipcenter.js"></script>

    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">
    <link rel="stylesheet" href="../Public/css/css.css" media="all">
    <link href="../Public/css/vipCenter.css" rel="stylesheet" type="text/css">
    <script>
        jQuery(document).ready(function($) {
            $('.theme-login').click(function(){
                $('.theme-popover-mask').fadeIn(100);
                $('.theme-popover').slideDown(200);
            })
            $('.theme-poptit .close').click(function(){
                $('.theme-popover-mask').fadeOut(100);
                $('.theme-popover').slideUp(200);
            })
        })
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
                手机号码：<span><?php echo ($user["phone"]); ?></span>  |  邮箱地址：<span><?php echo ($user["email"]); ?></span>

            </div>
        </div>
        <div class="border">
            <div class="empty"></div>
            <div id="myFelling">    <!-- 我的订单-->
                <div class="realFelling">
                <form id='form' method="post" enctype="multipart/form-data"> 
                    <table>
                        <tr>
                            <td>主题：</td>
                            <td><label><input name="title" id='title' type="text" class="easyui-textbox" style="width: 300px"></label></td>
                        </tr>
                        <tr>
                            <td>正文：</td>
                            <td><textarea id="content" name='content' style="width: 600px;height: 150px"></textarea></td> <!--把 这里换成编辑框  大小差不多按照这个来适当调整就ok -->
                        </tr>
                        <script type="text/javascript">
                                    window.UEDITOR_HOME_URL = '__UEDITOR__';
                                    window.UEDITOR_CONFIG.toolbars = [['undo', 'redo','|',
                                                               'bold', 'italic',
                                                                'emotion','date', 'time'
                                                               ]];
                                    window.UEDITOR_CONFIG.scaleEnabled  = true;
                                    window.UEDITOR_CONFIG.elementPathEnabled = false;
                                    var ue = UE.getEditor('content',{initialFrameWidth:600,initialFrameHeight:250});
                            </script>
                    </table>
                    <input type='file' name="image" id="image">
                    <!-- <button class="uploadImage" onclick="fileSelect()">上传图片</button> -->
                  <!--   <div class="alreadyUpload">
                        <div class="leftWords">
                            &nbsp;点<br/>
                            &nbsp;击<br/>
                            已图<br/>
                            上片<br/>
                            传插<br/>
                            图入<br/>
                            片正<br/>
                            &nbsp;文<br/>
                            &nbsp;中
                        </div>
                        <div id="pictures">
                            <img src="../Public/images/vipCenter/upload.png">
                            <img src="../Public/images/vipCenter/upload.png">
                        </div>
                    </div> -->
                    <br>
                    <input type='button' id="submit" value   ="提交">
                    </form>

                 
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $('#submit').click(function(){

                                if($('#title').val() == ''){
                                    alert("输入标题");
                                    return false;
                                }else if(UE.getEditor('content').getContent() == ''){
                                    alert("编辑旅游随感");
                                }else if($("#image").val() == ""){
                                    alert('选择标题图片');
                                }else{
                                    var option = {
                                        url: "<?php echo U('Index/vipCenter/handFell','','');?>",
                                        success: response
                                    };
                                    $('#form').ajaxForm(option).submit();
                                  
                                }                         
                            });
                        });
                        function response(data){
                            alert(data['path']);
                        }
                    </script>
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
                <img src="../Public/images/vipCenter/point.png"><a href="myOrders.html">我的订单</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="myGrades.html">我的积分 | 奖励</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="myEvaluations.html">我的评价</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="myInformation.html">我的信息</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="myMoneyPot.html">我的储钱罐旅行计划</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="myTravealBook.html">写给未来的信</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="myFelling.html">旅游随感</a>
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