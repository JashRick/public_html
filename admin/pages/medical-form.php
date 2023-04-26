<?php 
include("../api/utils/connection.php");
include("../api/medical-history-view.php");
?>
<div class="home-content">
    <div class="overview">
        <div class="main-box" style="margin: 50px 0px 10px 250px; width: max-content; height: fit-content;">
                <div class="recent-sales box" style="padding: 10px 10px;">
                 <form action="../api/medical-history-update.php" method="GET">
                     
        <div class="title" style=" text-align: center; margin: 0px 0px 10px 0px; background-color: #004ba7; border-radius: 5px; padding: 3px; color: #fff">
        <i class="uil uil-tachometer-fast-alt"></i>
        <span class="text">Medical Form</span>
    </div>                
          
            
                            <input type="hidden" name="patient_id" required value="<?php echo $GLOBALS['medical']['patient_id']; ?>">

                            <div class="mb-3">
                          
                                <label class="form-label">Name</label><br>

                                <input class="form-control"id="fullName" style="display: inline;" name="last_name" value="<?php echo $GLOBALS['medical']['pat_lname']; ?>"> 
                                <input class="form-control"id="fullName" style="display: inline;" name="first_name" value="<?php echo $GLOBALS['medical']['pat_fname']; ?>"> 
                                <input class="form-control"id="fullName" style="display: inline;" name="MI" value="<?php echo $GLOBALS['medical']['pat_mi']; ?>"> 

                            </div>

                            <div class="mb-3">
                              
                                <label class="form-label">General Health</label>
                                <input class="form-control" placeholder="" name="general_health" value="<?php echo $GLOBALS['medical']['gen_health']; ?>">
                            </div>

                            <div class="mb-3">
                               
                                <label class="form-label">Headaches</label>
                                <input class="form-control" placeholder="" name="headaches" value="<?php echo $GLOBALS['medical']['head_aches']; ?>">
                            </div>

                            <div class="mb-3">
                               
                                <label class="form-label">Allergies</label>
                                <input class="form-control" placeholder="" name="allergies" value="<?php echo $GLOBALS['medical']['allergies']; ?>">
                            </div>

                            <div class="mb-3">
                               
                               <label class="form-label">Bleeding Of Gums</label>
                               <input class="form-control" placeholder="" name="bleeding_of_gums" value="<?php echo $GLOBALS['medical']['gum_bleeding']; ?>">
                           </div>

                           <div class="mb-3">
                               
                               <label class="form-label">Blood Pressure</label>
                               <input class="form-control" placeholder="" name="heart_bp" value="<?php echo $GLOBALS['medical']['blood_pressure']; ?>">
                           </div>
                            
                           <div class="mb-3">
                               
                               <label class="form-label">Sinus Trouble</label>
                               <input class="form-control" placeholder="" name="sinus_trouble" value="<?php echo $GLOBALS['medical']['sinus_trouble']; ?>">
                           </div>

                           <div class="mb-3">
                               
                               <label class="form-label">Frequent Colds</label>
                               <input class="form-control" placeholder="" name="freq_colds" value="<?php echo $GLOBALS['medical']['freq_colds']; ?>">
                           </div>

                           <div class="mb-3">
                               
                               <label class="form-label">Diabetes</label>
                               <input class="form-control" placeholder="" name="diabetes" value="<?php echo $GLOBALS['medical']['diabetes']; ?>">
                           </div>

                           <div class="mb-3">
                               
                               <label class="form-label">Self Medication</label>
                               <input class="form-control" placeholder="" name="self_medication" value="<?php echo $GLOBALS['medical']['self_med']; ?>">
                           </div>


                            <div class="form-btn">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" onclick="window.location.href='https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=medical-history-list'">Cancel</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

