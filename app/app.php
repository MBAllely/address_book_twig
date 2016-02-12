<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    session_start();

    $mrfox = new Contact("Reynard", '"Mr. Fox"', "The Fox", "5555555555", "reynard@gmail.com", "Hole under the tree", "Ipswitch", "England", "IP1", "http://www.skullsunlimited.com/userfiles/image/red%20fox.jpg");

    if(empty($_SESSION['contacts'])) {
        $_SESSION['contacts'] = array($mrfox);
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array( 'twig.path' => __DIR__.'/../views'));

    //** Home page **//
    $app->get('/', function() use ($app) {
        return $app['twig']->render('contact_form.html.twig', array('contacts' => Contact::getAll()));
    });

    //** Add a new contact **//
    $app->post('/create_contact', function() use ($app) {
        $contact = new Contact($_POST['first_name'], $_POST['middle_name'], $_POST['last_name'], $_POST['phone'], $_POST['email'], $_POST['street'], $_POST['city'], $_POST['state'], $_POST['zip'], $_POST['image']);
        $contact->save();
        return $app['twig']->render('contact_created.html.twig', array('new_contact' => $contact));
    });

    //** Delete all contacts **//
    $app->post('/delete_contacts', function() use ($app) {
        Contact::deleteAll();
        return $app['twig']->render('delete_contacts.html.twig');
    });


    return $app;

?>
