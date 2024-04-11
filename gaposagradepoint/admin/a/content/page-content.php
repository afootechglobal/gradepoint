


<?php if ($page=='dashboard'){ ?>
    
    <div class="main-dashboard-div animated fadeIn" >
                <div class="text" style="text-align:left; padding:20px"><i class="fa fa-line-chart"></i> Showing Matrix for</div> 
                
     
        <div class="count-div ">
            <div class="count-div-in">
                <div class="div-in">
                <span class="numb" id="count_users"></span><br>
                <script>_get_users_count('1,2');</script>
                <span>Total Users</span>
               
                </div>
            </div>
            
            <div class="count-div-in">
                <div class="div-in">
                    <span class="numb" id="count_staff"></span><br>
                    <script>_get_staff_count('1');</script>
                    <span>Total Staff</span>
                    
                </div>
            </div>

            <div class="count-div-in">
                <div class="div-in">
                    <span class="numb" id="count_member"></span><br>
                    <script>_get_member_count('2');</script>
                    <span>Total Student</span>
                </div>
            </div>


            <div class="count-div-in">
                <div class="div-in">
                    <span class="numb" id="count_member">5</span><br>
                    <script>_get_member_count('2');</script>
                    <span>Total Faculty</span>
                </div>
            </div>




            <div class="count-div-in">
                <div class="div-in">
                    <span class="numb" id="count_member">50</span><br>
                    <script>_get_member_count('2');</script>
                    <span>Total Department</span>
                </div>
            </div>


            <div class="count-div-in">
                <div class="div-in">
                    <span class="numb" id="count_member">190</span><br>
                    <script>_get_member_count('2');</script>
                    <span>Total Courses</span>
                </div>
            </div>



    </div> 

<?php } ?>






