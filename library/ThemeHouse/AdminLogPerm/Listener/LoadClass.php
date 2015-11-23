<?php

class ThemeHouse_AdminLogPerm_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_AdminLogPerm' => array(
                'controller' => array(
                    'XenForo_ControllerAdmin_Log'
                ),
            ),
        );
    }

    public static function loadClassController($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_AdminLogPerm_Listener_LoadClass', $class, $extend, 'controller');
    }
}