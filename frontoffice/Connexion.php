<?php

/**
 *
 */
class Connect
{
    private static $db = NULL;
    public static function getConnection()
    {
        if(!isset(self::$db))
        {
            try{
                self::$db = new PDO
                (
                    'mysql:host=localhost;dbname=animalia',
                    'root',
                    ''
                );
                self::$db->setAttribute
                (
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );
            }
            catch(Expection $e)
            {
                die('Erreur: ' . $e->getMessage());

            }
        }
        return self::$db;
    }
}
Connect::getConnection();

?>