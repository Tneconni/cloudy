<?php echo $header;?>
<div>

    <ul class="comic-list">
        <?php foreach($products as $product){ ?>
        <li>
            <div>
                <a href="<?php echo $product['link'];?>">
                    <image src="<?php echo $product['image'];?>"/>
                </a>
            </div>
        </li>
        <?php }?>

    </ul>

</div>

<?php echo $footer;?>