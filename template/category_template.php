<li>
    <a href="?category=<?=$category['id']?>"><?=$category['title']?></a>
    <?
        if($category['childs']):
    ?>
    <ul>
        <?
            echo categories_to_string($category['childs']);
        ?>
    </ul>
    <?
        endif;
    ?>

</li>