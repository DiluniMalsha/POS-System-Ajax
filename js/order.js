$("#btnOrderProceed").click(
    function () {
        var orderFormData = $("#formAddOrder").serialize();
        $.ajax(
            {
                url: "add-order.php",
                method: "POST",
                async: true,
                data: orderFormData
            }
        ).done(
            function (res) {
                alert(res);
            }
        )
    }
);

