<?php

namespace OuterEdge\DisableCsp\Plugin;

use Magento\Framework\Module\Manager;

class DisableCsp
{
    public function afterIsEnabled(Manager $subject, $result, $moduleName)
    {
        if ($moduleName == 'Magento_Csp') {
            return false;
        }

        return $result;
    }
}
