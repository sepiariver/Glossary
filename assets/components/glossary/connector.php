<?php
/**
 * Glossary connector
 *
 * @package glossary
 * @subpackage connector
 *
 * @var modx $modx
 */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
require_once MODX_CONNECTORS_PATH . 'index.php';

$corePath = $modx->getOption('glossary.core_path', null, $modx->getOption('core_path') . 'components/glossary/');
$glossary = $modx->getService('glossary', 'GlossaryBase', $corePath . 'model/glossary/', array(
    'core_path' => $corePath
));

// Handle request
$modx->request->handleRequest(array(
    'processors_path' => $glossary->getOption('processorsPath'),
    'location' => ''
));
