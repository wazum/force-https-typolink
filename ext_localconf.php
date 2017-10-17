<?php

defined('TYPO3_MODE') || die('Access denied!');

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typolinkProcessing']['typolinkModifyParameterForPageLinks'][] = \Wazum\ForceHttpsTypolink\Hook\TypolinkModifyLinkConfigForPage::class;
