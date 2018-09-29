<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:77:"D:\wwwroot\qiandao.com\public/../application/common/builder/table/layout.html";i:1526291512;s:67:"D:\wwwroot\qiandao.com\public/../application/admin/view/layout.html";i:1526119482;s:47:"../application/common/builder/aside/layout.html";i:1512640190;s:54:"../application/common/builder/aside/blocks/recent.html";i:1489042526;s:54:"../application/common/builder/aside/blocks/online.html";i:1489042526;s:54:"../application/common/builder/aside/blocks/switch.html";i:1489042526;}*/ ?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="zh"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title><?php echo (isset($page_title) && ($page_title !== '')?$page_title:'后台'); ?> | <?php echo config('web_site_title'); ?> - DolphinPHP</title>

    <meta name="description" content="<?php echo config('web_site_description'); ?>">
    <meta name="author" content="caiweiming">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0,user-scalable=0">

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
    <?php if(!(empty($_css_files) || (($_css_files instanceof \think\Collection || $_css_files instanceof \think\Paginator ) && $_css_files->isEmpty()))): if(\think\Config::get('minify_status') == '1'): ?>
            <link rel="stylesheet" href="<?php echo minify('group', $_css_files); ?>">
        <?php else: if(is_array($_css_files) || $_css_files instanceof \think\Collection || $_css_files instanceof \think\Paginator): $i = 0; $__LIST__ = $_css_files;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$css): $mod = ($i % 2 );++$i;?>
            <?php echo load_assets($css); endforeach; endif; else: echo "" ;endif; endif; endif; if(!(empty($_icons) || (($_icons instanceof \think\Collection || $_icons instanceof \think\Paginator ) && $_icons->isEmpty()))): if(is_array($_icons) || $_icons instanceof \think\Collection || $_icons instanceof \think\Paginator): $i = 0; $__LIST__ = $_icons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$icon): $mod = ($i % 2 );++$i;?>
        <link rel="stylesheet" href="<?php echo $icon['url']; ?>">
        <?php endforeach; endif; else: echo "" ;endif; endif; ?>

    

    <!-- Bootstrap and OneUI CSS framework -->
    <?php if(\think\Config::get('minify_status') == '1'): ?>
    <link rel="stylesheet" id="css-main" href="<?php echo minify('group', 'libs_css,core_css'); ?>">
    <?php else: ?>
    <link rel="stylesheet" href="/static/libs/sweetalert/sweetalert.min.css?v=<?php echo config('asset_version'); ?>">
    <link rel="stylesheet" href="/static/libs/magnific-popup/magnific-popup.min.css?v=<?php echo config('asset_version'); ?>">
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css?v=<?php echo config('asset_version'); ?>">
    <link rel="stylesheet" href="/static/admin/css/oneui.css?v=<?php echo config('asset_version'); ?>">
    <link rel="stylesheet" href="/static/admin/css/dolphin.css?v=<?php echo config('asset_version'); ?>" id="css-main">
    <link rel="stylesheet" href="/static/libs/viewer/viewer.min.css?v=<?php echo config('asset_version'); ?>">
    <?php endif; ?>
    <link rel="stylesheet" id="css-theme" href="/static/admin/css/themes/<?php echo config('system_color'); ?>.min.css?v=<?php echo config('asset_version'); ?>">

    <!--页面css-->
    
    <?php if(is_array($css_list) || $css_list instanceof \think\Collection || $css_list instanceof \think\Paginator): $i = 0; $__LIST__ = $css_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <link rel="stylesheet" href="<?php echo $vo; ?>?v=<?php echo config('asset_version'); ?>">
    <?php endforeach; endif; else: echo "" ;endif; ?>

    
    <?php echo (isset($extra_css) && ($extra_css !== '')?$extra_css:''); if(!(empty($_pop) || (($_pop instanceof \think\Collection || $_pop instanceof \think\Paginator ) && $_pop->isEmpty()))): ?>
    <style>
        #page-container.sidebar-l.sidebar-o {
            padding-left: 0;
        }
        .header-navbar-fixed #main-container {
            padding-top: 0;
        }
    </style>
    <?php endif; ?>
    <!-- END Stylesheets -->

    <!--插件css钩子-->
    <?php echo hook('page_plugin_css'); ?>

    <!--自定义css-->
    <link rel="stylesheet" href="/static/admin/css/custom.css?v=<?php echo config('asset_version'); ?>">
    <script>
        // url
        var dolphin = {
            'top_menu_url': '<?php echo url("admin/ajax/getSidebarMenu"); ?>',
            'theme_url': '<?php echo url("admin/ajax/setTheme"); ?>',
            'jcrop_upload_url': '<?php echo !empty($jcrop_upload_url)?$jcrop_upload_url : url("admin/attachment/upload", ["dir" => "images", "from" => "jcrop", "module" => request()->module()]); ?>',
            'editormd_upload_url': '<?php echo !empty($editormd_upload_url)?$editormd_upload_url : url("admin/attachment/upload", ["dir" => "images", "from" => "editormd", "module" => request()->module()]); ?>',
            'editormd_mudule_path': '/static/libs/editormd/lib/',
            'ueditor_upload_url': '<?php echo !empty($ueditor_upload_url)?$ueditor_upload_url : url("admin/attachment/upload", ["dir" => "images", "from" => "ueditor", "module" => request()->module()]); ?>',
            'wangeditor_upload_url': '<?php echo !empty($wangeditor_upload_url)?$wangeditor_upload_url : url("admin/attachment/upload", ["dir" => "images", "from" => "wangeditor", "module" => request()->module()]); ?>',
            'wangeditor_emotions': "/static/libs/wang-editor/emotions.data",
            'ckeditor_img_upload_url': '<?php echo !empty($ckeditor_img_upload_url)?$ckeditor_img_upload_url : url("admin/attachment/upload", ["dir" => "images", "from" => "ckeditor", "module" => request()->module()]); ?>',
            'WebUploader_swf': '/static/libs/webuploader/Uploader.swf',
            'file_upload_url': '<?php echo !empty($file_upload_url)?$file_upload_url : url("admin/attachment/upload", ["dir" => "files", "module" => request()->module()]); ?>',
            'image_upload_url': '<?php echo !empty($image_upload_url)?$image_upload_url : url("admin/attachment/upload", ["dir" => "images", "module" => request()->module()]); ?>',
            'upload_check_url': '<?php echo !empty($upload_check_url)?$upload_check_url : url("admin/ajax/check"); ?>',
            'get_level_data': '<?php echo url("admin/ajax/getLevelData"); ?>',
            'quick_edit_url': '<?php echo !empty($quick_edit_url)?$quick_edit_url : url("quickEdit"); ?>',
            'aside_edit_url': '<?php echo !empty($aside_edit_url)?$aside_edit_url : url("admin/system/quickEdit"); ?>',
            'triggers': <?php echo json_encode((isset($field_triggers) && ($field_triggers !== '')?$field_triggers:[])); ?>, // 触发器集合
            'field_hide': '<?php echo (isset($field_hide) && ($field_hide !== '')?$field_hide:""); ?>', // 需要隐藏的字段
            'field_values': '<?php echo (isset($field_values) && ($field_values !== '')?$field_values:""); ?>',
            'validate': '<?php echo (isset($validate) && ($validate !== '')?$validate:""); ?>', // 验证器
            'validate_fields': '<?php echo (isset($validate_fields) && ($validate_fields !== '')?$validate_fields:""); ?>', // 验证字段
            'search_field': '<?php echo input("param.search_field", ""); ?>', // 搜索字段
            // 字段过滤
            '_filter': '<?php echo \think\Request::instance()->param('_filter')?\think\Request::instance()->param('_filter') : (isset($_filter) ? $_filter : ""); ?>',
            '_filter_content': '<?php echo \think\Request::instance()->param('_filter_content')==''?(isset($_filter_content) ? $_filter_content : "") : \think\Request::instance()->param('_filter_content'); ?>',
            '_field_display': '<?php echo \think\Request::instance()->param('_field_display')?\think\Request::instance()->param('_field_display') : (isset($_field_display) ? $_field_display : ""); ?>',
            '_field_clear': <?php echo json_encode((isset($field_clear) && ($field_clear !== '')?$field_clear:[])); ?>,
            'get_filter_list': '<?php echo url("admin/ajax/getFilterList"); ?>',
            'curr_url': '<?php echo url("", \think\Request::instance()->route()); ?>',
            'curr_params': <?php echo json_encode(\think\Request::instance()->param()); ?>,
            'layer': <?php echo json_encode(config("zbuilder.pop")); ?>
        };
    </script>
</head>
<body>
<!-- Page Container -->
<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed <?php if(empty($_pop) || (($_pop instanceof \think\Collection || $_pop instanceof \think\Paginator ) && $_pop->isEmpty())): if(!empty($_COOKIE['sidebarMini'])) echo  'sidebar-mini'; endif; ?>">
    <!-- Side Overlay-->
    <?php if(empty($_pop) || (($_pop instanceof \think\Collection || $_pop instanceof \think\Paginator ) && $_pop->isEmpty())): ?>
    
    <aside id="side-overlay">
        <!-- Side Overlay Scroll Container -->
        <div id="side-overlay-scroll">
            <!-- Side Header -->
            <div class="side-header side-content">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-times"></i>
                </button>
                <span>
                    <img class="img-avatar img-avatar32" src="<?php echo get_avatar(\think\Session::get('user_auth.uid')); ?>" alt="">
                    <span class="font-w600 push-10-l"><?php echo session('user_auth.username'); ?></span>
                </span>
            </div>
            <!-- END Side Header -->
            <!--侧栏-->
            <!-- Side Content -->
