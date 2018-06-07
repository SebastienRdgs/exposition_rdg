<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_artiste',
        'label' => 'photo',
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
		'searchFields' => 'photo,nom,biographie,date_naissance,date_deces,influences,nationalite,oeuvres',
        'iconfile' => 'EXT:exposition_rdg/Resources/Public/Icons/tx_expositionrdg_domain_model_artiste.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, photo, nom, biographie, date_naissance, date_deces, influences, nationalite, oeuvres',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, photo, nom, biographie, date_naissance, date_deces, influences, nationalite, oeuvres, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_expositionrdg_domain_model_artiste',
                'foreign_table_where' => 'AND tx_expositionrdg_domain_model_artiste.pid=###CURRENT_PID### AND tx_expositionrdg_domain_model_artiste.sys_language_uid IN (-1,0)',
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
        'photo' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_artiste.photo',
	        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			    'photo',
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
	    'nom' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_artiste.nom',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'biographie' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_artiste.biographie',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim',
			],
	        'defaultExtras' => 'richtext:rte_transform[mode=ts_css]'
	    ],
	    'date_naissance' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_artiste.date_naissance',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'datetime',
			    'default' => time()
			],
	    ],
	    'date_deces' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_artiste.date_deces',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'datetime',
			    'default' => time()
			],
	    ],
	    'influences' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_artiste.influences',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim',
			],
	        'defaultExtras' => 'richtext:rte_transform[mode=ts_css]'
	    ],
	    'nationalite' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_artiste.nationalite',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_expositionrdg_domain_model_nationalite',
			    'foreign_field' => 'artiste',
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
	        'label' => 'LLL:EXT:exposition_rdg/Resources/Private/Language/locallang_db.xlf:tx_expositionrdg_domain_model_artiste.oeuvres',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_expositionrdg_domain_model_oeuvres',
			    'foreign_field' => 'artiste',
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
    ],
];
