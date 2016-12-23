<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Entity\Contact;

class FixturesContact extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $em) {
        //  Create contact1
        $contact1 = new Contact();
        $contact1->setName('George LeRoi');
        $contact1->setProfession('Developpeur web');
        $contact1->setEmail('example@gmail.com');
        $contact1->setAddress('Paris 003 X');
        $contact1->setPhone('+330602586952');
        $contact1->setWebsite('http://george.leroi.com');
        $contact1->setUser($this->getReference('admin'));
        $em->persist($contact1);
        $em->flush();
        $this->addReference('contact1', $contact1);
    }

    public function getOrder() {
        return 2; // the order in which fixtures will be loaded
    }

}
