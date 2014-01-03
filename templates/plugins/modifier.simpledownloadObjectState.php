<?php
/**
 * Simpledownload.
 *
 * @copyright Ralf Koester (Koester)
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @package Simpledownload
 * @author Ralf Koester <ralf@familie-koester.de>.
 * @link http://zikula.de
 * @link http://zikula.org
 * @version Generated by ModuleStudio 0.6.1 (http://modulestudio.de).
 */

/**
 * The simpledownloadObjectState modifier displays the name of a given object's workflow state.
 * Examples:
 *    {$item.workflowState|simpledownloadObjectState}       {* with visual feedback *}
 *    {$item.workflowState|simpledownloadObjectState:false} {* no ui feedback *}
 *
 * @param string  $state      Name of given workflow state.
 * @param boolean $uiFeedback Whether the output should include some visual feedback about the state.
 *
 * @return string Enriched and translated workflow state ready for display.
 */
function smarty_modifier_simpledownloadObjectState($state = 'initial', $uiFeedback = true)
{
    $serviceManager = ServiceUtil::getManager();
    $workflowHelper = new Simpledownload_Util_Workflow($serviceManager);
    $stateInfo = $workflowHelper->getStateInfo($state);

    $result = $stateInfo['text'];
    if ($uiFeedback === true) {
        $result = '<img src="' . System::getBaseUrl() . 'images/icons/extrasmall/' . $stateInfo['ui'] . 'led.png" width="16" height="16" alt="' . $result . '" />&nbsp;&nbsp;' . $result;
    }

    return $result;
}