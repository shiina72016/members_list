<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>

<!--Bootstrap CSS-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    


<!-- 会員登録画面 -->
<div style="width: 300px; margin: 100px auto;">
    <form action="/registermember" method="POST" class="">
    @csrf
        <div> 
        <div style="margin-bottom: 20px;"><h3>会員登録</h3></div>
            <div style="margin-bottom: 10px;"><input type="text" name="name" class="form-control"  placeholder="名前"></div>
            <div style="margin-bottom: 10px;"><input type="text" name="phone" class="form-control"  placeholder="電話番号"></div>
            <div style="margin-bottom: 10px;"><input type="text" name="email" class="form-control"  placeholder="メールアドレス"></div>
            <div style="margin-bottom: 20px;"><button type="submit" class="btn btn-secondary">登録</button></div>
        </div>
</div>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>
</html>