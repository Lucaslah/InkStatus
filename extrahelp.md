# Help


1. You will need php and yarn or npm installed on your computer (macOS or liunx).
2. Install Inkstatus: `npm i inkstatus` or `yarn add inkstatus`
3. Make a new folder somewhere on your computer and name it inkstatus (home folder reccommened) 
4. Open a new terminal and change to that folder `cd inkstatus`
5. Download This file: [Download](https://github.com/Lucaslah/InkStatus/releases/download/file-v-1.0.0/syinfo.php) to your computer and move to your inkstatus folder.
6. In your terminal run this command: `nohup php -S localhost:5001 > phpd.log 2>&1`
7. Now open a new Terminal and run `inkstatus` 
8. Open http://localhost:5000 and you should see your computer status.
9. To Quit inkstatus, In the terminal you ran `inkstatus` in press CRT + C on your keyboard.
10. In the terminal you ran `nohup php -S localhost:5001 > phpd.log 2>&1` run `PHP_SERVER_PID=$! & kill -3 $PHP_SERVER_PID`. Thats it inkstatus has stoped running.
11. Extra Note: While you what inkstatus running you *MUST* keep both terminal windows open.
