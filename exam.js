var attempt=3;
function validate()
{
    var username= document.getElementById("username").value;
    var password= document.getElementById("password").value;
    if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'abcd' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'abcd';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
        window.location = "exhome.php";
        Click here to clean <a href = "logout.php" title = "Logout">Session.
        return false;

    }
    else{
        attempt --;
        alert("you have left "+attempt+" attempt;");
        if(attempt == 0){
            document.getElementById("username").disabled = true;
            document.getElementById("password").disabled = true;
            document.getElementById("submit").disabled = true;
        }
    }
}