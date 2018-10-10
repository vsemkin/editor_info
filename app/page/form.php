<h2><?php echo $lang['HDR_CONTACT']; ?>:</h2>
<?php 
  if(isset($_POST['submit']) && !empty($_POST['submit'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
        $secret = '6LfCLQgUAAAAAMjuWswnExFezRXBebzdCy_FBrWW';
        
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        
        if($responseData->success):
            //contact form submission code
            $name = !empty($_POST['name'])?$_POST['name']:'';
            $email = !empty($_POST['email'])?$_POST['email']:'';
            $message = !empty($_POST['message'])?$_POST['message']:'';
            
            //message structure
            $to = 'sykhro@protonmail.com';
            $subject = 'YTPMV+ Message';
            $htmlContent = "
                <h1>Contact request details</h1>
                <p><b>Name: </b>".$name."</p>
                <p><b>Email: </b>".$email."</p>
                <p><b>Message: </b>".$message."</p>";
            
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
            
            //send email
            $result = mail($to, $subject, $htmlContent, $headers);
           if($result): 
              echo "Your message was delivered";
            else:
              echo "Something went wrong";
            endif;
        else:
          echo "huh, bad stuff on dev side";
          echo(var_dump($responseData));
        
        endif;
    endif;          
  else:
?>
  <div id="form-div">
    <form class="form" action="" method="POST">
      
      <p class="name" style="margin-bottom: -.8em;">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="name" id="name" />
      </p>
      
      <p class="email" style="margin-bottom: -.8em;">
        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="email" />
      </p>
      
      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="message" placeholder="message"></textarea>
      </p>

      
      <div class="g-recaptcha" style="margin: 1em 0 0 3.1em" data-theme="dark" data-sitekey="6LfCLQgUAAAAAFwmdvwMihYZQNkhhUwRbrFKe-IL"></div>
      
      <p class="submit">
        <input name="submit" value="SUBMIT" type="submit"/>
      </p>
    </form>
</div>
<?php 
  endif;
?>