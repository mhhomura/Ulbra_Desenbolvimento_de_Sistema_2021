<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{ Form::open(array('route' => 'complete_registration', 'method' => 'post')) }}
                <form>
                    <!--  <div class="text-center">
                        <label for="image" style="border-radius: 10px; background-color: gray; width: 150px; height: 150px;">
                            <input type="file" class="form-control-file" id="image">
                        </label>
                    </div> -->
                    <div class="container">
                        <div style="margin-left: 5%; margin-bottom: 5%;">
                            <h1>Complete Registration</h1>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="nameimput">Company Name</label>
                                    <input type="text" class="form-control" id="nameimput" name="nameimput" aria-describedby="name" placeholder="Company Name">
                                    <!-- <small id="name" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="cnpj">Cnpj</label>
                                    <input type="number" class="form-control" id="cnpj" name="cnpj" placeholder="Cnpj">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="occupantionArea">Occupation area</label>
                                    <select class="form-control" name="occupantionArea" id="occupantionArea">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <!-- <small id="name" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" aria-describedby="description" placeholder="Description">
                                    <!-- <small id="name" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div style="margin-left: 25%; margin-top: 2%; margin-bottom: 2%;">
                        <button type="submit" class="btn btn-primary">Salvar </button>
                    </div>
                </form>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</x-app-layout>