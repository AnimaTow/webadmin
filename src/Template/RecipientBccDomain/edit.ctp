<?php
/**
 *
 * Copyright (c) 2017 AVERWAY LTD
 *
 * LICENSE:
 *
 * This file is part of SophiMail Dashboard (http://www.sophimail.com).
 *
 * SophiMail Dashboard is free software: you can redistribute it and/or modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any
 * later version with exceptions for vendors and plugins.
 *
 * See the LICENSE file for a full license statement.
 *
 * SophiMail Dashboard is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with SophiMail Dashboard.  If not, see
 * <http://www.gnu.org/licenses/>.
 *
 *
 * @author AVERWAY LTD <support@sophimail.com>
 * @license GNU/GPLv3 or later; https://www.gnu.org/licenses/gpl.html
 * @copyright 2017 AVERWAY LTD
 * 
 * SophiMail is a registered trademark of AVERWAY LTD
 *
 */
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $recipientBccDomain->domain],
        ['confirm' => __('Are you sure you want to delete # {0}?', $recipientBccDomain->domain)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Recipient Bcc Domain'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $recipientBccDomain->domain],
        ['confirm' => __('Are you sure you want to delete # {0}?', $recipientBccDomain->domain)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Recipient Bcc Domain'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($recipientBccDomain); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Recipient Bcc Domain']) ?></legend>
    <?php
    echo $this->Form->input('bcc_address');
    echo $this->Form->input('expired');
    echo $this->Form->input('active');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
