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
        <script>
        function showHint() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    /*document.getElementById("txtHint").innerHTML = this.responseText;*/
                    document.getElementById("tx").value = this.responseText;
                }
            }
            xmlhttp.open("GET", "gethint.php", true);
            xmlhttp.send();
            }
        function set()
        {
            setInterval(showHint,1000);
        }
</script>
    </head>
    <body onload="set()">
        
         <nav class="navbar navbar-light bg-light navbar-expand-lg fixed-top">
            <a href="#" class="navbar-brand">BINGO EMPLOYEE</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a href="bingo_official.php" class="nav-link">Homepage</a>
                    </li>
                    <li class="navbar-item">
                        <a href="credit.php" class="nav-link-disabled" >credit calculation</a>
                    </li>
                    <li class="navbar-item">
                        <a href="yourprofile.php" class="nav-link">Myprofile</a>
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
                <div class="creditform">
                        <form action="creditcal.php">
                            <div class="form-group row">
                                <label class="offset-md-2 col-md-3 col-form-label" for="txtHint"><span><h4>BARCODE ID:</h4></span></label>
                                <div class="col-md-4">
                                <!-- <label><h3><span id="txtHint"></span></h3></label>  -->
                                <input type="text" class="form-control" id="tx" name="bid"  required="required" value="0" >
                                </div>
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
                                <input type="text" class="col-md-1 col-form-label"  name="psmall" placeholder="small" value="0">
                                <input class=" offset-md-3 col-md-1 col-form-label" name="otherp" type="text" placeholder="in kg" value="0"></input>
                            </div>
                            <div class="form-group row">
                                <label class="offset-md-3 col-md-1 col-form-label">MEDIUM</label>
                                <input type="text" class="col-md-1 col-form-label"  name="pmedium" placeholder="medium" value="0">
                            </div>
                            <div class="form-group row">
                                <label class="offset-md-3 col-md-1 col-form-label">LARGE</label>
                                <input type="text" class="col-md-1 col-form-label"  name="plarge" placeholder="large" value="0">
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
                                <input type="text" class="col-md-1 col-form-label"  name="gsmall" placeholder="small" value="0">
                                <input class=" offset-md-3 col-md-1 col-form-label" name="otherg" type="text" placeholder="in kg" value="0"></input>
                            </div>
                            <div class="form-group row">
                                <label class="offset-md-3 col-md-1 col-form-label">MEDIUM</label>
                                <input type="text" class="col-md-1 col-form-label"  name="gmedium" placeholder="medium" value="0">
                            </div>
                            <div class="form-group row">
                                <label class="offset-md-3 col-md-1 col-form-label">LARGE</label>
                                <input type="text" class="col-md-1 col-form-label"  name="glarge" placeholder="large" value="0">
                            </div>
                        <div class="form-group row">
                                <label class="offset-md-2 col-md-3 col-form-label"><span><h4>PAPER:</h4></span></label>
                            </div>
                        <div class="form-group row">
                            <label class="offset-md-3 col-md-1 col-form-label">NEWSPAPER</label>
                                <input class="col-md-1 col-form-label" name="newspaper" placeholder="in KG" value="0">
                                <label class="offset-md-2 col-md-1 col-form-label" >CARTONS</label>
                                <input class="col-md-1 col-form-label" name="cartons" placeholder="in KG" value="0">
                        </div>
                                    
                        <div class="form-group row">
                            <label class="offset-md-2 col-md-3 col-form-label"><span><h4>METALS:</h4></span></label>
                            </div>
                        <div class="form-group row">
                                <label class="offset-md-3 col-md-1 col-form-label">IRON</label>
                                <input class="col-md-1 col-form-label" name="ir" placeholder="in KG" value="0">
                                <label class="offset-md-2 col-md-1 col-form-label">ALLUMINIUM</label>
                                <input class="col-md-1 col-form-label" name="al" placeholder="in KG" value="0">
                            </div>
                         <div class="form-group row">
                            <label class="offset-md-3 col-md-1 col-form-label">STEEL</label>
                                <input class="col-md-1 col-form-label" name="st" placeholder="in KG" value="0">
                                <label class="offset-md-2 col-md-1 col-form-label">COPPER</label>
                                <input class="col-md-1 col-form-label" name="cu" placeholder="in KG" value="0">
                        </div>
                        </br>
                        </br>
                            <div class="row">
                                <div class="offset-md-5">
                                    <button type="submit" class="btn btn-primary">Claculate</button>
                                </div>
                            </div>
                
                        </form>
                </div>
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    </body>
</html>