var server = require('../server.js');

describe('server', function() {
    before(function() {
        server.listen(5000);
    });

    after(function() {
        server.close();
    });
});

var assert = require('assert'),
    http = require('http');

describe('Test InkStatus Server', function() {
    it('should return 200', function(done) {
        http.get('http://localhost:5000', function(res) {
            assert.equal(200, res.statusCode);
            done();
        });
    });


    it('should return 200 (JSON)', function(done) {
        http.get('http://localhost:5000/json', function(res) {
            assert.equal(200, res.statusCode);
            done();
        });
    });

    it('should get correct content', function(done) {
        http.get('http://localhost:5000', function(res) {
            var data = '';

            res.on('data', function(chunk) {
                data += chunk;
            });

            res.on('end', function() {
                assert.equal('Hello, world!\n', data);
                done();
            });
        });
    });
});