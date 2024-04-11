
<div class="side-bar-div">
    <ul>
       <li class=" active-li" onclick="_get_page('dashboard','dashboard')" id="sdashboard" ><i class="bi-speedometer2"></i> Dashboard </li>
        <?php if($role_id>1){?>
            <li id="sadmin" onclick="_get_page('view_all_staff','admin');" title="Administrators"><i class="bi-people-fill"></i> Administrators </li>

       <?php }?>
        
       <li id="faculty" onclick="_get_page('view_faculty','faculty');" title="faculty"> <i class="bi-people"></i> Faculty</li>
       <li id="department" onclick="_get_page('view_department','department');" title="department"> <i class="bi-people"></i> View Department    </li>
       <li id="course" onclick="_get_page('view_course','course');" title="course"> <i class="bi-people"></i> View Course    </li>
    <li id="gpa" onclick="_get_form_page('view_gpa','gpa');" title="course"> <i class="bi-people"></i> Student GP    </li>
        
        <li id="payment" onclick="_get_page('view_all_payment','payment');" title="Payment Report">  <i class="bi-credit-card"></i> Payment Report  </li>
        <?php if($role_id>1){?>
        <li id="setting" onclick="_expand_link('settings');"  title="Settings">  <i class="bi-wrench"></i> Settings </i>
            <div class="dashboard-in" id="settings-li" style="display:none">   
                <div class="li-in"> - System Settings</div>
                <div class="li-in" onclick="_get_form_page('change_password','setting');"> - Change Password</div>
            </div>
        </li>
        <?php }?>
        <form method="post" action="config/code.php" name="logoutform">
        <input type="hidden" name="action" value="logout"/>
        <button class="logout-btn" type="submit" title="Log Out"><i class="bi-power"></i> Log-Out </button>
        </form>
    </ul>
</div>  