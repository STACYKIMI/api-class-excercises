<?php
/**
  Counties in the Republic of Kenya,Governors and their Political Parties.
*/

$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee,
3. Kilifi. – Amason Jeffah Kingi – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Fahim Yasin Twaha – Jubilee,
6. Taita-Taveta. – Granton Samboja – WDM K,
7. Garissa. – Ali Bunow Korane – Jubilee,
8. Wajir. – Mohamed Abdi Mohamud – Jubilee,
9. Mandera. – Ali Ibrahim Roba - Jubilee,
10. Marsabit – Mohamud Mohamed Ali – Jubilee,
11. Isiolo – Mohamed Abdi Kuti – Independent,
12. Meru – Kiraitu Murungi – Jubilee,
13. Tharaka Nithi – Onesmus Muthomi Njuki – Jubilee,
14. Embu – Martin Nyaga Wambora – Jubilee,
15. Kitui – Charitu Ngilu – Narc Kenya,
16. Machakos – Alfred Mutua – CCM,
17. Makueni – Kivutha Kibwana – WDM K.,
18. Nyandarua – Francis Kimemia – Jubilee,
19. Nyeri – Mutahi Kahiga – Jubilee,
20. Kirinyaga. – Ann Waiguru – Jubilee,
21. Murang’a – Mwangi wa iria – Jubilee,
22. Kiambu. – Ferdinand Waititu Babayao – Jubilee,
23. Turkana. – Josphat Nanok – ODM,
24. West Pokot. – John Krop Lonyang’apuo. – KANU,
25. Samburu. – Moses Kasainie Lenolkulal – Jubilee,
26. Trans-Nzoia. – Patrick Khaemba – FORD Kenya,
27. Uasin gishu. – Jackson Mandago – Jubilee,
28. Elgeyo Marakwet. – Alex Tanui Tolgas – Jubilee,
29. Nandi. – Stephen Sang – Jubilee,
30. Baringo – Stanley K Kipris. – Jubilee,
31. Laikipia – Ndiritu Muriithi – Independent,
32. Nakuru. – Lee Kinyanjui – Jubilee,
33. Narok – Samuel Kuntai Ole Tunai – Jubilee,
34. Kajiado. – Joseph Ole Lenku – Jubilee,
35. Kericho. – Prof.Paul Chepkwony Kiprono – Jubilee,
36. Bomet. – Hillary Barchok – Jubilee,
37. Kakamega. – Wyclife Oparanya – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Wyclife Wafula Wangamiti – ODM,
40. Busia. – Sospeter Ojaamong – ODM,
41. Siaya. – Cornel Rasanga. – ODM,
42. Kisumu. – Peter Anyang Nyong’o. – ODM,
43. Homabay. – Cyprian Awiti – ODM,
44. Migori. – Zachary Okoth Obado – ODM,
45. Kisii. – James Ongware – ODM,
46. Nyamira. – John Nyangarama Obiena - ODM,
47. Nairobi. – Mike Sonko Mbuvi Kioko – Jubilee";

/**
 You should not modify anything above this line
*/

