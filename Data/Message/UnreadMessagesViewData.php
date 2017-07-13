<?php
/**
 * Created by PhpStorm.
 * User: PC1
 * Date: 24.6.2017 г.
 * Time: 23:45
 */

namespace Data\Message;


class UnreadMessagesViewData
{
    /**
     * @var Message[]|\Generator
     */
    private $messages;

    /**
     * @return Message[]|\Generator
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param callable $messages
     */
    public function setMessages(callable $messages)
    {
        $this->messages = $messages();
    }


}