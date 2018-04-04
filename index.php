<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>

  <!-- I already have a CSS file created so just edit that for the design part(main.css) -->
  <link rel="stylesheet" type="text/css" href="css/main.css">

  <!-- Bootstrap - This is for the navbar and button, I did the CSS for it to help out-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>

  <!-- HEADER -->

  <div id="header" class="header">

    <div class="navbar">

      <?php $current = 'home'; include("includes/menu.php"); ?>

    </div>

      <h1>The Diaspora</h1>

      <div class="about-btn">
        <a href="about.php">
          <button type="button">About us</button>
        </a>
      </div>

  </div>

  <div class="diaspora">
    <div class="container">

      <h2>What is a diaspora?</h2>

      <p>Diaspora means “to scatter” in Greek, but today we use the term to describe a community of people who live outside their shared country of origin or ancestry but maintain active connections with it. A diaspora includes both emigrants and their descendants. While some people lose their attachment to their ancestral homeland, others maintain a strong connection to a place which their ancestors may have left generations ago. Many Americans come from mixed heritage and therefore can claim membership in multiple diaspora communities.</p>

      <p>Many diaspora groups are working to achieve greater impact and a stronger voice in matters that relate to their countries of origin. Diaspora communities make vital but often unrecognized contributions to the progress of their countries of heritage. They share goals with governments, businesses, and NGOs, including:</p>

      <ul>
        <li>Broad-based economic growth</li>
        <li>Thriving civil society</li>
        <li>Widespread participation in good governance</li>
        <li>Access to global markets for skills and financial capital</li>
        <li>Robust trading partnerships</li>
        <li>Growing participation in science, technology and communication innovations</li>
      </ul>

      <a href="http://www.diasporaalliance.org/what-is-a-diaspora/">Resource link</a>

    </div>
  </div>



</body>
</html>
