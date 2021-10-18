<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Create a new Service
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create a new Service</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        {{ Form::open(array('route' => 'create_service', 'method' => 'post')) }}
                        <form>
                        <div class="modal-body">
                           
                                <div class="mb-3">
                                    <label for="serviceName" class="form-label">Service Name</label>
                                    <input type="text" name="serviceName" class="form-control" id="serviceName" >
                                </div>
                                <div class="mb-3">
                                    <label for="serviceDescription" class="form-label">Service Description</label>
                                    <input type="text" name="serviceDescription" class="form-control" id="serviceDescription" >
                                </div>
                                <div class="mb-3">
                                    <label for="servicePrice" class="form-label">Price</label>
                                    <input type="number" name="servicePrice" class="form-control" id="servicePrice" >
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input"  name="status" type="checkbox" id="flexSwitchCheckChecked">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Disable Service</label>
                                </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Service</button>
                        </div>
                        </form>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 25px;">
                <div class="row row-cols-3">
                    @foreach($services as $service)
                    <div class="card" style="width: 18rem;">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">{{$service->nome}}</h5>
                            <p class="card-text">{{$service->descrico}}</p>
                            <a href="#" class="btn btn-primary">Options</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</x-app-layout>