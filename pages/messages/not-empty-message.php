            <div class="col-md-3 border-md-right px-0  py-3 messages-col-block main-inbox-block-list col-12 ">
                    <!-- Component:SearchForm -->
                    <form class="px-3">
                        <div class="form-group border rounded-pill pl-2 pr-3 py-0 d-flex align-items-center">
                        <i class="fal fa-search color-bgray"></i><input type="input" class="form-control border-0 py-0 px-0 pl-2" id="search" aria-describedby="" placeholder="Search">
                        </div>
                    </form>

                    <!-- Component:SubNavMenu -->
                    <div class="d-flex flex-wrap mb-2 px-3 inbox-message-status">
                        <div class="inbox-options active mx-1 mb-2">All</div>
                        <div class="inbox-options mx-1 mb-2">Unread</div>
                        <div class="inbox-options mx-1 mb-2">Starred</div>
                        <div class="inbox-options mx-1  mb-2">Archived</div>
                    </div>

                    <div class="inbox-messages-block">
                        <?php include "inbox-list.php" ?>
                    </div>

                    <!-- Component:FloatingActionButton -->
                    <div class="floating-message-block">
                        <div class="floating-message">
                            <i class="fas fa-comment"></i>
                        </div>
                    </div>

                </div> <!-- END INBOX LIST -->

                <div class="col-md-9 col-12 not-empty  px-0 ">
                    <div class="row mx-0">
                        <div class="col-md-8 col-12 px-0 messages-col-block">
                            <div class="d-flex justify-content-between  align-item-center pt-3 pb-2 border-md-bottom px-3 border-md-right border-md-left">
                                <div>
                                    <div class="box-icon"><i class="far fa-envelope"></i></div>
                                </div>
                                <div>
                                    <h3 class="text-center bold">MATT COTTER</h3>
                                </div>
                                <div class="">
                                    <div class="d-flex align-item-center justify-content-center">
                                        <div class="box-icon mr-md-1 bg-yellow"><i class="far fa-star color-white"></i></div>
                                        <div class="box-icon mx-md-1 bg-red"><i class="far fa-archive color-white"></i></div>
                                        <div class="box-icon ml-md-1"><i class="fal fa-user-circle"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="message-body">
                                <?php include "inbox-content.php" ?>
                            </div>
                            <div class="send-message py-2 px-3 border-md-left border-md-right border-md-top">
                                <textarea rows="3"></textarea>
                                <div class="send-message-button">
                                    <button>SEND <i class="fas fa-paper-plane"></i></button>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div><!-- END MESSAGE CONTENT -->


                        <div class="col-md-4 col-12 border-md-left messages-col-block message-details-block">
                            
                            <div class="edit-message-block">
                                <div class="d-md-none d-block">
                                    <h3 class=" bold mb-0">Matt</h3>
                                    <button class="edit-message-unread btn-custom-secondary btn bg-greenblue color-white rounded-pill ">1 unread message</button>
                                </div>
                                
                                <button id="profile-edit-btn" class="edit-message-details btn-custom-secondary btn edit">Edit</button>
                                <button id="profile-save-btn" class="save edit-settings-details btn-custom-secondary btn mr-1 bg-greenblue color-white" >Save</button>
                                <button id="profile-cancel-btn" class="cancel edit-settings-details btn-custom-secondary btn "  >Cancel</button>
                            </div>
                            
                            <div class="message-owner-details">
                                <div class="meta-message-details phone">
                                    <label>Phone</label>
                                    
                                    <p class="form-custom-group profile-custom-group d-flex align-items-center">
                                        <i class="fas fa-phone"></i> 
                                        <input type="text" class=" profile-field" value="919-123-1234" disabled/>
                                    </p>
                                </div>
                                <div class="meta-message-details email">
                                    <label>Email</label>
                                    <p  class="form-custom-group profile-custom-group d-flex align-items-center"> <i class="fas fa-envelope"></i> 
                                    <input type="email" class=" profile-field" value="matt@email.com" disabled/></p>
                                </div>
                                <div class="meta-message-details location">
                                    <label>Location</label>
                                    <p  class="form-custom-group profile-custom-group d-flex align-items-center"> <i class="fas fa-map-marker"></i> 
                                    <input type="text" class=" profile-field" value="Raleigh, NC" disabled/></p>
                                </div>
                                <div class="meta-message-details company">
                                    <label>Company</label>
                                    <p  class="form-custom-group profile-custom-group d-flex align-items-center"> <i class="fas fa-building"></i> 
                                    <input type="text" class=" profile-field" value="EmployUs" disabled/></p>
                                </div>
                                <div class="meta-message-details title">
                                    <label>Title</label>
                                    <p  class="form-custom-group profile-custom-group d-flex align-items-center"> <i class="fas fa-user-alt"></i> 
                                    <input type="text" class=" profile-field" value="Co-Founder, CTO" disabled/></p>
                                </div>
                                <div class="meta-message-details subs">
                                    <label>Title</label>
                                    <p  class="form-custom-group profile-custom-group d-flex align-items-center"> <i class="fas fa-check"></i>
                                    <input type="text" class=" profile-field" value="Opted-In" disabled/></p>
                                </div>
                                <div class="meta-message-details notes">
                                    <label>Notes</label>
                                    <p  class="form-custom-group profile-custom-group d-flex align-items-center border-0">
                                        <textarea rows="4" disabled>Message Note</textarea>
                                    </p>
                                </div>
                            </div>
                        </div><!-- END message-details-block -->
                    </div>
                </div>
                <script>

$(document).ready(function(){
    $('.edit').click(function(event) {
        $(this).hide();
        $(this).siblings('.save, .cancel').show();
        console.log(event.target.id);
        if(event.target.id == "profile-edit-btn"){
            $(".profile-custom-group").addClass("active");
            $(".profile-custom-group").find("input").prop("disabled", false);
            $(".profile-custom-group").find("textarea").prop("disabled", false);
        }
    });

    $('.cancel').click(function(event) {
        $(this).siblings('.edit').show();
        $(this).siblings('.save').hide();
        $(this).hide();
        $(".form-custom-group").removeClass("active");
        $(".form-custom-group").find("input").prop("disabled", true);
        $(".form-custom-group").find("textarea").prop("disabled", true);
    });
    $('.save').click(function(event) {
        $(this).siblings('.edit').show();
        $(this).siblings('.cancel').hide();
        $(this).hide();
        $(".form-custom-group").removeClass("active");
        $(".form-custom-group").find("input").prop("disabled", true);
        $(".form-custom-group").find("textarea").prop("disabled", true);
    });

});
</script>