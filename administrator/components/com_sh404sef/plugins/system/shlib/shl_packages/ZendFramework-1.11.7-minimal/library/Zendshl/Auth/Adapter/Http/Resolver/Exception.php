<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zendshl_Auth
 * @subpackage Zendshl_Auth_Adapter_Http
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: Exception.php 23775 2011-03-01 17:25:24Z ralph $
 */
defined('_JEXEC') or die;


/**
 * @see Zendshl_Auth_Exception
 */
require_once SHLIB_PATH_TO_ZEND . 'Zendshl/Auth/Exception.php';


/**
 * HTTP Auth Resolver Exception
 *
 * @category   Zend
 * @package    Zendshl_Auth
 * @subpackage Zendshl_Auth_Adapter_Http
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zendshl_Auth_Adapter_Http_Resolver_Exception extends Zendshl_Auth_Exception
{}
