<?php
include("database.php");

if(isset($_POST['submit']))
{

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email=$_POST['email'];
    $pass = $_POST['password'];
   

    $select = " SELECT * FROM users_tbl WHERE email = '$email' AND password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exist!';

    }else{

        if($pass){
            $error[] = 'password not matched!';
        }else{
            $insert = "INSERT INTO users_tbl SET
            first_name='$firstname',
            last_name='$lastname',
            email='$email',
            password='$pass'
           
            ";
                $res =mysqli_query($conn, $insert);
                header('location:sign_in.php');
                
    }
 }
}




?>
<!---- modal conf for generating account --->
<div class="modal fade mt-5 message-alert" id="modalGenerate" data-bs-backdrop="satic" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalGenerate" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header p-4 pb-4 border-bottom-0">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <p class="fw-bold mb-0 fs-1">Create an Account!</p>
     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body py-4 pt-0">
        <form method="POST">
         <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" name="firstname" placeholder="First name" required>
            <label for="firstName">First name</label>
            <div class="invalid-feedback">
                Please enter your First Name.
              </div>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" name="lastname" placeholder="Last name" required>
            <label for="lastName">Last name</label>
            <div class="invalid-feedback">
                Please enter your Last Name.
              </div>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-4" name="email" placeholder="name@example.com" required>
            <label for="email">Email address</label>
            <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-4" name="Password" placeholder="Password" required>
            <label for="Password">Password</label>
           <div class="invalid-feedback">
                Your password is required.
              </div>
          </div>
       <a data-bs-toggle="modal" data-bs-target="#modalForgottenpassword" class="text-decoration-none">Forgot your password?</a>
        <button type="submit" name="submit" class="w-100 mb-2 btn btn-lg rounded-4 btn-outline-warning mt-2">Register Account</button>
           
     <hr class="my-4">
          <h2 class="fs-5 fw-bold text-white ms-1 mb-3">Or use a third-party</h2>
          <a href="https://accounts.google.com/o/oauth2/v2/auth/oauthchooseaccount?scope=profile%20email%20openid&access_type=offline&include_granted_scopes=true&state=state%3DeyJhY3Rpb24iOiJUT1BfUkVESVJFQ1QiLCJhcHBFbnRyYW5jZSI6ImludGwtYWxpeXVuIiwiYXBwTmFtZSI6ImludGwtYWxpeXVuIiwibGFuZyI6ImVuX1VTIiwibG9naW5TdWNSZXN1bHRBY3Rpb24iOiJsb2dpblJlc3VsdCIsIm1vYmlsZSI6dHJ1ZSwic3RhdGUiOiI4NDVkNDJiNDA4ZjQ0NTI1YmVmNmZiNzdmMzIzNDM3NSIsInRva2VuIjoiaWRjXzZId2pRWkJLR1VJd0RCcDlOVWJaODBnIn0%26return_url%3Dhttps%253A%252F%252Faccount.alibabacloud.com%253A443%252Flogin%252Flogin_aliyun.htm%253Foauth_callback%253Dhttps%25253A%25252F%25252Fwww.alibabacloud.com%25252F%2526isQr%253Dfalse%2526notNeedHardware%253D0&redirect_uri=https%3A%2F%2Fpassport.alibabacloud.com%2Foauth_sign.htm%3Ftype%3Dgoogle&response_type=code&client_id=862463563138-si5u3srk368mu2pji5us5qeevq2fj2tt.apps.googleusercontent.com&service=lso&o2v=2&ddm=0&flowName=GeneralOAuthFlow" class="w-100 py-2 mb-2 btn btn-danger rounded-4">
           <i class="bx bxl-google"></i>
            Sign in with Google
          </a>
          <a href="http://m.facebook" class="w-100 py-2 mb-2 btn btn-primary rounded-4" >
       <i class="bx bxl-facebook"></i>
            Sign in with Facebook
          </a>
          
          <hr class="my-4 text-dark">
          	 
             <a data-bs-toggle="modal" data-bs-target="#modalSignin" class="w-100 py-2 btn">Already have an Account? Login!</a>
        </form>
      </div>
    </div>
  </div>
</div>