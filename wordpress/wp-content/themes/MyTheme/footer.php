<?php 
wp_footer(); 
$data = get_field('footer', get_the_ID());

?>
    <div class="footer" id = "theFooter">
        <div class="inner-footer">
            <?php
                foreach ($data as $value => $key) {
                    ?>
                        <div class="footer-element">
                            <?php
                                foreach ($key['footer_element']['links'] as $link) {
                                    ?>
                                        <li class = "footer-link"> <a href = ""><?= $link['link'] ?></a></li>
                                    <?php
                                }
                            ?>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
<?php


