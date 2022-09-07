메인페이지</br>
<a href="../index.php/login" class="myButton">로그인</a>
<a href="../index.php/signup" class="myButton">회원가입</a></br>
<?php
if ($this->session->userdata('user') != null) {
?>
    <a href="../index.php/login/logout" class="myButton">로그아웃</a>
<?php
}
?>