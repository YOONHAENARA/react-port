<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signUpSave</title>

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
    include '../connect/connect.php';
    include '../connect/session.php';
    include '../dom/header.php';

    $userEmail = $_POST['userEmail'];
    $userName = $_POST['userName'];
    $userPw = $_POST['userPw'];
    $birthYear = (int) $_POST['birthYear'];//int 형변환
    $birthMonth = (int) $_POST['birthMonth'];
    $birthDay = (int) $_POST['birthDay'];

    function goSignUpPage($alert) {
        echo "<div class='signInfo'><p>{$alert}</p><a href='signUp.php'>회원가입 페이지로 이동하기</a></div>";
        return;
        }
        
        
    //이메일 검사
    if(!filter_Var($userEmail, FILTER_VALIDATE_EMAIL)) {
        goSignUpPage("죄송합니다. <br>올바른 이메일이 아닙니다.");
        exit;
    }

    //이름이 한글로 구성되어있는지 정규식 검사
    $userNameRegPattern = '/^[가-힣]{1,}$/';
    if (!preg_match($userNameRegPattern, $userName, $matches)) {
        goSignUpPage('닉네임은 한글로만 입력해 주세요.');
        exit;
    }

    //비밀번호 검사
    if($userPw == null || $userPw == ''){
        goSignUpPage('비밀번호를 입력해 주세요.');
        exit;
    }

    //$userPw = sha1('php'.$userPw); 비밀번호 암호화 시켜주는 코드(원래는 켜놔야 함)

    //생년 검사
    if($birthYear == 0) {
         goSignUpPage('생년을 정확히 입력해 주세요.');
        exit;
    }

    //생월 검사
    if($birthMonth == 0) {
        goSignUpPage('생월을 정확히 입력해 주세요.');
        exit;
    }

    //생일 검사
    if($birthDay == 0) {
        goSignUpPage('생일을 정확히 입력해 주세요.');
        exit;
    }

    $birth = $birthYear.'-'.$birthMonth.'-'.$birthDay;

    //이메일 중복 검사
    $isEmailCheck = false;

    $sql = "SELECT youEmail FROM member WHERE youEmail = '{$userEmail}'";
    $result = $dbConnect->query($sql);

    if( $result ) {
        $count = $result->num_rows;
        if($count == 0){
            $isEmailCheck = true;
            } else {
            goSignUpPage('이미 존재하는 이메일 입니다.');
            exit;
            }
        } else {
            echo "에러발생 : 관리자 문의 요망";
            exit;
            }

            //이상 없으면 데이터 입력
            if ($isEmailCheck == true) {
                $regTime = time();
                $sql = "INSERT INTO member(youEmail, youName, youPw, birthday, regTime)";
                $sql .= "VALUES('{$userEmail}','{$userName}','{$userPw}','{$birth}',{$regTime})";
                $result = $dbConnect->query($sql);

                if ($result) {
                    $_SESSION['memberID'] = $dbConnect->insert_id;
                    $_SESSION['youName'] = $userName;
                    Header("Location: http://haenara.dothome.co.kr/port/main/index4.html");
                } else {
                    echo '에러발생 : 관리자에게 문의하세요!';
                    exit;
                }
            } else {
                goSignUpPage('이메일 또는 닉네임이 존재합니다.');
                exit;
            }
?>
    <!-- script -->
    <script src="../../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../../assets/js/explode.js"></script>
</body>

</html>
