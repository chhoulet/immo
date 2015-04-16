<?php

namespace FrontOfficeBundle\Services;

Class MailService
{
    private $mailer;

    public function __construct($mailer)
    {
        return $this -> mailer = $mailer;
    }

    public function send($content)
    {
        $message = \Swift_Message::newInstance();
        $message -> setSubject('sujet du mail')
                 -> setTo('adresse mail destinataire')
                 -> setFrom('adresse mail expéditeur')
                 -> setBody($content);

        $this -> mailer -> send($message);
    }
}