@extends('layouts.app')

@section('content')
<div class="detail-section">
    
    <div class="container-fluid" style="padding-left: 300px; padding-right: 300px;">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <h3 style="font-weight: 700; margin-bottom: 25px">E-Book Detail</h3>
                </div>
                <div class="row">
                    <p>Title : {{ $ebook->title }}</p>
                </div>
                <div class="row">
                    <p>Author : {{ $ebook->author }}</p>
                </div>
                <div class="row">
                    <p>Description : {{ $ebook->description }}</p>
                </div>
                <br>
                <br>
                <form action="/order_book" method="POST">
                    @csrf
                    <input type="hidden" name="ebooks_id" value="{{$ebook['id']}}">
                    <button class="btn ps-5 pe-5" style="background-color: #f8de55;">
                        <a href="#">
                            Rent
                        </a>
                    </button>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection