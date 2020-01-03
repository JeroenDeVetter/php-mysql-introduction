<?php
require "connection.php";
require "insert.php";

//this line makes PHP behave in a more strict way
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title>php-mysql-introduction</title>
</head>
<body>
    
    <h1>php-mysql-introduction</h1>
    <form method="post">
        <fieldset>
            <legend>Students</legend>

            <div class="form-row">

                <div class="form-group col-md-6">

                <label for="firstname">First-name:</label>
                <label class="error">
                    <?php

                    ?>
                </label>
                <input type="text" id="firstname" name="firstname" class="form-control" value="<?php

                ?>"/>
                </div>

            <div class="form-group col-md-6">

                <label for="lastname">Last-name:</label>
                <label class="error">
                    <?php

                    ?>
                </label>
                <input type="text" id="lastname" name="lastname" class="form-control" value="<?php

                ?>"/>
         

            </div>
                <div class="form-group col-md-6">
                    <label for="username">Username:</label>
                    <label class="error">
                        <?php
                     
                        ?>
                    </label>
                    <input type="text" name="username" id="username" class="form-control" value="<?php
                     
                    ?>"/>
                </div>
                <div class="form-group col-md-6">
                    <label for="gender">Gender:</label>
                    <label class="error">
                        <?php
                      
                        ?>
                    </label>
                    <input type="text" id="gender" name="gender" class="form-control" value="<?php
                       
                        ?>"/>
                </div>

                <div class="form-group col-md-6">
                    <label for="linkedin">Linkedin:</label>
                    <label class="error">
                        <?php
                      
                        ?>
                    </label>
                    <input type="text" id="linkedin" name="linkedin" class="form-control" value="<?php
                       
                        ?>"/>
                </div>

                <div class="form-group col-md-6">
                    <label for="github">Github:</label>
                    <label class="error">
                        <?php
                      
                        ?>
                    </label>
                    <input type="text" id="github" name="github" class="form-control" value="<?php
                       
                        ?>"/>
                </div>

                <div class="form-group col-md-6">
                    <label for="email">Email:</label>
                    <label class="error">
                        <?php
                      
                        ?>
                    </label>
                    <input type="text" id="email" name="email" class="form-control" value="<?php
                       
                        ?>"/>
                </div>

                <div class="form-group col-md-6">
                    <label for="prefLang">Preferred language:</label>
                    <label class="error">
                        <?php
                      
                        ?>
                    </label>
                    <input type="text" id="prefLang" name="prefLang" class="form-control" value="<?php
                       
                        ?>"/>
                </div>

                <div class="form-group col-md-6">
                    <label for="avatar">Avatar:</label>
                    <label class="error">
                        <?php
                      
                        ?>
                    </label>
                    <input type="text" id="avatar" name="avatar" class="form-control" value="<?php
                       
                        ?>"/>
                </div>

                <div class="form-group col-md-6">
                    <label for="video">Video:</label>
                    <label class="error">
                        <?php
                      
                        ?>
                    </label>
                    <input type="text" id="video" name="video" class="form-control" value="<?php
                       
                        ?>"/>
                </div>

                <div class="form-group col-md-6">
                    <label for="quote">Quote:</label>
                    <label class="error">
                        <?php
                      
                        ?>
                    </label>
                    <input type="text" id="quote" name="quote" class="form-control" value="<?php
                       
                        ?>"/>
                </div>

                <div class="form-group col-md-6">
                    <label for="quoteAuthor">Quote author:</label>
                    <label class="error">
                        <?php
                      
                        ?>
                    </label>
                    <input type="text" id="quoteAuthor" name="quoteAuthor" class="form-control" value="<?php
                       
                        ?>"/>
                </div>
            </div>
        </fieldset>

        <button type="submit" class="btn">Send students to db</button>
        <?php
           
           if ($_SERVER['REQUEST_METHOD'] == 'POST') sendToDb($_POST["firstname"], $_POST["lastname"] , $_POST["username"] , $_POST["gender"] , $_POST["linkedin"] , $_POST["github"] , $_POST["email"] , $_POST["prefLang"] , $_POST["avatar"] , $_POST["video"] , $_POST["quote"] , $_POST["quoteAuthor"])
           ?>
    </form>

    <?php 
        showCollumns()
    ?>
</body>
</html>