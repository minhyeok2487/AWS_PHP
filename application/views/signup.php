<div class="signup_page">
    <div class="signup_form">
        <div class="signup_textbox">
            <h1>회원가입</h1>
        </div>
        <div class="input_field">
            <span class="input_field_info">이메일</span>
            <input type="text" name="user_email" id="user_email" placeholder="minhyeok.lee@monitorapp.com" style="width : 47%;">
            <button type="button" id="email_check">Check</button>
        </div>
        <div class="input_field">
            <span class="input_field_info">비밀번호</span>
            <input type="password" name="user_password" id="user_password" placeholder="********">
        </div>
        <div class="input_password_reg">
            <p>비밀번호는 9자리 이상 16자리 이하, 대소문자/숫자/특수문자가</br>
                적어도 한글자씩은 포함되어야 하며 연속된 문자열을 입력할 수 없습니다.</br>
                연속된 문자열의 예시는 다음과 같습니다</br>
                1) 동일하게 입력되는 연속 문자열 ex) 111, 222, aaa 등</br>
                2) 키보드에서 입력되는 연속 문자열 ex) 123, asdf 등</br></p>
        </div>
        <div class="input_field">
            <span class="input_field_info">비밀번호 확인</span>
            <input type="password" id="password_check" placeholder="********">

        </div>
        <div class="input_field">
            <span class="input_field_info">이름</span>
            <input type="text" name="user_name" id="user_name" placeholder="Minhyeok">
        </div>
        <div class="input_field">
            <span class="input_field_info">소속</span>
            <input type="text" name="user_group" id="user_group" placeholder="UX">
        </div>
        <div class="input_field">
            <span class="input_field_info">역할</span>
            <select name="user_position" id="user_position">
                <option value="Developer" selected>Developer</option>
                <option value="Appliance">Appliance</option>
                <option value="Cloud">Cloud</option>
                <option value="TI/TA">TI/TA</option>
            </select>
        </div>
        <div class="input_field">
            <span class="input_field_info">소개</span>
            <textarea name="user_ments" id="user_ments"></textarea>
        </div>
        <button class="signup_btn" type="button" id="signup_check">회원가입</button>
    </div>
</div>
<script>
    //이메일 유효성 검사, 중복 체크
    var email_regexp = <?= $email_regexp ?>;
    var possible = false;
    $(document).on("click", "#email_check", function() {
        if ($("#user_email").val() == "") {
            alert("이메일을 입력해주십시오");
            $("#user_email").css({
                'border': '2px solid RED'
            });
            return false;
        }
        if (!email_regexp.test($("#user_email").val())) {
            alert("이메일 형식이 아닙니다");
            $("#user_email").css({
                'border': '2px solid RED'
            });
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "signup/email_check",
                data: {
                    user_email: $("#user_email").val()
                },
                dataType: "json"
            }).done(function(data) {
                alert(data["msg"]);
                $("#user_email").attr("readonly", data["possible"]);
                possible = data["possible"];
                if (data["possible"]) {
                    $("#user_email").css({
                        'border': '2px solid BLUE'
                    });
                } else {
                    $("#user_email").css({
                        'border': '2px solid RED'
                    });
                }
            });
        }
    });


    //비밀번호 유효성 검사 함수
    var pw_regexp = <?= $pw_regexp ?>;
    var pw_regnum = <?= $pw_regnum ?>;
    var pw_keyboard = <?= json_encode($pw_keyboard) ?>;

    function pw_reg_check(pw) {
        //9~16사이 대소문자, 숫자, 특수문자  적어도 한글자
        if (!pw_regexp.test(pw)) {
            return false;
        }
        //동일하게 연속된 문자열 3번 금지
        if (pw_regnum.test(pw)) {
            return false;
        }
        //키보드에서 입력되는 연속 문자열 3번 금지
        for (let i = 0; i < pw.length - 2; i++) {
            var slice_pw = pw.substring(i, i + 3);
            pw_keyboard.forEach((currentElement, index, array) => {
                if (currentElement.includes(slice_pw)) {
                    return false;
                }
            });
        }
        return true;
    }

    //input 빈 값  체크 함수
    function check_null(id) {
        if ($(id).val() == "") {
            $(id).css({
                'border': '2px solid RED'
            });
            return false;
        } else {
            $(id).css({
                'border': '2px solid BLUE'
            });
            return true;
        }
    }

    //실시간 변화
    $(document).on("keyup", "input", function() {
        //이메일 유효성
        if ($(this)[0].id == "user_email") {
            if (email_regexp.test($(this).val())) {
                $("#user_email").css({
                    'border': '2px solid GREEN'
                });
            } else {
                $("#user_email").css({
                    'border': '2px solid RED'
                });
            }
        }

        //비밀번호 유효성
        if ($(this)[0].id == "user_password") {
            if (pw_reg_check($(this).val())) {
                $("#user_password").css({
                    'border': '2px solid BLUE'
                });
            } else {
                $("#user_password").css({
                    'border': '2px solid RED'
                });
            }
        }

        //비밀번호 일치
        if ($(this)[0].id == "password_check") {
            if ($("#user_password").val() == $("#password_check").val()) {
                $("#password_check").css({
                    'border': '2px solid BLUE'
                });
            } else {
                $("#password_check").css({
                    'border': '2px solid RED'
                });
            }
        }

        //이름과 소속 입력 인식
        if ($(this)[0].id == "user_name") {
            check_null("#user_name");
        }
        if ($(this)[0].id == "user_group") {
            check_null("#user_group");
        }

    });

    //회원가입 기능
    $(document).on("click", "#signup_check", function() {
        var check_null_arr = [];
        check_null_arr.push(check_null("#user_email"));
        check_null_arr.push(check_null("#user_password"));
        check_null_arr.push(check_null("#password_check"));
        check_null_arr.push(check_null("#user_name"));
        check_null_arr.push(check_null("#user_group"));

        if (check_null_arr.includes(false)) {
            alert("입력값을 확인 해주십시오");
            return false;
        }

        if (!possible) {
            alert("이메일 체크를 해주십시오");
            $("#user_email").css({
                'border': '2px solid RED'
            });
            return false;
        } else {
            $("#user_email").css({
                'border': '2px solid BLUE'
            });
        }

        if (!pw_reg_check($("#user_password").val())) {
            alert("잘못된 비밀번호 입니다");
            $("#user_password").css({
                'border': '2px solid RED'
            });
            return false;
        } else {
            $("#user_password").css({
                'border': '2px solid BLUE'
            });
        }

        if ($("#user_password").val() !== $("#password_check").val()) {
            alert("비밀번호가 일치하지 않습니다");
            $("#user_password").css({
                'border': '2px solid RED'
            });
            $("#password_check").css({
                'border': '2px solid RED'
            });
            return false;
        } else {
            $("#user_password").css({
                'border': '2px solid BLUE'
            });
            $("#password_check").css({
                'border': '2px solid BLUE'
            });
        }
        $.ajax({
            type: "POST",
            url: "signup/signup_reg",
            data: {
                user_email: $("#user_email").val(),
                user_password: $("#user_password").val(),
                user_name: $("#user_name").val(),
                user_group: $("#user_group").val(),
                user_position: $("#user_position").val(),
                user_ments: $("#user_ments").val(),
            },
            dataType: "json"
        }).done(function(data) {
            alert(data['msg']);
            if (data['result'] == 'success') {
                location.replace('./login');
            }
            if (data['result'] == 'error') {
                return false;
            }
        });
    });
</script>