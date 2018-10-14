@extends('layouts.app')

@section('content')
<link href="{{ asset('css/add.css') }}" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Winners list</div>
                    <div class="card-body">
                        @foreach($winners as $winner)
                        <div class="winners">
                            <ul>
                                <li>ID：{{$winner['id']}}</li>
                                <li>氏名：{{$winner['name']}}</li>
                                <li>メールアドレス：{{$winner['e-mail']}}</li>
                                <li>住所：{{$winner['address']}}</li>
                                <li>電話番号：{{$winner['tel']}}</li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
