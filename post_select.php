<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p> Welcome to our Post Page</p>
    <select onchange="la(this.value)">
      <option  disabled selected>--Select what you want to post--</option>
      <option value="post_pic.php">--A Post with picture--</option>
      <option value="post_pic_text.php">--A Post with Picture and text --</option>
      <option value="post_text.php">--A post with text--</option>
    </select>
    <script>
    function la (src)
    {
      window.location=src;
    }
    </script>
  </body>
</html>
