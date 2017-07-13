<?php
/**
 * Created by PhpStorm.
 * User: PC1
 * Date: 15.6.2017 г.
 * Time: 23:59
 */

namespace Data\Users;


use Data\Message\UnreadMessagesViewData;

class UserProfileViewData
{
    private $first_name;

    private $last_name;

    private $picture;

    /**
     * @var UnreadMessagesViewData
     */
    private $unreadMessages;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return UnreadMessagesViewData
     */
    public function getUnreadMessages(): UnreadMessagesViewData
    {
        return $this->unreadMessages;
    }

    /**
     * @param UnreadMessagesViewData $unreadMessages
     */
    public function setUnreadMessages(UnreadMessagesViewData $unreadMessages)
    {
        $this->unreadMessages = $unreadMessages;
    }




}