<?php
/**successfully*/

namespace AppBundle\Controller;

use AppBundle\Entity\Dependent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Person;
use Symfony\Component\Validator\Constraints\DateTime;

use AppBundle\Services\PersonService as personService;

class PersonController extends  Controller
{
//    /**
//     * @Route("/person/{personName}")
//     */
//    public function showPerson($personName){
//
//        $notes = [
//                    'Octopus asked me a riddle, outsmarted me',
//                    'I counted 8 legs... as they wrapped around me',
//                    'Inked!'
//        ];
//
//        return $this->render('person/show.html.twig', array(
//            'name' => $personName,
//            'notes' => $notes
//        ));
//
//    }
    /**
     * @return Response
     */
    public function dependentCreateAction(){
        $dependent = new Dependent();
        $dependent-> setName("Muhammet Burak Ergenc");
        $dependent->setGender("Male");
        $dependent -> setBirthday(new \DateTime('28-3-1993'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($dependent);
        $em->flush();

        return new Response("<html><body>Created new dependent succesfully.</body></html>");
    }

    /**
     * @Route("/createPerson")
     */
    public function createPerson(){

        $person = new Person();
        $person->setFullname("Steve Pi");
        $person->setGender("male");
        $person->setEmail("example@example.com");
        $person->setBirthday(new \DateTime('28-3-1992'));

        $dependent = new Dependent();
        $dependent->setName("Alice Walker");
        $dependent->setGender("Female");
        $dependent -> setBirthday(new \DateTime('28-3-1975'));
        $dependent->setPerson($person);

        $em = $this->getDoctrine()->getManager();
        $em->persist($person);
        $em->persist($dependent);
        $em->flush();

        foreach($person->getDependents() as $dependent){
            dump($dependent);
        }

        return new Response("<html><body>Created person id</body></html>");
    }

//    /**
//     * @Route("/showlist")
//     */
//
//    public function showAction(Person $person){
//
//        $dependents = [];
//        foreach($person->getDependents() as $dependent){
//        $dependents[] = [
//            'id' => $dependent->getId(),
//            'name' => $dependent->getName()
//        ];
//        }
//
//        $data = [
//            'dependents'=> $dependents
//        ];
//
//        return new Response($data);
//    }
    /**
     * @Route("/show")
     */
    public function showAction(){
        $em = $this->getDoctrine()->getManager();

        $dependents = $em->getRepository('AppBundle:Dependent')
           ->findAll();
        dump($dependents);
        return new Response("<html><body>Loading was successful</body></html>");
    }

    /**
     * @Route("/persons")
     */
    public function listPersons(){

        //$personService = new PersonService();
        $personService = $this->get('personservice');
        $persons = $personService->getAllPersons();

        dump($persons);

        $person = $this->getDoctrine()->getManager()->find("AppBundle:Person",16);
        print($person->getFullname()."\n\n");
        print("dependent:".$person->getDependents()[0]->getName()."  Gender:".$person->getDependents()[0]->getGender());
        dump($person->getDependents());

        return new Response("<html><body>Loading was successful</body></html>");

    }




}