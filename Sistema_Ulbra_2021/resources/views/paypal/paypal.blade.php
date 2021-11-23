<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div id="paypal-button-container"></div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://www.paypal.com/sdk/js?client-id=AXEbgdKZmpVg-zKonymgY6A3fSwqr10JIrQMoysFORaPIlJrBTqjy2d0iiDhbaGuuXU4T6tQ89Ngy3Of">
</script>
<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '250.30'
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            // This function captures the funds from the transaction.
            return actions.order.capture().then(function(details) {
                var myHeaders = new Headers();
                myHeaders.append("Content-Type", "application/json");
                var id = "<?php
                            use Illuminate\Support\Facades\Auth;
                            echo Auth::user()->id ?>"
                var status = 1;
                var raw = JSON.stringify({
                    id,
                    status
                });


                var requestOptions = {
                    method: 'POST',
                    headers: myHeaders,
                    body: raw,
                    redirect: 'follow'
                };

                fetch("http://127.0.0.1:8000/api/payments", requestOptions)
                    .then(response => response.text())
                    .then(result => console.log(result))
                    .catch(error => console.log('error', error));
                alert('Pagamento Completo ' + details.payer.name.given_name);
                window.location.replace("/dashboard");
                /* Redirect another page */
                console.log(raw);
            });
        }
    }).render('#paypal-button-container');
</script>
<script>

</script>