<div id='container'>
    <div id='content'>
        <div class='galleryItem full_width'>

        <div class="">
        <h3 class="title">
            <a href="#">
                <FONT COLOR="000000">Daily News</FONT>
            </a>
        </h3>
            <ol class="wide o-hidden ">
                <li class="first ">
                    <a href="#" title="Best New Aurora Pictures" class="">
                        <img src="#"  width="160" height="120" alt="A picture of aurora borealis over Uttakleiv, Norway   " />
                    </a>
                    <p class="headline"><a href="#" title="Best New Aurora Pictures" >Best New Aurora Pictures</a></p>
                </li>

                <?php if(!empty($apps)){ ?>
                <?php foreach($apps as $app){ ?>
                        <li class=" ">
                            <a href="#" title=" " class="" >
                                <img src="#"  width="160" height="120" alt="wagner-shark.jpg" />
                            </a>
                            <p class="headline"><a href="index.php?r=parts&parts_id=<?php echo $app->id; ?>"
                                                   title="<?php echo $app->name; ?>" >
                                <?php echo $app->name; ?>
                            </a></p>
                        </li>
                <?php } ?>
                <?php } ?>

                <li class=" ">
                    <a href="#" title="Two-Headed Shark Found" class="">
                        <img src="#"  width="160" height="120" alt="wagner-shark.jpg" />
                    </a>
                    <p class="headline"><a href="#" title="Two-Headed Shark Found" >Two-Headed Shark Found</a></p>
                </li>

                <li class="last ">
                    <a href="#" title="9 Extinct Species to Revive" class="">
                        <img src="#"  width="160" height="120" alt="Woolly mammoth picture - museum worker checks hair of woolly mammoth replica" />
                    </a>
                    <p class="headline"><a href="#" title="9 Extinct Species to Revive" >9 Extinct Species to Revive</a></p>
                </li>


            </ol>
        </div>

        </div>
    </div>
</div>
