<?php
// src/Acme/UserBundle/Form/Handler/RegistrationFormHandler.php
namespace Acme\UserBundle\Form\Handler;

//use FOS\UserBundle\Form\Handler\RegistrationFormHandler as BaseHandler;
use FOS\UserBundle\Model\UserInterface;

class RegistrationFormHandler extends BaseHandler
{
    protected function onSuccess(UserInterface $user, $confirmation)
    {
        // Note: if you plan on modifying the user then do it before calling the
        // parent method as the parent method will flush the changes

       // parent::onSuccess($user, $confirmation);

        // otherwise add your functionality here
    }

	public function process($confirmation = false)
    {
        $user = $this->userManager->createUser();
        $this->form->setData($user);

        if ('POST' == $this->request->getMethod()) {
            $this->form->bindRequest($this->request);
            if ($this->form->isValid()) {

                // do your custom logic here

                return true;
            }
        }

        return false;
    }    
}