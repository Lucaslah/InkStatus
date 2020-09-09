const { exec } = require("child_process");

exec("PHP_SERVER_PID=$! & kill -3 $PHP_SERVER_PID", (error, stdout, stderr) => {
    if (error) {
        console.log(`error: ${error.message}`);
        return;
    }
    if (stderr) {
        console.log(`stderr: ${stderr}`);
        return;
    }
    console.log(`stdout: ${stdout}`);
});