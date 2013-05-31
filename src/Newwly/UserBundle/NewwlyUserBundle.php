<?php

namespace Newwly\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NewwlyUserBundle extends Bundle
{
	public function getParent() {
		return 'FOSUserBundle';
	}
}
