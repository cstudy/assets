<?php
/**
 * typecho 博客的一款返回顶部插件
 *
 * @package TopTop
 * @author Heeeepin
 * @version 1.0.0
 * @link http://heeeepin.com
 */

class TopTop_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     *
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Typecho_Plugin::factory('Widget_Archive')->header = array('TopTop_Plugin', 'header');
        Typecho_Plugin::factory('Widget_Archive')->footer = array('TopTop_Plugin', 'footer');
        return "插件启动成功";
    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     *
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate()
    {
        return "插件禁用成功";
    }

    /**
     * 获取插件配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form)
    {
        // $model1 = "<img src='' alt='模型1'/>";
        // $model2 = "<img src='' alt='模型2'/>";
        // $model = new Typecho_Widget_Helper_Form_Element_Radio('model', array('model1' => '1', 'model2' => '2'), 'model2', _t('模型设置'), _t('选择一个你喜欢的模型'));
        // $form->addInput($model);

        // 不需要 $options = Helper::options()->plugin('TopTop'); 了，这里 config 函数就不需要了
    }


    /**
     * 个人用户的配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form)
    {

    }


    /**
     * 页头输出相关代码
     *
     * @access public
     * @param unknown header
     * @return unknown
     */
    public static function header()
    {
        $path = Helper::options()->pluginUrl . '/TopTop/';
        // $options = Helper::options()->plugin('TopTop');
        // echo '<link rel="stylesheet" type="text/css" href="' . $path . 'css/topstyle.css?v=2021072904" />';
    }


    /**
     * 页脚输出相关代码
     *
     * @access public
     * @param unknown footer
     * @return unknown
     */
    public static function footer()
    {
        $path = Helper::options()->pluginUrl . '/TopTop/';
        // $options = Helper::options()->plugin('TopTop');
        echo '<div class="back-to-top" style="bottom: 30px;"></div>';
        // echo '<script type="text/javascript" src="' . $path . 'js/toptop.js?v=2021072904"></script>';
        echo '<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/cstudy/assets@develop/typecho/usr/plugins/TopTop/js/toptop.js?v=1"></script>';
    }
}




