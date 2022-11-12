<?php 
if(isset($_POST['submit'])){
$email = $_POST['email'];
$validate = filter_var($email, FILTER_SANITIZE_EMAIL);
if(filter_var($validate,FILTER_VALIDATE_EMAIL) === false){
echo '<h4>Email is not valid</h4>';
}
else{
echo '<h4>Email is valid</h4>';
}
}
?>