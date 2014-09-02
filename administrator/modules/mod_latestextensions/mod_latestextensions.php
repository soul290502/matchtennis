<?php
defined('_JEXEC') or die;
JHtml::_('stylesheet','mod_latestextensions/style.css',array(),true);
require_once __DIR__ . '/helper.php';
$list = mod_latestextensionsHelper::getList($params);
$moduleclass_sfx  =  htmlspecialchars($params->get('moduleclass_sfx'));
require  JModuleHelper::getLayoutPath('mod_latestextensions',
$params->get('layout', 'default'));