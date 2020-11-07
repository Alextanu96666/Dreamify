<?php

class Components {
    function Slider() {
        $data = get_field('slider', get_the_ID());
        ?>
        <div class = "slider" id = "theSlider">
            <span class = "prev" onclick = "prevArrow(this)"><i class='fas fa-chevron-left' style = "cursor: pointer; font-size: 35px;"></i></span>
            <span class = "next" onclick = "nextArrow(this)"><i class='fas fa-chevron-right' style = "cursor: pointer; font-size: 35px;"></i></span>
            <div class = "dots">
                <?php
                 foreach ($data as $value => $key) {
                ?>
                    <span onclick = "slideFunction(this)" class = "dot"></span>
                <?php
                }
                ?>
                </div>
                <?php 
                 foreach ($data as $value => $key) {
                        ?>
                            <div class = "slide" style = "background-image: url( <?= $key['slide']['bild']['url'] ?> )">
                                <div class = "slide-content">
                                    <h1> <?= $key['slide']['content'] ?> </h1>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        <?php
    }

    function Split() {
        $data = get_field('splitscreen', get_the_ID());
        $imageUrls = [];
        $contentText = [];
        $displayDirection = [];
        $splitId = 1;
        foreach ($data as $value => $key) {
             ?>
            <div class="splitscreen" style = "flex-direction: <?= $key['flex_direction'] ?>" id = "theSplitscreen-<?= $splitId ?>">
                <div class="content"> 
                    <div class="inner-content">
                        <?= $key['content'] ?>
                    </div>
                </div>
                <div class="image" style = "background-image: url( <?= $key['bild']['url'] ?> )"></div>
            </div>
            <?php
            $splitId++;
        }
    }


    function Banner() {
        ?>
            <div class="banner">
                <div class="banner-content"> <h1>This is just a Banner</h1> </div>
            </div>
        <?php
    }
}