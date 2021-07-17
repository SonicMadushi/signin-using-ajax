<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css" />
   
</head>

<body class="b">
    <div class="container_fluid">
        <div class="row"> 
            <h1 class="t">Sign In  </h1>
        <div class="ui">
            <div class="col-md-4 col-lg-4"></div>

            <div class="col-12 col-md-5 col-lg-4 h">
             

                <p id="msg" class="p"></p>

                <div class="row">
                    <div class="col-lg-6">
                      
                        <span class="sp">Email :</span>
                        <input id="e" class="form-control " type="text" placeholder="Enter your Email...."><br />
                        
                    
                    <div class="col-lg-6">
                        <span class="sp">Password:</span>
                        <input id="p" class="form-control" type="password" placeholder="Enter your password...."><br />
                    
                </div>
                <div class="field-group">
		<div><input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
		<label for="remember-me">Remember me</label>
	</div>
                
                <div class="row">
             <div class="col-lg-6">
                <button class="btn btn-primary col-lg-12" onclick="signIn()"type="submit">Submit</button>
                </div>
                <br/>
              

            </div>
        </div>
    </div>
    </div>
    <script src="signin.js"></script>
</body>

</html>