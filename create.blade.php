@extends('Layout.dashboard')
@section('title', 'Add product')
@section('content')
    <div class="col-12">
        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="card-body">
                <div class="form-row">
                    <div class="col-6">
                        <label for="exampleInputEmail1">Name </label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">

                    </div>
                    <div class="col-6">
                        <label for="description">Description </label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Name"></textarea>
                    </div>
                   
                    <div class="col-6">
                        <label for="exampleInputEmail3">Price</label>
                        <input type="number" name="price" class="form-control" id="exampleInputEmail3"
                            placeholder="Price">

                    </div>


                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">create</button>
                
            </div>
            
        </form>
    </div>
    @endsection
           