<?php

namespace OuterEdge\DisableCsp\Plugin;

use Magento\Csp\Observer\Render;

class BypassMagentoCsp
{
    public function aroundExecute(Render $subject, callable $proceed)
    {
        // do nothing
    }
}
