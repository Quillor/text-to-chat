<?php

include "inc/header.php";

echo '<div id="box"></div>';
//include "pages/messages/messages.php";
//include "pages/contacts/contacts.php";?>


    <script>
        $(document).ready(function() {
            $("#box").load("pages/contacts/contacts.php");
            $(".navbar li a").click(function(e) {
                e.preventDefault();
                $(".navbar li a").removeClass("active");
                $(this).addClass("active");
            });
        });
        function myFunction(url) {
            $(this).removeClass('active');
            $(this).addClass('active');
            if(url==="Contacts"){
                    $("#box").load("pages/contacts/contacts.php");
            }
            else if(url==="Messages"){
                    $("#box").load("pages/messages/messages.php");
            }
        }
    </script>
<?php
include "inc/footer.php";
?>
