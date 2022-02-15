@extends('layouts.app')

@section('content')
<div class="cart-section">
    
    <div class="container-fluid" style="padding-left: 300px; padding-right: 300px;">
        <div class="row mt-5">
            <h3>Cart</h3>
        </div>
        <div class="row">
            <div class="col-10 col-lg-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    @foreach ($books as $item)
                    <tbody>
                      <tr>
                        <td>{{ $item->title }}</td>
                        <td><a href="/removeorder/{{$item->orders_id}}">Delete</a></td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
            </div>
        </div>
        
    </div>
</div>
@endsection