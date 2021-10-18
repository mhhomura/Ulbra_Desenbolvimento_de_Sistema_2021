<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           
                <div class="container" style="margin-top: 25px;">
                    <div class="row row-cols-3">
                        @foreach($companys as $company)
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/company.png') }}"  style="width: 30%; height: 30%;" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$company->nome}}</h5>
                                <p class="card-text">{{$company->descrico}}</p>
                                <a href="{{route('choose_service', ['id'=>$company->id])}}" class="btn btn-primary">Viw Services</a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            
        </div>
    </div>
</x-app-layout>