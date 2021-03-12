<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher</title>
  </head>
  <body>
    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td>
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align = "center"><h1>School Management System</h1></td>
              <td align = "right">
                <a href="dashboard">Back</a> |
                <a href="logout.php">Logout</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table width="100%" cellspacing="0" border="0">
            <tr>
              <td width="250px">
                <center>
                  <h3>Login As</h3>
                  <h2>User name</h2>
                  <p>(Admin)</p>
                </center>
                <hr>
                <ul>
                  <li><a href="addTeacher.php">Add Teacher</a></li>
                  <li><a href="viewTeacher.php">View Teacher</a></li>
                  <li><a href="dashboard.php">Dashbord</a></li>
                  <li><a href="logout.php">Logout</a></li>

                </ul>
              </td>

              <td>
                <form  class="" action="regCheck.php" method="post">
                  <fieldset >
                    <legend>REGESTRATION</legend>
                      <table align="center">
                        <tr>
                          <td>Name</td>
                          <td>:<input type="text" name="name" placeholder="Enter Full Name"></td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>:<input type="email" name="email" value=""></td>
                        </tr>
                        <tr>
                          <td>Mobile No</td>
                          <td>:<input type="number" name="mobile" value=""></td>
                        </tr>
                        <tr>
                          <td>Id</td>
                          <td>:<input type="text" name="username" value=""></td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td>:<input type="password" name="password" value=""></td>
                        </tr>
                        <tr>
                          <td>Confirm Password</td>
                          <td>:<input type="password" name="confirm_password" value=""></td>
                        </tr>
                        <tr>
                          <td>Gender</td>
                          <td>
                            :<input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="other">Other
                          </td>
                        </tr>
                        <tr>
                          <td>Date of Birth</td>
                          <td>:<input type="date" name="dob" value=""></td>
                        </tr>
                        <tr>
                          <td>Present Address</td>
                          <td>:<input type="text" name="paddress" value=""></td>
                        </tr>
                      </table>
                      <hr>
                      <center>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </center>
                  </fieldset>
                </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>




      <tr>
        <td align="center" >Copyright Ⓒ 2021</td>
      </tr>

    </table>

  </body>
</html>
