<?php
/**
 * The ancient Nostalgia skin.
 */

$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'Nostalgia',
	'namemsg' => 'skinname-nostalgia',
	'descriptionmsg' => 'nostalgia-desc',
	'url' => 'https://www.mediawiki.org/wiki/Skin:Nostalgia',
	'license-name' => 'GPLv2+',
);

$wgAutoloadClasses['SkinNostalgia'] = __DIR__ . "/Nostalgia_body.php";
$wgAutoloadClasses['NostalgiaTemplate'] = __DIR__ . "/Nostalgia_body.php";
$wgMessagesDirs['Nostalgia'] = __DIR__ . '/i18n';
$wgValidSkinNames['nostalgia'] = 'Nostalgia';
$wgResourceModules['ext.nostalgia'] = array(
	'position' => 'top',
	'styles' => array(
		'screen.css',
		'print.css' => array( 'media' => 'print' ),
	),
	'localBasePath' => __DIR__,
	'remoteSkinPath' => 'Nostalgia',
);
