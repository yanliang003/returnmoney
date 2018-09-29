<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"D:\wwwroot\qiandao.com\plugins/SystemInfo/view/widget.html";i:1489042526;}*/ ?>
<div class="col-md-<?php echo (isset($width) && ($width !== '')?$width:6); ?>">
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">系统信息</h3>
        </div>
        <div class="block-content">
            <table class="table">
                <tbody>
                <tr>
                    <td>商业授权版本</td>
                    <td id="product-auth"><a class="label label-danger" href="http://www.dolphinphp.com/pricing" target="_blank">未授权</a></td>
                </tr>
                <tr>
                    <td>DolphinPHP版本</td>
                    <td id="product-update"><?php echo config('dolphin.product_version'); ?></td>
                </tr>
                <tr>
                    <td>ThinkPHP版本</td>
                    <td><?php echo THINK_VERSION; ?></td>
                </tr>
                <tr>
                    <td>服务器操作系统</td>
                    <td><?php echo PHP_OS; ?></td>
                </tr>
                <tr>
                    <td>运行环境</td>
                    <td><?php echo \think\Request::instance()->server('SERVER_SOFTWARE'); ?></td>
                </tr>
                <tr>
                    <td>MYSQL版本</td>
                    <td><?php echo db()->query('select version() as version')[0]['version']; ?></td>
                </tr>
                <tr>
                    <td>PHP版本</td>
                    <td><?php echo PHP_VERSION; ?></td>
                </tr>
                <tr>
                    <td>上传限制</td>
                    <td><?php echo ini_get('upload_max_filesize'); ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>