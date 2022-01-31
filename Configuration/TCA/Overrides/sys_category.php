<?php

defined('TYPO3') || die();

// Add columns
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'sys_category',
    [
        'tx_slubprofilemessages_code' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
            'label' => 'LLL:EXT:slub_profile_messages/Resources/Private/Language/locallang_db.xlf:sys_category.tx_slubprofilemessages_code',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ],
        ]
    ]
);

// Add types
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'sys_category',
    'tx_slubprofilemessages_code',
    '',
    'after:title'
);