// @TODO : Your code starts here


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Counties in Kenya</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-float.min.css" integrity="sha256-4ldVyEvC86/kae2IBWw+eJrTiwNEbUUTmN0zkP4luL4=" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-prototype.min.css" integrity="sha256-BiKflOunI0SIxlTOOUCQ0HgwXrRrRwBkIYppEllPIok=" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-rtl.min.css" integrity="sha256-F+9Ns8Z/1ZISonBbojH743hsmF3x3AlQdJEeD8DhQsE=" crossorigin="anonymous">
</style>
  </head>
  <body>

    <?php
     $key1 = 0;
     $dip = str_replace(" – ", "," ,$county_data);
     $dip2= str_replace(". ", ",", $dip);
     $dip3= str_replace(" - ", ",", $dip2);//str_replace is for replacing some characters with some other characters in a string.
     $county_array=explode(',', $dip3);//The explode() function breaks a string into an array.
     $chunks = array_chunk($county_array, 4);//split array in pieces to work on each piece individually
     $countKanu = $countFord = $countwdmk = $countJubilee= $countodm = $countccm = $countNarc = $countIndependent= $total = 0;
    ?>

    <div class="row">
        <h4 style="align:left;textalign:left;float:left;;">Stacy kimilu-103933 <br><hr> COUNTIES NAMES & GOVERNORS </h4>
        <img src='images/county-mix.gif' width="30%" align="right" style="align:left;textalign:left;float:left;" alt="recap">
    </div>
    <table class="pure-table-striped">
  <thead>
    <tr>
      <th style="text-align :left"width="20">num</th>
      <th style="text-align :left" width="90">Name</th>
      <th style="text-align :left" width="90">Governor</th>
      <th style="text-align :left" width="90">Website</th>
    </tr>
  </thead>
  <tbody>
    <?php
        //Making 4 column tables from values in the county_ar array
        foreach ($chunks as $chunk) { ?>
          <tr>
            <td><?php echo $chunk[0]; ?></td>
            <td><?php
            if (substr($chunk[1], -1)==".") {
              $chunk[1]=str_replace(".", "" ,$chunk[1]);
            }
             echo $chunk[1]; ?></td>
            <td><?php echo $chunk[2]; if ($chunk[3]=='ODM') {
              echo '<img class="imageCSS" width="10%" src="images/odm.png">';
              $countodm++;
            }if ($chunk[3]=='KANU') {
              echo '<img class="imageCSS" width="10%" src="images/kanu.png">';
              $countKanu++;
            }if ($chunk[3]=='Jubilee') {
              echo '<img class="imageCSS" width="10%" src="images/jubilee.png">';
              $countJubilee++;
            }if ($chunk[3]=='CCM') {
              echo '<img class="imageCSS" width="10%" src="images/ccm.jpg">';
              $countccm++;
            }  if ($chunk[3]=='FORD Kenya') {
              echo '<img class="imageCSS" width="10%" src="images/ford.jfif">';
              $countFord++;
            }  if ($chunk[3]=='WDM K' || $chunk[3]=='WDM K.') {
              echo '<img class="imageCSS" width="10%" src="images/wdmk.png">';
              $countwdmk++;
            }if ($chunk[3]=='Independent') {
              $countIndependent++;
            }if ($chunk[3]=='Narc Kenya') {
              echo '<img class="imageCSS" width="10%" src="images/narc.png">';
              $countNarc++;
            }
            ?></td>
            <td> <a href="<?php $total = $countccm + $countJubilee + $countIndependent + $countodm + $countFord + $countKanu + $countNarc + $countwdmk; $chunk[1]=str_replace(" ", "" ,$chunk[1]); echo 'http://'.strtolower($chunk[1]).'.go.ke'; ?>"><?php echo 'http://'.strtolower($chunk[1]).'.go.ke'; ?></a> </td>
          </tr>

      <?php  }
  ?>
  </tbody>
<tfoot>
            <div class="row">
            <h6>Distributions of Governors according party</h6>
              <p>Narc  -<?php echo round(($countNarc/$total)*100).'%'; ?></p>
              <p>KANU - <?php echo round(($countKanu/$total)*100).'%'; ?></p>
              <p>CCM -<?php echo round(($countccm/$total)*100).'%'; ?></p>
              <p>Ford- <?php echo round(($countFord/$total)*100).'%'; ?></p>
              <p>Independent-<?php echo round(($countIndependent/$total)*100).'%'; ?></p>
              <p>Wiper- <?php echo round(($countwdmk/$total)*100).'%'; ?></p>
              <p>ODM - <?php echo round(($countodm/$total)*100).'%'; ?></p>
              <p>Jubilee- <?php echo round(($countJubilee/$total)*100).'%'; ?></p>
            </div>
</tfoot>
</table>
  </body>
</html>
