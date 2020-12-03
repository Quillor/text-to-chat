<!-- Component:MobileNavbar -->
<div class="mobile-nav navbar py-0 bottom-navigation">
    <ul class="navbar-nav ml-auto">
        <!-- Component:NavItem:Mobile:Inactive -->
        <li class="nav-item  flex-fill" >
            <a class="nav-link <?php echo ($page == 'contacts' || $page == '') ? 'active':''; ?>"  href="?url=contacts" >
                <i class="fal fa-users"></i> <span class="">Contacts</span>
            </a>
        </li>
        <!-- Component:NavItem:Mobile:Active -->
        <li class="nav-item flex-fill active">
            <a class="nav-link <?php echo ($page == 'messages') ? 'active':''; ?>" href="?url=messages">
                <i class="fas fa-comment"></i> <span class="">Messages</span>
            </a>
        </li>
        <!-- Component:NavItem:Mobile:Inactive -->
        <li class="nav-item flex-fill">
            <a class="nav-link <?php echo ($page == 'settings') ? 'active':''; ?>" href="?url=settings" >
            <i class="far fa-cog"></i> <span class="">Settings </span></a>
        </li>
    </ul>
</div>
