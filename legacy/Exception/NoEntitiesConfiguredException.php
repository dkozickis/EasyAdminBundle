<?php

namespace JavierEguiluz\Bundle\EasyAdminBundle\Exception;

@trigger_error('The '.__NAMESPACE__.'\NoEntitiesConfiguredException class is deprecated since version 1.16 and will be removed in 2.0. Use the EasyCorp\Bundle\EasyAdminBundle\Exception\NoEntitiesConfiguredException class instead.', E_USER_DEPRECATED);

class_exists('EasyCorp\Bundle\EasyAdminBundle\Exception\NoEntitiesConfiguredException');

if (\false) {
    class NoEntitiesConfiguredException extends BaseException
    {
    }
}
