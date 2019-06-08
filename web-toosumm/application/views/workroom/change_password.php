  <div class="toosum-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <?php if (isset($message) || $message = $this->session->flashdata('message')) { ?>
                    <div class="<?php echo $this->session->flashdata('class'); ?> alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $message; ?>    
                    </div>
                    <?php } ?>
          <div class="toosumm-reset-password-section">
             <?php echo form_open("change-password");?>
                <div class="toosumm-reset-password-section1">
                <div class="toosum-input-section">
                  <label for="exampleInputEmail1">Old Password</label>
                <?php echo form_input($old_password);?>
                <div class="toosum-lock-icon1"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                </div>
              </div>
              
              <div class="toosumm-reset-password-section1">
                <div class="toosum-input-section">
                 <label for="exampleInputPassword1">New Password</label>
                <?php echo form_input($new_password);?>             
                   <div class="toosum-lock-icon1"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                </div>
              </div>
              
              <div class="toosumm-reset-password-section1">
                <div class="toosum-input-section">
                <label for="exampleInputPassword1">Confirm New Password</label>
                <?php echo form_input($new_password_confirm);?>               
                 <div class="toosum-lock-icon1"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                </div>
              </div>              
              <div class="toosumm-reset-password-section1">
                <?php echo form_input($user_id);?>
              <?php echo form_submit( ['name'=>'submit', 'class'=>'toosum-reset-submit-btn5', 'value'=>'Submit'] ); ?>
              </div>
          <?php echo form_close();?>
          </div>          
        </div>
      </div>
    </div>
  </div>
  
  