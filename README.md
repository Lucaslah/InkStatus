# InkStatus ![npm](https://img.shields.io/npm/v/inkstatus) ![Maintenance](https://img.shields.io/maintenance/no/2020) [![GitHub license](https://img.shields.io/github/license/Lucaslah/InkStatus)](https://github.com/Lucaslah/InkStatus/blob/master/LICENSE) ![CircleCI](https://img.shields.io/circleci/build/gh/Lucaslah/InkStatus/master?token=89c94f330b233ec43aa4793bf0d8a63bc2489bb9) ![GitHub Workflow Status](https://img.shields.io/github/workflow/status/lucaslah/inkstatus/Manual%20Test%20macOS?label=macOS%20Build) ![GitHub Workflow Status](https://img.shields.io/github/workflow/status/lucaslah/inkstatus/Manual%20Test%20Ubuntu?label=Ubuntu%20Build)
A Basic Nodejs Server Status Information app.

## Table of Contents
- [Requirements](#requirements)
- [Installing](#Insatlling)
- [Errors](#Errors)
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
- HomeBrew: `brew tap lucaslah/inkstatus` then run `brew install inkstatus`

#### Errors
- HomeBrew: Please put your error into a new issue.
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

## Other Branches
- master : this branch also the main branch of this project.
- gh-pages : the branch where github pags for this project are hosted on.
- high-ports-x.x.x : the high ports branch for users that need higher ports, replace x.x.x with the current realese.


#### Changing the app ports (High Level Users only)
This page has moved. [CHANGING-THE-APPS-PORTS.md](CHANGING-THE-APPS-PORTS.md)
