$(document).ready(function () {
    $('#username').on('input', function () {
        checkuser();
    });

    $('#password').on('input', function () {
        checkpass();
    });

    $('#submitbtn').click(function () {

        if (!checkuser() && !checkpass()) {
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
        } else if (!checkuser() || !checkpass()) {
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
        }
        else {
            console.log("ok");
            $("#message").html("");
            var form = $('#myform')[0];
            var data = new FormData(form);
            // for (var value of data.values()){
            //     console.log(value);
            // }
            
            $.ajax({
                type: "POST",
                url: "../PRO1/includes/loginserver.php",
                data: data,
                //dataType:'json',
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function (response) {
                if(response=="success")
                {
                    window.location.href="profile.php";
                }
                else
                {
                 $('#message').html('<div class="alert alert-warning">   '+response+' !</div>');
            }
        },
                complete: function () {
                    setTimeout(function () {
                        $('#myform').trigger("reset");
                        $('#submitbtn').html('Submit');
                        $('#submitbtn').attr("disabled", false);
                        $('#submitbtn').css({ "border-radius": "4px" });
                    }, 50000);
                }
            });
        }
    });
});


function checkuser() {
    var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var email = $('#username').val();
    var validemail = pattern1.test(email);
    if (email == "") {
        $('#username_err').html('Username is required');
        return false;
    } else if (!validemail) {
        $('#username_err').html('Invalid username');
        return false;
    } else {
        $('#username_err').html('');
        return true;
    }
}
function checkpass() {
    var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var pass = $('#password').val();
    var validpass = pattern2.test(pass);
    if (pass == "") {
        $('#pass_err').html('Password is required');
        return false;
    }else {
        $('#pass_err').html("");
        return true;
    }
}

