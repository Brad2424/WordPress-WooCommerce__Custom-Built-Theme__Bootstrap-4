<?php
/*
    ==================================================
    Filter functions
    ==================================================
*/
function setExcerptLength ($length) {
    return 40;
}
add_filter( 'excerpt_length', 'setExcerptLength', 999);

?>