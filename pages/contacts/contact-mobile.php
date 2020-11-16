<div class="contact-mobile  pt-3 ">
   <div class="px-3  mx-0">
     <!-- Component:SearchSortForm -->
        <form class="px-0 d-block">
            <div class="row px-0 ">
                <div class="col-8 pr-1">
                    <div class="form-group border rounded-pill pl-2 pr-3 py-0 d-flex align-items-center">
                        <i class="fal fa-search color-bgray"></i><input type="input" class="form-control border-0 py-0 px-0 pl-2" id="search" aria-describedby="" placeholder="Search">
                    </div>
                </div>
                <div class="col-4 pl-0">
                    <select class="custom-select w-75 float-right " id="inputGroupSelect01">
                        <option selected>Sort</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </form>
        <!-- Component:SubNavMenu -->
        <div class="d-flex contact-activity-option  flex-wrap">
            <div class="contact-options active mx-1 ">All</div>
            <div class="contact-options mx-1 ">Unread</div>
            <div class="contact-options mx-1 ">Starred</div>
            <div class="contact-options mx-1  ">Archived</div>
            <div class="contact-options mx-1  ">Subscribed</div>
        </div>
   </div>
   <div class="mt-4 pb-5">
        <!-- Create 10 placeholders -->
        <?php for($i = 1; $i < 10; $i++){ ?>
        <!-- Component:ContactListBox -->
        <div class="contact-list-box">
            <p class="name">Mott Cotter</p>
            <p class="title">CTO, Co-Founder</p>
            <div class="row meta-data">
                <div class="col-6">
                    <p class="location"><i class="fas fa-map-marker"></i> Raleigh, NC</p>
                </div>
                <div class="col-6">
                    <p class="company"><i class="far fa-building"></i> EmployUs</p>
                </div>
            </div>
            <div class="row meta-data">
                <div class="col-6">
                    <p class="phone"><i class="far fa-phone"></i> 123-123-1234</p>
                </div>
                <div class="col-6">
                    <p class="email"><i class="fas fa-envelope"></i> matt@email.com</p>
                </div>
            </div>
        </div>
        <?php } ?>
   </div>
   <!-- Component:FloatingActionButton:Contacts -->
   <div class=" bg-greenblue rounded-circle contact-add-item">
        <i class="fas fa-user-plus"></i>
    </div>
</div>
