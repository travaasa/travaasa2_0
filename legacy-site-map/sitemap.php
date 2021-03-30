<?php
header('Content-Type: application/xml; charset=utf-8');
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:schemaLocation="http://www.google.com/schemas/sitemap/0.84
http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<?php

    $fp = file_get_contents("sitemap.txt");
    $rows = explode("\n", $fp);

    foreach($rows as $row => $data) {

      $row_data = explode(",", $data);

       if ( $row_data[6] == 0 || $row_data[6] == 2){
        ?>
        <url>
          <loc><?=$row_data[2];?></loc>
          <lastmod><?=$row_data[3];?></lastmod>
          <changefreq><?=$row_data[4];?></changefreq>
          <priority><?=$row_data[5];?></priority>
        </url>
        <?php
      }
    }

?>
</urlset>
