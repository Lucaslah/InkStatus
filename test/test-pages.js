var expect  = require('chai').expect;
var request = require('request');

it('InkStatus server status', function(done) {
    request('http://localhost:3000' , function(error, response, body) {
        expect(response.statusCode).to.equal(200);
        done();
    });
});

it('PHP Web Server', function(done) {
    request('http://localhost:3001' , function(error, response, body) {
        expect(response.statusCode).to.equal(200);
        done();
    });
});
