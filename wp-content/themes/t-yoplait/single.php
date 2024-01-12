<?php
if(get_post_type() == ""){
    get_template_part("templates/single/");
}
elseif(get_post_type() == ""){
    get_template_part("templates/single/");
}
else{
    get_template_part("templates/single/post", "single");
}
?>
