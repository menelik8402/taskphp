<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    
    <title>Email Notification</title>
</head>
<body>
  <div class="container">
  <br>
      <br>
    <div class="row justify-content-center">
    <form id="form" method="post" action="app/routes.php" >
    <input type="hidden" name="action" value="forgot_password_user">
                    <div class="col-md-10 ">
                            <div class="alert alert-success" id="alerta"  role="alert">
                                You will recieved an email with a code to active your account. Please enter you email address account in text box below.
                            </div>

                  </div>

                     <?php 
                          if(isset($_SESSION['changeflagnoty']) && !$_SESSION['changeflagnoty']){
                              echo "This is not a email address account, check and try again";
                            
                          }
                          else{
                              if(isset($_SESSION['changeflagnoty']) && $_SESSION['changeflagnoty'])
                                 echo "Message has been sent";
                          }
                     ?>
                            <div class="form-group row justify-content-center col-md-10" >
                            
                                    <label for="nom" class="col-sm-3 col-form-label">Type your email address account</label>
                                    <div class="col-sm-5">
                                        <input type="text"  id="email" name="email" class="form-control" required>
                                       
                                    </div>
                                    <div class="col-sm-4">
                                        
                                       <input type="submit"  class ="btn-primary" value="Send email">
                                    </div>
                                </div>
           </form>           
       </div>

  </div>
                   
    
</body>
</html>