---
title: Changing the InkStatus Ports

---
#### Changing the app ports (High Level Users only)
- To Chanage the app you will need a local clone of this repo.
- Cloning: gh-cli: `gh clone lucaslah/inkstatus` git clone: `git clone https://github.com/Lucaslah/InkStatus.git`
- Steps:
1. Change to the repo you just cloned: In your terminal, `cd inkstatus`
2. Install Required: In your terminal, `npm install` or `yarn install`
3. Change the app ports: In your terminal, `nano main.js`
4. In `main.js` go to line `31`, you will see this: `const port = 5000;`, change 5000 (the default port) to what every you want, save changes with ctr x and then y. Changing this will change the port of `inkstatus --start` or the main web server of InkStatus.
5. To Change the PHP web server port: In your terminal, `nano main.js` Go to line `12`, and you will see this: `exec("nohup php -S localhost:5001 syinfo.php&", (error, stdout, stderr) => {` Change 5001 to what every port you want, then save changes as you did before.
6. Now you will need to change the frame port to the same port you changed the php server to: `nano index.html` Go to line `16` and you will see this: `<embed src="http://localhost:5001/syinfo.php" width=100% height=90% onerror="alert('The PHP Web Server is not running, Please start the PHP Web Server!');" /> ` Change 5001 to the port the you put in for the php web server, save changes.
7. Now you need to run InkStatus, Stay in the inkstatus dir and run, `node . --start & node php`, Go to http://localhost:{port} replace '{port}' with the port you chnaged in `main.js` line `31`, you should see the InkStatus main page with your computer status.
8. Full Replace install, In the InkStaus dir run `npm install -g`, now run `inkstatus --start & inkstatus php`
