<?php
    //Require the autoload file
    error_reporting('E_ALL');
    require_once('vendor/autoload.php');
    session_start();
    
    //Create an instance of the Base class
    $f3 = Base::instance();
    
    //Default route
    $f3->route('GET /', function($f3) {
        
        $f3->set('username', 'jshmo');
        $f3->set('password', sha1('Password01'));
        $f3->set('title', 'Working with templates');
        $f3->set('temp', 68);
        $f3->set('color', 'black');
        $f3->set('radius', 10);
        $f3->set('bookmarks', array('http://www.cnet.com',
                                    'http://www.reddit.com',
                                    'http://www.cnn.com'));
        $f3->set('addresses', array('primary' =>
                                  '1000 Apple ln Seattle, WA 98999',
                                  'secondary' =>
                                  '2510 100th Court Tac, WA 9000'));
        
        $f3->set('desserts', array('chocolate' =>
                                   'Chocolate Mousse',
                                   'vanilla' =>
                                   'Vanilla Custard',
                                   'strawberry' =>
                                   'Strawberry Shortcake'
                                  ));
        
        $f3->set('preferredCustomer', true);
        $f3->set('lastLogin', strtotime('-1 week'));
        
        //objects
        $pet = new Pet('Fido', 'pink');
        $f3->set('myPet', $pet);
                                    
        
        echo Template::instance()->render('pages/info.html');
        
    });
    
    

    //Run fat free
    $f3->run();
    