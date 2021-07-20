<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="public/js/jquery.js"></script>
    <script src="public/js/bootstrap.js"></script>
   
   
    <title>Register</title>
</head>
<body>
<div class="container" >
    <div class="row" align="center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal form" id="formuser" method="post" action="app/routes.php">
                           <input type="hidden" name="action" value="register_user">

                                <div class="form-group row ">
                                    <label for="nom" class="col-sm-4 col-form-label">Name</label>
                                    <div class="col-sm-5">
                                        <input type="text"  id="name" name="name" class="form-control">
                                        <div class="form-control-feedback text-danger" id="namet"></div>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="nom" class="col-sm-4 col-form-label">Lastname</label>
                                    <div class="col-sm-5">
                                        <input type="text"  id="login" name='login' class="form-control">
                                        <div class="form-control-feedback text-danger" id="logint"></div>

                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="nom" class="col-sm-4 col-form-label">id</label>
                                    <div class="col-sm-5">
                                        <input type="text"  id="id" name="id" class="form-control">
                                        <div class="form-control-feedback text-danger"  id="cit"></div>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="nom" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-5">
                                        <input type="email"  id="email" name="email" class="form-control">
                                        <div class="form-control-feedback text-danger" id="emailt"></div>
                                    </div>
                                </div>
                                
                                <div class="form-group row ">
                                    <label for="nom" class="col-sm-4 col-form-label">Password</label>
                                    <div class="col-sm-5">
                                        <input type="password"  id="password" name='password' class="form-control">
                                        <div class="form-control-feedback text-danger" id="passwordt"></div>

                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="nom" class="col-sm-4 col-form-label"> Password confirm</label>
                                    <div class="col-sm-5">
                                        <input type="password"  id="password_confir" name='password_confir' class="form-control">
                                        <div class="form-control-feedback text-danger" id="password_confirt"></div>

                                    </div>
                                </div>
                                <br>



                                <button type="submit" class="btn-primary" id="register" >Register</button>
                              
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>             


</body>
</html>