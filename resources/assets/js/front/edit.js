/**
 * Created by tanjibo on 2017/4/19.
 */
HyperDown = require('hyperdown');

var parser = new HyperDown,
    html = parser.makeHtml(markdownText);
console.log(parser);