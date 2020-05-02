<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Phalcon PHP Framework</title>
        
        <?= $this->assets->outputCss() ?>

    </head>
    <body>
        <div class="container">
            

    <div class="page-header">
        <h1>Congratulations!</h1>
    </div>
    
    <p>You're now flying with Phalcon. Great things are about to happen!</p>
    
    <p>This page is located at <code>views/index/index.phtml</code></p>


        </div>
        <!-- jQuery first, then Popper.js, and then Bootstrap's JavaScript -->
        <?= $this->assets->outputJs() ?>
    </body>
</html>
