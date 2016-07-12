<?php
/**
 * 一图壁纸插件 cookie版
 * 
 * @package oneimg
 * @author 疯狂减肥带
 * @version 1.0
 * @link http://wwww.haotown.cn
 */

class oneimg_Plugin implements Typecho_Plugin_Interface
{
	public static function activate()
	{
		
		Typecho_Plugin::factory('Widget_Archive')->header = array('oneimg_Plugin', 'header');
		Typecho_Plugin::factory('Widget_Archive')->footer = array('oneimg_Plugin', 'footer');
	
		
	}
	/* 禁用插件方法 */
	public static function deactivate(){}
	
	/* 插件配置方法 */

			public static function config(Typecho_Widget_Helper_Form $form){
$temp = new Typecho_Widget_Helper_Form_Element_Radio(
        '加载菜单', array('0'=> '加载', '1'=> '还是加载'), 0, '插件',
            '一图 https://app.haotown.cn');
        $form->addInput($temp);
}
	/* 个人用户的配置方法 */
	public static function personalConfig(Typecho_Widget_Helper_Form $form){}
	
	/* 插件实现方法 */

public static function header(){
echo "\n<link href=\"" . Helper::options()->pluginUrl . "/oneimg/oneimg.css\" rel=\"stylesheet\">\n";
}


public static function footer(){
$pd = Helper::options()->pluginUrl . '/oneimg/oneimg.js';
 echo '<script type="text/javascript" src="'.$pd.'"></script>' . "\n";

			echo '<div id="oneimg"></div>
<div class="changerimg" onmousemove="showoneimg()" onmouseout="hideoneimg()" onclick="hideoneimg()">
        <img  id="oneimgmenuimg" src="'. Helper::options()->pluginUrl .'/oneimg/img/imgmenu.png" style="width: 70px;">
        <div id="oneimgmenu">
            <img src="'. Helper::options()->pluginUrl .'/oneimg/img/imgdown.png" title="下载/评论图片" style="width: 70px;"   onclick="DownImg()">    
<img src="'. Helper::options()->pluginUrl .'/oneimg/img/imgchanger.png"title="更换图片" style="width: 70px;" onclick="ChangerImg()">    
        </div></div>
' . "\n";



}

}
