<?php

namespace Wedding\Bundle\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WeddingProjectBundle:Default:index.html.twig');
    }

    public function announcementAction()
    {
        return $this->render('WeddingProjectBundle:Default:announcement.html.twig');
    }

    public function mapAction()
    {
        return $this->render('WeddingProjectBundle:Default:map.html.twig');
    }

    public function contactAction()
    {
        return $this->render('WeddingProjectBundle:Default:contact.html.twig');
    }

    public function menuAction()
    {
        return $this->render('WeddingProjectBundle:Default:menu.html.twig');
    }

    public function sendMailAction(Request $request)
    {
        $nom = $request->get('lastName');
        $prenom = $request->get('firstName');
        $presence = $request->get('present');
        $email = $request->get('email');
        $nbAdult = $request->get('nbAdult');
        $nbChildren = $request->get('nbChildren');
        $nameAdult = $request->get('nameAdult');
        $nameChildren = $request->get('nameChildren');
        $message = $request->get('message');
        $spam = $request->get('spam');

        if($spam == null)
        {

            $toSend = \Swift_Message::newInstance()
                ->setSubject('Mariage')
                ->setFrom($email)
                ->setTo('votreemariage@gmail.com')
                ->setBody($this->renderView('WeddingProjectBundle:Default:message.html.twig',
                    array('Nom'=>$nom,
                        'Prenom'=>$prenom,
                        'email'=>$email,
                        'presence'=>$presence,
                        'nbAdult'=>$nbAdult,
                        'nameAdult'=>$nameAdult,
                        'nbChildren'=>$nbChildren,
                        'nameChildren'=>$nameChildren,
                        'message'=>$message)),'text/html');

            $this->get('mailer')->send($toSend);

            return $this->render('WeddingProjectBundle:Default:success.html.twig');
        }
        else
        {
            return new Response('Message envoyé');
        }
    }
}
