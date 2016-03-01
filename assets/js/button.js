/**
 * Created by olivier on 25/10/2015.
 */

//$(document).ready(function(){

function button() {
    var mail = document.getElementById('reply_email').value;
    var name = document.getElementById('name').value;
    var content = document.getElementById('content').value;

    if (!(mail && name && content)) {
        document.getElementById("send_btn").disabled = true;
    }
    else {
        document.getElementById("send_btn").disabled = false;
    }
};
//});