<?php if ($page=='view_all_staff'){ 
     $search_page='view_search_staff';
    ?>

<div class="main-dashboard-div" >
         <div class="search-div animated fadeIn">
             <!--------------------------------all search select------------------------->
             <select id="status_id" class="text_field status_text" onchange="_get_status('view_search_staff')" title="SELECT STATUS">
                <option value="" >SELECT STATUS </option>
                <script>_get_select_status('1,2');</script>
            </select> 
           
           
             <input id="search_txt"  type="text" class="text_field " onkeyup="_get_search('view_search_staff')" placeholder="Type here to search..." title="Type here to search" />
         </div>
         <div class="add-alert-div">
             <i class="bi-list"></i><span id="">ADMINISTRATOR'S LIST</span>
             <button class="btn"  onclick="_get_form_page('staff_registration');"><i class="bi-person-plus"></i>ADD NEW ADMIN/STAFF</button>
         </div>

             <div class="back-div"  id="fetch_staff" >
                <div class="fetch animated fadeIn" id="fetch">
                <script> _get_fetch_all_staff('','','');</script>
              
                </div>
             </div>    
     </div> 

     <script>
        superplaceholder({el: search_txt,
            sentences: ['Type here to search...', 'Staff ID e.g STF000765976964','Mobile number e.g 09021947874','E-mail e.g afootechglobal@gmail.com'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
    
<?php } ?>







<?php if ($page=='view_faculty'){?>

<div class="main-dashboard-div" >
         
         <div class="add-alert-div">
             <i class="bi-list"></i><span id="page-title">FACULTY LIST</span>
             <button class="btn"  onclick="_get_form_page('faculty_registration','');"><i class="bi-person-plus"></i>ADD NEW FACULTY</button>
         </div>

                
         <div class="fetch animated fadeIn" id="fetch">
          
                <script> _get_fetch_faculty('');</script>
            </div>
                   
     </div> 

     <script>
        superplaceholder({el: search_txt,
            sentences: ['Type here to search...', 'Mobile number e.g 08131252996','Fullname e.g Afootech Global'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
<?php } ?>







<?php if ($page=='faculty_registration'){  ?>
<div class="reg-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
            <?php if ($id==''){?>
                <span id="panel-title"><i class="fa fa-plus"></i> ADD NEW FACULTY</span>
           <?php } else{?>
            <span id="panel-title"><i class="fa fa-plus"></i> UPDATE FACULTY</span>
           <?php } ?>
        <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div" >
         <div class="inner-div">
                <div class="title">FACULTY NAME: <span>*</span></div>
                <input  type="text" class="text_field" placeholder="FACULTY NAME" title="FACULTY NAME" id="faculty_name" />

                <button class="action-btn" type="button" title="Submit" id="submit_btn" onclick="_reg_faculty('<?php echo $id?>');"> <i class="bi-check"></i> SUBMIT </button>
        <script> _get_faculty_detail('<?php echo $id?>');</script>
            </div>
    </div> 
</div>
<?php } ?>





   
<?php if ($page=='view_department'){?>

<div class="main-dashboard-div" >
         <div class="search-div animated fadeIn">
            
             <input id="search_txt"  type="text" class="text_field full" onkeyup="_get_search('view_search_member')" placeholder="Type here to search..." title="Type here to search" />
         </div>
         <div class="add-alert-div">
             <i class="bi-list"></i><span id="page-title">DEPARTMENT LIST</span>
             <button class="btn"  onclick="_get_form_page('department_registration','');"><i class="bi-person-plus"></i>ADD NEW DEPARTMENT</button>
         </div>

             <div class="back-div " id="fetch_staff" >
             <div class="fetch animated fadeIn" id="fetch">
             <script> _get_fetch_department('');</script>
            </div>
                   
             </div>    
     </div> 

     <script>
        superplaceholder({el: search_txt,
            sentences: ['Type here to search...', 'Mobile number e.g 08131252996','Fullname e.g Afootech Global'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
<?php } ?>





<?php if ($page=='department_registration'){ 
    
    ?>
<div class="reg-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
        <?php if ($id==''){?>
                <span id="panel-title"><i class="fa fa-plus"></i> ADD NEW DEPARTMENT</span>
           <?php } else{?>
            <span id="panel-title"><i class="fa fa-plus"></i> UPDATE DEPARTMENT</span>
           <?php } ?>
        <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div" >
         <div class="inner-div">
                <div class="title">SELECT FACULTY: <span>*</span></div>
                <select id="faculty_id" class="text_field select_field" title="SELECT FACULTY">
                    <script>_get_select_faculty();</script>
                </select>

                <div class="title">DEPARTMENT NAME: <span>*</span></div>
                <input  type="text" class="text_field" placeholder="DEPARTMENT NAME" title="DEPARTMENT NAME" id="deparment_name"/>

                <button class="action-btn" type="button" title="Submit" id="submit_btn" onclick="_reg_department('<?php echo $id?>');"> <i class="bi-check"></i> SUBMIT </button>
                <script> _get_department_detail('<?php echo $id?>');</script>
        </div>
    </div> 
</div>
<?php } ?>










<?php if ($page=='view_course'){?>

<div class="main-dashboard-div" >
         <div class="search-div animated fadeIn">
            
             <input id="search_txt"  type="text" class="text_field full" onkeyup="_get_search('view_search_member')" placeholder="Type here to search..." title="Type here to search" />
         </div>
         <div class="add-alert-div">
             <i class="bi-list"></i><span id="page-title">COURSE LIST</span>
             <button class="btn"  onclick="_get_form_page('course_registration');"><i class="bi-person-plus"></i>ADD NEW COURSE</button>
         </div>

             <div class="back-div " id="fetch_staff" >
             <div class="fetch animated fadeIn" id="fetch">
                <script> _get_fetch_all_member('','','');</script>
            </div>
                   
             </div>    
     </div> 

     <script>
        superplaceholder({el: search_txt,
            sentences: ['Type here to search...', 'Mobile number e.g 08131252996','Fullname e.g Afootech Global'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
<?php } ?>





<?php if ($page=='view_gpa'){ ?>

        <div class="center-div">
            <div class="div-in">
                <h4>PROVIDE STUDENT MATRIC NO  <div class="close" title="Close" onclick="_alert_close();">X</div></h4>
            <div class="title"> STUDENT MATRIC NO: <span>*</span></div>
            <input  type="text" class="text_field" placeholder="STUDENT MATRIC NO" title="STUDENT MATRIC NO" id="matric_no"/>
           
            <button class="action-btn" type="button" title="Submit" id="submit_btn" onclick="_get_page('student_detail');"> PROCEED </button>

            </div>
        </div>


<?php } ?>





<?php if ($page=='student_detail'){?>

<div class="main-dashboard-div" >
         <div class="add-alert-div">
             <i class="bi-list"></i><span id="page-title">STUDENT DETAILS</span>
             <button class="btn"  onclick="_get_form_page('course_registration');"><i class="bi-person-plus"></i>ADD NEW COURSE</button>
         </div>

            
             <div class="fetch animated fadeIn" id="fetch">
                    <div class="detail-div">
                        <div class="detail-in">
                            <div class="img-div"><img src="<?php echo $website_url?>/admin/a/all-images/images/friends.png" alt=""></div>
                            <div class="info-div">
                               <h4>AFOLABI TAIWO ABAYOMI</h4>
                                 Matric No:  <span>203474384838</span><br>
                                Department: <span>COMPUTER SCIENCE DEPARTMENT</span><br>
                                Diploma:  <span>ND 1</span>
                                <br clear="all"/>
                                <button class="btn">View Profile</button>
                                <button class="btn"  onclick="_get_form_page('calculate_gp');">Calculate GP</button>
                                <button class="btn">View Result</button>
                            </div>
                            <br clear="all"/>
                            <br clear="all"/>
                        </div>
                    </div>


                <script> _get_fetch_all_member('','','');</script>
            </div>
                   
             
     </div> 

     <script>
        superplaceholder({el: search_txt,
            sentences: ['Type here to search...', 'Mobile number e.g 08131252996','Fullname e.g Afootech Global'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
<?php } ?>





<?php if ($page=='calculate_gp'){ 
    
    ?>
<div class="reg-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
        <span id="panel-title"><i class="fa fa-plus"></i> STUDENT GPA</span>
        <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div" >
         <div class="inner-div">
                <div class="title">SELECT SEMESTER: <span>*</span></div>
                <select id="semester" onChange="_semester();"  class="text_field select_field" title="SELECT FACULTY">
                    <option value="" selected>SELECT SEMESTER</option>
                    <option value="nd1">FIRST SEMESTER</option>
                    <option value="nd2">SECOND SEMESTER</option>
                    <script>_get_select_role('1,2');</script>
                </select>


                    <div class="semester-div" id="nd1">
                        <div class="alert">Kindly fill the form below to calculate <span>FIRST SEMESTER STUDENT GPA</span></div>
                        <div class="title">COURSE TITLE: <span>*</span></div>
                        <input  type="text" class="text_field" placeholder="COURSE TITLE" title="COURSE TITLE" id="course_name"/>

                        <button class="action-btn" type="button" title="Submit" id="submit_btn" onclick="_reg_and_updt_mem('<?php echo $page?>','');"> <i class="bi-check"></i> SUBMIT </button>

                    </div>

                    <div class="semester-div" id="nd2">
                        <div class="alert">Kindly fill the form below to calculate <span>SECOND SEMESTER STUDENT GPA</span></div>
                        <div class="title">COURSE TITLE: <span>*</span></div>
                        <input  type="text" class="text_field" placeholder="COURSE TITLE" title="COURSE TITLE" id="course_name"/>

                        <button class="action-btn" type="button" title="Submit" id="submit_btn" onclick="_reg_and_updt_mem('<?php echo $page?>','');"> <i class="bi-check"></i> SUBMIT </button>

                    </div>
                

              
        </div>
    </div> 
</div>
<?php } ?>









<?php if ($page=='course_registration'){ 
    
    ?>
<div class="reg-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
        <span id="panel-title"><i class="fa fa-plus"></i> ADD NEW COURSE</span>
        <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div" >
         <div class="inner-div">
                <div class="title">SELECT FACULTY: <span>*</span></div>
                <select id="faculty_ida" class="text_field select_field" title="SELECT FACULTY">
                    <script>_get_select_role('1,2');</script>
                </select>

                <div class="title">SELECT DEPARTMENT: <span>*</span></div>
                <select id="department_id" class="text_field select_field" title="SELECT DEPARTMENT">
                    <script>_get_select_role('1,2');</script>
                </select>

                <div class="title">SELECT LEVEL: <span>*</span></div>
                <select id="level" class="text_field select_field" title="SELECT LEVEL">
                    <script>_get_select_role('1,2');</script>
                </select>

                <div class="title">COURSE CODE: <span>*</span></div>
                <input  type="text" class="text_field" placeholder="COURSE CODE" title="COURSE CODE" id="course_code"/>


                <div class="title">COURSE TITLE: <span>*</span></div>
                <input  type="text" class="text_field" placeholder="COURSE TITLE" title="COURSE TITLE" id="course_name"/>

                <button class="action-btn" type="button" title="Submit" id="submit_btn" onclick="_reg_and_updt_mem('<?php echo $page?>','');"> <i class="bi-check"></i> SUBMIT </button>
        </div>
    </div> 
</div>
<?php } ?>




<?php if ($page=='staff_registration'){ ?>
<div class="reg-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
        <span id="panel-title"><i class="fa fa-plus"></i> ADD NEW ADMIN/STAFF</span>
        <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div" >
         <div class="inner-div">

                <div class="alert">Kindly fill the form below to <span>ADD A ADMIN/STAFF</span></div>

                <div class="title">FULL NAME: <span>*</span></div>
                <input  type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" id="reg_fullname"/>

                <div class="title">EMAIL ADDRESS: <span>*</span></div>
                <input type="email"  class="text_field" placeholder="EMAIL ADDRESS" title="EMAIL ADDRESS" id="reg_email" />

                <div class="title">PHONE NUMBER: <span>*</span></div>
                <input type="tel"  class="text_field" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER" id="reg_mobile" />

                <div class="title">SELECT COUNTRY: <span>*</span></div>
                <select id="reg_country_id" class="text_field select_field" title="SELECT COUNTRY">
                <script>_get_select_country();</script>
                </select>

                <div class="title">HOME ADDRESS: <span>*</span></div>
                <input type="text"  class="text_field" placeholder="HOME ADDRESS" title="HOME ADDRESS" id="reg_address" />

                <div class="title">SELECT POSITION: <span>*</span></div>
                <select id="reg_position_id" class="text_field select_field" title="SELECT POSTION" >
                  <script>_get_select_position();</script>
                </select>

                <div class="title">SELECT ROLE: <span>*</span></div>
                <select id="reg_role_id" class="text_field select_field" title="SELECT ROLE">
                
                    <script>_get_select_role('1,2');</script>
                </select>

                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="reg_status_id" class="text_field select_field" title="SELECT STATUS">
                    <script>_get_select_status('1,2');</script>
                </select> 
                    <button class="action-btn" type="button" title="Submit" id="submit_btn" onclick="_reg_and_updt_staff('<?php echo $page?>','');"> <i class="bi-check"></i> SUBMIT </button>
        </div>
    </div> 
</div>
<?php } ?>





<?php if ($page=='staff_login_profile'){?>

<div class="main-dashboard-div animated fadeIn" >
   <div class="info_div">
       
             <legend style="text-align:left;font-weight: bold;padding:15px 0px 15px 10px">ADMIN/STAFF PROFILE</legend>
           <div class="individual-input">     
                   <div class="title">STAFF ID: <span>*</span></div>
                   <input  type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" id="updt_staff_id" readonly="" require=""/>
               </div>

               <div class="individual-input">     
                   <div class="title">FULL NAME: <span>*</span></div>
                   <input  type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" id="updt_fullname"/>
               </div>

               <div class="individual-input">     
                   <div class="title">EMAIL ADDRESS: <span>*</span></div>
                   <input type="email"  class="text_field" placeholder="EMAIL ADDRESS" title="EMAIL ADDRESS" id="updt_email" />
               </div>

               <div class="individual-input"> 
                   <div class="title">PHONE NUMBER: <span>*</span></div>
                   <input type="tel"  class="text_field" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER" id="updt_mobile" />
               </div>

               <div class="individual-input">
                   <div class="title">SELECT COUNTRY: <span>*</span></div>
                   <select id="updt_country_id" class="text_field select_field" title="SELECT COUNTRY">
                   <script>_get_select_country();</script>
                   </select>
               </div>

               <div class="individual-input">
                   <div class="title">HOME ADDRESS: <span>*</span></div>
                   <input type="text"  class="text_field" placeholder="HOME ADDRESS" title="HOME ADDRESS" id="updt_address" />
               </div>

               <div class="individual-input">
                   <div class="title">SELECT POSITION: <span>*</span></div>
                   <select id="updt_position_id" class="text_field select_field" title="SELECT POSTION" >
                   <script>_get_select_position();</script>
                   </select>
               </div>

               <div class="individual-input">
                   <div class="title">SELECT ROLE: <span>*</span></div>
                   <select id="updt_role_id" class="text_field select_field" title="SELECT ROLE">
                   <script>_get_select_role('1,2,3');</script>
                   </select>
               </div>

               <div class="individual-input">
                   <div class="title">SELECT STATUS: <span>*</span></div>
                        <select id="updt_status_id" class="text_field select_field" title="SELECT STATUS">
                                <script>_get_select_status('1,2');</script>     
                        </select>
               </div> 
              
            <legend style="text-align:center;padding:15px 0px 15px 10px">Click to Upload Pix <i class="bi-upload" ></i></legend>
           
            <label>
                <div class="pix-div">
                    <div class="pix-in">
                        <div id="profile_login_pix"><img id="passport-one" src="all-images/images/friends.png" alt="Profile pix"  /></div>
                        <input type="file" id="passport"  style="display:none" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG" onchange="staff_login_profile_pix.UpdatePreview(this);"/>
                    </div>
                </div>
            </label>
           <script> _upload_pix_('<?php echo $staff_id?>');</script>

       </div>
       <button class="update_btn"  type="button" id="update_btn"  onClick="_reg_and_updt_staff('<?php echo $page?>','<?php echo $staff_id?>')" title="UPDATE PROFILE"><i class="bi-check"></i> UPDATE PROFILE</button>
  

    </div> 
<?php } ?>











<?php if ($page=='staff_profile'){?>

<div class="main-dashboard-div animated fadeIn" >
   <div class="info_div">
       
             <legend style="text-align:left;font-weight: bold;padding:15px 0px 15px 10px">ADMIN/STAFF PROFILE</legend>
           <div class="individual-input">     
                   <div class="title">STAFF ID: <span>*</span></div>
                   <input  type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" id="updt_staff_id" readonly="" require=""/>
               </div>

               <div class="individual-input">     
                   <div class="title">FULL NAME: <span>*</span></div>
                   <input  type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" id="updt_fullname"/>
               </div>

               <div class="individual-input">     
                   <div class="title">EMAIL ADDRESS: <span>*</span></div>
                   <input type="email"  class="text_field" placeholder="EMAIL ADDRESS" title="EMAIL ADDRESS" id="updt_email" />
               </div>

               <div class="individual-input"> 
                   <div class="title">PHONE NUMBER: <span>*</span></div>
                   <input type="tel"  class="text_field" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER" id="updt_mobile" />
               </div>

               <div class="individual-input">
                   <div class="title">SELECT COUNTRY: <span>*</span></div>
                   <select id="updt_country_id" class="text_field select_field" title="SELECT COUNTRY">
                   <script>_get_select_country();</script>
                   </select>
               </div>

               <div class="individual-input">
                   <div class="title">HOME ADDRESS: <span>*</span></div>
                   <input type="text"  class="text_field" placeholder="HOME ADDRESS" title="HOME ADDRESS" id="updt_address" />
               </div>

               <div class="individual-input">
                   <div class="title">SELECT POSITION: <span>*</span></div>
                   <select id="updt_position_id" class="text_field select_field" title="SELECT POSTION" >
                   <script>_get_select_position();</script>
                   </select>
               </div>

               <div class="individual-input">
                   <div class="title">SELECT ROLE: <span>*</span></div>
                   <select id="updt_role_id" class="text_field select_field" title="SELECT ROLE">
                   <script>_get_select_role('1,2,3');</script>
                   </select>
               </div>

               <div class="individual-input">
                   <div class="title">SELECT STATUS: <span>*</span></div>
                   <select id="updt_status_id" class="text_field select_field" title="SELECT STATUS">
                   <script>_get_select_status('1,2');</script>
                   </select>
               </div> 
              
            <legend style="text-align:center;padding:15px 0px 15px 10px">Click to Upload Pix <i class="bi-upload" ></i></legend>
           
            <label>
                <div class="pix-div">
                    <div class="pix-in">
                        <div id="profile_pix"><img id="passport-four" src="all-images/images/friends.png"  /></div>
                        <input type="file" id="passport"  style="display:none" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG" onchange="staff_profile_pix.UpdatePreview(this);"/>
                    </div>
                </div>
            </label>
           <script> _upload_staff_pix_('<?php echo $staff_id?>'); </script>

       </div>
       <button class="update_btn"  type="button" id="update_btn"  onClick="_reg_and_updt_staff('<?php echo $page?>','<?php echo $staff_id?>')" title="UPDATE PROFILE"><i class="bi-check"></i> UPDATE PROFILE</button>
  

    </div> 
<?php } ?>









<?php if ($page=='member_profile'){   ?>

<div class="main-dashboard-div animated fadeIn" >
   <div class="info_div">
       
             <legend style="text-align:left;font-weight: bold;padding:15px 0px 15px 10px">MEMBER PROFILE</legend>
           <div class="individual-input">     
                   <div class="title">MEMBERSHIP ID:</div>
                   <input  type="text" class="text_field"  title="MEMBERSHIP ID" id="updt_membership_id" require="" readonly=""/>
               </div>

               <div class="individual-input">     
                   <div class="title">FULL NAME: <span>*</span></div>
                   <input  type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" id="updt_fullname"/>
               </div>

               <div class="individual-input"> 
                   <div class="title">PHONE NUMBER: <span>*</span></div>
                   <input type="tel"  class="text_field" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER" id="updt_mobile" />
               </div>

               <div class="individual-input">
                   <div class="title">HOME ADDRESS: <span>*</span></div>
                   <input type="text"  class="text_field" placeholder="HOME ADDRESS" title="HOME ADDRESS" id="updt_address" />
               </div>

               <div class="individual-input">
                   <div class="title">SELECT COUNTRY: <span>*</span></div>
                   <select id="updt_country_id" class="text_field select_field" title="SELECT COUNTRY">
                     <script>_get_select_country();</script>
                   </select>
               </div>

               <div class="individual-input">
                   <div class="title">SELECT POSITION:</div>
                   <select id="updt_position_id" class="text_field select_field" title="SELECT POSTION" >
                   <script>_get_select_position();</script>
                   </select>
               </div>


               <div class="individual-input">
                   <div class="title">SELECT MEMBERSHIP TYPE: <span>*</span></div>
                   <select id="updt_mem_type_id" class="text_field select_field" title="SELECT MEMBERSHIP TYPE">
                   <script>_get_select_membership_type();</script>
                   </select>
               </div>


               <div class="individual-input">
                    <div class="title">SELECT STATUS: <span>*</span></div>
                    <select id="updt_status_id" class="text_field select_field" title="SELECT STATUS">
                    <script>_get_select_status('1,2');</script>
                    </select>
                </div> 

                
               <div class="individual-input">
                   <div class="title">REGISTERED BY:</div>
                   <input type="text"  class="text_field" id="updt_registered_by" require="" readonly="" />
               </div>


               <!-- <div class="individual-input">
                   <div class="title">UPDATED BY:</div>
                   <input type="text"  class="text_field" id="updt_updated_by" require="" readonly="" />
               </div> -->
          
             
       </div>
       <button class="update_btn"  type="button" id="update_btn"  onClick="_reg_and_updt_mem('<?php echo $page?>','<?php echo $mem_id?>')" title="UPDATE PROFILE"><i class="bi-check"></i> UPDATE PROFILE</button>
  

    </div> 
<?php } ?>










<?php if ($page=='view_all_payment'){?>

<div class="main-dashboard-div" >
         <div class="search-div animated fadeIn">
             <!--------------------------------all search select------------------------->
             <select id="status_id" class="text_field status_text" onchange="_get_status('view_search_payment')" title="SELECT STATUS">
              
                <script>_get_select_status('3,4');</script>
            </select>
             <input id="search_txt"  type="text" class="text_field " onkeyup="_get_search('view_search_payment')" placeholder="Type here to search..." title="Type here to search" />
         </div>
         <div class="add-alert-div">
             <i class="bi-list"></i><span id="">PAYMENT REPORT LIST</span>
             <button class="btn"  onclick="_get_form_page('staff_registration');"><i class="bi-person-plus"></i>ADD NEW ADMIN/STAFF</button>
         </div>

             <div class="back-div payment-back-div">
                    <div class="fetch animated fadeIn">
                        <div class="table-div" id="message">
                            <table  cellspacing="0" id="fetch"> 
                                <script>_get_fetch_all_payment('','','');</script>     
                            </table>
                        </div>
                    </div>
            </div>    
</div> 
<script>
        superplaceholder({el: search_txt,
            sentences: ['Type here to search...', 'Mobile number e.g 08131252996 ','Payment ID e.g PAY_00247395838932'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
<?php } ?>




<?php if ($page=='view_paymwent'){ ?>
<div class="reg-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
        <span id="panel-title"><i class="fa fa-plus"></i> PAYMENT REPORT </span>
        <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div" >
         <div class="inner-div">
                <div class="title">TRANSACTION ID:</div>
                <input  type="text" class="text_field" placeholder="PAYMENT ID" title="PAYMENT ID" id="pay_id" require="" readonly=""/>

                <div class="title">MEMBER NAME: </div>
                <input type="email"  class="text_field" placeholder="MEMBER NAME" title="MEMBER NAME" id="pay_name" require="" readonly=""/>

                <div class="title">PHONE NUMBER:</div>
                <input type="text"  class="text_field"  placeholder="PHONE NUMBER" title="PHONE NUMBER" id="pay_mobile" require="" readonly=""/>

                <div class="title">PAYMENT PURPOSE: <span>*</span></div>
                <input type="text"  class="text_field" placeholder="PAYMENT PURPOSE" title="PAYMENT PURPOSE" id="pay_purpose" require="" readonly=""/>

                <div class="title">AMOUNT PAID:</div>
                <input type="text"  class="text_field" placeholder="AMOUNT PAID" title="AMOUNT PAID" id="amount_paid" require="" readonly=""/>
                
                <div class="title">PAYMENT STATUS: </div>
                <input type="text"  class="text_field" placeholder="PAYMENT STATUS" title="PAYMENT STATUS" id="pay_status" require="" readonly=""/>
              
                <div class="title">PAYMENT DATE:</div>
                <input type="text"  class="text_field" placeholder="PAYMENT DATE" title="PAYMENT DATE" id="pay_date" require="" readonly=""/>
                <script>_get_payment_detail('<?php echo $id?>','<?php echo $status_id?>');</script>
        </div>
    </div> 
</div>
<?php } ?>






<?php if ($page=='change_password'){ ?>
<div class="reg-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
        <span id="panel-title"><i class="bi-lock"></i> CHANGE PASSWORD </span>
        <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div" >
         <div class="inner-div">
         <div class="alert">Enter <span>Old Password</span> and create <span>New Password <i class="fa fa-lock"></i></span> </div>

            <div class="title">OLD PASSWORD: <span>*</span></div>
            <input type="password" id="old_password" name="old_password" class="text_field"  placeholder="ENTER OLD PASSWORD" title="ENTER YOUR OLD PASSWORD">

            <div class="title">CREATE NEW PASSWORD: <span>*</span></div>
            <input type="password" id="new_password" name="new_password" onkeyup="_check_password2()" required class="text_field"  placeholder="CREATE NEW PASSWORD" title="CREATE NEW PASSWORD">

            <div class="title" style="float:left;">COMFIRMED NEW PASSWORD:<span >*</span>  <div id='message' style="float:right;margin-left:10px"></div></div>
            <input type="password"  id="comfirmed_password" onkeyup="_check_password3()" name="comfirmed_password" required class="text_field" placeholder="COMFIRMED NEW PASSWORD" title="COMFIRMED NEW PASSWORD">
           
            <div class="pswd_info" style="color:#8c8d8d">At least 8 charaters required including upper & lower cases and special characters and numbers.</div>
            <button class="action-btn" id="update_btn" type="button" style="float:left;" onClick="_update_password('<?php echo $staff_id ?>')" title="CHANGE PASSWORD"><i class="fa fa-exchange"></i> CHANGE PASSWORD</button>
        </div>
    </div> 
</div>
<?php } ?>




<?php if ($page=='access_key_validation_info'){ ?>
    <div class="validation-div animated ZoomIn">
        <div class="div-in">
            <div class="img-div"><img src="all-images/images/warning.gif" alt="Profile image"></div>
            <h4>Invalid AccessToken. Please LogIn Again</h4>
            <form method="post" action="config/code.php" name="logoutform">
            <input type="hidden" name="action" value="logout"/>
            <button class="btn">Okay, Log-In</button>
            </form>
        </div>
    </div>
<?php } ?>
