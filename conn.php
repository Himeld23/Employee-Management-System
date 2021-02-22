<?php 

$conn = mysqli_connect( 'localhost', 'root', '', 'demo' );

if( !$conn ){
    die( 'Unable to connect' );
}



$conn = mysqli_connect('localhost','root','','demo');
if (!$conn){
    die('unable to connect');
}
?>

<?php require 'conn.php'; ?>
<?php 
 If(isset($_POST['U_Reg'])){
  $u_email = $_POST['u_email'];
  $U_name = $_post['u_name'];
  $u_password= md5($_post['u_password']);
 }
 $sql = insert into users( u_email,u_name,U_password) values

 if (mysqli_query($conn,$sql)){
     echo <script>''</script>
 }
 
?>