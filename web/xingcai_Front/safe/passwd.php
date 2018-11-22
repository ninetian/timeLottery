<?php $this->display('C38_header_new.php'); ?>

    <div id="nsc_subContent" style="border:0">
        <script type="text/javascript">

          $(function () {
            $(".menus-li li").click(function () {
              $(".menus-li li").removeClass("on");
              $(this).addClass("on");
              $("#tabs-1,#tabs-2").hide();
              $("#tabs-" + ($(this).index() + 1)).show();
            });
          })
        </script>

        <?php $this->display('siderbar.php'); ?>
        <link rel="stylesheet" href="/css/nsc/reset.css?v=1.16.11.9"/>
        <link rel="stylesheet" href="/css/nsc/list.css?v=1.16.11.9"/>
        <link rel="stylesheet" href="/css/nsc/activity.css?v=1.16.11.9"/>
        <script type="text/javascript" src="/js/nsc/jquery-1.7.min.js?v=1.16.12.5"></script>
        <script type="text/javascript" src="/js/nsc/main.js?v=1.16.12.5"></script>
        <script type="text/javascript" src="/js/nsc/dialogUI/jquery.dialogUI.js?v=1.16.12.5"></script>
        <link href="/css/nsc/plugin/dialogUI/dialogUI.css?v=1.16.11.9" media="all" type="text/css" rel="stylesheet"/>

        </head>
        <body>

        <div id="subContent_bet_re" class="subContent_bet_re">
            <!--消息框代码开始-->
            <script src="/js/jqueryui/ui/jquery.ui.core.js?v=1.16.12.5"></script>
            <script src="/js/jqueryui/ui/jquery.ui.widget.js?v=1.16.12.5"></script>
            <script src="/js/jqueryui/ui/jquery.ui.tabs.js?v=1.16.12.5"></script>
            <script language="javascript" type="text/javascript" src="/js/common/jquery.md5.js?v=1.16.12.5"></script>
            <script type="text/javascript" src="/js/keypad/jquery.keypad.js?v=1.16.12.5"></script>
            <link rel="stylesheet" type="text/css" media="all" href="/js/keypad/keypad.css?v=1.16.11.9"/>
            <!--消息框代码结束-->

            <div id="changeloginpass">
                <div id="tabs">
                    <ul class="menus-li">
                        <li class="on">修改登入密码</li>
                    </ul>
                    <div id="tabs-1">
                        <form action="/index.php/safe/setPasswd" method="post" target="ajax" onajax="safeBeforSetPwd"
                              call="safeSetPwd">
                            <table width="100%" border="0" cellspacing="1" cellpadding="5">
                                <tr>
                                    <td class="tdz3_left">输入旧登入密码：</td>
                                    <td class="tdz3_right">
                                        <input type="password" name="oldpassword" class="password"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tdz3_left">输入新登入密码：</td>
                                    <td class="tdz3_right">
                                        <input type="password" name="newpassword" class="password"/>
                                        <span class="text_hint">由字母和数字组成6-16个字符</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tdz3_left">确认新登入密码：</td>
                                    <td class="tdz3_right">
                                        <input type="password" name="qrpassword" class="password confirm"/>
                                    </td>
                                </tr>
                            </table>
                            <div class="list_page"><span class="font_red">备注：请妥善保管好您的登录密码，如遗忘请联系在线客服重置。</span></div>
                            <div class="list_btn_box">
                                <input id="setpass" type="submit" value="修改" class="formChange"/>
                                <input type="reset" id="resetpass" class="formReset" value="重置"
                                       onClick="this.form.reset()"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div></div></div>

    <script type="text/javascript">
      $(document).ready(function () {
      });
      jQuery("input.password").keypad({
        layout: [
          $.keypad.SPACE + $.keypad.SPACE + $.keypad.SPACE + '1234567890',
          'cdefghijklmab',
          "stuvwxyznopqr"/*+ $.keypad.CLEAR*/,
          $.keypad.SPACE + $.keypad.SPACE + $.keypad.SHIFT + $.keypad.CLEAR + $.keypad.BACK + $.keypad.CLOSE
        ],
        // 软键盘按键布局
        buttonImage: '/js/keypad/kb.png',	// 弹出(关闭)软键盘按钮图片地址
        buttonImageOnly: true,	// True 表示已图片形式显示, false 表示已按钮形式显示
        buttonStatus: '打开/关闭软键盘', // 打开/关闭软键盘按钮说明文字
        showOn: 'button', // 'focus'表示已输入框焦点弹出,
        // 'button'通过按钮点击弹出,或者 'both' 表示两者都可以弹出

        keypadOnly: false, // True 表示只接受软件盘输入, false 表示可以通过键盘和软键盘输入

        randomiseNumeric: true, // True 表示对所以数字位置进行随机排列, false 不随机排列
        randomiseAlphabetic: true, // True 表示对字母进行随机排列, false 不随机排列

        clearText: '清空', // Display text for clear link
        clearStatus: '', // Status text for clear l

        shiftText: '大小写', // SHIFT 按键功能的键的显示文字
        shiftStatus: '转换字母大小写', // SHIFT按键功能的TITLE说明文字

        closeText: '关闭', // 关闭按键功能的显示文字
        closeStatus: '关闭软键盘', // 关闭按键功能的TITLE说明文字

        backText: '退格', // 退格功能键的显示文字
        backStatus: '退格', // 退格功能键的说明文字

        onClose: null	// 点击软键盘关闭是调用的函数
      });
    </script>


<?php $this->display('C38_footer.php'); ?>