<div class="side-content remove-padding-t" id="aside">
    <!-- Side Overlay Tabs -->
    <div class="block pull-r-l border-t">
        <?php if(!(empty($aside['tab_nav']) || (($aside['tab_nav'] instanceof \think\Collection || $aside['tab_nav'] instanceof \think\Paginator ) && $aside['tab_nav']->isEmpty()))): ?>
        <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs">
            <?php if(is_array($aside['tab_nav']['tab_list']) || $aside['tab_nav']['tab_list'] instanceof \think\Collection || $aside['tab_nav']['tab_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $aside['tab_nav']['tab_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i;?>
            <li <?php if($aside['tab_nav']['curr_tab']==$key) echo 'class="active"'; ?>>
                <a href="#<?php echo $key; ?>"><?php echo $tab; ?></a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <?php endif; if(!(empty($aside['tab_con']) || (($aside['tab_con'] instanceof \think\Collection || $aside['tab_con'] instanceof \think\Paginator ) && $aside['tab_con']->isEmpty()))): ?>
        <div class="block-content tab-content">
            <?php if(is_array($aside['tab_con']) || $aside['tab_con'] instanceof \think\Collection || $aside['tab_con'] instanceof \think\Paginator): $i = 0; $__LIST__ = $aside['tab_con'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$con): $mod = ($i % 2 );++$i;?>
            <div class="tab-pane fade fade-right <?php if($aside['tab_nav']['curr_tab']==$key) echo 'in active'; ?>" id="<?php echo $key; ?>">
                <?php if(!(empty($con) || (($con instanceof \think\Collection || $con instanceof \think\Paginator ) && $con->isEmpty()))): if(is_array($con) || $con instanceof \think\Collection || $con instanceof \think\Paginator): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$_block): $mod = ($i % 2 );++$i;switch($_block['type']): case "recent": ?>
<div class="block pull-r-l">
    <div class="block-header bg-gray-lighter">
        <ul class="block-options">
            <li>
                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
            </li>
            <li>
                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
            </li>
        </ul>
        <h3 class="block-title"><?php echo (isset($_block['title']) && ($_block['title'] !== '')?$_block['title']:''); ?></h3>
    </div>
    <div class="block-content">
        <?php if(!(empty($_block['list']) || (($_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator ) && $_block['list']->isEmpty()))): ?>
        <ul class="list list-activity">
            <?php if(is_array($_block['list']) || $_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $_block['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                <?php if(!(empty($vo['icon']) || (($vo['icon'] instanceof \think\Collection || $vo['icon'] instanceof \think\Paginator ) && $vo['icon']->isEmpty()))): ?><i class="<?php echo $vo['icon']; ?>"></i><?php endif; ?>
                <div class="font-w600"><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></div>
                <div>
                    <?php if(!(empty($vo['link']['url']) || (($vo['link']['url'] instanceof \think\Collection || $vo['link']['url'] instanceof \think\Paginator ) && $vo['link']['url']->isEmpty()))): ?>
                        <a href="<?php echo $vo['link']['url']; ?>"><?php echo (isset($vo['link']['title']) && ($vo['link']['title'] !== '')?$vo['link']['title']:''); ?></a>
                    <?php else: ?>
                        <?php echo (isset($vo['link']['title']) && ($vo['link']['title'] !== '')?$vo['link']['title']:''); endif; ?>
                </div>
                <?php if(!(empty($vo['tips']) || (($vo['tips'] instanceof \think\Collection || $vo['tips'] instanceof \think\Paginator ) && $vo['tips']->isEmpty()))): ?>
                <div><small class="text-muted"><?php echo $vo['tips']; ?></small></div>
                <?php endif; ?>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <?php endif; ?>
    </div>
</div>
<?php break; case "online": ?>
<div class="block pull-r-l">
    <div class="block-header bg-gray-lighter">
        <ul class="block-options">
            <li>
                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
            </li>
            <li>
                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
            </li>
        </ul>
        <h3 class="block-title"><?php echo (isset($_block['title']) && ($_block['title'] !== '')?$_block['title']:''); ?></h3>
    </div>
    <div class="block-content block-content-full">
        <?php if(!(empty($_block['list']) || (($_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator ) && $_block['list']->isEmpty()))): ?>
        <ul class="nav-users remove-margin-b">
            <?php if(is_array($_block['list']) || $_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $_block['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                <a href="<?php echo (isset($vo['link']) && ($vo['link'] !== '')?$vo['link']:'javascript:void(0);'); ?>">
                    <img class="img-avatar" src="<?php echo (isset($vo['avatar']) && ($vo['avatar'] !== '')?$vo['avatar']:'/static/admin/img/avatar.jpg'); ?>" alt="">
                    <i class="fa fa-circle text-<?php echo !empty($vo['online'])?'success' : 'warning'; ?>"></i> <?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>
                    <div class="font-w400 text-muted"><small><?php echo (isset($vo['tips']) && ($vo['tips'] !== '')?$vo['tips']:''); ?></small></div>
                </a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <?php endif; ?>
    </div>
</div>
<?php break; case "switch": ?>
<div class="block pull-r-l">
    <div class="block-header bg-gray-lighter">
        <ul class="block-options">
            <li>
                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
            </li>
        </ul>
        <h3 class="block-title"><?php echo (isset($_block['title']) && ($_block['title'] !== '')?$_block['title']:''); ?></h3>
    </div>
    <div class="block-content">
        <?php if(!(empty($_block['list']) || (($_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator ) && $_block['list']->isEmpty()))): ?>
        <div class="form-bordered">
            <?php if(is_array($_block['list']) || $_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $_block['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="font-s13 font-w600"><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></div>
                        <div class="font-s13 font-w400 text-muted"><?php echo (isset($vo['tips']) && ($vo['tips'] !== '')?$vo['tips']:''); ?></div>
                    </div>
                    <div class="col-xs-4 text-right">
                        <label class="css-input switch switch-sm switch-primary push-10-t">
                            <input type="checkbox" data-table="<?php echo (isset($vo['table']) && ($vo['table'] !== '')?$vo['table']:''); ?>" data-id="<?php echo (isset($vo['id']) && ($vo['id'] !== '')?$vo['id']:''); ?>" data-field="<?php echo (isset($vo['field']) && ($vo['field'] !== '')?$vo['field']:''); ?>" <?php if(!empty($vo['checked'])) echo  'checked=""'; ?>><span></span>
                        </label>
                    </div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php break; endswitch; endforeach; endif; else: echo "" ;endif; endif; ?>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <?php endif; if(!(empty($aside['blocks']) || (($aside['blocks'] instanceof \think\Collection || $aside['blocks'] instanceof \think\Paginator ) && $aside['blocks']->isEmpty()))): ?>
        <div class="block-content">
            <?php if(is_array($aside['blocks']) || $aside['blocks'] instanceof \think\Collection || $aside['blocks'] instanceof \think\Paginator): $i = 0; $__LIST__ = $aside['blocks'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$_block): $mod = ($i % 2 );++$i;switch($_block['type']): case "recent": ?>
<div class="block pull-r-l">
    <div class="block-header bg-gray-lighter">
        <ul class="block-options">
            <li>
                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
            </li>
            <li>
                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
            </li>
        </ul>
        <h3 class="block-title"><?php echo (isset($_block['title']) && ($_block['title'] !== '')?$_block['title']:''); ?></h3>
    </div>
    <div class="block-content">
        <?php if(!(empty($_block['list']) || (($_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator ) && $_block['list']->isEmpty()))): ?>
        <ul class="list list-activity">
            <?php if(is_array($_block['list']) || $_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $_block['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                <?php if(!(empty($vo['icon']) || (($vo['icon'] instanceof \think\Collection || $vo['icon'] instanceof \think\Paginator ) && $vo['icon']->isEmpty()))): ?><i class="<?php echo $vo['icon']; ?>"></i><?php endif; ?>
                <div class="font-w600"><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></div>
                <div>
                    <?php if(!(empty($vo['link']['url']) || (($vo['link']['url'] instanceof \think\Collection || $vo['link']['url'] instanceof \think\Paginator ) && $vo['link']['url']->isEmpty()))): ?>
                        <a href="<?php echo $vo['link']['url']; ?>"><?php echo (isset($vo['link']['title']) && ($vo['link']['title'] !== '')?$vo['link']['title']:''); ?></a>
                    <?php else: ?>
                        <?php echo (isset($vo['link']['title']) && ($vo['link']['title'] !== '')?$vo['link']['title']:''); endif; ?>
                </div>
                <?php if(!(empty($vo['tips']) || (($vo['tips'] instanceof \think\Collection || $vo['tips'] instanceof \think\Paginator ) && $vo['tips']->isEmpty()))): ?>
                <div><small class="text-muted"><?php echo $vo['tips']; ?></small></div>
                <?php endif; ?>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <?php endif; ?>
    </div>
</div>
<?php break; case "online": ?>
<div class="block pull-r-l">
    <div class="block-header bg-gray-lighter">
        <ul class="block-options">
            <li>
                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
            </li>
            <li>
                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
            </li>
        </ul>
        <h3 class="block-title"><?php echo (isset($_block['title']) && ($_block['title'] !== '')?$_block['title']:''); ?></h3>
    </div>
    <div class="block-content block-content-full">
        <?php if(!(empty($_block['list']) || (($_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator ) && $_block['list']->isEmpty()))): ?>
        <ul class="nav-users remove-margin-b">
            <?php if(is_array($_block['list']) || $_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $_block['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                <a href="<?php echo (isset($vo['link']) && ($vo['link'] !== '')?$vo['link']:'javascript:void(0);'); ?>">
                    <img class="img-avatar" src="<?php echo (isset($vo['avatar']) && ($vo['avatar'] !== '')?$vo['avatar']:'/static/admin/img/avatar.jpg'); ?>" alt="">
                    <i class="fa fa-circle text-<?php echo !empty($vo['online'])?'success' : 'warning'; ?>"></i> <?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>
                    <div class="font-w400 text-muted"><small><?php echo (isset($vo['tips']) && ($vo['tips'] !== '')?$vo['tips']:''); ?></small></div>
                </a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <?php endif; ?>
    </div>
</div>
<?php break; case "switch": ?>
<div class="block pull-r-l">
    <div class="block-header bg-gray-lighter">
        <ul class="block-options">
            <li>
                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
            </li>
        </ul>
        <h3 class="block-title"><?php echo (isset($_block['title']) && ($_block['title'] !== '')?$_block['title']:''); ?></h3>
    </div>
    <div class="block-content">
        <?php if(!(empty($_block['list']) || (($_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator ) && $_block['list']->isEmpty()))): ?>
        <div class="form-bordered">
            <?php if(is_array($_block['list']) || $_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $_block['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="font-s13 font-w600"><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></div>
                        <div class="font-s13 font-w400 text-muted"><?php echo (isset($vo['tips']) && ($vo['tips'] !== '')?$vo['tips']:''); ?></div>
                    </div>
                    <div class="col-xs-4 text-right">
                        <label class="css-input switch switch-sm switch-primary push-10-t">
                            <input type="checkbox" data-table="<?php echo (isset($vo['table']) && ($vo['table'] !== '')?$vo['table']:''); ?>" data-id="<?php echo (isset($vo['id']) && ($vo['id'] !== '')?$vo['id']:''); ?>" data-field="<?php echo (isset($vo['field']) && ($vo['field'] !== '')?$vo['field']:''); ?>" <?php if(!empty($vo['checked'])) echo  'checked=""'; ?>><span></span>
                        </label>
                    </div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php break; case "html": ?>
                        <?php echo (isset($_block['title']) && ($_block['title'] !== '')?$_block['title']:''); break; endswitch; endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <?php endif; ?>
    </div>
    <!-- END Side Overlay Tabs -->
</div>
<!-- END Side Content -->
        </div>
        <!-- END Side Overlay Scroll Container -->
    </aside>
    
    <?php endif; ?>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <?php if(empty($_pop) || (($_pop instanceof \think\Collection || $_pop instanceof \think\Paginator ) && $_pop->isEmpty())): ?>
    
    <nav id="sidebar">
        <!-- Sidebar Scroll Container -->
        <div id="sidebar-scroll">
            <!-- Sidebar Content -->
            <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="side-header side-content bg-white-op dolphin-header">
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times"></i>
                    </button>
                    <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                    <div class="btn-group pull-right">
                        <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                            <i class="si si-drop"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
                            <li <?php if($system_color=='modern') echo  'class="active"'; ?>>
                                <a data-toggle="theme" data-theme="modern" data-css="/static/admin/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                                </a>
                            </li>
                            <li <?php if($system_color=='amethyst') echo  'class="active"'; ?>>
                                <a data-toggle="theme" data-theme="amethyst" data-css="/static/admin/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                                </a>
                            </li>
                            <li <?php if($system_color=='city') echo  'class="active"'; ?>>
                                <a data-toggle="theme" data-theme="city" data-css="/static/admin/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                                </a>
                            </li>
                            <li <?php if($system_color=='flat') echo  'class="active"'; ?>>
                                <a data-toggle="theme" data-theme="flat" data-css="/static/admin/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                                </a>
                            </li>
                            <li <?php if($system_color=='smooth') echo  'class="active"'; ?>>
                                <a data-toggle="theme" data-theme="smooth" data-css="/static/admin/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                                </a>
                            </li>
                            <li <?php if($system_color=='default') echo  'class="active"'; ?>>
                                <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a class="h5 text-white" href="<?php echo url('admin/index/index'); ?>">
                        <?php if(!(empty(\think\Config::get('web_site_logo')) || ((\think\Config::get('web_site_logo') instanceof \think\Collection || \think\Config::get('web_site_logo') instanceof \think\Paginator ) && \think\Config::get('web_site_logo')->isEmpty()))): ?>
                        <img src="<?php echo get_file_path(\think\Config::get('web_site_logo')); ?>" class="logo" alt="<?php echo (\think\Config::get('web_site_title') ?: 'Dolphin PHP'); ?>">
                        <?php else: ?>
                        <img src="<?php echo \think\Config::get('public_static_path'); ?>admin/img/logo.png" class="logo" alt="Dolphin PHP">
                        <?php endif; if(!(empty(\think\Config::get('web_site_logo_text')) || ((\think\Config::get('web_site_logo_text') instanceof \think\Collection || \think\Config::get('web_site_logo_text') instanceof \think\Paginator ) && \think\Config::get('web_site_logo_text')->isEmpty()))): ?>
                        <img src="<?php echo get_file_path(\think\Config::get('web_site_logo_text')); ?>" class="logo-text sidebar-mini-hide" alt="<?php echo (\think\Config::get('web_site_title') ?: 'Dolphin PHP'); ?>">
                        <?php else: ?>
                        <img src="<?php echo \think\Config::get('public_static_path'); ?>admin/img/logo-text.png" class="logo-text sidebar-mini-hide" alt="Dolphin PHP">
                        <?php endif; ?>
                    </a>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="side-content" id="sidebar-menu">
                    <?php if(!(empty($_sidebar_menus) || (($_sidebar_menus instanceof \think\Collection || $_sidebar_menus instanceof \think\Paginator ) && $_sidebar_menus->isEmpty()))): ?>
                    <ul class="nav-main" id="nav-<?php echo $_location[0]['id']; ?>">
                        <?php if(is_array($_sidebar_menus) || $_sidebar_menus instanceof \think\Collection || $_sidebar_menus instanceof \think\Paginator): $i = 0; $__LIST__ = $_sidebar_menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
                        <li <?php if($menu['id']==$_location[1]["id"]) echo 'class="open"'; ?>>
                            <?php if(!(empty($menu['url_value']) || (($menu['url_value'] instanceof \think\Collection || $menu['url_value'] instanceof \think\Paginator ) && $menu['url_value']->isEmpty()))): ?>
                                <a <?php if(($menu['id'] == $_location[1]["id"])): ?>class="active"<?php endif; ?> href="<?php echo $menu['url_value']; ?>" target="<?php echo $menu['url_target']; ?>"><i class="<?php echo $menu['icon']; ?>"></i><span class="sidebar-mini-hide"><?php echo $menu['title']; ?></span></a>
                            <?php else: ?>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="javascript:void(0);"><i class="<?php echo $menu['icon']; ?>"></i><span class="sidebar-mini-hide"><?php echo $menu['title']; ?></span></a>
                            <?php endif; if(!(empty($menu['child']) || (($menu['child'] instanceof \think\Collection || $menu['child'] instanceof \think\Paginator ) && $menu['child']->isEmpty()))): ?>
                            <ul>
                                <?php if(is_array($menu['child']) || $menu['child'] instanceof \think\Collection || $menu['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $menu['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$submenu): $mod = ($i % 2 );++$i;?>
                                <li>
                                    <a <?php if((isset($_location[2]) && $submenu['id'] == $_location[2]["id"])): ?>class="active"<?php endif; ?> href="<?php echo $submenu['url_value']; ?>" target="<?php echo $submenu['url_target']; ?>"><i class="<?php echo $submenu['icon']; ?>"></i><?php echo $submenu['title']; ?></a>
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <!-- END Side Content -->
            </div>
            <!-- Sidebar Content -->
        </div>
        <!-- END Sidebar Scroll Container -->
    </nav>
    
    <?php endif; ?>
    <!-- END Sidebar -->

    <!-- Header -->
    <?php if(empty($_pop) || (($_pop instanceof \think\Collection || $_pop instanceof \think\Paginator ) && $_pop->isEmpty())): ?>
    
    <header id="header-navbar" class="content-mini content-mini-full">
        <!-- Header Navigation Right -->
        <ul class="nav-header pull-right">
            <li>
                <div class="btn-group">
                    <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                        <img src="<?php echo get_avatar(\think\Session::get('user_auth.uid')); ?>" alt="<?php echo session('user_auth.username'); ?>">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-header"><?php echo session('user_auth.username'); ?> (<?php echo session('user_auth.role_name'); ?>)</li>
                        <li>
                            <a tabindex="-1" href="<?php echo url('admin/index/profile'); ?>">
                                <i class="si si-settings pull-right"></i>个人设置
                            </a>
                        </li>
                        <li>
                            <a tabindex="-1" href="<?php echo url('admin/message/index'); ?>">
                                <i class="si si-envelope-open pull-right"></i><span class="badge badge-primary pull-right"><?php echo (isset($_message) && ($_message !== '')?$_message:0); ?></span>消息中心
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a tabindex="-1" href="<?php echo url('user/publics/signout'); ?>">
                                <i class="si si-logout pull-right"></i>退出帐号
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="btn btn-default ajax-get" href="<?php echo url('admin/index/wipeCache'); ?>" data-toggle="tooltip" data-placement="bottom" data-original-title="清空缓存">
                    <i class="fa fa-trash"></i>
                </a>
            </li>
            <li>
                <a class="btn btn-default" href="<?php echo rtrim(home_url('/'), '/'); ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" data-original-title="打开前台">
                    <i class="fa fa-external-link-square"></i>
                </a>
            </li>
            <li>
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" title="侧边栏" type="button">
                    <i class="fa fa-tasks"></i>
                </button>
            </li>
        </ul>
        <!-- END Header Navigation Right -->

        <!-- Header Navigation Left -->
        <ul class="nav nav-pills pull-left">
            <li class="hidden-md hidden-lg">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <a href="javascript:void(0)" data-toggle="layout" data-action="sidebar_toggle"><i class="fa fa-navicon"></i></a>
            </li>
            <li class="hidden-xs hidden-sm">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <a href="javascript:void(0)" title="打开/关闭左侧导航" data-toggle="layout" data-action="sidebar_mini_toggle"><i class="fa fa-bars"></i></a>
            </li>
            <?php if(!(empty($_top_menus) || (($_top_menus instanceof \think\Collection || $_top_menus instanceof \think\Paginator ) && $_top_menus->isEmpty()))): if(is_array($_top_menus) || $_top_menus instanceof \think\Collection || $_top_menus instanceof \think\Paginator): $i = 0; $__LIST__ = $_top_menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
            <li class="hidden-xs hidden-sm <?php if($menu['id']==$_location[0]['id']) echo  'active'; ?>">
                <?php if(in_array(($menu['url_type']), explode(',',"module_admin,module_home"))): ?>
                <a href="javascript:void(0);" data-module-id="<?php echo $menu['id']; ?>" data-module="<?php echo $menu['module']; ?>" data-controller="<?php echo $menu['controller']; ?>" target="<?php echo $menu['url_target']; ?>" class="top-menu"><i class="<?php echo $menu['icon']; ?>"></i> <?php echo $menu['title']; ?></a>
                <?php else: ?>
                <a href="<?php echo $menu['url_value']; ?>" target="<?php echo $menu['url_target']; ?>"><i class="<?php echo $menu['icon']; ?>"></i> <?php echo $menu['title']; ?></a>
                <?php endif; ?>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            <li>
                <!-- Opens the Apps modal found at the bottom of the page, before including JS code -->
                <a href="#" data-toggle="modal" data-target="#apps-modal"><i class="si si-grid"></i></a>
            </li>
        </ul>
        <!-- END Header Navigation Left -->
    </header>
    
    <?php endif; ?>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Header -->
        
        <?php if(empty($_pop) || (($_pop instanceof \think\Collection || $_pop instanceof \think\Paginator ) && $_pop->isEmpty())): ?>
        <div class="bg-gray-lighter">
            <ol class="breadcrumb">
                <li><i class="fa fa-map-marker"></i></li>
                <?php if(!(empty($_location) || (($_location instanceof \think\Collection || $_location instanceof \think\Paginator ) && $_location->isEmpty()))): if(is_array($_location) || $_location instanceof \think\Collection || $_location instanceof \think\Paginator): $i = 0; $__LIST__ = $_location;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <li><a class="link-effect" href="<?php if(!(empty($v["url_value"]) || (($v["url_value"] instanceof \think\Collection || $v["url_value"] instanceof \think\Paginator ) && $v["url_value"]->isEmpty()))): ?><?php echo url($v['url_value']); else: ?>javascript:void(0);<?php endif; ?>"><?php echo $v['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </ol>
        </div>
        <?php endif; ?>
        
        <!-- END Page Header -->

        <!-- Page Content -->
        <div class="content">
            
            <?php echo hook('page_tips'); if(!(empty($page_tips) || (($page_tips instanceof \think\Collection || $page_tips instanceof \think\Paginator ) && $page_tips->isEmpty()))): ?>
    <div class="alert alert-<?php echo $tips_type; ?> alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p><?php echo $page_tips; ?></p>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <?php if(!(empty($tab_nav) || (($tab_nav instanceof \think\Collection || $tab_nav instanceof \think\Paginator ) && $tab_nav->isEmpty()))): ?>
                <ul class="nav nav-tabs">
                    <?php if(is_array($tab_nav['tab_list']) || $tab_nav['tab_list'] instanceof \think\Collection || $tab_nav['tab_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $tab_nav['tab_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i;?>
                    <li <?php if($tab_nav['curr_tab'] == $key): ?>class="active"<?php endif; ?>>
                    <a href="<?php echo $tab['url']; if(!empty($_pop)) echo  '?_pop=1'; ?>"><?php echo htmlspecialchars($tab['title']); ?></a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <li class="pull-right">
                        <ul class="block-options push-10-t push-10-r">
                            <li>
                                <button type="button" class="page-reload"><i class="si si-refresh"></i></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            </li>
                        </ul>
                    </li>
                </ul>
                <?php else: if(empty($_pop) || (($_pop instanceof \think\Collection || $_pop instanceof \think\Paginator ) && $_pop->isEmpty())): ?>
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button" class="page-reload"><i class="si si-refresh"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title"><?php echo htmlspecialchars((isset($page_title) && ($page_title !== '')?$page_title:"")); ?></h3>
                </div>
                <?php endif; endif; ?>
                <div class="block-content tab-content">
                    <div class="tab-pane active">
                        <?php if(!(empty($_search_area) || (($_search_area instanceof \think\Collection || $_search_area instanceof \think\Paginator ) && $_search_area->isEmpty()))): ?>
                        <div class="search-area border-b push">
                            <input type="hidden" id="_o" value="<?php echo (isset($_search_area_op) && ($_search_area_op !== '')?$_search_area_op:''); ?>">
                            <form action="<?php echo $_search_area_url; ?>" class="form-horizontal row" id="search-area">
                                <?php if(is_array($_search_area) || $_search_area instanceof \think\Collection || $_search_area instanceof \think\Paginator): $i = 0; $__LIST__ = $_search_area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;switch($vo[0]): case "text": ?>
                                <div class="col-md-<?php echo (isset($_search_area_layout[$vo['1']]) && ($_search_area_layout[$vo['1']] !== '')?$_search_area_layout[$vo['1']]:'3'); ?> col-xs-12 push">
                                    <div class="input-group">
                                        <span class="input-group-addon"><?php echo (isset($vo['2']) && ($vo['2'] !== '')?$vo['2']:''); ?></span>
                                        <input class="form-control" type="<?php echo (isset($vo['0']) && ($vo['0'] !== '')?$vo['0']:'text'); ?>" id="search_<?php echo (isset($vo['1']) && ($vo['1'] !== '')?$vo['1']:''); ?>" name="<?php echo (isset($vo['1']) && ($vo['1'] !== '')?$vo['1']:''); ?>" value="<?php echo (isset($vo['4']) && ($vo['4'] !== '')?$vo['4']:''); ?>" placeholder="<?php echo (isset($vo['2']) && ($vo['2'] !== '')?$vo['2']:''); ?>">
                                    </div>
                                </div>
                                <?php break; case "select": ?>
                                <div class="col-md-<?php echo (isset($_search_area_layout[$vo['1']]) && ($_search_area_layout[$vo['1']] !== '')?$_search_area_layout[$vo['1']]:'3'); ?> col-xs-12 push">
                                    <div class="input-group">
                                        <span class="input-group-addon"><?php echo (isset($vo['2']) && ($vo['2'] !== '')?$vo['2']:''); ?></span>
                                        <select class="js-select2 form-control" id="search_<?php echo (isset($vo['1']) && ($vo['1'] !== '')?$vo['1']:''); ?>" name="<?php echo (isset($vo['1']) && ($vo['1'] !== '')?$vo['1']:''); ?>" data-width="resolve" data-allow-clear="true" data-placeholder="<?php echo (isset($vo['2']) && ($vo['2'] !== '')?$vo['2']:''); ?>">
                                            <option></option>
                                            <?php if(!(empty($vo['5']) || (($vo['5'] instanceof \think\Collection || $vo['5'] instanceof \think\Paginator ) && $vo['5']->isEmpty()))): if(is_array($vo['5']) || $vo['5'] instanceof \think\Collection || $vo['5'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['5'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $key; ?>" <?php if(((string)$vo['4'] == (string)$key)): ?>selected<?php endif; ?>><?php echo $v; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <?php break; case "daterange": ?>
                                <div class="col-md-<?php echo (isset($_search_area_layout[$vo['1']]) && ($_search_area_layout[$vo['1']] !== '')?$_search_area_layout[$vo['1']]:'3'); ?> col-xs-12 push">
                                    <div class="input-group">
                                        <span class="input-group-addon"><?php echo (isset($vo['2']) && ($vo['2'] !== '')?$vo['2']:''); ?></span>
                                        <input class="js-daterangepicker form-control" type="text" id="search_<?php echo (isset($vo['1']) && ($vo['1'] !== '')?$vo['1']:''); ?>" name="<?php echo (isset($vo['1']) && ($vo['1'] !== '')?$vo['1']:''); ?>" value="<?php echo (isset($vo['4']) && ($vo['4'] !== '')?$vo['4']:''); ?>" placeholder="<?php echo (isset($vo['2']) && ($vo['2'] !== '')?$vo['2']:''); ?>" <?php echo (isset($vo['5']) && ($vo['5'] !== '')?$vo['5']:""); ?>>
                                    </div>
                                </div>
                                <?php break; endswitch; endforeach; endif; else: echo "" ;endif; ?>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-search"></i> 搜索</button>
                                            <a href="<?php echo $_search_area_url; ?>" class="btn btn-sm btn-default" type="reset"><i class="fa fa-reply"></i> 重置</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php endif; ?>

                        
                        <?php echo (isset($extra_html_toolbar_top) && ($extra_html_toolbar_top !== '')?$extra_html_toolbar_top:''); ?>
                        <div class="row data-table-toolbar">
                            <div class="col-sm-12">
                                
                                <?php if(!(empty($search) || (($search instanceof \think\Collection || $search instanceof \think\Paginator ) && $search->isEmpty()))): ?>
                                <div class="pull-right search-bar">
                                    <input type="hidden" name="search_field" id="search-field" value="<?php echo input('param.search_field', '') == '' ? $search['field_all'] : input('param.search_field'); ?>">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" id="search-btn" data-toggle="dropdown" type="button" aria-expanded="false">
                                                不限 <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a tabindex="-1" href="javascript:void(0)" data-field="<?php echo $search['field_all']; ?>">不限</a>
                                                </li>
                                                <?php if(is_array($search['fields']) || $search['fields'] instanceof \think\Collection || $search['fields'] instanceof \think\Paginator): $i = 0; $__LIST__ = $search['fields'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;?>
                                                <li>
                                                    <a tabindex="-1" href="javascript:void(0)" data-field="<?php echo $key; ?>"><?php echo htmlspecialchars($field); ?></a>
                                                </li>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </ul>
                                        </div>
                                        <div <?php if(!empty($search_button)) echo  'class="input-group"'; ?>>
                                            <input type="text" class="form-control" value="<?php echo input('param.keyword', ''); ?>" data-url="<?php echo $search['url']; ?>" id="search-input" name="keyword" placeholder="<?php echo $search['placeholder']; ?>">
                                            <?php if(!empty($search_button)) echo  '<span class="input-group-btn"><button class="btn btn-default" id="search-submit-btn" type="button">'.($search_button === true ? "搜索" : $search_button).'</button></span>'; ?>
                                        </div>

                                    </div>
                                </div>
                                <?php endif; ?>

                                
                                <div class="toolbar-btn-action">
                                    <?php if((!empty($top_buttons))): if(is_array($top_buttons) || $top_buttons instanceof \think\Collection || $top_buttons instanceof \think\Paginator): $i = 0; $__LIST__ = $top_buttons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$button): $mod = ($i % 2 );++$i;?>
                                            <?php echo $button; endforeach; endif; else: echo "" ;endif; endif; if(!(empty($_select_list) || (($_select_list instanceof \think\Collection || $_select_list instanceof \think\Paginator ) && $_select_list->isEmpty()))): ?>
                                    <div class="form-inline" style="display: inline-block;">
                                        <?php if(is_array($_select_list) || $_select_list instanceof \think\Collection || $_select_list instanceof \think\Paginator): $i = 0; $__LIST__ = $_select_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                        <select class="js-select2 form-control select-change select-search" data-width="resolve" id="select-<?php echo $item['name']; ?>">
                                            <?php if(!(empty($item['title']) || (($item['title'] instanceof \think\Collection || $item['title'] instanceof \think\Paginator ) && $item['title']->isEmpty()))): ?>
                                            <option value="" data-url="<?php echo $item['default_url']; ?>"><?php echo (isset($item['title']) && ($item['title'] !== '')?$item['title']:''); ?></option>
                                            <?php endif; if(is_array($item['options']) || $item['options'] instanceof \think\Collection || $item['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $key; ?>" <?php if($item['current'] != '' && $item['current'] == $key){echo 'selected';} if(is_array($item['url'])): ?>
                                            data-url='<?php echo $item['url'][$key]; ?>'
                                            <?php endif; ?>
                                            ><?php echo $option; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                    <?php endif; if(!(empty($_filter_time) || (($_filter_time instanceof \think\Collection || $_filter_time instanceof \think\Paginator ) && $_filter_time->isEmpty()))): ?>
                                    <div class="form-inline time-filter">
                                        <div class="time-filter">
                                            <div class="input-daterange input-group" data-date-format="yyyy-mm-dd">
                                                <input class="form-control" type="text" id="_filter_time_from" name="_filter_time_from" value="<?php echo \think\Request::instance()->get('_filter_time_from')?\think\Request::instance()->get('_filter_time_from') : $_filter_time['date_start']; ?>" placeholder="<?php echo $_filter_time['tips_start']; ?>">
                                                <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                                <input class="form-control" type="text" id="_filter_time_to" name="_filter_time_to" value="<?php echo \think\Request::instance()->get('_filter_time_to')?\think\Request::instance()->get('_filter_time_to') : $_filter_time['date_end']; ?>" placeholder="<?php echo $_filter_time['tips_end']; ?>">
                                            </div>
                                            <input type="hidden" id="_filter_time" name="_filter_time" value="<?php echo $_filter_time['field']; ?>">
                                            <button type="button" id="btn-filter-time" class="btn btn-default">确定</button>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php echo (isset($extra_html_toolbar_bottom) && ($extra_html_toolbar_bottom !== '')?$extra_html_toolbar_bottom:''); ?>
                        <div class="builder-table-wrapper" id="builder-table-wrapper">
                            <div class="builder-table" id="builder-table">
                                <?php echo (isset($extra_html_table_top) && ($extra_html_table_top !== '')?$extra_html_table_top:''); ?>
                                <div class="builder-table-head" id="builder-table-head">
                                    <table class="table table-builder table-hover table-bordered table-striped js-table-checkable">
                                        <colgroup>
                                            <?php if((!$hide_checkbox)): ?>
                                            <col>
                                            <?php endif; if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                                            <col class="<?php echo (isset($column_hide[$column['name']]) && ($column_hide[$column['name']] !== '')?$column_hide[$column['name']]:''); ?>">
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </colgroup>
                                        <thead>
                                        <tr>
                                            <?php if((!$hide_checkbox)): ?>
                                            <th class="text-center">
                                                <label class="css-input css-checkbox css-checkbox-primary remove-margin-t remove-margin-b">
                                                    <input type="checkbox" id="check-all"><span></span>
                                                </label>
                                            </th>
                                            <?php endif; if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                                            <th class="column-<?php echo $column['name']; ?> <?php echo (isset($column_hide[$column['name']]) && ($column_hide[$column['name']] !== '')?$column_hide[$column['name']]:''); ?> <?php echo (isset($column['class']) && ($column['class'] !== '')?$column['class']:''); ?>">
                                                
                                                <?php echo htmlspecialchars((isset($column['title']) && ($column['title'] !== '')?$column['title']:'')); ?>
                                                <span>
                                                
                                                <?php if (isset($order_columns[$column['name']])):  
                                                        $_by = input('param._by') == 'asc' ? 'desc' : 'asc';
                                                        $_param = array_merge(input('get.'), ['_by' => $_by, '_order' => $order_columns[$column['name']]]);
                                                        if ($_param) {
                                                            $_get = [];
                                                            foreach ($_param as $key => $value) {
                                                                $_get[] = $key. '=' .$value;
                                                            }
                                                            $_get = '?'.implode('&', $_get);
                                                        }
                                                     ?>
                                                    <a href="<?php echo \think\Request::instance()->baseUrl(); ?><?php echo $_get; ?>" data-toggle="tooltip" data-original-title="排序">
                                                        <?php 
                                                            if (input('param._order') == $order_columns[$column['name']]) {
                                                                echo input('param._by') == 'asc' ? '<i class="fa fa-caret-up"></i>' : '<i class="fa fa-caret-down"></i>';
                                                            } else {
                                                                echo '<i class="fa fa-sort text-muted"></i>';
                                                            }
                                                         ?>
                                                    </a>
                                                <?php endif; if (isset($filter_columns[$column['name']])):  
                                                    if (!empty(request()->param('_field_display'))) {
                                                        $_field_display = request()->param('_field_display');
                                                    }
                                                 ?>
                                                <a href="javascript:void(0);" class="field-filter" data-filter="<?php echo $filter_columns[$column['name']]['filter']; ?>" data-list="<?php echo $filter_columns[$column['name']]['list']; ?>" data-type="<?php echo $filter_columns[$column['name']]['type']; ?>" data-options='<?php echo (isset($filter_columns[$column["name"]]["options"]) && ($filter_columns[$column["name"]]["options"] !== '')?$filter_columns[$column["name"]]["options"]:""); ?>' data-map='<?php echo (isset($filter_columns[$column["name"]]["map"]) && ($filter_columns[$column["name"]]["map"] !== '')?$filter_columns[$column["name"]]["map"]:""); ?>' data-field-display="<?php echo $column['name']; ?>" data-field="<?php echo $filter_columns[$column['name']]['field']; ?>" data-table="<?php echo $filter_columns[$column['name']]['table']; ?>" data-toggle="tooltip" data-original-title="筛选"><i class="fa fa-filter <?php if(!in_array(($column['name']), is_array($_field_display)?$_field_display:explode(',',$_field_display))): ?>text-muted<?php endif; ?>"></i></a>
                                                <?php endif; ?>
                                                </span>
                                            </th>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="builder-table-body" id="builder-table-body">
                                    <table class="table table-builder table-hover table-bordered table-striped js-table-checkable-target" id="builder-table-main">
                                        <colgroup>
                                            <?php if((!$hide_checkbox)): ?>
                                            <col width="50">
                                            <?php endif; if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                                            <col width="<?php echo (isset($column_width[$column['name']]) && ($column_width[$column['name']] !== '')?$column_width[$column['name']]:'100'); ?>" class="<?php echo (isset($column_hide[$column['name']]) && ($column_hide[$column['name']] !== '')?$column_hide[$column['name']]:''); ?>">
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </colgroup>
                                        <tbody>
                                            <?php if(is_array($row_list) || $row_list instanceof \think\Collection || $row_list instanceof \think\Paginator): $i = 0; $__LIST__ = $row_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>
                                            <tr class="<?php echo (isset($row['_tr_class']) && ($row['_tr_class'] !== '')?$row['_tr_class']:''); ?>">
                                                <?php if((!$hide_checkbox)): ?>
                                                <td class="text-center">
                                                    <div class="table-cell">
                                                        <label class="css-input css-checkbox css-checkbox-primary">
                                                            <input class="ids" type="checkbox" name="ids[]" value="<?php echo (isset($row['_primary_key_value']) && ($row['_primary_key_value'] !== '')?$row['_primary_key_value']:''); ?>"><span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <?php endif; if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                                                <td class="<?php echo (isset($column['class']) && ($column['class'] !== '')?$column['class']:''); ?> <?php echo (isset($column_hide[$column['name']]) && ($column_hide[$column['name']] !== '')?$column_hide[$column['name']]:''); ?>">
                                                    <div class="table-cell">
                                                    <?php if(is_array($column['type']) || $column['type'] == '' || $column['type'] == 'btn' || $column['type'] == 'text'): ?>
                                                    <?php echo (isset($row[$column['name']]) && ($row[$column['name']] !== '')?$row[$column['name']]:''); else: ?>
                                                    <?php echo (isset($row[$column['name'].'__'.$column['type']]) && ($row[$column['name'].'__'.$column['type']] !== '')?$row[$column['name'].'__'.$column['type']]:''); endif; ?>
                                                    </div>
                                                </td>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </tr>
                                            <?php endforeach; endif; else: echo "" ;endif; if(empty($row_list) || (($row_list instanceof \think\Collection || $row_list instanceof \think\Paginator ) && $row_list->isEmpty())): if(!(empty($empty_tips) || (($empty_tips instanceof \think\Collection || $empty_tips instanceof \think\Paginator ) && $empty_tips->isEmpty()))): ?>
                                            <tr class="table-empty">
                                                <?php $colspan = count($columns)+1 ?>
                                                <td class="text-center empty-info" colspan="<?php echo $colspan; ?>">
                                                    <i class="fa fa-database"></i> <?php echo $empty_tips; ?><br>
                                                </td>
                                            </tr>
                                            <?php endif; endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php if($fixed_left_column > '0'): ?>
                                <div class="builder-table-left" id="builder-table-left">
                                    <div class="builder-table-left-head" id="builder-table-left-head">
                                        <table class="table table-builder table-hover table-bordered table-striped js-table-checkable-left">
                                            <colgroup>
                                                <?php if((!$hide_checkbox)): ?>
                                                <col>
                                                <?php endif; if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                                                <col class="<?php echo (isset($column_hide[$column['name']]) && ($column_hide[$column['name']] !== '')?$column_hide[$column['name']]:''); ?>">
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </colgroup>
                                            <thead>
                                                <tr id="builder-table-left-first-tr">
                                                    <?php if((!$hide_checkbox)): ?>
                                                    <th class="text-center">
                                                        <label class="css-input css-checkbox css-checkbox-primary remove-margin-t remove-margin-b">
                                                            <input type="checkbox"><span></span>
                                                        </label>
                                                    </th>
                                                    <?php endif; if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                                                    <th class="column-<?php echo $column['name']; ?> <?php echo (isset($column_hide[$column['name']]) && ($column_hide[$column['name']] !== '')?$column_hide[$column['name']]:''); ?> <?php echo (isset($column['class']) && ($column['class'] !== '')?$column['class']:''); ?>" <?php if($i > $fixed_left_column): ?>style="visibility:hidden"<?php endif; ?>>
                                                    
                                                    <?php echo htmlspecialchars((isset($column['title']) && ($column['title'] !== '')?$column['title']:'')); ?>
                                                    <span>
                                                    
                                                    <?php if (isset($order_columns[$column['name']])):  
                                                            $_by = input('param._by') == 'asc' ? 'desc' : 'asc';
                                                            $_param = array_merge(input('get.'), ['_by' => $_by, '_order' => $order_columns[$column['name']]]);
                                                            if ($_param) {
                                                                $_get = [];
                                                                foreach ($_param as $key => $value) {
                                                                    $_get[] = $key. '=' .$value;
                                                                }
                                                                $_get = '?'.implode('&', $_get);
                                                            }
                                                         ?>
                                                        <a href="<?php echo \think\Request::instance()->baseUrl(); ?><?php echo $_get; ?>" data-toggle="tooltip" data-original-title="排序">
                                                            <?php 
                                                                if (input('param._order') == $order_columns[$column['name']]) {
                                                                    echo input('param._by') == 'asc' ? '<i class="fa fa-caret-up"></i>' : '<i class="fa fa-caret-down"></i>';
                                                                } else {
                                                                    echo '<i class="fa fa-sort text-muted"></i>';
                                                                }
                                                             ?>
                                                        </a>
                                                    <?php endif; if (isset($filter_columns[$column['name']])):  
                                                        if (!empty(request()->param('_field_display'))) {
                                                            $_field_display = request()->param('_field_display');
                                                        }
                                                     ?>
                                                    <a href="javascript:void(0);" class="field-filter" data-filter="<?php echo $filter_columns[$column['name']]['filter']; ?>" data-list="<?php echo $filter_columns[$column['name']]['list']; ?>" data-type="<?php echo $filter_columns[$column['name']]['type']; ?>" data-options='<?php echo (isset($filter_columns[$column["name"]]["options"]) && ($filter_columns[$column["name"]]["options"] !== '')?$filter_columns[$column["name"]]["options"]:""); ?>' data-map='<?php echo (isset($filter_columns[$column["name"]]["map"]) && ($filter_columns[$column["name"]]["map"] !== '')?$filter_columns[$column["name"]]["map"]:""); ?>' data-field-display="<?php echo $column['name']; ?>" data-field="<?php echo $filter_columns[$column['name']]['field']; ?>" data-table="<?php echo $filter_columns[$column['name']]['table']; ?>" data-toggle="tooltip" data-original-title="筛选"><i class="fa fa-filter <?php if(!in_array(($column['name']), is_array($_field_display)?$_field_display:explode(',',$_field_display))): ?>text-muted<?php endif; ?>"></i></a>
                                                    <?php endif; ?>
                                                    </span>
                                                    </th>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="builder-table-left-body" id="builder-table-left-body">
                                        <table class="table table-builder table-hover table-bordered table-striped js-table-checkable-target-left">
                                            <colgroup>
                                                <?php if((!$hide_checkbox)): ?>
                                                <col>
                                                <?php endif; if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                                                <col class="<?php echo (isset($column_hide[$column['name']]) && ($column_hide[$column['name']] !== '')?$column_hide[$column['name']]:''); ?>">
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </colgroup>
                                            <tbody>
                                            <?php if(is_array($row_list) || $row_list instanceof \think\Collection || $row_list instanceof \think\Paginator): $i = 0; $__LIST__ = $row_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>
                                            <tr class="<?php echo (isset($row['_tr_class']) && ($row['_tr_class'] !== '')?$row['_tr_class']:''); ?>">
                                                <?php if((!$hide_checkbox)): ?>
                                                <td class="text-center" style="width: 70px;">
                                                    <label class="css-input css-checkbox css-checkbox-primary">
                                                        <input class="ids" type="checkbox" name="ids[]" value="<?php echo (isset($row['_primary_key_value']) && ($row['_primary_key_value'] !== '')?$row['_primary_key_value']:''); ?>"><span></span>
                                                    </label>
                                                </td>
                                                <?php endif; if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                                                <td class="<?php echo (isset($column['class']) && ($column['class'] !== '')?$column['class']:''); ?> <?php echo (isset($column_hide[$column['name']]) && ($column_hide[$column['name']] !== '')?$column_hide[$column['name']]:''); ?>">
                                                    <?php if(is_array($column['type']) || $column['type'] == '' || $column['type'] == 'btn' || $column['type'] == 'text'): ?>
                                                    <?php echo (isset($row[$column['name']]) && ($row[$column['name']] !== '')?$row[$column['name']]:''); else: ?>
                                                    <?php echo (isset($row[$column['name'].'__'.$column['type']]) && ($row[$column['name'].'__'.$column['type']] !== '')?$row[$column['name'].'__'.$column['type']]:''); endif; ?>
                                                </td>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </tr>
                                            <?php endforeach; endif; else: echo "" ;endif; if(empty($row_list) || (($row_list instanceof \think\Collection || $row_list instanceof \think\Paginator ) && $row_list->isEmpty())): if(!(empty($empty_tips) || (($empty_tips instanceof \think\Collection || $empty_tips instanceof \think\Paginator ) && $empty_tips->isEmpty()))): ?>
                                            <tr class="table-empty">
                                                <?php $colspan = count($columns)+1 ?>
                                                <td class="text-center empty-info" colspan="<?php echo $colspan; ?>">
                                                    <i class="fa fa-database"></i> <?php echo $empty_tips; ?><br>
                                                </td>
                                            </tr>
                                            <?php endif; endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php endif; if($fixed_right_column > '0'): ?>
                                <div class="builder-table-right" id="builder-table-right">
                                    <div class="builder-table-right-head" id="builder-table-right-head">
                                        <table class="table table-builder table-hover table-bordered table-striped js-table-checkable-target">
                                            <colgroup>
                                                <?php if((!$hide_checkbox)): ?>
                                                <col>
                                                <?php endif; if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                                                <col class="<?php echo (isset($column_hide[$column['name']]) && ($column_hide[$column['name']] !== '')?$column_hide[$column['name']]:''); ?>">
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <?php if((!$hide_checkbox)): ?>
                                                    <th class="text-center">
                                                        <label class="css-input css-checkbox css-checkbox-primary remove-margin-t remove-margin-b">
                                                            <input type="checkbox"><span></span>
                                                        </label>
                                                    </th>
                                                    <?php endif; if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                                                    <th class="column-<?php echo $column['name']; ?> <?php echo (isset($column_hide[$column['name']]) && ($column_hide[$column['name']] !== '')?$column_hide[$column['name']]:''); ?> <?php echo (isset($column['class']) && ($column['class'] !== '')?$column['class']:''); ?>">
                                                        
                                                        <?php echo htmlspecialchars((isset($column['title']) && ($column['title'] !== '')?$column['title']:'')); ?>
                                                        <span>
                                                        
                                                        <?php if (isset($order_columns[$column['name']])):  
                                                                $_by = input('param._by') == 'asc' ? 'desc' : 'asc';
                                                                $_param = array_merge(input('get.'), ['_by' => $_by, '_order' => $order_columns[$column['name']]]);
                                                                if ($_param) {
                                                                    $_get = [];
                                                                    foreach ($_param as $key => $value) {
                                                                        $_get[] = $key. '=' .$value;
                                                                    }
                                                                    $_get = '?'.implode('&', $_get);
                                                                }
                                                             ?>
                                                            <a href="<?php echo \think\Request::instance()->baseUrl(); ?><?php echo $_get; ?>" data-toggle="tooltip" data-original-title="排序">
                                                                <?php 
                                                                    if (input('param._order') == $order_columns[$column['name']]) {
                                                                        echo input('param._by') == 'asc' ? '<i class="fa fa-caret-up"></i>' : '<i class="fa fa-caret-down"></i>';
                                                                    } else {
                                                                        echo '<i class="fa fa-sort text-muted"></i>';
                                                                    }
                                                                 ?>
                                                            </a>
                                                        <?php endif; if (isset($filter_columns[$column['name']])):  
                                                            if (!empty(request()->param('_field_display'))) {
                                                                $_field_display = request()->param('_field_display');
                                                            }
                                                         ?>
                                                        <a href="javascript:void(0);" class="field-filter" data-filter="<?php echo $filter_columns[$column['name']]['filter']; ?>" data-list="<?php echo $filter_columns[$column['name']]['list']; ?>" data-type="<?php echo $filter_columns[$column['name']]['type']; ?>" data-options='<?php echo (isset($filter_columns[$column["name"]]["options"]) && ($filter_columns[$column["name"]]["options"] !== '')?$filter_columns[$column["name"]]["options"]:""); ?>' data-map='<?php echo (isset($filter_columns[$column["name"]]["map"]) && ($filter_columns[$column["name"]]["map"] !== '')?$filter_columns[$column["name"]]["map"]:""); ?>' data-field-display="<?php echo $column['name']; ?>" data-field="<?php echo $filter_columns[$column['name']]['field']; ?>" data-table="<?php echo $filter_columns[$column['name']]['table']; ?>" data-toggle="tooltip" data-original-title="筛选"><i class="fa fa-filter <?php if(!in_array(($column['name']), is_array($_field_display)?$_field_display:explode(',',$_field_display))): ?>text-muted<?php endif; ?>"></i></a>
                                                        <?php endif; ?>
                                                        </span>
                                                    </th>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="builder-table-right-body" id="builder-table-right-body">
                                        <div class="builder-table-right-body-inner" id="builder-table-right-body-inner">
                                            <table class="table table-builder table-hover table-bordered table-striped">
                                                <colgroup>
                                                    <?php if((!$hide_checkbox)): ?>
                                                    <col>
                                                    <?php endif; if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                                                    <col class="<?php echo (isset($column_hide[$column['name']]) && ($column_hide[$column['name']] !== '')?$column_hide[$column['name']]:''); ?>">
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </colgroup>
                                                <tbody>
                                                    <?php if(is_array($row_list) || $row_list instanceof \think\Collection || $row_list instanceof \think\Paginator): $i = 0; $__LIST__ = $row_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>
                                                    <tr class="<?php echo (isset($row['_tr_class']) && ($row['_tr_class'] !== '')?$row['_tr_class']:''); ?>">
                                                        <?php if((!$hide_checkbox)): ?>
                                                        <td class="text-center" style="width: 70px;">
                                                            <label class="css-input css-checkbox css-checkbox-primary">
                                                                <input class="ids" type="checkbox"><span></span>
                                                            </label>
                                                        </td>
                                                        <?php endif; if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                                                        <td class="<?php echo (isset($column['class']) && ($column['class'] !== '')?$column['class']:''); ?> <?php echo (isset($column_hide[$column['name']]) && ($column_hide[$column['name']] !== '')?$column_hide[$column['name']]:''); ?>">
                                                            <?php if(is_array($column['type']) || $column['type'] == '' || $column['type'] == 'btn' || $column['type'] == 'text'): ?>
                                                            <?php echo (isset($row[$column['name']]) && ($row[$column['name']] !== '')?$row[$column['name']]:''); else: ?>
                                                            <?php echo (isset($row[$column['name'].'__'.$column['type']]) && ($row[$column['name'].'__'.$column['type']] !== '')?$row[$column['name'].'__'.$column['type']]:''); endif; ?>
                                                        </td>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </tr>
                                                    <?php endforeach; endif; else: echo "" ;endif; if(empty($row_list) || (($row_list instanceof \think\Collection || $row_list instanceof \think\Paginator ) && $row_list->isEmpty())): if(!(empty($empty_tips) || (($empty_tips instanceof \think\Collection || $empty_tips instanceof \think\Paginator ) && $empty_tips->isEmpty()))): ?>
                                                    <tr class="table-empty">
                                                        <?php $colspan = count($columns)+1 ?>
                                                        <td class="text-center empty-info" colspan="<?php echo $colspan; ?>">
                                                            <i class="fa fa-database"></i> <?php echo $empty_tips; ?><br>
                                                        </td>
                                                    </tr>
                                                    <?php endif; endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="builder-table-right-header"></div>
                                <?php endif; ?>
                                <?php echo (isset($extra_html_table_bottom) && ($extra_html_table_bottom !== '')?$extra_html_table_bottom:''); ?>
                            </div>
                        </div>
                        <div class="data-table-toolbar">
                            <div class="row">
                                <div class="col-sm-12">
                                    
                                    <?php if(!(empty($pages) || (($pages instanceof \think\Collection || $pages instanceof \think\Paginator ) && $pages->isEmpty()))): ?>
                                        <?php echo $pages; endif; if(!(empty($_page_info) || (($_page_info instanceof \think\Collection || $_page_info instanceof \think\Paginator ) && $_page_info->isEmpty()))): ?>
                                    <div class="pagination-info pull-right">
                                        <div>
                                            <input type="text" class="form-control input-sm go-page" id="go-page" name="page" value="<?php echo input('param.page', '1'); ?>">
                                            <input type="text" class="form-control input-sm nums" id="list-rows" name="list_rows" value="<?php echo input('param.list_rows', '') == '' ? $_page_info->listRows() : input('param.list_rows'); ?>">
                                            / <strong><?php echo $_page_info->lastPage(); ?></strong> 页，共 <strong><?php echo $_page_info->total(); ?></strong> 条数据，每页显示数量
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <?php if(empty($_pop) || (($_pop instanceof \think\Collection || $_pop instanceof \think\Paginator ) && $_pop->isEmpty())): ?>
    <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
        <div class="pull-right">
            Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="<?php echo config('dolphin.company_website'); ?>" target="_blank"><?php echo config('dolphin.company_name'); ?></a>
        </div>
        <div class="pull-left">
            <a class="font-w600" href="<?php echo config('dolphin.product_website'); ?>" target="_blank"><?php echo config('dolphin.product_name'); ?> <?php echo config('dolphin.product_version'); ?></a> &copy; <span class="js-year-copy"></span>
        </div>
    </footer>
    <?php endif; ?>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Apps Modal -->
<!-- Opens from the button in the header -->
<div class="modal fade" id="apps-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top">
        <div class="modal-content">
            <!-- Apps Block -->
            <div class="block block-themed block-transparent">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">所有模块</h3>
                </div>
                <div class="block-content">
                    <div class="row text-center">
                        <?php if(!(empty($_top_menus_all) || (($_top_menus_all instanceof \think\Collection || $_top_menus_all instanceof \think\Paginator ) && $_top_menus_all->isEmpty()))): if(is_array($_top_menus_all) || $_top_menus_all instanceof \think\Collection || $_top_menus_all instanceof \think\Paginator): $i = 0; $__LIST__ = $_top_menus_all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
                        <div class="col-xs-6 col-sm-3">
                            <?php if(in_array(($menu['url_type']), explode(',',"module_admin,module_home"))): ?>
                            <a class="block block-rounded top-menu" href="javascript:void(0);" data-module-id="<?php echo $menu['id']; ?>" data-module="<?php echo $menu['module']; ?>" data-controller="<?php echo $menu['controller']; ?>" target="<?php echo $menu['url_target']; ?>">
                                <div class="block-content text-white <?php echo $menu['id']==$_location[0]['id']?'bg-primary' : 'bg-primary-dark'; ?>">
                                    <i class="<?php echo $menu['icon']; ?> fa-2x"></i>
                                    <div class="font-w600 push-15-t push-15"><?php echo $menu['title']; ?></div>
                                </div>
                            </a>
                            <?php else: ?>
                            <a class="block block-rounded" href="<?php echo $menu['url_value']; ?>" target="<?php echo $menu['url_target']; ?>">
                                <div class="block-content text-white <?php echo $menu['id']==$_location[0]['id']?'bg-primary' : 'bg-primary-dark'; ?>">
                                    <i class="<?php echo $menu['icon']; ?> fa-2x"></i>
                                    <div class="font-w600 push-15-t push-15"><?php echo $menu['title']; ?></div>
                                </div>
                            </a>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </div>
                </div>
            </div>
            <!-- END Apps Block -->
        </div>
    </div>
</div>
<!-- END Apps Modal -->
<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<?php if(\think\Config::get('minify_status') == '1'): ?>
<script src="<?php echo minify('group', 'core_js,libs_js'); ?>"></script>
<?php else: ?>
<script src="/static/admin/js/core/jquery.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/core/bootstrap.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/core/jquery.slimscroll.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/core/jquery.scrollLock.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/core/jquery.appear.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/core/jquery.countTo.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/core/jquery.placeholder.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/core/js.cookie.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/libs/magnific-popup/magnific-popup.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/app.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/dolphin.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/builder/form.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/builder/aside.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/builder/table.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/libs/bootstrap-notify/bootstrap-notify.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/libs/sweetalert/sweetalert.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/libs/js-xss/xss.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/libs/viewer/viewer.min.js?v=<?php echo config('asset_version'); ?>"></script>
<?php endif; ?>

<!-- Page JS Plugins -->
<script src="/static/libs/layer/layer.js?v=<?php echo config('asset_version'); ?>"></script>
<?php if(!(empty($_js_files) || (($_js_files instanceof \think\Collection || $_js_files instanceof \think\Paginator ) && $_js_files->isEmpty()))): if(\think\Config::get('minify_status') == '1'): ?>
        <script src="<?php echo minify('group', $_js_files); ?>"></script>
    <?php else: if(is_array($_js_files) || $_js_files instanceof \think\Collection || $_js_files instanceof \think\Paginator): $i = 0; $__LIST__ = $_js_files;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$js): $mod = ($i % 2 );++$i;?>
        <?php echo load_assets($js, 'js'); endforeach; endif; else: echo "" ;endif; endif; endif; ?>

<script>
    jQuery(function () {
        App.initHelpers(['appear', 'slimscroll', 'magnific-popup', 'table-tools']);
        <?php if(!(empty($_js_init) || (($_js_init instanceof \think\Collection || $_js_init instanceof \think\Paginator ) && $_js_init->isEmpty()))): ?>
        App.initHelpers(<?php echo $_js_init; ?>);
        <?php endif; ?>
    });
</script>

<!--页面js-->

    <script>
        var init_table = function() {
            var left_column = '<?php echo $fixed_left_column; ?>';
            var right_column = '<?php echo $fixed_right_column; ?>';
            var left_width = 0;
            var right_width = 0;
            var table_main = $('#builder-table-main');
            var table_head = $('#builder-table-head').find('table');
            var table_left_head = $('#builder-table-left-head').find('table');
            var table_left_body = $('#builder-table-left-body').find('table');
            var table_right_head = $('#builder-table-right-head').find('table');
            var table_right_body = $('#builder-table-right-body').find('table');
            var table_head_tr_td = table_main.find('tr:first-child td');
            var table_body = $('#builder-table-body');
            var table_body_col  = table_body.find('col');
            var table_body_first_tr_th_len = table_body_col.length;
            var right_column_start = table_body_first_tr_th_len - right_column;

            table_head.width(table_main.width());
            table_left_head.width(table_main.width());
            table_left_body.width(table_main.width());
            table_right_head.width(table_main.width());
            table_right_body.width(table_main.width());

            // 设置表头列宽度
            $.each(table_head_tr_td, function (i, e) {
                if (i < left_column) {
                    left_width += $(this).outerWidth();
                }
                if (i >= right_column_start) {
                    right_width += $(this).outerWidth();
                }
            });

            /*设置左边固定列*/
            $('#builder-table-left').width(left_width);
            /*设置右侧固定列*/
            $('#builder-table-right').width(right_width);
        };
        jQuery(window).on('resize load', function () {
            init_table();
        });

        $(document).ready(function () {
            var builder_table_head = $('#builder-table-head');
            var builder_table_left_body = $('#builder-table-left-body');
            var builder_table_right_body = $('#builder-table-right-body');
            var table_main = $('#builder-table-main');
            var table_body = $('#builder-table-body');
            var table_right = $('#builder-table-right');
            var table_head_col  = builder_table_head.find('col');
            var table_body_col  = table_body.find('col');
            var table_left_head_col  = $('#builder-table-left-head').find('col');
            var table_right_head_col = $('#builder-table-right-head').find('col');
            var table_left_body_col = builder_table_left_body.find('col');
            var table_right_body_col = builder_table_right_body.find('col');

            <?php switch($builder_height): case "fixed": ?>
            $('#builder-table-wrapper').css('max-height', ($(window).height() - 380)+'px');
            <?php break; case "auto": break; default: ?>
            $('#builder-table-wrapper').css('height', '<?php echo $builder_height; ?>px');
            <?php endswitch; ?>

            table_body.css('max-height', $('#builder-table-wrapper').outerHeight() - 50);

            $.each(table_body_col, function (i, e) {
                var width = $(this).attr('width');
                table_head_col.eq(i).attr('width', width);
                table_left_head_col.eq(i).attr('width', width);
                table_left_body_col.eq(i).attr('width', width);
                table_right_head_col.eq(i).attr('width', width);
                table_right_body_col.eq(i).attr('width', width);
            });

            /* 监听滚动事件 */
            table_body.on( 'scroll', function (e) {
                builder_table_head.scrollLeft(this.scrollLeft);
                builder_table_left_body.scrollTop(this.scrollTop);
                builder_table_right_body.scrollTop(this.scrollTop);
            });

            if ($(window).width() > 768 && ($('#builder-table-main tbody').height() > table_body.height())) {
                $('#builder-table-head').css('margin-right', '17px');
                $('#builder-table-right').css('right', '17px');
            } else {
                $('.builder-table-right-header').hide();
                $('#builder-table-left,#builder-table-right').hide();
            }

            if (table_body.width() < $('#builder-table-main').width()) {
                builder_table_left_body.height(table_body.height() - 17);
                builder_table_right_body.height(table_body.height() - 17);
                table_right.height(table_body.height() + 33);
            } else {
                builder_table_left_body.height(table_body.height());
                builder_table_right_body.height(table_body.height());
                table_right.height(table_body.height() + 50);
            }

            /*行高亮*/
            var table_main_tr = table_main.find('tbody tr');
            var table_left_tr = builder_table_left_body.find('tbody tr');
            var table_right_tr = builder_table_right_body.find('tbody tr');
            table_main_tr.hover(function () {
                table_left_tr.eq($(this).index()).addClass('hover');
                table_right_tr.eq($(this).index()).addClass('hover');
            }, function () {
                table_left_tr.eq($(this).index()).removeClass('hover');
                table_right_tr.eq($(this).index()).removeClass('hover');
            });
            table_left_tr.hover(function () {
                table_main_tr.eq($(this).index()).addClass('hover');
                table_right_tr.eq($(this).index()).addClass('hover');
            }, function () {
                table_main_tr.eq($(this).index()).removeClass('hover');
                table_right_tr.eq($(this).index()).removeClass('hover');
            });
            table_right_tr.hover(function () {
                table_main_tr.eq($(this).index()).addClass('hover');
                table_left_tr.eq($(this).index()).addClass('hover');
            }, function () {
                table_main_tr.eq($(this).index()).removeClass('hover');
                table_left_tr.eq($(this).index()).removeClass('hover');
            });
        });
    </script>
    <?php if(is_array($js_list) || $js_list instanceof \think\Collection || $js_list instanceof \think\Paginator): $i = 0; $__LIST__ = $js_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <script src="<?php echo $vo; ?>?v=<?php echo config('asset_version'); ?>"></script>
    <?php endforeach; endif; else: echo "" ;endif; ?>

    
    <?php echo (isset($extra_js) && ($extra_js !== '')?$extra_js:''); ?>


<!--插件js钩子-->
<?php echo hook('page_plugin_js'); ?>


<?php echo (isset($extra_html) && ($extra_html !== '')?$extra_html:''); ?>
</body>
</html>