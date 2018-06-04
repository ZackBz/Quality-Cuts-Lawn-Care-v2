<div class="container">
    <form class="" action="/test" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input class="form-control" type="file" name="images[]" multiple>
            <input class="form-control" type="text" name="caption">
            <button class="form-control" type="submit" name="submit">upload</button>
        </div>
    </form>
</div>
