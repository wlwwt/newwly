<?php

namespace Newwly\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="newwly_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
	* @var string $kindlemail
	*/
    protected $kindlemail;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
	
	public function getKindlemail()
    {
        return $this->kindlemail;
    }
	
	public function setKindlemail($kindlemail)
    {
        $this->kindlemail = $kindlemail;

        return $this;
    }
}