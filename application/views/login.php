<div class="page_container">
    <div class="login_form_container shadow">
        <div class="textbox">
            <h1>Login Page</h1>
            <p>Simple Login Page</P>
            <p>로그인 페이지입니다</p>
        </div>
        <div class="login_form_box">
            <div class="login_input_container">
                <div class="login_input_wrap" id="user_email_line">
                    <input type="text" id="user_email" name="user_email" placeholder="Email"></br>
                </div>
                <div class="login_input_wrap" id="user_password_line">
                    <input type="password" id="user_password" name="user_password" placeholder="Password"></br>
                </div>
            </div>
            <div class="login_btn_wrap">
                <button type="button" class="login_btn" id="login_btn" onclick="login();">LOGIN</button>
                <a href='./signup'>회원가입</a>
            </div>
        </div>
    </div>
</div>
<script>
    function check_null(id) {
        if ($(id).val() == "") {
            $(id + "_line").css({
                'border-bottom': '2px solid RED'
            });
            return false;
        } else {
            $(id + "_line").css({
                'border-bottom': '1px solid rgba(32,124,229,1)'
            });
            return true;
        }
    }

    function login() {
        var check_email = check_null("#user_email");
        var check_password = check_null("#user_password");
        if (check_email && check_password) {
            $.ajax({
                type: "POST",
                url: "./login/login_reg",
                data: {
                    user_email: $("#user_email").val(),
                    user_password: $("#user_password").val()
                },
                dataType: "json"
            }).done(function(data) {
                if (data['result'] == 'success') {
                    location.replace('../main');
                }
                if (data['result'] == 'error') {
                    data['error_array'].forEach(function(item) {
                        alert(item);
                    });
                }
            });
        } else {
            alert("아이디 또는 패스워드가 비었습니다");
            return false;
        }
    }

    $(function() {
        $('input').keypress(function(e) {
            if (e.keyCode == '13') {
                login();
            }
        });
    });
</script>