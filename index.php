<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>bingo</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
         <nav class="navbar navbar-light bg-light navbar-expand-lg fixed-top">
            <a href="#" class="navbar-brand">BINGO</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a href="index.php" class="nav-link">Homepage</a>
                    </li>
                    <li class="navbar-item">
                        <a href="products.php" class="nav-link">Products</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#login" data-toggle = "modal" data-target= "#login" class="nav-link">Employee Login</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#loginadmin" data-toggle = "modal" data-target= "#loginadmin" class="nav-link">Admin Login</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">HOW?</a>
                    </li>
                     <li class="navbar-item">
                        <a href="#" class="nav-link">About us</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
         <section class="first">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6 col-sm-7">
                        <div class="slide-title">
                            <h2>BINGO</h2>
                        </div>
                        <div class="slide-subtitle">
                            <p>Poject to create awareness among the people to make the city clean. </br>
                            lets recycle,Earn and make the city clean. </p>
                        </div>
                        <div class="btns">
                            <a href="#" class="theme-btn-s2">Learn More...</a>
                        </div>
                    </div>
                    <div class="col offset-md-3 col-md-3 col-sm-2 ">
                        <img src="img/boy_rec.jpg">
                    </div>
        </section>
                
        <div class="modal fade" id="login">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">ENTER CREDENTIALS</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="bingo_official.php" method="get">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="email">Email Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" name="email" required="required">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="password">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" name="pwd" required="required">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary">Login Now</button>
                                </div>
                            </div>
                
                        </form>
                    </div>
                    <div class="modal-footer foot">
                        <h3>for bingo workers only!!</h3>
                    </div>
                </div>
            </div>
        </div>
                
                
        <div class="modal fade" id="loginadmin">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">ENTER CREDENTIALS</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="bingo_admin.php" method="get">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="email">Email Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" name="email" required="required">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="password">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" name="pwd" required="required">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary">Login Now</button>
                                </div>
                            </div>
                
                        </form>
                    </div>
                    <div class="modal-footer foot">
                        <h3>for bingo admin only!!</h3>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    </body>
</html>