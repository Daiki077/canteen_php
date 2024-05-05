<H1>HERE IS YOUR RECEIPT</H1>
<?phP
if (isset($_GET["getorder"])){

    // String passed inside our GET variable comes from the name attribute of our input element 
	$Q = $_GET['Quantity'];
	$C = $_GET['Cash'];
    $O = $_GET ['order'];

    // I USE IF STATEMENT TO GET EACH ORDER 
    if ($O =="FISH BALL"){
        $total = $Q *30;
        echo "<h2>the total of your order is ".$total. "PHP</h2>";
    }elseif($O == "KIKIAM"){
        $total = $Q *40;
        echo "<h2>the total of your order is ".$total. "PHP</h2>";
    }elseif($O == "CORNDOG"){
        $total = $Q *50;
        echo "<h2>the total of your order is ".$total. "PHP</h2>";
    }else{
        echo "";
    }
    // FOR THE CHANGE OF CUSTOMER 
    $CH = $C - $total; 
    echo "<h2>TOTAL OF YOUR CHANGE IS ". $CH."PHP</h2>";   
}
?>
<H3>THANK YOUR FOR BUYING</h3>