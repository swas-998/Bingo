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
            <a href="#" class="navbar-brand">BINGO ADMIN</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a href="bingo_admin.php" class="nav-link">Homepage</a>
                    </li>
                    <li class="navbar-item">
                        <a href="set_credit.php" class="nav-link-disableds">Set Credit</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#exchange" data-toggle = "modal" data-target= "#exchange" class="nav-link">Exchange Rate</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Users</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Bin Status</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Myprofile</a>
                    </li>
                    <li class="navbar-item">
                        <a href="index.php" class="nav-link">Logout</a>
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
        
        
        
        <div class="setcredit">
                        <form action="creditset.php">
                            <div class="form-group row">
                                <label class="offset-md-5 col-md-3 col-form-label" for="id"><span><h2>SET CREDIT</h2></span></label>
                            </div>
                            
                           <div class="form-group row">
                                <label class="offset-md-2 col-md-3 col-form-label"><span><h4>PLASTIC:</h4></span></label>
                            </div>
                              <div class="form-group row">
                                <label class="offset-md-3 col-md-3 col-form-label">BOTTLE:</label>
                                <label class="offset-md-2 col-md-3 col-form-label">OTHERS:</label>
                            </div>
                            
                            <div class="form-group row">
                                <label class="offset-md-3 col-md-1 col-form-label">SMALL</label>
                                <input type="text" class="col-md-1 col-form-label"  name="psmallp" placeholder="per bottle" 
                                  <?php include'showprevious.php';
                                  ?>
                                 value="<?php echo val("p","s") ; ?>" >
                                <label class="col-md-1 col-form-label" name="psmallpl"></label> 
                                <input class=" offset-md-2 col-md-1 col-form-label" type="text" name="otherpp" placeholder="per kg" 
                                 value="<?php echo val("p","o") ; ?>" >
                                <label class="col-md-1 col-form-label" name="otherppl"></label> 
                            </div>
                            <div class="form-group row">
                                <label class="offset-md-3 col-md-1 col-form-label">MEDIUM</label>
                                <input type="text" class="col-md-1 col-form-label"  name="pmediump" placeholder="per bottle" value="<?php echo val("p","m") ; ?>">
                                 <label class="col-md-1 col-form-label" name="pmediumpl"></label>
                            </div>
                            <div class="form-group row">
                                <label class="offset-md-3 col-md-1 col-form-label">LARGE</label>
                                <input type="text" class="col-md-1 col-form-label"  name="plargep" placeholder="per bottle" value="<?php echo val("p","l") ; ?>">
                                <label class="col-md-1 col-form-label" name="plargepl"></label>
                            </div>
                           
                    
                      <div class="form-group row">
                                <label class="offset-md-2 col-md-3 col-form-label"><span><h4>GLASS:</h4></span></label>
                            </div>
                              <div class="form-group row">
                                <label class="offset-md-3 col-md-3 col-form-label">BOTTLE</label>
                                <label class="offset-md-2 col-md-3 col-form-label">OTHERS</label>
                            </div>
                            
                            <div class="form-group row">
                                <label class="offset-md-3 col-md-1 col-form-label">SMALL</label>
                                <input type="text" class="col-md-1 col-form-label"  name="gsmallp" placeholder="per bottle" value="<?php echo val("g","s") ; ?>">
                                <label class="col-md-1 col-form-label" name="gsmallpl"></label>
                                <input class=" offset-md-2 col-md-1 col-form-label" type="text" name="othergp" placeholder="per kg" value="<?php echo val("g","o") ; ?>"></input>
                                <label class="col-md-1 col-form-label" name="othergpl"></label>
                            </div>
                            <div class="form-group row">
                                <label class="offset-md-3 col-md-1 col-form-label">MEDIUM</label>
                                <input type="text" class="col-md-1 col-form-label"  name="gmediump" placeholder="per bottle" value="<?php echo val("g","m") ; ?>">
                                <label class="col-md-1 col-form-label" name="gmediumpl"></label>
                            </div>
                            <div class="form-group row">
                                <label class="offset-md-3 col-md-1 col-form-label">LARGE</label>
                                <input type="text" class="col-md-1 col-form-label"  name="glargep" placeholder="per bottle" value="<?php echo val("g","l") ; ?>">
                                <label class="col-md-1 col-form-label" name="glargepl"></label>
                            </div>
                        <div class="form-group row">
                                <label class="offset-md-2 col-md-3 col-form-label"><span><h4>PAPER:</h4></span></label>
                            </div>
                        <div class="form-group row">
                            <label class="offset-md-3 col-md-1 col-form-label">NEWSPAPER</label>
                                <input class="col-md-1 col-form-label" name="newspaperp" placeholder="per KG" value="<?php echo val("pa","nw") ; ?>">
                            <label class="col-md-1 col-form-label" name="newspaperpl"></label>
                                <label class="offset-md-2 col-md-1 col-form-label">CARTONS</label>
                                <input class="col-md-1 col-form-label" name="cartonsp" placeholder="per KG" value="<?php echo val("pa","ca") ; ?>">
                            <label class="col-md-1 col-form-label" name="cartonspl"></label>
                        </div>
                                    
                        <div class="form-group row">
                            <label class="offset-md-2 col-md-3 col-form-label"><span><h4>METALS:</h4></span></label>
                            </div>
                        <div class="form-group row">
                                <label class="offset-md-3 col-md-1 col-form-label">IRON</label>
                                <input class="col-md-1 col-form-label" name="irp" placeholder="per KG" value="<?php echo val("m","ir") ; ?>">
                            <label class="col-md-1 col-form-label" name="irpl"></label>
                                <label class="offset-md-2 col-md-1 col-form-label">ALLUMINIUM</label>
                                <input class="col-md-1 col-form-label" name="alp" placeholder="per KG" value="<?php echo val("m","al") ; ?>">
                            <label class="col-md-1 col-form-label" name="alpl"></label>
                            </div>
                         <div class="form-group row">
                            <label class="offset-md-3 col-md-1 col-form-label">STEEL</label>
                                <input class="col-md-1 col-form-label" name="stp" placeholder="per KG" value="<?php echo val("m","st") ; ?>">
                             <label class="col-md-1 col-form-label" name="stpl"></label>
                                <label class="offset-md-2 col-md-1 col-form-label">COPPER</label>
                                <input class="col-md-1 col-form-label" name="cup" placeholder="per KG" value="<?php echo val("m","cu") ; ?>">
                             <label class="col-md-1 col-form-label" name="cupl"></label>
                        </div>
                        </br>
                        </br>
                            <div class="row">
                                <div class="offset-md-5">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            
                
                        </form>
                </div>

        <div class="modal fade" id="exchange">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">EXCHANGE RATE</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="exchangeset.php">
                            <div class="form-group row">
                            <label class="col-sm-10 col-form-label" >Current exchange rate:</label>
                            </div>
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label" >1 Rupee = </label>
                                <label class="col-sm-2 col-form-label" name="setrate" >
                                       <?php
                                include 'excshow.php';
                                ?>
                                </label>
                                <label class="col-sm-4 col-form-label" > GO coin</label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="email">Set new rate</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="rate" name="newrate" required="required" placeholder="1 Rupee = ">
                                </div>
                            </div>

                          
                            <div class="row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                
                        </form>
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