<?php

/**
 *
 * @see XenForo_ControllerAdmin_Log
 */
class ThemeHouse_AdminLogPerm_Extend_XenForo_ControllerAdmin_Log extends XFCP_ThemeHouse_AdminLogPerm_Extend_XenForo_ControllerAdmin_Log
{

    /**
     *
     * @see XenForo_ControllerAdmin_Abstract::assertSuperAdmin()
     */
    public function assertSuperAdmin()
    {
        if (!XenForo_Visitor::getInstance()->isSuperAdmin()) {
            if ($this->_routeMatch->getAction() == 'admin') {
                return $this->assertAdminPermission('viewAdminLog');
            }
        }
        return parent::assertSuperAdmin();
    }
}