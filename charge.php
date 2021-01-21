
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stripe";
$conn = mysqli_connect($servername, $username, $password, $dbname)
?>

<?php
    require_once('./config.php');

    $token  = $_POST['stripeToken'];
    $email  = $_POST['stripeEmail'];

 /*   $customer = \Stripe\Customer::create([
        'email' => $email,
        'source'  => $token,
    ]);*/

    $charge = \Stripe\Charge::create([
        'source'  => $token,
        'amount'   => 5000,
        'currency' => 'usd',
    ]);

    $amount=$charge['amount'];
    $id=$charge['id'];

    $query = "insert into transactions(amount, charge_id) values('$amount', '$id')";
    if (mysqli_multi_query($conn, $query)) {
        $msg = "<span style='color:green; font_size:18px;'>Successfully Inserted ..</span>";
        return $msg;

    } else {
        $msg = "<span style='color:red; font_size:18px;'> Not  Inserted ..</span>";
        return $msg;
    }

?>