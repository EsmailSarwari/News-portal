<form method="POST">
    @csrf
    <input class="input" type="text" name="title" value="{{ $editNews->title }}"> <br>
    <textarea class="input" name="summary" > {{ $editNews->summary }} </textarea> <br>
    <textarea class="input" name="content" > {{ $editNews->content }} </textarea> <br>
    <input type="submit" value="guncelle">
</form>
