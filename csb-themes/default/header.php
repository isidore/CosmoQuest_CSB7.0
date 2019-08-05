<?php
/**
 * Created by PhpStorm.
 * User: starstryder
 * Date: 6/11/19
 * Time: 9:45 PM
 */
?>

<html>
<head>
    <?php loadMeta(); ?>
    <link href='http://fonts.googleapis.com/css?family=Roboto:regular,bold,bolditalic,italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo $THEME_URL;?>/style.css">

</head>
<body>

<!-----------------------------------------------------------------------
   Text for the Login Box
  ------------------------------------------------------>
<?php
    loadLoginBox();
?>

<div id="header" class="container">

    <!-----------------------------------------------------------------------
        Load Logo TODO Make logo uploadable
       ---------------------------------------------------------------------->
        <div id="logo" class="left">
            <a href="<?php echo $BASE_URL;?>">
                <img src="<?php echo $THEME_URL;?>/images/header-logo.png">
            </a>
        </div>

    <!-----------------------------------------------------------------------
        Load Title
       ---------------------------------------------------------------------->
        <div id="title" class="left">
            <h1> <?php echo $page_title;?></h1>
        </div>

    <!-----------------------------------------------------------------------
        Load User Area TODO ADD LOGIC TO LOGIN OR LOGOUT AS MAKES SENSE
      ---------------------------------------------------------------------->
        <div id="user" class="right">

            <?php loadUser(); ?>

        </div>




</div>

<div class="clear"></div>

