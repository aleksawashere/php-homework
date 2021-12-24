<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        body{
            background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                       rgba(0, 0, 0, 0.8)), url("https://images.unsplash.com/photo-1580137157953-3798238360f9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
            
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        h1,h2,div{
            color:white;
        }

        .col-md-8{
           width: 50%; 
           text-align: center;
        }
    </style>


    <title>Logovanje</title>
</head>
<body>
    
<div class="col-md-8 col-md-offset-3" style="margin-top: 50px;">
    
    <form>
        <div class="modal-header">
            <h1>Dobrodošli na stranicu za logovanje!</h1>
        </div>
        <div class="modal-body">
            <h2>Ulogujte se svojim podacima:</h2><br>       
            <input type="text" class="form-control" name="uname" placeholder="Korisničko ime" id="userName" style="width: 200px; margin:0 auto;"><br>
            <div style="display: inline-block;">
                <div style="float: left;">
                    <input type="password" name="pass" class="form-control" placeholder="Lozinka" id="pass" style="width: 200px;">
                </div><br>   
                <div style="float: left; display: block;">
                    <input type="checkbox" onclick="sakrij('pass')" class="form-check-input"> Show password
                </div>
            </div>
            <br><br>
            <input type="button" id="log" onclick="logovanje()" value="Logovanje" class="btn btn-success">
            <br><br><br><br>
            <h2>...ili napravite nalog:</h2>

            <div id="registracija" style="width:200px;margin: 0 auto;">
                <input type="text" class="form-control" placeholder="Ime i prezime" id="ime" style="width: 200px;margin:0 auto;"><br>
                <input type="text" class="form-control" placeholder="Korisničko ime" id="kime" style="width: 200px;margin:0 auto;"><br>
                <input type="password" class="form-control" placeholder="Lozinka" id="lozinka" style="width: 200px;margin:0 auto;">
                <div style="float: left; display: block;">
                    <input type="checkbox" onclick="sakrij('lozinka')" class="form-check-input" tyle="margin:0 auto;"> Show password <br>
                </div><br><br>
                <input type="password" class="form-control" placeholder="Potvrda lozinke" id="lozinka2" style="width: 200px;margin:0 auto;">
                <div style="float: left; display: block;">
                    <input type="checkbox" onclick="sakrij('lozinka2')" class="form-check-input" style="margin:0 auto;"> Show password <br>
                </div>
            </div><br><br>
            <input type="button" id="prosledi" onclick="prosledi()" value="Registruj se" class="btn btn-success" style="margin:0 auto;text-align: center;">

        </div>

        <div class="modal-body"  style="width: 300px;margin:0 auto;">
            
        </div>
        <br>
        
                
    </form>


    </div>

</body>
</html>