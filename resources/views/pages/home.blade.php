@extends('layouts.app')

@section('content')
<div class="home-section">
    
    <div class="container-fluid" style="padding-left: 300px; padding-right: 300px;">
        <div class="row">
            <div class="col-10 col-lg-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Author</th>
                        <th scope="col">Title</th>
                      </tr>
                    </thead>
                    @foreach ($ebooks as $item)
                    <tbody>
                      <tr>
                        <td>{{ $item['author'] }}</td>
                        <td><a href="detail/{{ $item['id'] }}" style="font-size: 12px"> {{ $item['title'] }} </a></td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
            </div>
        </div>
        
    </div>
</div>
@endsection