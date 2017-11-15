<!DOCTYPE html>
<html lang="en">

<head>

<!-- Basic Page Needs
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php include('templates/head.php'); ?>

</head>

<body class="code-snippets-visible">

  <!-- Navbar -->
  <?php include('templates/navigation.php'); ?>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <header class="header">
      <h2 class="title m-t-1 m-b-0">About Us</h2>
    </header>

    <div class="row">
      <div class="columns twelve m-t-0">
        <p class="m-t-0">
          If you're curious, Hypertrap didn't start out as a business. It was actually just a simple Perl script 
          I wrote originally named dragon.pl that ran from cron on my laptop. I have this friend who is maniacal 
          about always running the most current version of software so I made it for him to know the moment a new 
          version was released. Then things started to kinda spiral from there.
        </p>
        <p>
          He told a friend, and the next thing I knew I had 14 different people all wanting to get notified when all sorts of
          different things changed on the web. So I kept working to make the script into something these friends could use on
          their own so I wouldn't have to manually set up each site. Some of these guys were acting totally "hyper" about getting
          notified the instant something changed that they cared deeply about. So I decided to call this whole project
          Hypertrap.
        </p>
        <p>
          Hopefully, it's at a point now where you too can use it. As you can see, this didn't start out as a business.  
          We'll see how *that* actually goes...
        </p>
        <p>Good trapping,</p>
        <p>Brady.</p>
        
        <a href="./images/arrow_sweetspot.png" class="flex-arrow">
          <img class="arrow-img" src="./images/arrow_sweetspot.png" alt="A diagram of the Hypertrap User Sweet Spot." >
        </a>
      </div>
    </div>
    <!-- end .row -->

    <!-- Download Links -->
    <div class="row m-tb-0 text-center download-links m-tb-0">
      <div class="columns four m-tb-0">
        <a href="https://play.google.com/store/apps/details?id=htcreator.jabracadabra.com.hypertrapcreator" target="_blank">
          <img class="img-responsive google-play" src="./images/google-play-badge.png" alt="Click here to get the Hypertrap app on Andriod.">
        </a>
      </div>
      <div class="columns four m-tb-0">
        <a href="https://itunes.apple.com/WebObjects/MZStore.woa/wa/viewSoftware?id=1271144614&mt=8" target="_blank">
          <img class="img-responsive ios-store" src="./images/download-on-app-store.png" alt="Click here to get the Hypertrap app on iOs.">
        </a>
      </div>
      <div class="columns four m-tb-0">
        <a href="https://chrome.google.com/webstore/detail/hypertrap/cledmefbedeeoapeeplinjikeonchmjn" target="_blank">
          <img class="img-responsive chrome-extension" src="./images/chrome_webstore_lg.png" alt="Click here to get the Hypertrap app Chrome extension.">
        </a>
      </div>
    </div><!-- end Download Links -->

  </div> <!-- end .container -->


  <!-- Footer -->
  <?php include('templates/footer.php'); ?>
  <!-- end Footer -->

  <!-- Google Analytics -->
  <script type="text/javascript">
  </script>

  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>

</html>