# InkStatus ![npm](https://img.shields.io/npm/v/inkstatus) ![Maintenance](https://img.shields.io/maintenance/yes/2020) [![GitHub license](https://img.shields.io/github/license/Lucaslah/InkStatus)](https://github.com/Lucaslah/InkStatus/blob/master/LICENSE) ![CircleCI](https://img.shields.io/circleci/build/gh/Lucaslah/InkStatus/master?token=89c94f330b233ec43aa4793bf0d8a63bc2489bb9) ![GitHub Workflow Status](https://img.shields.io/github/workflow/status/lucaslah/inkstatus/Manual%20Test%20macOS?label=macOS%20Build) ![GitHub Workflow Status](https://img.shields.io/github/workflow/status/lucaslah/inkstatus/Manual%20Test%20Ubuntu?label=Ubuntu%20Build)
A Basic Nodejs Server Status Information app.

## Table of Contents
- [Requirements](#requirements)
- [Installing](#Insatlling)
- [About](#about)
- [Building from code](#Building-from-code)
- [Help](#help/setup)
- [Coming Soon](#coming-soon)
- [Extra Info](#extra-info)
- [Other Branches](#other-branches)
- [Changing the app Ports](#changing-the-app-ports-high-level-users-only)

### Requirements
- npm or Yarn
- Pyhton 2 + (To show RAM usage)
- PHP 

### Insatlling
#### You can install InkStatus with npm or Yarn.
- Yarn: `yarn add inkstatus` 
- npm: `npm i inkstatus -g` If you get a error try `sudo npm install -g inkstatus`
- HomeBrew: `coming soon`
### About
This Project shows your computer CPU Info, Ram Usage, Uptime and lots more.
Please Note This app is build for macOS and Liunx and Will be comming to Windows Soon, But you can fork this and build it for Windiws if you wish.


### Building from code
1. Clone this repo: `gh clone lucaslah/inkstatus` or using git clone: `git clone https://github.com/lucaslah/inkstatus.git`
2. Change to the repo you just cloned: `cd inkstatus`
3. Install required things: `npm install` or `yarn inatall`
4. Start the InkStatus server with `node . --start`
5. Start the PHP web Server with `node php`

### Help/Setup
1. You will need php and yarn or npm installed on your computer (macOS or liunx).
2. Install Inkstatus: `npm install inkstatus -g` or `yarn add inkstatus`
3. In your terminal run this command: `inkstatus --start & inkstatus php` 
4. Open http://localhost:5000 and you should see your computer status.
5. To Quit inkstatus, In the terminal you ran `inkstatus --start & inkstatus php` in press CRT + C on your keyboard, thats it InkStatus has stoped.
6.  Extra Note: While you have `inkstatus` running you *MUST* keep your terminal window open.

### Coming Soon
- CPU Usage

### Extra Info
THIS APP REQUIRES PORT'S 5000 AND PORT 5001.

## Other Branchs
- master : this branch also the main branch of this project.
- gh-pages : the branch where github pags for this project are hosted on.
- high-ports-x.x.x : the high ports branch for users that need higher ports, replace x.x.x with the current realese.


#### Changing the app ports (High Level Users only)
###### To View this in in your browser [Press Here](http://spycampllc.ml/InkStatus/changing_the_inkstatus_ports.html?rnd=6363)
- To Chanage the app you will need a local clone of this repo.
- Cloning: gh-cli: `gh clone lucaslah/inkstatus` git clone: `git clone https://github.com/Lucaslah/InkStatus.git`
- Steps:
1. Change to the repo you just cloned: In your terminal, `cd inkstatus`
2. Install Required: In your terminal, `npm install` or `yarn install`
3. Change the app ports: In your terminal, `nano main.js`
4. In `main.js` go to line `31`, you will see this: `const port = 5000;`, change 5000 (the default port) to what every you want, save changes with ctr x and then y. Changing this will change the port of `inkstatus --start` or the main web server of InkStatus.
5. To Change the PHP web server port: In your terminal, `nano main.js` Go to line `12`, and you will see this: `exec("php -S localhost:5001 syinfo.php", (error, stdout, stderr) => {` Change 5001 to what every port you want, then save changes as you did before.
6. Now you will need to change the frame port to the same port you changed the php server to: `nano index.html` Go to line `16` and you will see this: `<embed src="http://localhost:5001/syinfo.php" width=100% height=90% onerror="alert('The PHP Web Server is not running, Please start the PHP Web Server!');" /> ` Change 5001 to the port the you put in for the php web server, save changes.
7. Now you need to run InkStatus, Stay in the inkstatus dir and run, `node . --start & node php`, Go to http://localhost:{port} replace '{port}' with the port you chnaged in `main.js` line `31`, you should see the InkStatus main page with your computer status.
8. Full Replace install, In the InkStaus dir run `npm install -g`, now run `inkstatus --start & inkstatus php`
