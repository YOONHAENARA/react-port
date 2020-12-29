<?php
    include '../connect/session.php';
    include '../connect/connect.php';
    include '../connect/checkSession.php';
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTFOLIO</title>

    <!-- style -->
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/style3.css">

    <!--web fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">

    <!--font awesome-->
    <script src="https://use.fontawesome.com/1d25719255.js"></script>
</head>

<body>
    <?php
       include '../dom/header.php';
   ?>
    <!-- //header -->
    <main>
        <!-- boardCont -->
        <section id="boardCont">
            <div class="container">
                <h1 class="contTitle" aria-label="CODING NOTICE">
                    <span aria-hidden="true">NOTICE</span>
                </h1>
                <div class="listBoard">

                    <?php
                    include 'searchBoard.php';
                    ?>

                    <div class="tableList">
                        <table class="table">
                            <colgroup>
                                <col style="width: 10%;">
                                <col style="width: 65%;">
                                <col style="width: 10%;">
                                <col style="width: 15%;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th scope="col">번호</th>
                                    <th scope="col">제목</th>
                                    <th scope="col">등록자</th>
                                    <th scope="col">등록일</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(isset($_GET['page'])){
                                        $page = (int) $_GET['page'];
                                    } else {
                                        $page = 1;
                                    }
                                    $numView = 20;
                                    $firstLimitValue = ($numView * $page) - $numView;

                                    $sql = "SELECT b.boardID, b.title, m.youName, b.regTime FROM board b JOIN member m ON (b.memberID = m.memberID) ORDER BY boardID ";
                                    $sql .= "DESC LIMIT {$firstLimitValue}, {$numView}";
                                    $result = $dbConnect->query($sql);
                                
                                    if($result){
                                        $dataCount = $result->num_rows;

                                        if($dataCount > 0){
                                            for($i=0; $i<$dataCount; $i++){
                                                $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
                                                echo "<tr>";
                                                echo "<td>".$memberInfo['boardID']."</td>";
                                                echo "<td><a href='viewBoard.php?boardID={$memberInfo['boardID']}'>".$memberInfo['title']."</a></td>";
                                                echo "<td>".$memberInfo['youName']."</td>";
                                                echo "<td>".date('Y-m-d H:i', $memberInfo['regTime'])."</td>";
                                                echo "</tr>";
                                            }
                                        }
                                    } else {
                                        //게시글이 없을 경우
                                        echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
                                    }

                                ?>
                                <!--
                                
                                <tr>
                                    <td>100</td>
                                    <td>포트폴리오 사이트는 어떻게 만드나요?</td>
                                    <td>윤해나라</td>
                                    <td>2020-10-20 15:07</td>
                                </tr>
-->

                            </tbody>
                        </table>
                    </div>

                    <!-- pagination -->
                    <?php
                    include 'pagination.php';
                    ?>

                    <!-- //pagination -->
                </div>
            </div>
        </section>
        <!--borderCont-->
    </main>


    <!--
    <script src="static/js/jquery-3.5.1.min.js"></script>
    <script src="static/js/weatherApi.js"></script>
    <script src="static/js/currentdate.js"></script>
-->
</body>

</html>
