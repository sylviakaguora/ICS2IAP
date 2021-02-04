$(document).ready(function () {
    $('#btn').click(function () {

        let d = {
            'fullname'; 'Derdus',
        }
        $.post("processRgister.php", function (data, status) {
            alert("data: " + data + " \nStatus: " + status);
        });
    }
});
});