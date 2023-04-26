<?php 
include("../api/utils/connection.php");
include("../api/clinical-exam-view.php");
?>
<div class="home-content">
    <div class="overview">
        <div class="main-box" style="margin: 50px 0px 10px 250px; width: max-content; height: fit-content;">
                <div class="recent-sales box" style="padding: 10px 10px;">
                 <form action="../api/clinical-update.php" method="GET">
                     
        <div class="title" style=" text-align: center; margin: 0px 0px 10px 0px; background-color: #004ba7; border-radius: 5px; padding: 3px; color: #fff">
        <i class="uil uil-tachometer-fast-alt"></i>
        <span class="text">Clinical Examination Form</span>
    </div>                
          
            
                            <input type="hidden" name="patient_id" required value="<?php echo $GLOBALS['clinic']['patient_id']; ?>">

                            <div class="mb-3">
                          
                                <label class="form-label">Name</label><br>

                                <input class="form-control"id="fullName" style="display: inline;" name="last_name" value="<?php echo $GLOBALS['clinic']['pat_lname']; ?>"> 
                                <input class="form-control"id="fullName" style="display: inline;" name="first_name" value="<?php echo $GLOBALS['clinic']['pat_fname']; ?>"> 
                                <input class="form-control"id="fullName" style="display: inline;" name="MI" value="<?php echo $GLOBALS['clinic']['pat_mi']; ?>"> 

                            </div>

                            <div class="mb-3">
                              
                                <label class="form-label">Face and Lips</label>
                                <input class="form-control" placeholder="" name="face_and_lips" value="<?php echo $GLOBALS['clinic']['face_lips']; ?>">
                            </div>

                            <div class="mb-3">
                               
                                <label class="form-label">Cheeks</label>
                                <input class="form-control" placeholder="" name="cheeks" value="<?php echo $GLOBALS['clinic']['cheeks']; ?>">
                            </div>

                            <div class="mb-3">
                               
                                <label class="form-label">Tongue</label>
                                <input class="form-control" placeholder="" name="tongue" value="<?php echo $GLOBALS['clinic']['tongue']; ?>">
                            </div>

                            <div class="mb-3">
                               
                               <label class="form-label">Palate</label>
                               <input class="form-control" placeholder="" name="palate" value="<?php echo $GLOBALS['clinic']['palate']; ?>">
                           </div>

                           <div class="mb-3">
                               
                               <label class="form-label">Oropharynx</label>
                               <input class="form-control" placeholder="" name="oropharynx" value="<?php echo $GLOBALS['clinic']['oropharynx']; ?>">
                           </div>
                            
                           <div class="mb-3">
                               
                               <label class="form-label">Gingivae Spongy</label>
                               <input class="form-control" placeholder="" name="gingivae_spongy" value="<?php echo $GLOBALS['clinic']['gingivae_spongy']; ?>">
                           </div>

                           <div class="mb-3">
                               
                               <label class="form-label">Missing Teeth</label>
                               <input class="form-control" placeholder="" name="missing_teeth" value="<?php echo $GLOBALS['clinic']['missing_teeth']; ?>">
                           </div>

                           <div class="mb-3">
                               
                               <label class="form-label">Retracted</label>
                               <input class="form-control" placeholder="" name="retracted" value="<?php echo $GLOBALS['clinic']['retracted']; ?>">
                           </div>

                           <div class="mb-3">
                               
                               <label class="form-label">Bleeding</label>
                               <input class="form-control" placeholder="" name="bleeding" value="<?php echo $GLOBALS['clinic']['bleeding']; ?>">
                           </div>
                           
                           <div class="mb-3">
                               
                               <label class="form-label">Malocclusion</label>
                               <input class="form-control" placeholder="" name="malocclusion" value="<?php echo $GLOBALS['clinic']['malocclusion']; ?>">
                           </div>


                            <div class="form-btn">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" onclick="window.location.href='https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=clinical-exam-list'">Cancel</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

