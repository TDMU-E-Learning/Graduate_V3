<h1>IMPORT USER</h1>


<form action="/upload" method="post" enctype="multipart/form-data">
    
    <input type="file" name="fileImport" id="fileImport">
    <input type="submit" value="submit">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
</form>