
$("#btnCustomerSave").click(
    function () {
        var customerFormData = $("#formCustomer").serializeArray();
        $.ajax(
            {
            url:"save-customer.php",
            method:"POST",
            async:true,
            data:customerFormData
        }
        ).done(function (res) {
            alert(res);
        })
    }
);

$("#btnCustomerUpdate").click(
    function () {
        var customerFormData = $("#formCustomer").serializeArray();
        $.ajax(
            {
                url: "update-customer.php",
                method: "POST",
                async: true,
                data: customerFormData
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
        var customerFormData = $("#formCustomer").serializeArray();
        $.ajax(
            {
                url: "delete-customer.php",
                method: "POST",
                async: true,
                data: customerFormData
            }
        ).done(
            function (res) {
                alert(res);
            }
        )
    }
);

/*
$("#btnCustomerClear").click(
    $("#inputID").clearData(),
    $("#inputFirstName").clearData(),
    $("#inputLastName").clearData(),
    $("#inputEmail").clearData(),
    $("#inputAddress").clearData(),
    $("#inputTelephone").clearData()
);*/
