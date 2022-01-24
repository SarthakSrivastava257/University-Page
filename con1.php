<?php
if (isset($_POST['name1'])) {
    $S_Name = $_POST['name1'];}
if (isset($_POST['Fname1'])) {
    $F_Name = $_POST['Fname1'];}
    if (isset($_POST['email1'])) {
    $E_mail = $_POST['email1'];}
    if (isset($_POST['number1'])) {
    $Mobile_no = $_POST['number1'];}
    if (isset($_POST['age1'])) {
    $Age = $_POST['age1'];}
    if (isset($_POST['gender1'])) {
    $Gender = $_POST['gender1'];}
    if (isset($_POST['tenth1'])) {
    $Tenth_pctage = $_POST['tenth1'];}
    if (isset($_POST['class1'])) {
    $Board = $_POST['class1'];}
    if (isset($_POST['twelfth1'])) {
    $Twelfth_pctage = $_POST['twelfth1'];}

$conn= new mysqli('localhost','root','','d1');
if($conn->connect_error){
	die('connection Failed:' .$conn->connect_error);

}
else{
	$stmt=$conn->prepare("insert into t1(S_Name,F_Name,E_mail,Mobile_no,Age,Gender,Tenth_pctage,Board,Twelfth_pctage)values(?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssiisisi",$S_Name,$F_Name,$E_mail,$Mobile_no,$Age,$Gender,$Tenth_pctage,$Board,$Twelfth_pctage);
	$stmt->execute();
	echo "Registered successfully , we will notify you soon after verifying your eligibility . THANKYOU :)";
	$stmt->close();
    $conn->close();
}
?>