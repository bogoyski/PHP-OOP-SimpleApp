<?php
/**
 * Created by PhpStorm.
 * User: PC1
 * Date: 24.6.2017 г.
 * Time: 23:42
 */

namespace Data\Message;


class Message
{
    private $id;

    private $senderId;

    private $nickname;

    private $message;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSenderId()
    {
        return $this->senderId;
    }

    /**
     * @return mixed
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }


}