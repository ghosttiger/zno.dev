<?

include 'function/function_conect.php';
include 'function/function_menu.php';

$categories = get_cat();
$categories_tree = map_tree($categories);
$categories_menu = categories_to_string($categories_tree);
?>

<html>
<head>
<title>Каталог</title>
<link rel="stylesheet" href="style/style.css"/>
</head>
<body>
<a href="index.php">Главная</a>
<div class="wrapper">
 <div class="sidebar">
     <ul class="category">
        <? echo $categories_menu; ?>
     </ul>
 </div>
 <div class="content"><? print_arr($categories_tree);?></div>
</div>
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.accordion.js"></script>
<script>
    $(document).ready(function(){
        $(".category").dcAccordion();
    });
</script>
</body>
</html>