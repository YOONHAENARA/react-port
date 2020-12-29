<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--style-->
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/style3.css">


    <!--web fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">
</head>

<body>
    <?php
       include '../dom/header.php';
   ?>
    <!-- //header -->
    <section id="sign_wrap">
        <div class="userAccount_cont">
            <div class="center_txt">
                <p>Welcome!</p>
            </div>
            <form name="signUp" method="post" action="signUpSave.php" class="inputForm">
                <filedset>
                    <legend class="hide">회원가입 영역</legend>
                    <div>
                        <label for="userEmail" class="idPw">Email Address</label>
                        <input type="email" name="userEmail" id="userEmail" class="input_txt" required autofocus>
                    </div>
                    <div>
                        <label for="userName" class="idPw">Name</label>
                        <input type="name" name="userName" id="userName" class="input_txt" required>
                    </div>
                    <div>
                        <label for="userPw" class="idPw">Password</label>
                        <input type="password" name="userPw" id="userPw" class="input_txt" required>
                    </div>
                    <div class="birth">
                        <p>Date of birth</p>
                        <div class="birthCont">
                            <div>
                                <label for="birthYear">Year</label>
                                <select id="birthYear" name="birthYear" required>
                                    <?php
                                            $thisYear = date('Y', time());
                                        
                                            for($i = $thisYear; $i >= 1930; $i--) {
                                                echo "<option value='{$i}'>{$i}</option>";
                                            }
                                        ?>
                                </select>
                            </div>
                            <div>
                                <label for="birthMonth">Month</label>
                                <select id="birthMonth" name="birthMonth" required>
                                    <?php
                                            for($i = 1; $i <= 12; $i++) {
                                                echo "<option value='{$i}'>{$i}</option>";
                                            }
                                        ?>
                                </select>
                            </div>
                            <div>
                                <label for="birthDay">Day</label>
                                <select id="birthDay" name="birthDay" required>
                                    <?php
                                            for($i = 1; $i <= 31; $i++) {
                                                echo "<option value='{$i}'>{$i}</option>";
                                            }
                                        ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="checkCont">
                        <div class="txt">
                            <p>By creating an account, you agree to the <a href="#">Terms of Service</a> and acknowledge our <a href="#">Privacy Policy</a>.
                            </p>
                        </div>
                    </div>
                    <div>
                        <button class="btn" type="submit">Create Account</button>
                    </div>
                </filedset>
            </form>
            <div class="accountLink">
                <p>Already have a account? <a href="logIn.php">Log in</a></p>
            </div>
        </div>
    </section>
    <!-- //section -->

    <!-- script -->
    <script src="../../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../../assets/js/explode.js"></script>
</body>

</html>
