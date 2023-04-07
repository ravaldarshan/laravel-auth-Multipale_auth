@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('products') }}</div>

                <div class="card-body">
                    <span>role is: 
                    @role('admin')
                    admin
                    @endrole
                    @role('User')
                    User
                    @endrole
                    @role('Editer')
                    Editer
                    @endrole
                    </span>
                    <div>
                        @role('User')
                        <button type="submit" class="btn btn-info">Add new product</button>
                        @endrole
                    
                        <button type="submit" class="btn btn-secondary">Edit product</button>
                        <button type="submit" class="btn btn-warning">view product</button>
                        <button type="submit" class="btn btn-danger">Delate product</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection