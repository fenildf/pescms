<?php
/**
 * 本模板为通用编辑按钮，若没有特殊需求，请加载本模板
 */
$echoEditUrl = empty($editUrl) ? $label->url(GROUP . '-' . MODULE . '-action', array('id' => $value["{$fieldPrefix}id"], 'back_url' => base64_encode($_SERVER['REQUEST_URI']))) : $editUrl;
$echoDeleteUrl = empty($deleteUrl) ? $label->url(GROUP . '-' . MODULE . '-action', array('id' => $value["{$fieldPrefix}id"], 'method' => 'DELETE', 'back_url' => base64_encode($_SERVER['REQUEST_URI']))) : $deleteUrl;

?>
<div class="am-btn-toolbar">
    <div class="am-btn-group am-btn-group-xs">
        <a class="am-btn am-btn-secondary" href="<?= $echoEditUrl ?>"><span class="am-icon-pencil-square-o"></span> 编辑</a>
        <a class="am-btn am-btn-success dialog" href="<?= $label->url(GROUP . '-' . MODULE . '-setMenu', ['id' => $value['user_group_id']]) ?>"><span class="am-icon-hdd-o"></span> 设置菜单</a>
        <a class="am-btn am-btn-warning dialog" href="<?= $label->url(GROUP . '-' . MODULE . '-setAuth', ['id' => $value['user_group_id']]) ?>"><span class="am-icon-puzzle-piece"></span> 设置权限</a>
        <a class="am-btn am-btn-danger ajax-click ajax-delete"  msg="确定删除吗？将无法恢复的！"
           href="<?= $echoDeleteUrl; ?>"><span class="am-icon-trash-o"></span> 删除</a>
    </div>
</div>

