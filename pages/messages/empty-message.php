
    <div class="col-md-3 border-md-right px-0  py-3 messages-col-block main-inbox-block-list col-12">
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
            <div class=" h-100">
                <div class="d-flex align-items-center justify-content-center  h-100 flex-direction-column">
                    <i class="fas fa-paper-plane fa-5x color-gray"></i>
                    <p class="color-darkgray mb-0 mt-4 mb-2">Text your next hire here.</p>
                    <button id="" class=" btn-custom-secondary btn ">Start a new message</button>
                </div>
                
            </div>
            
        </div>

        <!-- Component:FloatingActionButton -->
        <div class="floating-message-block">
            <div class="floating-message">
                <i class="fas fa-comment"></i>
            </div>
        </div>

    </div> <!-- END INBOX LIST -->

    <div class="col-md-9 col-12 not-empty px-0 pr-1">
        <div class="px-0 messages-col-block border-md-right">
            <div class="d-flex row  align-items-center pt-3 pb-3 border-md-bottom px-1 mx-0 ">
                <div class="col-auto">
                    <p class="text-center mb-0 pb-0">To:</p>
                </div>
                <div class="col">
                    <form class="" action="">
                        
                        <div id="dropdownSearch" class="dropdown-content">
                            <input type="text" placeholder="Search.." id="mySearchBar" class="form-control border py-0 px-0 pl-2 w-100"  onkeyup="filterFunction()">
                            <div id="dropdownSearchResults">
                                <div class="dropdown-search-results-items" data-info="Matt Cotter EmployUS, Raleigh, NC"><span class="bold">Matt Cotter</span> EmployUS, Raleigh, NC</div>
                                <div class="dropdown-search-results-items" data-info="Tim Quillor EmployUS, Raleigh, NC"><span class="bold">Tim Quillor</span> EmployUS, Raleigh, NC</div>
                                <div class="dropdown-search-results-items" data-info="123-456 Unknown"><span class="bold">123-456</span> Unknown</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="message-body h-75">
                
            </div>
            <div class="send-message py-2 px-3 border-md-top">
                <textarea rows="3"></textarea>
                <div class="send-message-button">
                    <button>SEND <i class="fas fa-paper-plane"></i></button>
                </div>
            </div>
            <div class="clear"></div>
        </div><!-- END MESSAGE CONTENT -->
    </div>

<script>
$(document).ready(function(){
    /* When the user click  on the list, display the data in the input search bar */
    $('.dropdown-search-results-items').click(function(event) {
        var data = $(this).attr("data-info") ;
        $('#mySearchBar').val(data);
    });
});

/* When the user type on the searchbar,toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("dropdownSearch").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearchBar");
  filter = input.value.toUpperCase();
  div = document.getElementById("dropdownSearch");
  a = div.getElementsByTagName("div");
    if(input.value.length == 0 ){
        $('#dropdownSearchResults').css("display","none");
    }
    else{
        for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
                a[i].classList.add("show");
                $('#dropdownSearchResults').css("display","flex");
            } else {
                a[i].classList.remove("show");
                a[i].style.display = "none";
            }
        }
    }
}
</script>