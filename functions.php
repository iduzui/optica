<?php
function themeConfig($form) {
  $picUrl = new Typecho_Widget_Helper_Form_Element_Text('picUrl', NULL, NULL, _t('顶部图片'), _t('填写图片URL，高度350px，宽度建议不小于2000px。留空则输出默认。'));
  $form->addInput($picUrl);

  $avatarUrl = new Typecho_Widget_Helper_Form_Element_Text('avatarUrl', NULL, NULL, _t('头像'), _t('填写图片URL，尺寸128*128。留空则输出默认。'));
  $form->addInput($avatarUrl);
  
  $imageurl = new Typecho_Widget_Helper_Form_Element_Text('imageurl', NULL, NULL, _t('头像链接'), _t('填写头像的链接地址（加上http://)。'));
  $form->addInput($imageurl);

  $Desc = new Typecho_Widget_Helper_Form_Element_Text('Desc', NULL, NULL, _t('描述文字'), _t('显示在标题下方的描述文字，不影响HTML头部输出的描述。留空则输出系统设置中的站点描述。'));
  $form->addInput($Desc);

  $Ic = new Typecho_Widget_Helper_Form_Element_Radio('Ic', array('o' => _t('启用'), 'x' => _t('禁用')), 'x', _t('InstantClick'));
  $form->addInput($Ic);

  $Iccfg = new Typecho_Widget_Helper_Form_Element_Text('Iccfg', NULL, NULL, _t('InstantClick 参数'), _t('InstantClick 参数，推荐填写"mousedown",""为半角引号！详见 <a href="http://instantclick.io/">InstantClick 官网</a>。需要启用上面的 InstantClick 才可以使用。'));
  $form->addInput($Iccfg);
  
  $icp = new Typecho_Widget_Helper_Form_Element_Text('icp', NULL, NULL, _t('工信部ICP备案号'), _t('此处填写工信部ICP备案号'));
  $form->addInput($icp);
}

function get_post_view($archive)
{
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
       $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
    }
    echo $row['views'];
}
?>