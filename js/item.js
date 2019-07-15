
$("#btnItemSave").click(
    function () {
        var itemFormData=$("#formItem").serializeArray();
        $.ajax(
            {
                url: "save-item.php",
                method: "POST",
                async: true,
                data: itemFormData
            }
        ).done(
            function (res) {
                alert(res);
            }
        )
    }
);

$("#btnItemUpdate").click(
    function () {
        var itemFormData=$("#formItem").serializeArray();
        $.ajax(
            {
                url: "update-item.php",
                method: "POST",
                async: true,
                data: itemFormData
            }
        ).done(
            function (res) {
                alert(res);
            }
        )
    }
);

$("#btnCustomerDelete").click(
    function () {
        var itemFormData=$("#formItem").serializeArray();
        $.ajax(
            {
                url: "delete-item.php",
                method: "POST",
                async: true,
                data: itemFormData
            }
        ).done(
            function (res) {
                alert(res);
            }
        )
    }
);