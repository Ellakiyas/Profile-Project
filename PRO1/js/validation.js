$(document).ready(function () {
    $('#fname').on('input', function () {
        checkuser();
    });
    $('#lname').on('input', function () {
        checklname();
    });

    $('#email').on('input', function () {
        checkemail();
    });
    $('input[type="radio"]').on('input', function () {
        checkradio();
    });
    $('#dob').on('input', function () {
        checkdob();
    });

    $('#password_1').on('input', function () {
        checkpass();
    });
    $('#password_2').on('input', function () {
        checkcpass();
    });
    $('#contact').on('input', function () {
        checkmobile();
    });
    $('#image').on('change', function () {
        checkfile();
    });

    $('#submitbtn').click(function () {


        if (!checkuser() && !checklname() && !checkemail() && !checkmobile()  && !checkdob() && !checkpass() && !checkcpass() && !checkradio() && !checkfile()) {
            $("#message").html('<div class="alert alert-warning">Please fill all required field</div>');
        } else if (!checkuser() || !checklname() || !checkemail() || !checkmobile()  || !checkdob() || !checkpass() || !checkcpass() || !checkradio() || !checkfile()) {
            $("#message").html('<div class="alert alert-warning">Please fill all required field</div>');
        }
        else {
            console.log("ok");
            $("#message").html("");
            var form = $('#myform')[0];
            var data = new FormData(form);
            localStorage.setItem('name', email.value);
            localStorage.setItem('pw', password_1.value);
            $.ajax({
                type: "POST",
                url: "../PRO1/includes/server.php",
                data: data,
                success: function (data) {
                    $('#message').html(data);
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
    var pattern = /^[A-Za-z0-9]+$/;
    var user = $('#fname').val();
    var validuser = pattern.test(user);
    if (user == "") {
        $('#username_err').html('Username is required');
        return false;
    }
    else if (!validuser) {
        $('#username_err').html('Username should be a-z ,A-Z only');
        return false;
    } else {
        $('#username_err').html('');
        return true;
    }
}
function checklname(){
    var lname = $('#lname').val();
    if (lname == "") {
        $('#lastname_err').html('Lastname is required');
        return false;
    }
    else {
        $('#lastname_err').html('');
        return true;
    }
}
function checkemail() {
    var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var email = $('#email').val();
    var validemail = pattern1.test(email);
    if (email == "") {
        $('#email_err').html('Email is required');
        return false;
    } else if (!validemail) {
        $('#email_err').html('Invalid email');
        return false;
    } else {
        $('#email_err').html('');
        return true;
    }
}
function checkradio(){
    var gender=$('input[type="radio"]:checked').val();
    if($('input[type="radio"]:checked').length == "0")
        {
             $('#radio_err').html('Choose Gender');
             return false; 
         }
          else {
        $('#radio_err').html('');
        return true;
    }
}

//     var gender=$('#gender').val();
//     if(gender[0].checked=false && gender[1].checked==false && gender[2].checked==false ){
//        $('#radio_err').html('Choose Gender');
//         return false; 
//     }
//     else {
//         $('#radio_err').html('');
//         return true;
//     }
// }
function checkdob(){
    //var pattern3= /^(0?[1-9]|1[0-2])[\/](0?[1-9]|[1-2][0-9]|3[01])[\/]\d{4}$/;      ;
    var dob = $('#dob').val();
    //var validdob = pattern3.test(dob);
    if (dob == "") {
        $('#dob_err').html('Select your Date of Birth');
        return false;
    }else {
        $('#dob_err').html('');
        return true;
    }
}
function checkpass() {
    var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var pass = $('#password_1').val();
    var validpass = pattern2.test(pass);

    if (pass == "") {
        $('#password_err').html('Password can not be empty');
        return false;
    } else if (!validpass) {
        $('#password_err').html('Minimum 5 and upto 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:');
        return false;

    } else {
        $('#password_err').html("");
        return true;
    }
}
function checkcpass() {
    var pass = $('#password_1').val();
    var cpass = $('#password_2').val();
    if (cpass == "") {
        $('#cpassword_err').html('Confirm password cannot be empty');
        return false;
    } else if (pass !== cpass) {
        $('#cpassword_err').html('Confirm password did not match');
        return false;
    } else {
        $('#cpassword_err').html('');
        return true;
    }
}

function checkmobile() {
    if ( $('#contact').val()== "") {
        $('#mobile_err').html('Contact number is required');
        return false;
    }
    else if (!$.isNumeric($("#contact").val())) {
        $("#mobile_err").html("Only Numbers are allowed");
        return false;
    } else if ($("#contact").val().length != 10) {
        $("#mobile_err").html("Invalid mobile number");
        return false;
    }
    else {
        $("#mobile_err").html("");
        return true;
    }
}
function checkfile(){
    var file = $('#image').val();
    var allowedExtensions =/(\.jpg|\.jpeg|\.png)$/i;
    if(file==""){
        $("#file_err").html("Select your profile pic");
        return false;
    }
    else if (!allowedExtensions.exec(file)) {
         $("#file_err").html("Invalid file type");
        return false;
    }
    else {
        $("#file_err").html("");
        return true;
    }
}