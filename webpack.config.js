const path = require('path')
module.exports = {
  entry: './src/js/index.js',
  module: {
      rules: []
  },
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'app'),
  },
  watch: true,
  mode: 'development'
}
