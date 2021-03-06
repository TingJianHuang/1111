<?php

/**
 * 后台菜单管理 包含管理员菜单和用户菜单
 * addtime 2016/03/23
 */

namespace Duipi\Controller;

use Think\Controller;

class MenuController extends BaseController {

    //管理员菜单 
    private $menu = array(
        "站点设置" => array(
            "config/webcfg" => "SEO设置",
            "config/config" => "基本设置",
            "config/upload" => "上传设置",
            "config/watermark" => "水印设置",
            "config/email" => "邮箱配置",
            "config/mobile" => "短信配置",
            "config/temp" => "通知模板配置",
            "config/pay_list" => "支付方式",
            "config/yuming" => "模块域名绑定",
            "config/qq_admin" => "官方QQ群",
            "config/fundset" => "公益基金",
        ),
        "商品管理" => array(
            "goods/goods_add" => "添加新商品",
            "goods/goods_list" => "商品列表",
            "Seller/notAudit" => "待审核商品",
            "category/lists/type/goods" => "商品分类",
            "brand/lists" => "品牌管理",
            "brand/edit" => "添加品牌",
            "goods/goods_del_list" => "商品回收站",
        ),
        "直购管理" => array(
            "goodszg/goods_addzg" => "添加直购商品",
            "goodszg/goods_listzg" => "直购商品列表",
            "Order/listszg" => "直购订单列表",
        ),
        "订单管理" => array(
            "order/lists" => "订单列表",
            "order/select" => "订单查询",
            "order/lists/type/zj" => "中奖订单",
            "order/lists/type/notsend" => "未发货订单",
        ),
        "文章管理" => array(
            "article/article_edit" => "添加文章",
            "article/article_list" => "文章列表",
            "category/lists/type/article" => "文章分类",
        ),
        "其他" => array(
            "article/model" => "内容模型",
            "category/lists" => "栏目管理",
        ),
        "模块管理" => array(
            "circle/index" => "圈子模块",
            "link/lists" => "友情链接",
        ),
        "用户管理" => array(
            "member/lists" => "会员列表",
            "member/insert" => "添加会员",
            "config/userconfig" => "会员配置",
            "order/recharge" => "充值记录",
            "order/pay_list" => "消费记录",
            "member/member_group" => "会员组",
            "order/WithdrawCommissions" => "佣金申请提现管理",
            "order/commissionsDetail" => "佣金明细",
            "order/commissions1" => "支付宝申请提现管理",
            "order/oplist" => "转帐明细",
            "Seller/seller_audit" => "商户审核",
            "Seller/seller_auditok" => "已审核商户",
        ),
        "界面管理" => array(
            "menu/navigation" => "导航条管理",
            "slide/index" => "幻灯管理",
            "slide1/index" => "视频管理",
            "slide/index/mobile/1" => "手机幻灯片",
            "Invite/init" => "佣金分享链接管理",
        ),
        "卡密系统" => array(
            "card/create" => "批量生成卡密",
            "card/lists" => "充值卡列表",
        ),
      
    );

    public function _initialize() {
        $ment = array(
            array("navigation", "导航条管理", C("URL_DOMAIN") . "menu/navigation"),
            array("addnavigation", "添加导航条", C("URL_DOMAIN") . "menu/editnav"),
        );
        $this->assign("ment", $ment);
    }

    //导航条管理
    public function navigation() {
        $lists = D("daohang")->order("'order' DESC")->select();
        $this->assign("lists", $lists);
        $this->display("admin/navigation.list");
    }

    //添加
    public function savenav() {
        $cid = I("id", 0);
        $name = htmlspecialchars($_POST['name']);
        $url = htmlspecialchars($_POST['url']);
        $url1 = htmlspecialchars($_POST['url1']);
        $pic = $_POST[web_logo1];

        $status = $_POST['status'] == 'Y' ? 'Y' : 'N';
        $type = htmlspecialchars($_POST['type']);
        $order = intval($_POST['order']) ? intval($_POST['order']) : 1;
        $data = array("name" => "$name", "type" => "$type", "url" => "$url", "url1" => "$url1", "status" => "$status", "order" => "$order", "pic" => "$pic");
        if ($cid) {
            D("daohang")->where(array("cid" => "$cid"))->save($data);
        } else {
            D("daohang")->add($data);
        }

        $this->note("操作成功", C("URL_DOMAIN") . '/menu/navigation');
    }

    //修改
    public function editnav() {
        $cid = I("id", 0);
        if (intval($cid) > 0) {
            $info = D("daohang")->where(array("cid" => "$cid"))->find();
            if (!$info)
                $this->note("参数错误");
            $this->assign("info", $info);
        }
        $this->display("admin/navigation.add");
    }

    //navdel
    public function navdel() {
        $cid = I("id", 0);
        if (intval($cid) <= 0) {
            $this->note("参数错误");
        }
        $res = D("daohang")->where(array("cid" => "$cid"))->delete();
        if ($res) {
            $this->note("操作成功", C("URL_DOMAIN") . '/menu/navigation');
        } else
            $this->note("删除失败");
    }

    public function getAdminMenu() {
        $user = $this->getAdminInfo();
        $menu = $this->menu;
        if ($user['xianzhi'] == 0) {
            return $menu;
        }
        foreach ($menu as $key => $value) {
            foreach ($value as $k => $v) {
                if (is_numeric(stripos($user['qx'], $k))) {
                    unset($menu[$key][$k]);
                }
            }
            if (!$menu[$key]) {
                unset($menu[$key]);
            }
        }
        return $menu;
    }

}
