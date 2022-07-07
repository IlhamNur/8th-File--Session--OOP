<!DOCTYPE HTML>
<html>
<head>
  <title>MY BLOG - POSTING</title>
</head>
  <body>
    <h2>POSTING</h2>
    <?php include "form.php";
      $form = new Form ("proses.php","Upload");
      $form->addField ("judul", "JUDUL", "text");
      $form->addField ("tag", "TAG", "text");
      $form->addField ("isi", "ISI", "text");
      $form->addField ("img", "GAMBAR", "file");
      $form->displayForm();
    ?>
  </body>
</html>