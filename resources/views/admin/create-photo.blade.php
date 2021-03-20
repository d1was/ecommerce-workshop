<h1>Product Add Form</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="w-full" style="color:red; font-style:bold;">{{$error}}</div>
    @endforeach
@endif

@if()
<form action="/photo/store" method="post" enctype="multipart/form-data">
@csrf
<label for="">Product ID</label>
<input type="text" name="photo_id" id=""><br><br>

<label for="">Product File</label>
<input type="file" name="photo" id=""><br><br>

<input type="submit" value="Submit">
</form>