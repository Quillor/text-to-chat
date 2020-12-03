<?php 
$data = 'notempty';
if (isset($_GET['messages'])) {
    $data = $_GET['messages'];
}
?>
<div id="messages-page">
    <div class="container messages-page-inner px-0">
        <div class="border-bottom px-3 py-2"><h1 class="bold mb-0">Messages</h1></div>
        <div>
            <div class="row d-flex mx-0 px-0">
                <?php
                    if($data == 'empty'){
                        include 'empty-message.php';
                    }
                    else{
                        include 'not-empty-message.php';
                    }
                ?>                
            </div>
        </div>
    </div>
</div>
