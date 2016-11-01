<?php
/**
 * Created by PhpStorm.
 * User: olivier
 * Date: 21/09/15
 * Time: 16:33
 */
?>
<!DOCTYPE html>
<html class="">
<head>

    <title>Olivier Marin CV</title>

    <meta name="description" content="CV en ligne d\'Olivier Marin. Etudiant en école d'ingénieur Polytech Marseille.">
    <meta name="robots" content="nofollow, index"/>
    <meta name="googlebot" content="nofollow, index"/>
    <meta name="google" content="nositelinkssearchbox"/>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include_once("analyticstracking.php") ?>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="<?php echo img_url('OM_v2.png') ?>" />

    <!-- my script and syles goes here -->
    <link rel="stylesheet" type="text/css" href="<?php echo(css_url('bootstrap')) ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo(css_url('bootstrap-social')) ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo(css_url('bootstrap-theme')) ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo(css_url('font-awesome.min')) ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo(css_url('style')) ?>">

</head>
<body>

        <?php if($header) echo $header ;?>
    <div class="container-fluid content">
        <?php if($middle) echo $middle ;?>
    </div>
        <?php if($footer) echo $footer ;?>

    <script src="<?php echo(js_url('jquery-2.1.4')) ?>"></script>
    <script src="<?php echo(js_url('bootstrap')) ?>"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="<?php echo(js_url('jquery.combinedScroll')) ?>"></script>
    <script src="<?php echo(js_url('main')) ?>"></script>
    <script src="<?php echo(js_url('button')) ?>"></script>


</body>
</html>
