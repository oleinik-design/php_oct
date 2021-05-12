<?php


class User
{
    /**
     * @var string
     *
     */
    public $login;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $email;

    /**
     * User constructor.
     * @param string $login
     * @param string $password
     * @param string  $email
     */

    public function __construct($login, $password, $email = null)
    {
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
    }

    /**
     *
     * @return string
     */

    public function getUserDescription()
    {

      return $this->__toString();

    }

    /**
     * Выводим данные в браузере
     * @return string
     */

    public function __toString()
    {
        return $this->login . '  ' . $this->password . '  ' . $this->email . '<br/> ';
    // TODO: Implement __toString() method.
    }
}

