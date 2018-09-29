<?php

//namespace app\signin\admin;

namespace app\signin\admin;

use app\admin\controller\Admin;
//use app\signin\home\Base;
use think\Db;
use app\common\builder\ZBuilder;

class User extends Admin
{
	protected $db;
	protected $user;
	public function _initialize(){
		parent::_initialize();
	
		$this->db = Db::connect(config('database'));
		$this->user = $this->db->name("user");
	}
    public function index()
    {	
			$user = $this->user;
		 // 查询
			$map = $this->getMap();
			// 排序
			$order = $this->getOrder('create_time desc');
			$data_list = $user->where($map)->order($order)->paginate();
	        return ZBuilder::make('table')
            ->setSearch(['mobile' => '序号','mobile' => '电话','username' => '姓名','channel' => '途径','ticket' => '票号','create_time' => '入库时间']) // 设置搜索框
            ->addColumns([ // 批量添加数据列
                ['id', '序号'],
                ['mobile', '电话'],
                ['username', '姓名'],
				['channel', '途径'],
				['ticket', '票号'],
                ['create_time', '入库时间'],
                ['right_button', '操作', 'btn']
            ])
            //->addTopButtons('add,enable,disable,delete') // 批量添加顶部按钮
            //->addTopButton('custom', $btnType) // 添加顶部按钮
            //->addRightButtons(['edit', 'delete' => ['data-tips' => '删除后无法恢复。']]) // 批量添加右侧按钮
            //->addOrder('id,name,typeid,timeset,ad_type,create_time,update_time')
            ->setRowList($data_list) // 设置表格数据
            //->addValidate('Advert', 'name')
            ->fetch(); // 渲染模板		

    }

    public function add()
    {
        // 保存数据
        if ($this->request->isPost()) {
            // 表单数据
            $data = $this->request->post();

            // 验证
            $result = $this->validate($data, 'AdvertType');
            if(true !== $result) $this->error($result);

            if ($type = AdvertTypeModel::create($data)) {
                // 记录行为
                action_log('advert_type_add', 'cms_advert_type', $type['id'], UID, $data['name']);
                $this->success('新增成功', 'index');
            } else {
                $this->error('新增失败');
            }
        }

        // 显示添加页面
        return ZBuilder::make('form')
            ->setPageTips('如果出现无法添加的情况，可能由于浏览器将本页面当成了广告，请尝试关闭浏览器的广告过滤功能再试。', 'warning')
            ->addFormItems([
                ['text', 'name', '分类名称'],
                ['radio', 'status', '立即启用', '', ['否', '是'], 1]
            ])
            ->fetch();
    }


    public function edit($id = null)
    {
        if ($id === null) $this->error('缺少参数');

        // 保存数据
        if ($this->request->isPost()) {
            // 表单数据
            $data = $this->request->post();

            // 验证
            $result = $this->validate($data, 'AdvertType');
            if(true !== $result) $this->error($result);

            if (AdvertTypeModel::update($data)) {
                // 记录行为
                action_log('advert_type_edit', 'cms_advert_type', $id, UID, $data['name']);
                $this->success('编辑成功', 'index');
            } else {
                $this->error('编辑失败');
            }
        }

        $info = AdvertTypeModel::get($id);

        // 显示编辑页面
        return ZBuilder::make('form')
            ->setPageTips('如果出现无法编辑的情况，可能由于浏览器将本页面当成了广告，请尝试关闭浏览器的广告过滤功能再试。', 'warning')
            ->addFormItems([
                ['hidden', 'id'],
                ['text', 'name', '分类名称'],
                ['radio', 'status', '立即启用', '', ['否', '是']]
            ])
            ->setFormdata($info)
            ->fetch();
    }


    public function delete($record = [])
    {
        return $this->setStatus('delete');
    }


    public function enable($record = [])
    {
        return $this->setStatus('enable');
    }


    public function disable($record = [])
    {
        return $this->setStatus('disable');
    }


    public function setStatus($type = '', $record = [])
    {
        $ids       = $this->request->isPost() ? input('post.ids/a') : input('param.ids');
        $type_name = AdvertTypeModel::where('id', 'in', $ids)->column('name');
        return parent::setStatus($type, ['advert_type_'.$type, 'cms_advert_type', 0, UID, implode('、', $type_name)]);
    }

    public function quickEdit($record = [])
    {
        $id      = input('post.pk', '');
        $field   = input('post.name', '');
        $value   = input('post.value', '');
        $type    = AdvertTypeModel::where('id', $id)->value($field);
        $details = '字段(' . $field . ')，原值(' . $type . ')，新值：(' . $value . ')';
        return parent::quickEdit(['advert_type_edit', 'cms_advert_type', $id, UID, $details]);
    }
}