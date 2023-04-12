$('#click').click(function(e) {
    e.preventDefault();
    let username = $("#username").val()
    let password = $("#password").val()
    let email = $("#email").val()
    let phone = $("#phone").val()

    mydata = { username: username, password: password, email: email, phone: phone };
    $.ajax({
        url: 'php/sign_up.php',
        method: 'post',
        dataType: 'html',
        data: { "dataQuery": mydata },
        success: function(data) {
            alert(data);
        }
    });
})