<div id="messages-page">
    <div class="container messages-page-inner px-0">
        <div class="border-bottom px-3 py-2"><h1 class="bold mb-0">Messages</h1></div>
        <div>
            <div class="row d-flex mx-0 px-0">

                <div class="col-md-3 border-md-right px-0  py-3 messages-col-block main-inbox-block-list">
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


                <div class="col-md-6  px-0 messages-col-block">
                    <div class="d-flex justify-content-between  align-item-center pt-3 pb-2 border-md-bottom px-3 border-md-right border-md-left">
                        <div>
                            <div class="box-icon"><i class="far fa-envelope"></i></div>
                        </div>
                        <div>
                            <h3 class="text-center bold">MATT COTTER</h3>
                        </div>
                        <div class="">
                            <div class="d-flex align-item-center justify-content-center">
                                <div class="box-icon mr-md-1"><i class="far fa-star"></i></div>
                                <div class="box-icon mx-md-1"><i class="far fa-archive"></i></div>
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


                <div class="col-md-3 border-md-left messages-col-block message-details-block">
                    <div class="edit-message-block">
                        <button class="edit-message-details btn-custom-secondary btn">Edit</button>
                    </div>
                    <div class="message-owner-details">
                        <div class="meta-message-details phone">
                            <label>Phone</label>
                            <p> <i class="fas fa-phone"></i> 919-123-1234</p>
                        </div>
                        <div class="meta-message-details email">
                            <label>Email</label>
                            <p> <i class="fas fa-envelope"></i> matt@email.com</p>
                        </div>
                        <div class="meta-message-details location">
                            <label>Location</label>
                            <p> <i class="fas fa-map-marker"></i> Raleigh, NC</p>
                        </div>
                        <div class="meta-message-details company">
                            <label>Company</label>
                            <p> <i class="fas fa-building"></i> EmployUs</p>
                        </div>
                        <div class="meta-message-details title">
                            <label>Title</label>
                            <p> <i class="fas fa-user-alt"></i> Co-Founder, CTO</p>
                        </div>
                        <div class="meta-message-details subs">
                            <label>Title</label>
                            <p> <i class="fas fa-check"></i> Opted-In</p>
                        </div>
                        <div class="meta-message-details notes">
                            <label>Notes</label>
                            <textarea rows="4"></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
