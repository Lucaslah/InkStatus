<!DOCTYPE html>
<html lang="en">
<title>InkStatus</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
    <a href="installing.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Installing</a>
    <a href="code.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Code</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="about.php" class="w3-bar-item w3-button w3-padding-large">About</a>
    <a href="installing.php" class="w3-bar-item w3-button w3-padding-large">Installing</a>
    <a href="code.php" class="w3-bar-item w3-button w3-padding-large">Code</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-blue w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">InkStatus</h1>
  <p class="w3-xlarge">A Basic Node JS Server Status app.</p>
  <a herf="https://github.com/lucaslah/inkstatus" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">View it on GitHub</a>
</header>


  <html><head><style>body {
   color: black;
}

h1 {
font-family: Arial, Helvetica, sans-serif;
}

h2 {
font-family: Arial, Helvetica, sans-serif;
}

h3 {
font-family: Arial, Helvetica, sans-serif;
}

h4 {
font-family: Arial, Helvetica, sans-serif;
}

p {
font-family: Arial, Helvetica, sans-serif;
}

li {
font-family: Arial, Helvetica, sans-serif;
}
</style></head><body><h1 id="inkstatus-npm-https-img-shields-io-npm-v-inkstatus-maintenance-https-img-shields-io-maintenance-yes-2020-github-license-https-img-shields-io-github-license-lucaslah-inkstatus-https-github-com-lucaslah-inkstatus-blob-master-license-circleci-https-img-shields-io-circleci-build-gh-lucaslah-inkstatus-master-token-89c94f330b233ec43aa4793bf0d8a63bc2489bb9-github-workflow-status-https-img-shields-io-github-workflow-status-lucaslah-inkstatus-manual-20test-20macos-label-macos-20build-github-workflow-status-https-img-shields-io-github-workflow-status-lucaslah-inkstatus-manual-20test-20ubuntu-label-ubuntu-20build-">InkStatus <img src="https://img.shields.io/npm/v/inkstatus" alt="npm"> <img src="https://img.shields.io/maintenance/yes/2020" alt="Maintenance"> <a href="https://github.com/Lucaslah/InkStatus/blob/master/LICENSE"><img src="https://img.shields.io/github/license/Lucaslah/InkStatus" alt="GitHub license"></a> <img src="https://img.shields.io/circleci/build/gh/Lucaslah/InkStatus/master?token=89c94f330b233ec43aa4793bf0d8a63bc2489bb9" alt="CircleCI"> <img src="https://img.shields.io/github/workflow/status/lucaslah/inkstatus/Manual%20Test%20macOS?label=macOS%20Build" alt="GitHub Workflow Status"> <img src="https://img.shields.io/github/workflow/status/lucaslah/inkstatus/Manual%20Test%20Ubuntu?label=Ubuntu%20Build" alt="GitHub Workflow Status"></h1>
<p> A Basic Nodejs Server Status Information app.</p>
<h2 id="table-of-contents">Table of Contents</h2>
<ul>
<li><a href="#requirements">Requirements</a></li>
<li><a href="#Insatlling">Installing</a></li>
<li><a href="#about">About</a></li>
<li><a href="#Building-from-code">Building from code</a></li>
<li><a href="#help/setup">Help</a></li>
<li><a href="#coming-soon">Coming Soon</a></li>
<li><a href="#extra-info">Extra Info</a></li>
<li><a href="#other-branches">Other Branches</a></li>
<li><a href="#changing-the-app-ports-high-level-users-only">Changing the app Ports</a></li>
</ul>
<h3 id="requirements">Requirements</h3>
<ul>
<li>npm or Yarn</li>
<li>Pyhton 2 + (To show RAM usage)</li>
<li>PHP </li>
</ul>
<h3 id="insatlling">Insatlling</h3>
<h4 id="you-can-install-inkstatus-with-npm-or-yarn-">You can install InkStatus with npm or Yarn.</h4>
<ul>
<li>Yarn: <code>yarn add inkstatus</code> </li>
<li>npm: <code>npm i inkstatus -g</code> If you get a error try <code>sudo npm install -g inkstatus</code></li>
<li>HomeBrew: <code>coming soon</code><h3 id="about">About</h3>
This Project shows your computer CPU Info, Ram Usage, Uptime and lots more.
Please Note This app is build for macOS and Liunx and Will be comming to Windows Soon, But you can fork this and build it for Windiws if you wish.</li>
</ul>
<h3 id="building-from-code">Building from code</h3>
<ol>
<li>Clone this repo: <code>gh clone lucaslah/inkstatus</code> or using git clone: <code>git clone https://github.com/lucaslah/inkstatus.git</code></li>
<li>Change to the repo you just cloned: <code>cd inkstatus</code></li>
<li>Install required things: <code>npm install</code> or <code>yarn inatall</code></li>
<li>Start the InkStatus server with <code>node . --start</code></li>
<li>Start the PHP web Server with <code>node php</code></li>
</ol>
<h3 id="help-setup">Help/Setup</h3>
<ol>
<li>You will need php and yarn or npm installed on your computer (macOS or liunx).</li>
<li>Install Inkstatus: <code>npm install inkstatus -g</code> or <code>yarn add inkstatus</code></li>
<li>In your terminal run this command: <code>inkstatus --start &amp; inkstatus php</code> </li>
<li>Open <a href="http://localhost:5000">http://localhost:5000</a> and you should see your computer status.</li>
<li>To Quit inkstatus, In the terminal you ran <code>inkstatus --start &amp; inkstatus php</code> in press CRT + C on your keyboard, thats it InkStatus has stoped.</li>
<li>Extra Note: While you have <code>inkstatus</code> running you <em>MUST</em> keep your terminal window open.</li>
</ol>
<h3 id="coming-soon">Coming Soon</h3>
<ul>
<li>CPU Usage</li>
</ul>
<h3 id="extra-info">Extra Info</h3>
<p>THIS APP REQUIRES PORT&#39;S 5000 AND PORT 5001.</p>
</body></html>
  

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
