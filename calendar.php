<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex">
<title>BenBerden.com - Calendar</title>
<meta name="description" content="A World Class Cyclo-Cross Racer" />
<meta name="keywords" content="Cyclocross, Cyclo-cross, Stoemper Road Bikes, Stoemper Cross Bikes, Bronto Mountain Bikes" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link href="css/_benBerden.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.6.2.js" type="text/javascript"></script>
<script src="js/jquery-sitewide.js" type="text/javascript"></script>
<script src="js/jquery-race-schedule-xml-parse.js" type="text/javascript"></script>
<!--[if lt IE 9]><script src=http://html5shiv.googlecode.com/svn/trunk/html5.js></script><![endif]-->

</head>
<body>
<div id="container">
  <header>
    <?php include 'includes/mainNavMenu.php' ?>
  </header>
  <article>
    <div class="mainImageCollageFloat"> <img src="images/berdenCx.jpg" alt="Ben Berden in the drops" class="imageCalFloatUpperRight"/><img src="images/benShoulderCxBike.jpg" alt="Ben Berden Running " class="imageCalFloatLowerLeft"/></div>
    <section class="mainContentPosition">
      <hgroup class="hGroupPosition">
        <h1>Calendar</h1>
        <h2>Ben's upcoming race schedule.</h2>
      </hgroup>
      <table id="XMLDataTable">
        <tr class="alternate">
          <th>Date</th>
          <th>Event</th>
          <th>Venue</th>
          <th>Country</th>
          <th>Class</th>
        </tr>
      </table>
      <br class="clear"/>
    </section>
  </article>
  <footer>
    <?php include 'includes/footer.php' ?>
    <br class="clear"/>
  </footer>
</div>
</body>
</html>
