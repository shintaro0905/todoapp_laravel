<style>
    h1 {
        text-align: center;
        padding: 30px;
    }
    .error {
        text-align: center;
    }
    .error__message {
        color: red;
    }
    .form {
        width: 80%;
        margin: 0 auto;
        text-align: center;
    }
    .form-group {
        padding-bottom: 50px;
    }
    span {
        color: red;
    }
    input {
        width: 60%;
        height: 30px;
    }
    textarea {
        width: 60%;
    }
</style>
<h1>タスク追加</h1>
<div class="error">
    @foreach ($errors->all() as $error)
      <p class="error__message">{{$error}}</p>
    @endforeach
</div>
<form action="{{ route('tasks.store') }}" method="POST" class="form">
@csrf
    <div class="form-group">
        <label for="name">タスク<span>(必須)</span></label><br>
        <input type="text" name="name" maxlength="30" placeholder="タスクは30文字で書きましょう。">
    </div>
    <div class="form-group">
        <label for="content">タスク内容<span>(必須)</span></label><br>
        <textarea rows="5" name="content" placeholder="タスク内容を具体的に書きましょう"></textarea>
    </div>
    <button type="submit">追加する</button>
</form>