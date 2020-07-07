<?php
// https://docs.typo3.org/typo3cms/TSconfigReference/UsingSetting/Index.html#setting-default-user-tsconfig
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
    options {
      pageTree {
        showPageIdWithTitle = 1
    
        backgroundColor {
          1 = rgba(13, 70, 139, 0.4)
        }
      }
      clearCache.pages = 1
    }
');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:hellotypo3/Configuration/TsConfig/Page/TCAdefaults.tsconfig">'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:hellotypo3/Configuration/TsConfig/Page/TCEFORM.tsconfig">'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:hellotypo3/Configuration/TsConfig/Page/EXTENSIONS.tsconfig">'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:hellotypo3/Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts.tsconfig">'
);

// ckEditor RTE
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:hellotypo3/Configuration/TsConfig/Page/RTE.tsconfig">'
);
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['hellotypo3'] = 'EXT:hellotypo3/Configuration/RTE/hellotypo3_ckeditor.yaml';