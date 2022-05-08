
<?php // function to get the current page name
function PageName() {
  return substr( $_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"],"/") +1);
}


$current_page = PageName();
?>
<div class="sidebar sidebar-style-2"    data-background-color="">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a href="index.php" >
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
 
            </ul>
        </div>
    </div>
</div>