<?php
 $emails = "jason@example.com, abc@gmail.com";
 $replaced = str_replace("@","(at)",$emails);
 echo "Contact the author of this article at $replaced.";
?>