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
 * @package    Zendshl_Amf
 * @subpackage Value
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: AcknowledgeMessage.php 23775 2011-03-01 17:25:24Z ralph $
 */
defined('_JEXEC') or die;

/** Zendshl_Amf_Value_Messaging_AsyncMessage */
require_once SHLIB_PATH_TO_ZEND . 'Zendshl/Amf/Value/Messaging/AsyncMessage.php';

/**
 * This is the type of message returned by the MessageBroker
 * to endpoints after the broker has routed an endpoint's message
 * to a service.
 *
 * flex.messaging.messages.AcknowledgeMessage
 *
 * @package    Zendshl_Amf
 * @subpackage Value
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zendshl_Amf_Value_Messaging_AcknowledgeMessage extends Zendshl_Amf_Value_Messaging_AsyncMessage
{
    /**
     * Create a new Acknowledge Message
     *
     * @param unknown_type $message
     */
    public function __construct($message)
    {
        $this->clientId    = $this->generateId();
        $this->destination = null;
        $this->messageId   = $this->generateId();
        $this->timestamp   = time().'00';
        $this->timeToLive  = 0;
        $this->headers     = new STDClass();
        $this->body        = null;

        // correleate the two messages
        if ($message && isset($message->messageId)) {
            $this->correlationId = $message->messageId;
        }
    }
}
