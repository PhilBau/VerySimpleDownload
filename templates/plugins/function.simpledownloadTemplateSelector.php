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
 * The simpledownloadTemplateSelector plugin provides items for a dropdown selector.
 *
 * Available parameters:
 *   - assign: If set, the results are assigned to the corresponding variable instead of printed out.
 *
 * @param  array            $params All attributes passed to this function from the template.
 * @param  Zikula_Form_View $view   Reference to the view object.
 *
 * @return string The output of the plugin.
 */
function smarty_function_simpledownloadTemplateSelector($params, $view)
{
    $dom = ZLanguage::getModuleDomain('Simpledownload');
    $result = array();

    $result[] = array('text' => __('Only item titles', $dom), 'value' => 'itemlist_display.tpl');
    $result[] = array('text' => __('With description', $dom), 'value' => 'itemlist_display_description.tpl');
    $result[] = array('text' => __('Custom template', $dom), 'value' => 'custom');

    if (array_key_exists('assign', $params)) {
        $view->assign($params['assign'], $result);

        return;
    }

    return $result;
}
