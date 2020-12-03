<?php
$page = '';
if (isset($_GET['url'])) {
    $page = $_GET['url'];
}

include "inc/header.php";

echo '<div id="box">';

switch ($page) {
    case "messages":
        include "pages/messages/messages.php";
        break;
    case "settings": 
        include "pages/settings/settings.php";
        break;
    default:            
        include "pages/contacts/contacts.php";
}
echo '</div>';
?>

<!-- This is for routes and navigation logic  
    <script>
        $(document).ready(function() {
            //$("#box").load("pages/messages/messages.php");
            $(".navbar li a").click(function(e) {
                e.preventDefault();
                $(".navbar li a").removeClass("active");
                $(this).addClass("active");
            });
        });
        function myFunction(url) {
            $(this).removeClass('active');
            $(this).addClass('active');
            /*
            console.log(url);
            if(url==="Contacts"){
                /* You can remove the ?data=empty to show the data / otherwise everytime you click the navigation it will show the empty field  
                $("#box").load("pages/contacts/contacts.php");
            }
            else if(url==="Messages"){
                $("#box").load("pages/messages/messages.php");
            }
            else{
                $("#box").load("pages/settings/settings.php");
            }*/
        }
    </script>-->
<?php
include "inc/footer.php";
?>
