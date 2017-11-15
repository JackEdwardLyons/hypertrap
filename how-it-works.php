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
      <h2 class="title m-tb-1">How it works</h2>
      <h4 class="grey-text text-center">It's super easy to set a HyperTrap</h4>
    </header> 
  
    <div class="value-props row">

      <hr style="margin-top: 3em;">
      
      <div class="six columns text-left ">
        <ol type="1" class="">
          <li class="">
            Paste URL, use the Chrome extension or mobile app
          </li>
          <li class="">
            Click to highlight just a section, or the page
          </li>
          <li class="">
            Optional: Choose the trap type and some other settings
          </li>
          <li>
            DONE.
          </li>
        </ol>
      </div>
      <div class="six columns">
        <h4 class="grey-text">Pixel accurate snapshots of the web</h4>
        <img class="img-responsive" src="./images/showcase_animation.gif" alt="A snapshot of the app's main screen">  
      </div>
    </div>
    <!-- end .row -->

    <div class="row">
      <h4 class="text-center m-b-0 grey-text">Once upon a time... Only programmers could do this.  Now you can too.</h4>

      <div class="six columns">
        <img class="img-responsive" src="./images/hypertrap_alert2.png" alt="A snapshot of the app's features">
      </div>
      <div class="six columns smaller-font">
        <p class="m-t-0 bold">Hypertrap alerts you via email and automatically logs <strong><em>every</em></strong> change.</p>
        <p class="bold">Share your diff log with anyone, or just keep it to yourself.</p>
        <p class="bold">Enjoy the glory of your <span class="blue-text">aha moment.</span></p>
        <a class="button button-orange" href="https://hypertrap.com/register">Set my first trap</a>
      </div>
    </div>
    <!-- end .row -->

    <div class="row">
      <h4 class="text-center m-b-0 grey-text">Your new internet pet - good boy Hypertrap!</h4>
      <div class="six columns smaller-font">
        <p class="m-t-0">
          For the advanced user, explore a rich set of features to govern the logic of each Hypertrap you set.  
          There's an internet weasel inside all of us.
        </p>
        <p>Craft your HyperTrap for:</p>
        <ul>
          <li>Keywords ( present and not present )</li>
          <li>Value thresholds ( above and below )</li>
          <li>Image updates</li>
          <li>Content updates</li>
        </ul>
        <p>Customize your alerts to see deltas</p>
        <ul>
          <li>Word by word</li>
          <li>Side by side</li>
          <li>Value diffs</li>
        </ul>
        <p>There's even a Hypertrap API and alert webhook for developers and data scientists.</p>
      </div>
      <div class="six columns">
        <img class="img-responsive" src="./images/hypertrap_config2.jpg" alt="A snapshot of the app's configuration panel.">
      </div>
      
    </div>
    <!-- end .row -->
    
    <!-- Call to Action -->
    <div class="row">
      <div class="seven columns">
        <h4 class="m-tb-0 grey-text">Take your internet addiction to a new level.</h4>
      </div>
      <div class="five columns flex-center flex-column">
        <a class="button button-orange m-tb-0" href="https://hypertrap.com/register">Set my first trap</a>
      </div>
    </div>
    <!-- end .row -->

    <hr class="m-t-0">
    <!-- end Call to Action -->


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

  </div><!-- end .container -->

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