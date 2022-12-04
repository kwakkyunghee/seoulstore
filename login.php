<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form>
        <header>
            <div class="title">
                <!-- 로고 이미지 -->
                <p id="header">
                    <img src="seoulstore_images/ss_logo_gnb.jpg" width="130" height="20">
                    <p id="and">
                        <button type="submit" class="login">로그인</button>
                        <button type="submit" class="sign_up">회원가입</button>
                    </p>
                </p>
            </div>
            <div>
            <table>
                <tr><td>아이디</td><td ><input type="text" name="uid"></td></tr>
                <tr><td>비밀번호</td><td ><input type="password" name="upass"></td></tr>
            </table>
            <button type="submit" class="btn btn-primary">로그인</button>
            </div>
        </header>
    </form>
</body>
</html>
