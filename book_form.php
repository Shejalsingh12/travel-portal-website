<?php 
$apikey = "rzp_test_Zhm057SvInF33X";

$connection = mysqli_connect('localhost','root','','book_db');
//  $conn = mysqli_connect("hostname", "username", "password", "database_name");

   

   if(isset($_POST['send'])){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $address = $_POST['address'];
       $location = $_POST['location'];
       $guests = $_POST['guests'];
       $arrivals = $_POST['arrivals'];
       $leaving = $_POST['leaving'];
       


       $request = "insert into book_form(name,email,phone,address,location,guests,arrivals,leaving ) values('$name','$email', '$phone' ,'$address','$location','$guests','$arrivals','$leaving')";

       mysqli_query($connection, $request);
       header('location:book.php');

   }else{
    echo 'something went wrong try again';
   }
   
?>
<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apikey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="100" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"// Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="travel booking portal"
    data-description="tour & travel"
    data-image="https://example.com/your_logo.jpg"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden"/>
</form>
<script src="script.js"></script>



