<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Hands and Feet');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('Kostercx.Handsandfeet', 'Page');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('Kostercx.Handsandfeet', 'Content');

