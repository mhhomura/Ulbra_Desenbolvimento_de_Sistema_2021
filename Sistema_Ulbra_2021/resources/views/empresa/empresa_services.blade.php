<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Company</th>
            <th scope="col">Service Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($services as $service)
          <tr>
            <td>{{$company->nome}}</td>
            <td>{{$service->nome}}</td>
            <td>{{$service->descrico}}</td>
            <td>{{$service->valor}}</td>
            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="setPrice('<?php echo $service->valor ?>')" data-bs-target="#exampleModal">
                Schedule Service
              </button>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">schedule service</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div id="paypal-button-container"></div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <!-- Button trigger modal -->

      <!-- Modal -->

    </div>
  </div>
</x-app-layout>
<script src="https://www.paypal.com/sdk/js?client-id=AXEbgdKZmpVg-zKonymgY6A3fSwqr10JIrQMoysFORaPIlJrBTqjy2d0iiDhbaGuuXU4T6tQ89Ngy3Of">
</script>
<script>
  var price = 0;

  function setPrice(valor) {
    price = valor;
  }

  paypal.Buttons({
    
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: price
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