<?php

namespace app\signin\home;

//use app\common\builder\ZBuilder;

use app\common\controller\Common;
use app\user\model\Role as RoleModel;
class Base extends Common
{
		
		protected function _initialize()
		{
			parent::_initialize();
			// 是否拒绝ie浏览器访问
			if (config('system.deny_ie') && get_browser_type() == 'ie') {
				$this->redirect('admin/ie/index');
			}

			// 判断是否登录，并定义用户ID常量
			defined('UID') or define('UID', $this->isLogin());

			// 设置当前角色菜单节点权限
			role_auth();

			// 检查权限
			if (!RoleModel::checkAuth()) $this->error('权限不足！');

			// 设置分页参数
			$this->setPageParam();

			// 如果不是ajax请求，则读取菜单
			if (!$this->request->isAjax()) {
				// 读取顶部菜单
				$this->assign('_top_menus', MenuModel::getTopMenu(config('top_menu_max'), '_top_menus'));
				// 读取全部顶级菜单
				$this->assign('_top_menus_all', MenuModel::getTopMenu('', '_top_menus_all'));
				// 获取侧边栏菜单
				$this->assign('_sidebar_menus', MenuModel::getSidebarMenu());
				// 获取面包屑导航
				$this->assign('_location', MenuModel::getLocation('', true));
				// 获取当前用户未读消息数量
				$this->assign('_message', MessageModel::getMessageCount());
				// 获取自定义图标
				$this->assign('_icons', IconModel::getUrls());
				// 构建侧栏
				$data = [
					'table'      => 'admin_config', // 表名或模型名
					'prefix'     => 1,
					'module'     => 'admin',
					'controller' => 'system',
					'action'     => 'quickedit',
				];
				$table_token = substr(sha1('_aside'), 0, 8);
				session($table_token, $data);
				$settings = [
					[
						'title'   => '站点开关',
						'tips'    => '站点关闭后将不能访问',
						'checked' => Db::name('admin_config')->where('id', 1)->value('value'),
						'table'   => $table_token,
						'id'      => 1,
						'field'   => 'value'
					]
				];
				ZBuilder::make('aside')
					->addBlock('switch', '系统设置', $settings);
			}
		}
		final protected function setPageParam()
		{
			_system_check();
			$list_rows = input('?param.list_rows') ? input('param.list_rows') : config('list_rows');
			config('paginate.list_rows', $list_rows);
			config('paginate.query', input('get.'));
		}
		final protected function isLogin()
		{
			// 判断是否登录
			if ($uid = is_signin()) {
				// 已登录
				return $uid;
			} else {
				// 未登录
				$this->redirect('user/publics/signin');
			}
		}
}