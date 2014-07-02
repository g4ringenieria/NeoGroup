<?php

namespace NeoGroup\model;

use NeoPHP\mvc\DatabaseModel;

/**
 * @Table (tableName="user")
 */
class User extends DatabaseModel
{
    /**
     * @Column (columnName="userid", id=true)
     */
    private $id;

    /**
     * @Column (columnName="firstname")
     */
    private $firstname;

    /**
     * @Column (columnName="lastname")
     */
    private $lastname;

    /**
     * @Column (columnName="clientid", relatedTableName="client")
     */
    private $client;

    /**
     * @Column (columnName="profileid", relatedTableName="profileid")
     */
    private $profile;

    /**
     * @Column (columnName="username")
     */
    private $username;

    /**
     * @Column (columnName="password")
     */
    private $password;

    /**
     * @Column (columnName="timezoneid", relatedTableName="timezone")
     */
    private $timeZone;

    /**
     * @Column (columnName="languageid", relatedTableName="language")
     */
    private $language;

    /**
     *
     */
    private $contacts;

    public function __construct ($id)
    {
        $this->id = $id;
    }
    
    public function getId ()
    {
        return $this->id;
    }

    public function setId ( $id )
    {
        $this->id = $id;
    }

    public function getClient ()
    {
        return $this->client;
    }

    public function setClient ( Client $client )
    {
        $this->client = $client;
    }

    public function getProfile ()
    {
        return $this->profile;
    }

    public function setProfile ( Profile $profile )
    {
        $this->profile = $profile;
    }

    public function getUsername ()
    {
        return $this->username;
    }

    public function setUsername ( $username )
    {
        $this->username = $username;
    }

    public function getPassword ()
    {
        return $this->password;
    }

    public function setPassword ( $password )
    {
        $this->password = $password;
    }

    public function getFirstname ()
    {
        return $this->firstname;
    }

    public function setFirstname ( $firstname )
    {
        $this->firstname = $firstname;
    }

    public function getLastname ()
    {
        return $this->lastname;
    }

    public function setLastname ( $lastname )
    {
        $this->lastname = $lastname;
    }

    public function getTimeZone ()
    {
        return $this->timeZone;
    }

    public function setTimeZone ( TimeZone $timeZone )
    {
        $this->timeZone = $timeZone;
    }

    public function getLanguage ()
    {
        return $this->language;
    }

    public function setLanguage ( Language $language )
    {
        $this->language = $language;
    }

    public function getContacts ()
    {
        return $this->contacts;
    }

    public function setContacts ( $contacts )
    {
        if ( !empty ( $contacts ) ) 
        {
            foreach ( $contacts as $contact ) 
            {
                $this->addContact ( $contact );
            }
        }
    }

    public function addContact ( Contact $contact )
    {
        $this->contacts[] = $contact;
    }
}

?>
