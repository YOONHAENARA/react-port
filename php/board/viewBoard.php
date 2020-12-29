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
                    <span aria-hidden="true">Code</span>
                    <span aria-hidden="true">NOTICE</span>
                </h1>
                <div class="listBoard">
                    
                    <div class="tableList">
                        <table class="table">
							<colgroup>
								<col style="width: 20%;">
								<col style="width: 80%;">
							</colgroup>
							<tbody>
								
							<?php
								if(isset($_GET['boardID']) && (int) $_GET['boardID'] > 0){
							    	$boardID = $_GET['boardID'];
							    	$sql = "SELECT b.title, b.content, m.youName, b.regTime FROM board b JOIN member m ON (b.memberID = m.memberID) WHERE b.boardID = {$boardID}";
							    	$result = $dbConnect->query($sql);

							    	if($result){
							    		$contentInfo = $result->fetch_array(MYSQLI_ASSOC);
							    		echo "<tr><th>제목</th><td>{$contentInfo['title']}</td></tr>";
							    		echo "<tr><th>등록자</th><td>{$contentInfo['youName']}</td></tr>";
							    		$regDate = date("Y-m-d h:i");
							    		echo "<tr><th>등록일</th><td>{$regDate}</td></tr>";
							    		echo "<tr style='height:400px'><th>내용</th><td>{$contentInfo['content']}</td></tr>";
							    	}
							    }
							?>
							</tbody>
						</table>
                    </div>
                    <a href="listBoard.php" class="btn-list">목록보기</a>
                </div>
            </div>
        </section>
        <!— //boardCont —>
    </main>
    

    <!--
    <script src="static/js/jquery-3.5.1.min.js"></script>
    <script src="static/js/weatherApi.js"></script>
    <script src="static/js/currentdate.js"></script>
-->
</body>

</html>