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
        $contact1->setAge(20);
        $contact1->setUser($this->getReference('admin'));
        $em->persist($contact1);
        
        //  Create contact2
        $contact2 = new Contact();
        $contact2->setName('Jacques La Joie');
        $contact2->setProfession('Designer');
        $contact2->setEmail('example@gmail.com');
        $contact2->setAddress('Paris 004 X');
        $contact2->setPhone('+330612586952');
        $contact2->setWebsite('http://jacques.lajoie.com');
        $contact2->setAge(25);
        $contact2->setUser($this->getReference('admin'));
        $em->persist($contact2);
        $em->flush();
        $this->addReference('contact1', $contact1);
        $this->addReference('contact2', $contact2);
    }

    public function getOrder() {
        return 2; // the order in which fixtures will be loaded
    }

}
