<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MailerCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('send:email');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var \Swift_Mailer $mailer */
        $mailer = $this->getContainer()->get('mailer');

        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('aa2805328@gmail.com')
            ->setTo('eduher0147@gmail.com')
            ->setBody(
                "hola",
                'text/html'
            );

        $mailer->send($message);

    }

}