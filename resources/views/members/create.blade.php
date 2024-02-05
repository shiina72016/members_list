<!-- 会員登録画面 -->
<form action="{{ url('members') }}" method="POST" class="form-horizontal">

<div> 
    <h1>会員登録</h1>
    <div><input type="text" name="name" class="form-control" id="InputName" placeholder="名前"></div>
    <div><input type="text" phone="phone" class="form-control" id="InputName" placeholder="電話番号"></div>
    <div><input type="text" email="email" class="form-control" id="InputName" placeholder="メールアドレス"></div>
    <div><button type="submit" class="btn btn-primary btn-block">登録</button></div>
</div>

</form>