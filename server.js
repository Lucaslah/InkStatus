const express = require('express');
const server = express();
const port = 5000;

server.get("/", (req, res) => {
    res.end('Hello, world!\n');
});

server.get("/json", (req, res) => {
    res.json({ message: "Hello world" });
});

server.listen(port, () => {
    console.log(`Running Tests`);
});