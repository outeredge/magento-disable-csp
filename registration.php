<?php

if (class_exists('Magento\Framework\Component\ComponentRegistrar')) {
    \Magento\Framework\Component\ComponentRegistrar::register(
        \Magento\Framework\Component\ComponentRegistrar::MODULE,
        'OuterEdge_DisableCsp',
        __DIR__
    );
} 
