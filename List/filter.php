<?php $title="Functions"; include_once "../inc/head.php"; 
//filter list
echo "<pre>";
print_r(filter_list());
echo "</pre>";
echo "Filtring...<br>";
// $input = "<script>Dai</script>";
// echo filter_var($input, FILTER_SANITIZE_STRING);
// $input = "122345";
// echo filter_var($input, FILTER_VALIDATE_INT);
// $input = "dai@mail.com";
// echo filter_var($input, FILTER_VALIDATE_EMAIL);
// $input = "157.240.196.35"; //facebook
// echo filter_var($input, FILTER_VALIDATE_IP);

?>

<?php include_once "../inc/footer.php" ?> 