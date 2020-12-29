<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--style-->
    <link rel="stylesheet" href="../../assets/css/style3.css">
    <link rel="stylesheet" href="../../assets/css/reset.css">
    
</head>

<body>
    <?php
    include '../connect/connect.php';
    include '../connect/session.php';
    include '../dom/header.php';

    $userEmail = $_POST['userEmail'];
    $userPw = $_POST['userPw'];

    function goSignInPage($alert){
        echo "<div class='signInfo'><p>{$alert}</p><a href='logIn.php'>로그인 페이지로 이동하기</a></div>";
        return; //(종료, 실행또는 출력)
    }
    //이메일 검사해 주는 메서드
    if(!filter_Var($userEmail, FILTER_VALIDATE_EMAIL)){
        goSignInPage("죄송합니다. <br>올바른 이메일이 아닙니다.");
        exit;
    }

    //비밀번호 검사
    if($userPw == null || $userPw == ''){
        goSignInPage('비밀번호를 입력해 주세요.');
        exit;
    }

    $sql = "SELECT youEmail, youName, memberID FROM member ";
    $sql .= "WHERE youEmail = '{$userEmail}' AND youPW = '{$userPw}' ";
    $result = $dbConnect->query($sql);

    if( $result ){
        if($result->num_rows == 0){
            goSignInPage('로그인 정보가 일치하지 않습니다.');
            exit;
        } else {
            $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
            $_SESSION['memberID'] = $memberInfo['memberID'];
            $_SESSION['youName'] = $memberInfo['youName'];
            Header("Location: http://haenara.dothome.co.kr/port/main/index4.html");
        }
    }

?>
</body>

</html>
