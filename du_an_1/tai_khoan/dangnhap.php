<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dangnhap.css">
</head>
<body>
    <form action="" method="post">
        <div class="imgcontainer">
        </div>
      
        <div class="container">   
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" id="uname">
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw">
      
          <button type="submit" onclick="checkform">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
      <script>
        function checkform() {
            var uname =document.getElementById("uname");
            var psw =document.getElementById("psw");
            if (uname.value != ""){
                if(uname.value.length <8){
                  alert('Vui lòng điền tên đăng nhập >=8 kí tự ');
                  uname.focus();
                }
            }else{
                alert('Vui lòng điền tên đăng nhập ');
                uname.focus();
            }
            
        }

      </script>
</body>
</html>  