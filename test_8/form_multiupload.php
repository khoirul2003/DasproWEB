<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multi Upload Document</title>
</head>
<body>
  <h2>Unggah Dokumen</h2>
    <form action="process_upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx" />
      <input type="submit" value="Unggah" />
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html>

<head>
  <title>Multiupload Dokumen</title>
</head>

<body>
  <h2>Unggah Dokumen</h2>
  <form action="process_upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple="multiple" accept=".jpg, .png, .jpeg" />
    <input type="submit" value="Unggah" />

  </form>
</body>

</html>