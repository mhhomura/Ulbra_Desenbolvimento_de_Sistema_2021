<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container" style="margin-top: 25px; margin-bottom: 25px;">
                    <div class="row row-cols-3">
                        <div class="card" style="width: 18rem;">
                            <!-- <img src="..." class="card-img-top" alt="..."> -->
                            <div class="card-body" style="text-align: center;">
                                <h1>{{$num1}}</h1>
                                <br>
                                <h3>Clientes</h3>
                                <br>
                                <button class="btn btn-primary" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">Report</button>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <!-- <img src="..." class="card-img-top" alt="..."> -->
                            <div class="card-body" style="text-align: center;">
                                <h1>{{$num3}}</h1>
                                <br>
                                <h3>Empresas</h3>
                                <br>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">Report</button>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <!-- <img src="..." class="card-img-top" alt="..."> -->
                            <div class="card-body" style="text-align: center;">
                                <h1>{{$num2}}</h1>
                                <br>
                                <h3>Seviços</h3>
                                <br>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal3">Report</button>
                            </div>
                        </div>
                    </div>
                    <!-- Modal1 -->
                    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal1">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->id}}</td>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal2 -->
                    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal2">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nome Empresa</th>
                                                <th scope="col">Descrição</th>
                                                <th scope="col">CNPJ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($companys as $company)
                                            <tr>
                                                <td>{{$company->nome}}</td>
                                                <td>{{$company->descrico}}</td>
                                                <td>{{$company->cnpj}}</td>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal3 -->
                    <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modal3" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal3">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nome Empresa</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">CNPJ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($services as $service)
                                            <tr>
                                                <td>{{$service->nome}}</td>
                                                <td>{{$service->status}}</td>
                                                <td>{{$service->valor}}</td>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
<script>
    var myModal = document.getElementById('exampleModal')

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
    })
</script>