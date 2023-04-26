<?php 
include("../api/utils/connection.php");
include("../api/patient-view.php");
?>
<div class="home-content">
    <div class="overview">
        <div class="main-box" style="margin: 50px 0px 10px 250px; width: max-content; height: fit-content;">
                <div class="recent-sales box" style="padding: 10px 10px;">
                 <form action="../api/patient-update.php" method="GET">
                     
        <div class="title" style=" text-align: center; margin: 0px 0px 10px 0px; background-color: #004ba7; border-radius: 5px; padding: 3px; color: #fff">
        <i class="uil uil-tachometer-fast-alt"></i>
        <span class="text">Patient Form</span>
    </div>                
          
            
                            <input type="hidden" name="patient_id" required value="<?php echo $GLOBALS['patient']['patient_id']; ?>">

                            <div class="mb-3">
                          
                                <label class="form-label">Name</label><br>

                                <input class="form-control"id="fullName" style="display: inline;" name="last_name" value="<?php echo $GLOBALS['patient']['pat_lname']; ?>"> 
                                <input class="form-control"id="fullName" style="display: inline;" name="first_name" value="<?php echo $GLOBALS['patient']['pat_fname']; ?>"> 
                                <input class="form-control"id="fullName" style="display: inline;" name="MI" value="<?php echo $GLOBALS['patient']['pat_mi']; ?>"> 

                            </div>

                            <div class="mb-3">
                              
                                <label class="form-label">General Health</label>
                                <input class="form-control" placeholder="" name="age" value="<?php echo $GLOBALS['patient']['age']; ?>">
                            </div>

                            <div class="mb-3">
                               
                                <label class="form-label">Birthday</label>
                                <input type="date" class="form-control" placeholder="" name="birthday" value="<?php echo $GLOBALS['patient']['birth_date']; ?>">
                            </div>

                            <div class="mb-3">
                               
                                <label class="form-label">Gender</label>
                                <input class="form-control" placeholder="" name="gender" value="<?php echo $GLOBALS['patient']['gender']; ?>">
                            </div>

                            <div class="mb-3">
                               
                               <label class="form-label">Address</label>
                               <input class="form-control" placeholder="" name="address" value="<?php echo $GLOBALS['patient']['address']; ?>">
                           </div>

                           <div class="mb-3">
                               
                               <label class="form-label">Occupation</label>
                               <input class="form-control" placeholder="" name="occupation" value="<?php echo $GLOBALS['patient']['occupation']; ?>">
                           </div>
                            
                           <div class="mb-3">
                               
                               <label class="form-label">Contact No.</label>
                               <input class="form-control" placeholder="" name="contact" value="<?php echo $GLOBALS['patient']['contact']; ?>">
                           </div>

                           <div class="mb-3">
                               
                               <label class="form-label">Weight</label>
                               <input class="form-control" placeholder="" name="weight" value="<?php echo $GLOBALS['patient']['weight']; ?>">
                           </div>

                           <div class="mb-3">
                               
                               <label class="form-label">Height</label>
                               <input class="form-control" placeholder="" name="height" value="<?php echo $GLOBALS['patient']['height']; ?>">
                           </div>

                           <div class="mb-3">
                               
                               <label class="form-label">Guardian/Assistant</label>
                               <input class="form-control" placeholder="" name="guardian" value="<?php echo $GLOBALS['patient']['guardian']; ?>">
                           </div>


                            <div class="form-btn">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" onclick="window.location.href='https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=patient-list'">Cancel</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

