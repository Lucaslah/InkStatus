var expect = require('chai').expect;
var request = require('request');

it('InkStatus server status', function(done) {
    request('http://localhost:5000', function(error, response, body) {
        expect(response.statusCode).to.equal(404);
        done();
    });
});

