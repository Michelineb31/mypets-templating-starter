<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>

    </head>
    <body>
        <h1><?= $title ?></h1>
        <p>User logged in a <?= $username ?> using <?= $password ?></p>
        
        <!-- working with espressions -->
        <h3>Temperature</h3>
        <p>Fahrenheit: <?= $temp ?> degrees</p>
        <p>Celsius: <?= $temp - 32 * (5.0/9.0) ?> degrees</p>
        <p>I like <?= $color ?>!</p>
        <p>Circumference: <?= $radius * (2 * 3.14) ?></p>
        
        <!--looping over arrays-->
        <h3>Bookmarks</h3>
        <p>My first bookmark is <a href="<?= $bookmarks[0] ?>"><?= $bookmarks[0] ?></a></p>
        <p>My second bookmark is <?= $bookmarks[1] ?></p>
        
        <ul>
            <?php foreach (($bookmarks?:[]) as $bookmark): ?>
                <li><a href="<?= $bookmark ?>"><?= str_replace('http://', '',
                $bookmark); ?></a></li>
            <?php endforeach; ?>
        </ul>
        
        <!--an associative array -->
        <h3>Addresses</h3>
        <p><?= $addresses['primary'] ?></p>
        <p><?= $addresses['secondary'] ?></p>
        
        <!--looping over associative arrays -->
        <?php foreach (($addresses?:[]) as $key=>$value): ?>
            <p><?= $key ?> - <?= $value ?></p>
        <?php endforeach; ?>
        
        <h3>Dessert Options</h3>
        <?php foreach (($desserts?:[]) as $key=>$value): ?>
            <input type='checkbox' value='<?= $key ?>'/><?= $value ?></br>
        <?php endforeach; ?>
        
        <!-- conditional content -->
        <h3>Message</h3>
        <?php if ($preferredCustomer): ?>
            <strong>Thank you for being a preferred customer!</strong></br>
        <?php endif; ?>
        <?php if ($lastlogin > strtotime('-1 month')): ?>
            Welcome back!
            <?php else: ?>It's been awhile
        <?php endif; ?>
        
        <!--printing objects -->
        <h3>My Pet</h3>
        <p>My pets name is: <?= $myPet->getName() ?></p>
        <p>My pets color is: <?= $myPet->getColor() ?></p>
      
 
        
    </body>
</html>