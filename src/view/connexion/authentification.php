<?php
    include_once 'header_con.php'
?>
    <div class="wrapper">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="/BanqueDuPeupleOrm/User/authentification" method="post">
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="login" required>
                <input type="password" id="password" class="fadeIn third" name="mdp" placeholder="password" required>
                <input type="submit" class="fadeIn fourth" name="vefUser" value="Log In">
            </form>
            <?php
                if(isset($data)){
                    echo '
                        <div id="formFooter">
                            <a style="color: red" href="#">'.$data.'</a>
                        </div>
                    ';
                }
            ?>

        </div>
    </div>
<?php
    include_once 'footer_con.php'
?>