$(document).ready(function() {
    $.ajax({
        type: 'GET', //por defecto siempre es GET
        url: 'php/requireErrors.php',
        cache: false,
        dataType: 'json',
        success: function(data) {
            console.log(data);
            for (i = 0; i < data.length; i++) {
                $('#detailsUpload').append("<p>" + data[i] + "</p>");
                $('#detailsUpload p').addClass("details_list"); //
            }
        },
        error: function(data) {
            console.log(JSON.stringify(data));
        }
    });


    $('#btnPost').click(function() {

        /*$("#left-navDB").fadeOut(500);
        $("#left-navDB").load("php/showDB.php");
        $("#left-navDB").fadeIn(500);
        */

        if (!$('#detailsUpload').is(':empty')) {
            $('#detailsUpload').empty(); //limpiamos la clase, quitamos lo que  tenga el div
        }
        $.ajax({
            type: 'GET', //por defecto siempre es GET
            url: 'php/requireErrors.php',
            cache: false,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                for (i = 0; i < data.length; i++) {
                    $('#detailsUpload').append("<p>" + data[i] + "</p>");
                    $('#detailsUpload p').addClass("file_list"); //
                }
            },
            error: function(data) {
                console.log(JSON.stringify(data));
            }
        });

    });





});