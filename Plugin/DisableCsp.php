<?php

namespace OuterEdge\DisableCsp\Plugin;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Module\Manager;
use Magento\Store\Model\ScopeInterface;

class DisableCsp
{
    const OE_CSP_ENABLED = 'oe_base/cmp/csp_enabled';

    public function  __construct(
        protected ScopeConfigInterface $scopeConfig
    ){
    }

    public function afterIsEnabled(Manager $subject, $result, $moduleName)
    {
        if ($moduleName == 'Magento_Csp') {
            return false;
           // return (bool) $this->scopeConfig->isSetFlag(self::OE_CSP_ENABLED, ScopeInterface::SCOPE_STORE);
        }

        return $result;
    }
}
