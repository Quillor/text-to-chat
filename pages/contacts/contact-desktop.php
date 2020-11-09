<div class="contact-desktop  pt-3 ">
   <div class="row d-flex  px-3  align-item-center  justify-content-between mx-0">
      <div class="col-9 mb-2 pl-0">
        <div class="d-flex mb-2 contact-activity-option  ">
            <div class="contact-options active mx-1 ">All</div>
            <div class="contact-options mx-1 ">Unread</div>
            <div class="contact-options mx-1 ">Starred</div>
            <div class="contact-options mx-1  ">Archived</div>
        </div>
      </div>
      <div class="col-3 mb-2  px-0">
            <div class="float-right bg-greenblue rounded-circle contact-add-item">
                <i class="fas fa-user-plus"></i>
            </div>
      </div>
   </div>
   <!-- END  -->
   <div class=" border-top mt-2">
      <div class="">
         <table id="dtVerticalScrollExample2" class="table  table-sm" cellspacing="0"
            width="100%">
            <thead>
               <tr>
                  <th class="th-sm"><input type="checkbox" aria-label="Checkbox for following text input">
                  </th>
                  <th class="th-sm"><i class="fas fa-star "></i></th>
                  <th class="th-sm">NAME
                  </th>
                  <th class="th-sm">LOCATION
                  </th>
                  <th class="th-sm">COMPANY
                  </th>
                  <th class="th-sm">TITLE
                  </th>
                  <th class="th-sm">PHONE
                  </th>
                  <th class="th-sm">EMAIL
                  </th>
                  <th class="th-sm">LAST ACTIVITY
                  </th>
                  <th class="th-sm"><i class="fal fa-trash"></i>
                  </th>
               </tr>
            </thead>
            <tbody>
               <?php
                  for ($i = 0;$i < 20;$i++)
                  { ?>
               <tr>
                  <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                  <td class=""><i class="fas fa-star  <?php echo $x = $i == 1 ? "color-yellow" : ""; ?>"></i></td>
                  <td><?php echo $i;?> Mott Cotter</td>
                  <td><?php echo $i;?> Raleigh, NC</td>
                  <td><?php echo $i;?>  <?php echo $x = $i == 1 ? "Quillor" : "Employus"; ?></td>
                  <td><?php echo $i;?> CTO, Co-Founder</td>
                  <td><?php echo $i;?> 123-123-1234</td>
                  <td><a href="mailto:Matt@employus.com">Matt@employus.com</a></td>
                  <td><?php echo $i;?> Jan 1</td>
                  <td></td>
               </tr>
               <?php
                  }
                  ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<script>
   $(document).ready(function () {
        $('#dtVerticalScrollExample2').DataTable({
        "scrollY": "61vh",
        "scrollCollapse": true,
        //"dom": '<"top"i>rt<"bottom"flp><"clear">',
        "columnDefs": [
            { "orderable": false, "targets": 0 }
        ]
       });
        $('.dataTables_length').addClass('bs-select');
   });
</script>