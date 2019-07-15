$("#btnOrderProceed").click(
    function () {
        var orderFormData = $("#formAddOrder").serializeArray();
        $.ajax(
            {
                url: "add-order.php",
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
