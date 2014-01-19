<?php

namespace Klookva\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KlookvaUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
