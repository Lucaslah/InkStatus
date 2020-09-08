# InkStatus [![npm version](https://badge.fury.io/js/inkstatus.svg)](https://badge.fury.io/js/inkstatus)
A Basic Nodejs Server Status Information app.

## Table of Contents
- [Installing](#Insatlling)
- [About](#about)
- [Building from code](#Building-from-code)
- [Help](#help)
- [Extra Info](#extra-info)


### Insatlling
You can Install this with NPM: `npm i inkstatus`
Yarn: `yarn add inkstatus`
HomeBrew: Comming soon

### About
This Project shows your computer CPU Usage, Ram Usage, Uptime and lots more.
Please Note This app is build for macOS and Liunx and Will be comming to Windows Soon, But you can fork this and build it for Windiws if you wish.


### Building from code
This Page is Comming soon.

### Help
1. You will need php and yarn or npm installed on your computer (macOS or liunx).
2. Install Inkstatus: `npm i inkstatus` or `yarn add inkstatus`
3. Make a new folder somewhere on your computer and name it inkstatus (home folder reccommened) 
4. Open a new terminal and change to that folder `cd inkstatus`
5. Download This file: {URL HERE} to your computer and move to your inkstatus folder.
6. In your terminal run this command: `nohup php -S localhost:5001 > phpd.log 2>&1`
7. Now open a new Terminal and run `inkstatus` 
8. Open http://localhost:5000 and you should see your computer status.
9. To Quit inkstatus, In the terminal you ran `inkstatus` in press CRT + C on your keyboard.
10. In the terminal you ran `nohup php -S localhost:5001 > phpd.log 2>&1` run `PHP_SERVER_PID=$! & kill -3 $PHP_SERVER_PID`. Thats it inkstatus has stoped running.
11. Extra Note: While you what inkstatus running you *MUST* keep both terminal windows open.

### Extra Info
Windows is comming soon!
