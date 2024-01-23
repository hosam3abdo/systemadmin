@extends('Layout.dashboard')
@section('title', 'Add product')
@section('content')
    <div class="col-12">
        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="card-body">
                
                    <div class="col-6">
                        <label for="exampleInputEmail1">Name </label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">

                    </div>
                    <div class="col-4">
                        <label for="exampleInputEmail19">Category</label>
                        <select name="subcategories" class="form-control" id="exampleInputEmail19">
                            @foreach ($subcategories as $cat)
                                <option {{old('subcategories_id') == $cat->id ? 'selected' : ''  }} value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                       
                    </div>
                    <div class="col-6">
                        <label for="description">Description </label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="description"></textarea>
                    </div>
                   
                    <div class="col-6">
                        <label for="exampleInputEmail3">Price</label>
                        <input type="number" name="price" class="form-control" id="exampleInputEmail3"
                            placeholder="Price">

                    </div>


                    

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">create</button>
                
            </div>
            
        </form>
    </div>
    @endsection
           