<?php
	get_header();
?>
<?php if (is_category('Productivity')) : ?>
    <p>This is the text to describe category A</p>
<?php elseif (is_category('Category B')) : ?>
    <p>This is the text to describe category B</p>
<?php else : ?>
    <p>This is some generic text to describe all other category pages,
        I could be left blank</p>
<?php endif; ?>
<?php

	get_footer();
