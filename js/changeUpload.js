window.onload = function() {
    // get the button to select upload from disk
    var fromDisk = document.getElementById('sfromdisk');

    // get the button to select upload from web
    var fromWeb = document.getElementById("sfromweb");

    fromDisk.onclick = function() {
        $('#fromDisk').css('color', '#4CAF50 !important'); //4CAF50 verde 616368 gris
        $('#fromWeb').css('color', '#616368 !important');
        $('#form_fromPC').css('display', 'block');
        $('#form_fromWeb').css('display', 'none');
    }

    fromWeb.onclick = function() {
        $('#fromDisk').css('color', '#616368 !important');
        $('#fromWeb').css('color', '#4CAF50 !important');
        $('#form_fromPC').css('display', 'none');
        $('#form_fromWeb').css('display', 'block');
    }


    $("#folderFileWeb").bind("paste", function(e) {
        // access the clipboard using the api
        var pastedData = e.originalEvent.clipboardData.getData('text');
        alert(pastedData);
    });
};