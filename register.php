<html>
  
<head>
   <script type="text/javascript" src="app.js"></script>
</head>
  
<body><br>

    <p class="text-center">FORM VALIDATION USING JQUERY</p>
    <div class="container">
        <form name="register" id="register" method="post" action="code.php" onsubmit="return validate();">
                <div class="form-group">
                    <label for="name">name:</label>
                    <input type="text" name="name" id="name" class="form-control">
                    <small id="errorname"></small>
                </div>
                <div class="form-group">
                    <label for="email">email:</label>
                    <input type="text" name="email" id="email" class="form-control">
                    <small id="erroremail"></small>
                </div>
                <div class="form-group">
                    <label for="phone">phoneno:</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                    <small id="error"></small>
                </div>
                <div class="form-group">
                    <label for="address">address</label>
                    <input type="text" name="address" id="address" class="form-control">
                    <small id="error"></small>
                </div>
            <input type="submit" id="submitbtn" value="Submit" class="btn btn-primary">
        </form>
    </div>
</body>
  
</html>