<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\wwwroot\qiandao.com\public/../application/user/view/admin/publics\signin.html";i:1497080054;}*/ ?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="zh"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>DolphinPHP - 海豚PHP框架</title>

        <meta name="description" content="">
        <meta name="author" content="caiweiming">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="/static/admin/img/favicons/favicon.ico">

        <link rel="icon" type="image/png" href="/static/admin/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="/static/admin/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/static/admin/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/static/admin/img/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="/static/admin/img/favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="/static/admin/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/static/admin/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/static/admin/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/static/admin/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/static/admin/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/static/admin/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/static/admin/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/static/admin/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/static/admin/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->


        <!-- Stylesheets -->

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="/static/libs/sweetalert/sweetalert.min.css">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="/static/admin/css/oneui.css">
        <link rel="stylesheet" href="/static/admin/css/dolphin.css">

        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Login Content -->
        <div class="bg-white pulldown">
            <div class="content content-boxed overflow-hidden">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                        <div class="push-30-t push-50 animated fadeIn">
                            <!-- Login Title -->
                            <div class="text-center">
                                <img src="/static/admin/img/logo-signin.png" alt="海豚PHP框架">
                                <p class="text-muted push-15-t">海豚PHP框架</p>
                            </div>
                            <!-- END Login Title -->

                            <!-- Login Form -->
                            <form class="js-validation-login form-horizontal push-30-t signin-form" name="signin-form" action="<?php echo url('signin'); ?>" method="post">
                                <div class="form-group">
                                    <label class="col-xs-12" for="login-username">用户名</label>
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" id="login-username" name="username" placeholder="请输入您的用户名">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12" for="login-password">密码</label>
                                    <div class="col-xs-12">
                                        <input class="form-control" type="password" id="login-password" name="password" placeholder="请输入您的密码">
                                    </div>
                                </div>
                                <?php if(!(empty(\think\Config::get('captcha_signin')) || ((\think\Config::get('captcha_signin') instanceof \think\Collection || \think\Config::get('captcha_signin') instanceof \think\Paginator ) && \think\Config::get('captcha_signin')->isEmpty()))): ?>
                                <div class="form-group">
                                    <label class="col-xs-12" for="login-password">验证码</label>
                                    <div class="col-xs-7">
                                        <input class="form-control" type="text" name="captcha" placeholder="请输入验证码">
                                    </div>
                                    <div class="col-xs-5">
                                        <img src="<?php echo captcha_src(); ?>" class="pull-right" id="captcha" style="cursor: pointer;" onclick="this.src='<?php echo captcha_src(); ?>?d='+Math.random();" title="点击刷新" alt="captcha" />
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <?php echo hook('signin_captcha'); ?>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label class="css-input switch switch-sm switch-primary">
                                            <input type="checkbox" id="login-remember-me" name="remember-me"><span></span> 7天内自动登录?
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="font-s13 text-right push-5-t">
                                            <a href="">忘记密码?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group push-30-t">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                        <button class="btn btn-block btn-primary" type="submit">登 录</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Login Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Login Content -->

        <!-- Login Footer -->
        <div class="pulldown push-30-t text-center animated fadeInUp">
            <small class="text-muted"><span class="js-year-copy"></span> &copy; DolphinPHP <?php echo config('dolphin.product_version'); ?></small>
        </div>
        <!-- END Login Footer -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="/static/admin/js/core/jquery.min.js"></script>
        <script src="/static/admin/js/core/bootstrap.min.js"></script>
        <script src="/static/admin/js/core/jquery.slimscroll.min.js"></script>
        <script src="/static/admin/js/core/jquery.scrollLock.min.js"></script>
        <script src="/static/admin/js/core/jquery.appear.min.js"></script>
        <script src="/static/admin/js/core/jquery.countTo.min.js"></script>
        <script src="/static/admin/js/core/jquery.placeholder.min.js"></script>
        <script src="/static/admin/js/core/js.cookie.min.js"></script>
        <script src="/static/admin/js/app.js"></script>

        <!-- Page JS Plugins -->
        <script src="/static/libs/jquery-validation/jquery.validate.min.js"></script>
        <script src="/static/libs/bootstrap-notify/bootstrap-notify.min.js"></script>
        <script src="/static/libs/sweetalert/sweetalert.min.js"></script>

        <!-- Page JS Code -->
        <script src="/static/admin/js/dolphin.js"></script>
        <?php echo hook('signin_footer'); ?>
        <script>
            $(document).ready(function () {
                $('.signin-form').on('submit', function () {
                    var $data = $(this).serialize();

                    Dolphin.loading();
                    $.post($(this).attr('action'), $data, function (res) {
                        Dolphin.loading('hide');
                        if (res.code) {
                            Dolphin.notify('登录成功，页面即将跳转~', 'success');
                            setTimeout(function () {
                                location.href = res.url;
                            }, 1500);
                        } else {
                            if (res.msg == '验证码错误或失效') {
                                $('#captcha').click();
                            }
                            Dolphin.notify(res.msg, 'danger');
                        }
                    }).fail(function () {
                        Dolphin.loading('hide');
                        Dolphin.notify('服务器错误~', 'danger');
                    });
                    return false;
                });
            });
        </script>
    </body>
</html>