<?php
/**
 * Kunena Component
 * @package         Kunena.Template.Crypsis
 * @subpackage      Layout.Topic
 *
 * @copyright       Copyright (C) 2008 - 2018 Kunena Team. All rights reserved.
 * @license         https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link            https://www.kunena.org
 **/
defined('_JEXEC') or die;

$topic = $this->topic;
$this->addScriptOptions('kunena_topicurl_ajax', "https://kunena.test/develop/index.php?option=com_kunena&view=topic&catid={$topic->category_id}&id={$topic->id}&format=json");
$this->addScript('assets/js/topic.js');
?>
<div id="ktopic">
	<span id="ksubject"></span>
	<table id="tblSomething" class="table table-hover"></table>
</div>
