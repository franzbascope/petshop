@extends('layouts.app')
@section('content')

    <div class="card" style="max-width: 600px;margin: 40px auto auto;">
        <div class="card-header">
            Create Pets Form
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif

            <form class="row g-3" method="post" action="{{url('pets')}}">
                @csrf
                <div class=" col-md-6">
                    <label for="inputNamePet" class="form-label">Name of the pet</label>
                    <input required type="text" name="name" maxlength="40" class="form-control" id="inputNamePet">
                </div>
                <div class="col-md-6">
                    <label for="inputPetHeight" class="form-label">Enter pet height</label>
                    <input type="number" name="height" min="20" maxlength="100" class="form-control"
                           id="inputPetHeight">
                </div>
                <div class="col-md-6">
                    <label for="inputPetBreed" class="form-label">Breed</label>
                    <select required id="inputPetBreed" name="type" class="form-select">
                        <option value="">Please select the pet breed</option>
                        @foreach ($breeds as $breed)
                            <option value="{{$breed['value']}}">
                                {{$breed['name']}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputPetBreed" class="form-label">Color of the pet</label>
                    <select required id="inputPetColor" name="color" class="form-select">
                        <option value="">Please select a color</option>
                        @foreach ($colors as $color)
                            <option value="{{$color['value']}}">
                                {{$color['name']}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

@endsection
