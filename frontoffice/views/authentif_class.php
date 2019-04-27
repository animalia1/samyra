<?php
class Auth
{
    static function estconnecter()
    {
        if(isset($_SESSION['Auth']) and isset($_SESSION['Auth']['username']) and isset($_SESSION['Auth']['password']))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>