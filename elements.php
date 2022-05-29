<?php
$con = new mysqli("localhost", "root", "root", "test_bd") or die($mysqli -> connection_error);

if (isset($_GET['page'])){
    $page = $_GET['page'];
}else $page = 1;

$kol = 10;
$art = ($page * $kol) - $kol;


$res = $con -> query("SELECT COUNT(*) FROM accounts");
$row = mysqli_fetch_row($res);
$total = $row[0]; // всего записей

$str_pag = ceil($total / $kol);


if ( empty($errors) == true ){
    $sql = "SELECT * FROM accounts LIMIT $art, $kol";
    $result = $con -> query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()):?>
            
            <div class="accaunt" data-account_id="<?php echo $row['id'];?>">
                <div id="Account_ID" class="info_block">
                    <h1>Account ID</h1>
                    <h2><?php echo $row['id'];?></h2>
                </div>
                <div id="First_Name" class="info_block">
                    <h1>First Name</h1>
                    <h2><?php echo $row['First_name']; ?></h2>
                </div>
                <div id="Last_Name" class="info_block">
                    <h1>Last Name</h1>
                    <h2><?php echo $row['Last_name']; ?></h2>
                </div>
                <div id="E_mail" class="info_block">
                    <h1>E-mail</h1>
                    <h2><?php echo $row['E_mail']; ?></h2>
                </div>
                <div id="Company_name" class="info_block">
                    <h1>Company name</h1>
                    <h2><?php echo $row['Company_Name']; ?></h2>
                </div>
                <div id="Position_block" class="info_block">
                    <h1>Position</h1>
                    <h2><?php echo $row['Position_cont']; ?></h2>
                </div>
                <div id="Telephone_number" class="info_block">
                    <h1>Telephone number</h1>
                    <h2 id="tel1" ><?php echo $row['Telephone_number1'];?></h2>
                    <h2 id="tel2" ><?php echo $row['Telephone_number2'];?></h2>
                    <h2 id="tel3" ><?php echo $row['Telephone_number3'];?></h2>
                </div>
                <div class="buttons_block">
                    <a class="edit" href=""><img src="./media/edit.svg" alt=""></a>
                    <a class="trash" href=""><img src="./media/trash.svg" alt=""></a>
                </div>
            </div>


        <?endwhile;?>
    <?php
    } else {
        echo mysqli_error($con);
    }

};
?>