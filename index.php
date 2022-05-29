<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="./fonts/fonts.css">
    <script src="./jquery.js"></script>
</head>
<body>
    <div class="popups hide">
        <div class="wrapper">
            <div class="container">

                <!-- CREATE ACCOUNT -->
                <div class="form hide" id="creating_account">
                    <div id="form_head">
                        <h1 class="form_title">Creating a new account</h1>
                        <a class="close_creating_form" href=""><img src="./media/cross.svg" alt=""></a>
                    </div>

                    <form action="" method="post">
                        <div id="input_cont">
                            <div id="First_Name" class="form_cont">
                                <h1>First Name *</h1>
                                <input type="text" name="First_Name" placeholder="First Name *">
                            </div>
                            <div id="Last_Name" class="form_cont">
                                <h1>Last Name *</h1>
                                <input type="text" name="Last_Name" placeholder="Last Name *">
                            </div>
                            <div id="E_mail" class="form_cont">
                                <h1>E-mail *</h1>
                                <input type="text" name="E_mail" placeholder="E-mail *">
                            </div>
                            <div id="Telephone_number1" class="form_cont">
                                <h1>Telephone number</h1>
                                <input type="text" name="Telephone_number1" placeholder="Telephone number">
                            </div>
                            <div id="Telephone_number2" class="form_cont">
                                <h1>Telephone number</h1>
                                <input type="text" name="Telephone_number2" placeholder="Telephone number">
                            </div>
                            <div id="Telephone_number3" class="form_cont">
                                <h1>Telephone number</h1>
                                <input type="text" name="Telephone_number3" placeholder="Telephone number">
                            </div>
                            <div id="Position_cont" class="form_cont">
                                <h1>Position</h1>
                                <input type="text" name="Position_cont" placeholder="Position">
                            </div>
                            <div id="Company_Name" class="form_cont">
                                <h1>Company Name</h1>
                                <input type="text" name="Company_Name" placeholder="Company Name">
                            </div>
                        </div>

                        <div id="button_cont">
                            <button type="submit" >Create new account</button>
                        </div>
                    </form>
                </div>
                
                <!-- EDIT ACCOUNT -->
                <div class="form show" id="edit_account">
                    <div id="form_head">
                        <h1 class="form_title">Edit account</h1>
                        <a class="close_creating_form" href=""><img src="./media/cross.svg" alt=""></a>
                    </div>

                    <form action="" method="post">
                        <div id="input_cont">
                            <div id="First_Name" class="form_cont">
                                <h1>First Name *</h1>
                                <input type="text" name="First_Name" placeholder="First Name *">
                            </div>
                            <div id="Last_Name" class="form_cont">
                                <h1>Last Name *</h1>
                                <input type="text" name="Last_Name" placeholder="Last Name *">
                            </div>
                            <div id="E_mail" class="form_cont">
                                <h1>E-mail *</h1>
                                <input type="text" name="E_mail" placeholder="E-mail *">
                            </div>
                            <div id="Telephone_number1" class="form_cont">
                                <h1>Telephone number</h1>
                                <input type="text" name="Telephone_number1" placeholder="Telephone number">
                            </div>
                            <div id="Telephone_number2" class="form_cont">
                                <h1>Telephone number</h1>
                                <input type="text" name="Telephone_number2" placeholder="Telephone number">
                            </div>
                            <div id="Telephone_number3" class="form_cont">
                                <h1>Telephone number</h1>
                                <input type="text" name="Telephone_number3" placeholder="Telephone number">
                            </div>
                            <div id="Position_cont" class="form_cont">
                                <h1>Position</h1>
                                <input type="text" name="Position_cont" placeholder="Position">
                            </div>
                            <div id="Company_Name" class="form_cont">
                                <h1>Company Name</h1>
                                <input type="text" name="Company_Name" placeholder="Company Name">
                            </div>
                        </div>

                        <div id="button_cont">
                            <button type="submit" >save</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>

    <header>
        <div class="wrapper">
            <div class="container">
                <a id="create_new_acc" href="">Create a new account</a>
            </div>
        </div>
    </header>

    <div id="content" class="wrapper">
        <div class="container">

            <?php require('elements.php'); ?>

        </div>
    </div>

    <div class="wrapper">
        <div class="page_number_cont">
            <?
            for ($i = 1; $i <= $str_pag; $i++){
                echo "<a href=index.php?page=".$i.">".$i."</a>";
            };
            ?>
        </div>
    </div>

<script src="./index.js"></script>
</body>
</html>