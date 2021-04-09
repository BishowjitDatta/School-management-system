<?php
	session_start();
    require_once('../Model/DatabaseConnection.php');
    $User = getUserById($_COOKIE['ID']);
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
  </head>
  <body>
    <table border="1" cellspacing="0" width="80%" >
    <?php include("TeacherHeader.php") ?>
      <tr>
        <tr>
            <td align="Left"><img height="80px" weight="80px" src="../Resources/Student.jpg" alt=""></td>
            <td align="Center">
            <b>
              Profile Infromation Change
            </b>
            </td>
          </tr>
        <td height="150px" weight="150px">
                <ul>
                    <li><a href="TeacherDashboard.php">Dashboard</a></li>
                    <li><a href="ViewProfile.php">View Profile</a></li>
                    <li><a href="StudentList.php">View Student's Profile</a></li>
                    <li><a href="Attendance.php">Student Attendance</a></li>
                    <li><a href="Schedule.php">Class Schedule</a></li>
                    <li><a href="NoticeBoard.php">Notice Board</a></li>
                    <li><a href="UploadNotes.php">Upload Notes</a></li>
                    <li><a href="StudentListMarks.php">Student Marks</a></li>
                    <li><a href="BookHistory.php">Book History</a></li>
                    <li><a href="ChangePass.php">Reset Password</a></li>
                    <li><a href="../Controller/Logout.php">Logout</a></li>
                </ul>

        </td>
        <td>
            <fieldset>
                <legend>EDIT PROFILE</legend>
            <form class="" action="../Controller/EditCheck.php" method="post">

            <table>
					<tr>
						<td>ID</td>
						<td>: <input type="number" name="ID" disabled value="<?php echo $User['id']; ?>"></td>
					</tr>
					<tr>
						<td>Name</td>
						<td>: <input type="text" name="uname" value="<?php echo $User['name']; ?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>: <input type="email" name="email" value="<?php echo $User['email']; ?>"></td>
					</tr>
                    <tr>
						<td>Mobile No.</td>
						<td>: <input type="number" name="mobile" value="<?php echo $User['mobile']; ?>"></td>
					</tr>
                    <tr>
						<td>Gender</td>
						<td>:<input type="radio" name="gender" <?php  if($User['gender']=="Male"){?> checked="true" <?php } ?> value="Male">Male
                          <input type="radio" name="gender"  <?php if($User['gender']=="Female"){?> checked="true" <?php } ?>  value="Female">Female
                          <input type="radio" name="gender" <?php if($User['gender']=="Other"){?> checked="true" <?php } ?> value="Other">Other</td>
					</tr>
                    <tr>
						<td>Date of Birth</td>
						<td>: <input type="date" name="dob" value="<?php echo $User['dob']; ?>"></td>
					</tr>

				</table>
				<hr>
				<input type="submit" name="submit" value="Edit">
               
               
            </form>
            </fieldset>
        </td>
      </tr>
      <?php include("TeacherFooter.php") ?>
    </table>

  </body>
</html>


<?php

	}else{
		header('location: LoginPage.php');
	}

?>
