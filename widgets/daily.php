<?php include 'includes/config.php'?>
<?php get_header()?>
<?php
    
/*

if day is passed via GET, show $day's coffee

if it's today, show $today's coffee



place a link to show today's coffee (if on another day)

*/
    
if (isset($_GET['day']))
{//if day is passed via GET, show $day's coffee
    $today = $_GET['day'];
}else{//if it's today, show $today's coffee
    $today = date('l');
}
    
switch($today){
        
    case 'Monday': 
        $coffee = "Pumpkin Spice";
        $color = 'orange';
        $pic = 'pumpkin-spice-latte.jpg';
        $alt = 'yummy pumpkin spice';
    break;
        
    case 'Tuesday': 
        $coffee = "Americano";
        $color = 'brown';
        $pic = 'americano.jpg';
        $alt = 'yummy americano';
    break;
        
    case 'Wednesday': 
        $coffee = "Salted Caramel Mocha";
        $pic = 'salted-caramel.jpg';
        $alt = 'yummy caramel mocha';
    break;
        
    case 'Thursday': 
        $coffee = "Hot Chocolate";
        $color = 'chocolate';
        $pic = 'hot-chocolate.jpg';
        $alt = 'yummy hot chocolate';
    break;
        
    case 'Friday': 
        $coffee = "Matcha Green Frappuccino";
        $color = 'green';
        $pic = 'matcha.jpg';
        $alt = 'yummy matcha green';
    break;
        
    case 'Saturday': 
        $coffee = "Vanilla Latte";
        $color = 'grey';
        $pic = 'vanilla.jpg';
        $alt = 'yummy vanilla latte';
    break;
        
    case 'Sunday': 
        $coffee = "Serious Strawberry Frappuccino";
        $color = 'pink';
        $pic = 'strawberry.jpg';
        $alt = 'yummy strawberry';
    break;
        
        
}  
    
       
    
// $today = date('l');

//echo $today;
//die;
    
    
?>
<?php include 'header.php'?>

<p><?=$today?>'s special is <?=$coffee?>!</p>

<p>
<img src="images/<?=$pic?>" alt="<?=$alt?>" id="coffee" />
</p>

<p>Click below to find out what awesome flavors we have for each day of the week!</p>

<p><a href="daily.php?day=Sunday">Sunday</a></p>
<p><a href="daily.php?day=Monday">Monday</a></p>
<p><a href="daily.php?day=Tuesday">Tuesday</a></p>
<p><a href="daily.php?day=Wednesday">Wednesday</a></p>
<p><a href="daily.php?day=Thursday">Thursday</a></p>
<p><a href="daily.php?day=Friday">Friday</a></p>
<p><a href="daily.php?day=Saturday">Saturday</a></p>

<?php get_footer()?>