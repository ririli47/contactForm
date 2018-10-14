@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register Form</div>

                <div class="card-body">
                    <form action="/contact" method="POST">
                        {{ csrf_field() }}
                        <p>氏名：<input type="text" name="name" size="40"></p>
                        <p>メールアドレス：<input type="text" name="e-mail" size="40"></p>
                        <p>住所：<input type="text" name="address" size="40"></p>
                        <p>電話番号：<input type="text" name="tel" size="40"></p>
                        <button tupe="submit">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
