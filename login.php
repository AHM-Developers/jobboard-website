<?php
include("./header.php");
?>


    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Sign Up/Login</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Log In</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="mb-4">Sign Up To JobBoard</h2>
            <form action="#" class="p-4 border rounded" method="POST">

            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Username</label>
                  <input type="text" id="fname" class="form-control" placeholder="Username" name="uname">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Email</label>
                  <input type="text" id="fname" class="form-control" placeholder="Email address" name="uemail">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Password</label>
                  <input type="password" id="fname" class="form-control" placeholder="Password" name="upass">
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname" >Re-Type Password</label>
                  <input type="password" id="fname" class="form-control" placeholder="Re-type Password" name="retypepass">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" class="btn px-4 btn-primary text-white" name="btnsubmit">Sign Up</button>
                </div>
              </div>

            </form>
          </div>
          <div class="col-lg-6">
            <h2 class="mb-4">Log In To JobBoard</h2>
            <form action="#" class="p-4 border rounded">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Email</label>
                  <input type="text" id="fname" class="form-control" placeholder="Email address">
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Password</label>
                  <input type="password" id="fname" class="form-control" placeholder="Password">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Log In" class="btn px-4 btn-primary text-white">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>
    





    <?php
include("./dbconnection.php");

if(isset($_POST['btnsubmit']))
{
    $username = $_POST['uname'];
    $useremail = $_POST['uemail'];
    $userpassword = md5($_POST['upass']);
$retypepassword = md5($_POST['retypepass']);

if($retypepassword === $userpassword)
{
    $insertquery = mysqli_query($con, "INSERT INTO users (user_name, user_email, user_password) VALUES ('$username', '$useremail', '$userpassword')");

    // Check if the query executed 
    if($insertquery)
    {
        echo "<script>alert('Data inserted successfully.');
        document.location.href='./index.php';
        </script>";
       
    }
    else
    {
        echo "<script>alert('Failed to insert data.')</script>";
    }
}
else
{
  echo "<script>alert('password error')</script>";
}
}

?>


<?php
include("./footer.php");
?>