<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RDG.ExpositionRdg',
            'P1',
            [
                'Artiste' => 'list, show, search',
                'Oeuvres' => 'list, show, highlight',
                'Exposition' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Artiste' => 'search'
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					p1 {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_p1.svg
						title = LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_exposition_rdg_domain_model_p1
						description = LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_exposition_rdg_domain_model_p1.description
						tt_content_defValues {
							CType = list
							list_type = expositionrdg_p1
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder