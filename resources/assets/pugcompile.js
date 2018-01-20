var pug = require('pug');
var fs = require('fs');

var fn = pug.compileFile('pug/index.pug', {pretty: true});
//var fout = pug.render('pug/index.pug');

var html = fn();
//save file to index.html
fs.writeFileSync('../../public/index.html', html);
//console.log(html);