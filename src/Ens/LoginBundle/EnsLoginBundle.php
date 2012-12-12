<?php

namespace Ens\LoginBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EnsLoginBundle extends Bundle
{
    
    public function getParent() {
        return 'FOSUserBundle';
    }
}
