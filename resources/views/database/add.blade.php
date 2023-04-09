<form action="{{ 'insert' }}" method="POST">
    @csrf
    <textarea name="title" id="" placeholder="title"></textarea> <br>
    <textarea name="summary" id="" placeholder="summary"></textarea> <br>
    <textarea name="content" id="" placeholder="content"></textarea> <br>
    <button type="submit">send</button>
</form>
