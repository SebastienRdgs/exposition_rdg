<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_exposition',
        'label' => 'nom',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
		'searchFields' => 'nom,horaire,description,visuel,tarifs,datedeb,datefin,lieu,oeuvres',
        'iconfile' => 'EXT:exposition_rdg/Resources/Public/Icons/tx_expositionrdg_domain_model_exposition.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, nom, horaire, description, visuel, tarifs, datedeb, datefin, lieu, oeuvres',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, nom, horaire, description, visuel, tarifs, datedeb, datefin, lieu, oeuvres, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
			],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_expositionrdg_domain_model_exposition',
                'foreign_table_where' => 'AND tx_expositionrdg_domain_model_exposition.pid=###CURRENT_PID### AND tx_expositionrdg_domain_model_exposition.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
		'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
        ],
        'nom' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_exposition.nom',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'horaire' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_exposition.horaire',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim,required'
			]
	    ],
	    'description' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_exposition.description',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim',
			],
	        'defaultExtras' => 'richtext:rte_transform[mode=ts_css]'
	    ],
	    'visuel' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_exposition.visuel',
	        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			    'visuel',
			    [
			        'appearance' => [
			            'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
			        ],
			        'foreign_types' => [
			            '0' => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ]
			        ],
			        'maxitems' => 1
			    ],
			    $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
	    ],
	    'tarifs' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_exposition.tarifs',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim,required'
			]
	    ],
	    'datedeb' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_exposition.datedeb',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'datetime,required',
			    'default' => time()
			],
	    ],
	    'datefin' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_exposition.datefin',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'datetime,required',
			    'default' => time()
			],
	    ],
	    'lieu' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_exposition.lieu',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_expositionrdg_domain_model_lieu',
			    'foreign_field' => 'exposition',
			    'maxitems' => 9999,
			    'appearance' => [
			        'collapseAll' => 0,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],
	    ],
	    'oeuvres' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_exposition.oeuvres',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectMultipleSideBySide',
			    'foreign_table' => 'tx_expositionrdg_domain_model_oeuvres',
			    'MM' => 'tx_expositionrdg_exposition_oeuvres_mm',
			    'size' => 10,
			    'autoSizeMax' => 30,
			    'maxitems' => 9999,
			    'multiple' => 0,
			    'wizards' => [
			        '_PADDING' => 1,
			        '_VERTICAL' => 1,
			        'edit' => [
			            'module' => [
			                'name' => 'wizard_edit',
			            ],
			            'type' => 'popup',
			            'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
			            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
			            'popup_onlyOpenIfSelected' => 1,
			            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
			        ],
			        'add' => [
			            'module' => [
			                'name' => 'wizard_add',
			            ],
			            'type' => 'script',
			            'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
			            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
			            'params' => [
			                'table' => 'tx_expositionrdg_domain_model_oeuvres',
			                'pid' => '###CURRENT_PID###',
			                'setValue' => 'prepend'
			            ],
			        ],
			    ],
			],
	    ],
    ],
];
