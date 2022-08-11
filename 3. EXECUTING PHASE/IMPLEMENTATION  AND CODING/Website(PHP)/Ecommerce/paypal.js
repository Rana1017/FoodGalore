

const value = document.querySelector('.paytotal').innerHTML.split(' ')[1];
var final = parseInt(value);
paypal
    .Buttons({
        createOrder: function (data, actions) {
            return actions.order.create({
                purchase_units: [
                    {
                        amount: {
                            value: final,
                        },
                    },
                ],
            });
        },
        onApprove: function (data, actions) {
            return actions.order.capture().then(function (details) {
                console.log(details)
                window.location.replace("success.php")
            })
        },
        onCancel: function (data) {
            window.location.replace("Oncancel.php")
        }
    })
    .render('#paypal-payment-button');