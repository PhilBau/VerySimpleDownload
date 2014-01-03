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
 * Generic single item display content plugin implementation class.
 */
class Simpledownload_ContentType_Item extends Simpledownload_ContentType_Base_Item
{
    // feel free to extend the content type here
}

function Simpledownload_Api_ContentTypes_item($args)
{
    return new Simpledownload_Api_ContentTypes_itemPlugin();
}