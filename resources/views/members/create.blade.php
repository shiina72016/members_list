<!-- 会員登録画面 -->
<form action="/registermember" method="POST" class="form-horizontal">
@csrf
    <div> 
        <h1>会員登録</h1>
        <div><input type="text" name="name" class="form-control" id="InputName" placeholder="名前"></div>
        <div><input type="text" name="phone" class="form-control" id="InputName" placeholder="電話番号"></div>
        <div><input type="text" name="email" class="form-control" id="InputName" placeholder="メールアドレス"></div>
        <div><button type="submit" class="btn btn-primary btn-block">登録</button></div>
    </div>

</form>