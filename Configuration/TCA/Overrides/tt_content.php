<?php

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->registerContainer(
    'b13-2cols-with-header-container',
    '2 Column Container With Header',
    'Some Description of the Container',
    'EXT:container_example/Resources/Public/Icons/b13-2cols-with-header-container.svg',
    [
        [
            ['name' => 'header', 'colPos' => 200, 'colspan' => 2, 'allowed' => ['CType' => 'header, textmedia']]
        ],
        [
            ['name' => 'left side', 'colPos' => 201],
            ['name' => 'right side', 'colPos' => 202]
        ]
    ]
);

$GLOBALS['TCA']['tt_content']['types']['b13-2cols-with-header-container']['showitem'] = 'sys_language_uid,CType,header,tx_container_parent,colPos';
