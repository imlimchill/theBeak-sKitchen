<?php include "../mainpage/header.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="../js/index.js"></script>
    <script src="../js/vendor/modernizr-custom.js"></script>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <link rel="stylesheet" href="../js/bootstrap.js">
    <link rel="stylesheet" href="../js/npm.js">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet"> -->
    <link rel="stylesheet" href="../css/recipe.css">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script> -->
    <title>repice</title>
</head>

<body style="background :#FFEAE5;">
    <br>
    <div class="container">
        <form>
            <!--레시피 대표 이미지-->
            <div class="row flex_box">
                <div class="col-md-10 text-center">
                    <img src="https://via.placeholder.com/550x450" class="img-thumbnail rounded">
                </div>
            </div>
            <!--레시피 제목-->
            <div class="row flex_box">
                <div class="col-sm-6 col-md-4">
                    <h3>제목</h3>
                </div>
            </div>
            <!--레시피 설명-->
            <div class="row flex_box">
                <div class="col-sm-6 col-md-4">
                    <p>"요리 설명을 해주시고 큰따옴표는 남겨주세요"</p>
                </div>
            </div>
            <!--좋아요 아이콘-->
            <div class="row flex_box">
                <div class="col-md-3">
                    <div class="thumbnail text-center">
                        <img src="../img/heart.png" class="icon">
                        <div class="caption">
                            <h6>그냥 죽어라냥</h6>
                        </div>
                    </div>
                </div>
                <!--매운맛 단계 표시-->
                <div class="col-md-3">
                    <div class="thumbnail text-center">
                        <img src="../img/Fire.png" class="icon">
                        <div class="caption">
                            <h6>그냥 죽어라냥</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!--페이스북 아이콘-->
            <div class="row flex_box">
                <div class="col-md-2">
                    <div class="img-rounded text-center">
                        <img src="../img/facebook.png">
                    </div>
                </div>
                <!--트위터 아이콘-->
                <div class="col-md-2">
                    <div class="img-rounded text-center">
                        <img src="../img/twitter.png">
                    </div>
                </div>
                <!--유튜브 아이콘-->
                <div class="col-md-2">
                    <div class="img-rounded text-center">
                        <img src="../img/youtube.png">
                    </div>
                </div>
            </div>
            <br>
            <!--재료 설명-->
            <div class="row flex_box">
                <div class="col-md-12">
                    <div class="ready_ingre3 text-center">
                        <ul class="col-md-6">
                            <b class="ready_ingre3">[재료]</b>
                            <li>토마토 같은거<span class="ingre_unit">1개</span>
                            </li>
                            <hr>
                            <li>스팸 <span class="ingre_unit">1개</span>
                            </li>
                            <hr>
                            <li>라면 <span class="ingre_unit">진라면</span>
                            </li>
                            <hr>
                            <li>당근 <span class="ingre_unit">반개</span>
                            </li>
                            <hr>
                            <li>청양고추 <span class="ingre_unit">1개</span>
                            </li>
                        </ul>
                        <!--양념 설명-->
                        <ul class="col-md-6">
                            <b class="ready_ingre3">[양념]</b>
                            <li>토마토소스 <span class="ingre_unit">4T</span>
                            </li>
                            <hr>
                        </ul>
                    </div>
                </div>
            </div>
            <!--동영상 -->
            <div class="row flex_box">
                <div class="col-md-7 text-center">
                    <h3>동영상</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=GP8_7D5eM6A">
                        </iframe>
                    </div>
                </div>
            </div>
    </div>
    <br>
    <!--레시피 설명-->
    <div class="row flex_box">
        <div class="recipe" style="width: 613px;">
            <div class="col-md-6">나의 피땀 눈물을 넣는다 과연 효과는
            </div>
            <!--레시피 이미지-->
            <div class="col-md-6 text-center">
                <img style="width: 250px; height: 150px;" src="https://via.placeholder.com/250x150">
            </div>
        </div>
    </div>
    <br>
    <div class="row flex_box">
        <div class="recipe" style="width: 613px;">
            <div class="col-md-6">과연 효과는
            </div>
            <!--레시피 이미지-->
            <div class="col-md-6 text-center">
                <img style="width: 250px; height: 150px;" src="https://via.placeholder.com/250x150">
            </div>
        </div>
    </div>
    <br>
    <!--댓글 쓰기-->
    <div class="container">
        <div class="row comment_wrap">
            <div class="col-md-3 test">
                <div class="test2 text-right">
                    <img src="../img/plus.png" class="card-img" />
                </div>
            </div>
            <div class="col-md-6 test">
                <textarea class="form-control" rows="2"></textarea>
            </div>
            <div class="col-md-3 test">
                <button type="button" class="btn btn-danger">등록</button>

            </div>
        </div>
    </div>
    </div>
    </div>

    <!--댓글 리스트-->
    <div class="row flex_box">
        <div class="col-md-5 review_margin">
            <div class="reply_tit"><span id="recipeCommentListCount">댓글 갯수</span></div>
            <div class="media reply_list">
                <div class="media-left">
                    <img class="media-object" src="../img/logo_pink.png" data-holder-rendered="true">
                </div>
                <div class="media-body">
                    <h4><b>아이디 출력</b> | 날짜 시간</h4>과연 가능한 것인가....
                </div>
            </div>
        </div>
    </div>
    </form>
    </div>
    <!-- footer -->
    <?php
        include "../mainpage/footer.php";
    ?>
</body>

</html>