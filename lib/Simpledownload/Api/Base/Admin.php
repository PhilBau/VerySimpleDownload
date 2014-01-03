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
 * This is the Admin api helper class.
 */
class Simpledownload_Api_Base_Admin extends Zikula_AbstractApi
{
    /**
     * Returns available admin panel links.
     *
     * @return array Array of admin links.
     */
    public function getlinks()
    {
        $links = array();

        if (SecurityUtil::checkPermission($this->name . '::', '::', ACCESS_READ)) {
            $links[] = array('url' => ModUtil::url($this->name, 'user', 'main'),
                             'text' => $this->__('Frontend'),
                             'title' => $this->__('Switch to user area.'),
                             'class' => 'z-icon-es-home');
        }

        $controllerHelper = new Simpledownload_Util_Controller($this->serviceManager);
        $utilArgs = array('api' => 'admin', 'action' => 'getlinks');
        $allowedObjectTypes = $controllerHelper->getObjectTypes('api', $utilArgs);

        if (in_array('download', $allowedObjectTypes)
            && SecurityUtil::checkPermission($this->name . ':Download:', '::', ACCESS_ADMIN)) {
            $links[] = array('url' => ModUtil::url($this->name, 'admin', 'view', array('ot' => 'download')),
                             'text' => $this->__('Downloads'),
                             'title' => $this->__('Download list'));
        }

        return $links;
    }
}
