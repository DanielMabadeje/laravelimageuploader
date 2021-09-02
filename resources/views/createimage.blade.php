<div class="max-w-sm mx-auto py-8">
    <form action="/" method="post" enctype="multipart/form-data">

        <input type="text" value="{{ csrf_token() }}" hidden>
        <input type="file" name="image" id="image">
        <button type="submit">Upload</button>
    </form>
</div>