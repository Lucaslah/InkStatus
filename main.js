#!/usr/bin/env node


if (process.argv[2] && process.argv[2] === '--start') {

    const express = require('express');
    const server = express();
    const port = 5000;

    server.get("/", (req, res) => {
        res.sendFile(__dirname + '/index.html');
    });

    server.get("/json", (req, res) => {
        res.json({ message: "Hello world" });
    });

    server.listen(port, () => {
        console.log(`INK Server is running at at http://localhost:${port}`);
    });

    console.log("Please Check that you have php installed or you will get an error...")
        // console.log("Starting the PHP Web Server...")

    // const { exec } = require("child_process");

    // exec("/Volumes/Lucas\'s\ HHD\ \(backup\)/Files/Projects/InkStatus/phpwebserver.sh", (error, stdout, stderr) => {
    // if (error) {
    // console.log(`error: ${error.message}`);
    // return;
    // }
    // if (stderr) {
    //  console.log(`stderr: ${stderr}`);
    // return;
    //  }
    //  console.log(`stdout: ${stdout}`);
    // });

    console.log("The Auto PHP Web server is not working right now. Please see https://github.com/Lucaslah/InkStatus/extrahelp.md to start the php web server before restarting the InkStatus App.")

} else {

    // code for usage.


    const commandLineUsage = require('command-line-usage')

    const sections = [{
            header: 'InkStatus',
            content: 'A Basic Nodejs Server Status Information app.'
        },
        {
            header: 'Options',
            optionList: [{
                    name: 'start',
                    typeLabel: ' ',
                    description: 'Starts the InkStatus Server'
                },

            ]
        }
    ]
    const usage = commandLineUsage(sections)
    console.log(usage)

    // end usage


}
