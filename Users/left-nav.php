<?php
/* PTU_CSE_SYLLABUS_GUIDE */

if (!securePage($_SERVER['PHP_SELF'])){die();}

//Links for logged in user
if(isUserLoggedIn()) {
	echo "
	<ul>
	<li><a href='file_upload.php'>File Upload</a></li>
	<li><a href='uploaded_files.php'>All Uploaded Files</a></li>
	<li><a href='contact.php'>Contact Form</a></li>
	<li><a href='user_settings.php'>User Settings</a></li>
	<li><a href='logout.php'>Logout</a></li>
	</ul>";
	
	//Links for permission level 2 (default admin)
	/* if ($loggedInUser->checkPermission(array(2))){
	echo "
	<ul>
	<li><a href='admin_configuration.php'>Admin Configuration</a></li>
	<li><a href='admin_users.php'>Admin Users</a></li>
	<li><a href='admin_permissions.php'>Admin Permissions</a></li>
	<li><a href='admin_pages.php'>Admin Pages</a></li>
	</ul>";
	} */
} 
//Links for users not logged in
else {
	echo "
	<ul>
	<li><a href='index.php'>Home</a></li>
	<li><a href='login.php'>Login</a></li>
	<li><a href='register.php'>Register</a></li>
	<li><a href='forgot-password.php'>Forgot Password</a></li>";
	if ($emailActivation)
	{
	echo "<li><a href='resend-activation.php'>Resend Activation Email</a></li>";
	}
	echo "</ul>";
}

?>
