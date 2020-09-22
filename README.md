# InkStatus [![npm version](https://badge.fury.io/js/inkstatus.svg)](https://badge.fury.io/js/inkstatus) ![Maintenance](https://img.shields.io/maintenance/yes/2020) [![GitHub license](https://img.shields.io/github/license/Lucaslah/InkStatus)](https://github.com/Lucaslah/InkStatus/blob/master/LICENSE) [![build](https://circleci.com/gh/lucaslah/inkstatus.svg?tyle=shield)](#readme.md)
A Basic Nodejs Server Status Information app.

## Table of Contents
- [Requirements](#requirements)
- [Installing](#Insatlling)
- [About](#about)
- [Building from code](#Building-from-code)
- [Help](#help/setup)
- [Coming Soon](#coming-soon)
- [Extra Info](#extra-info)

### Requirements
- npm or yarn
- Pyhton 2 + (To show RAM usage)
- PHP 

### Insatlling
#### You can install InkStatus with npm or yarn.
- Yarn: `yarn add inkstatus` 
- npm: `npm i inkstatus -g` If you get a error try `sudo npm install -g inkstatus`
- HomeBrew: `coming soon`
### About
This Project shows your computer CPU Info, Ram Usage, Uptime and lots more.
Please Note This app is build for macOS and Liunx and Will be comming to Windows Soon, But you can fork this and build it for Windiws if you wish.


### Building from code
1. Clone this repo: `gh clone lucaslah/inkstatus`
2. Change to the repo you just cloned: `cd inkstatus`
3. Install required things: `npm install` or `yarn inatall`
4. Start the InkStatus server with `node . --start`
5. Start the PHP web Server with `node . php`

### Help/Setup
1. You will need php and yarn or npm installed on your computer (macOS or liunx).
2. Install Inkstatus: `npm install inkstatus -g` or `yarn add inkstatus`
3. In your terminal run this command: `inkstatus php`
4. Now open a new Terminal and run `inkstatus --start` 
5. Open http://localhost:5000 and you should see your computer status.
6. To Quit inkstatus, In the terminal you ran `inkstatus --start` in press CRT + C on your keyboard.
7.  In the terminal you ran `inkstatus php` press CRT + C. Thats it inkstatus has stoped running.
8.  Extra Note: While you what inkstatus running you *MUST* keep both terminal windows open.

### Coming Soon
- CPU Usage

### Extra Info
THIS APP REQUIRES PORT'S 5000 AND PORT 5001.
