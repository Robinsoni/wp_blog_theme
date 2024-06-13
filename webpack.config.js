const path = require('path');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
  entry: './src/js/app.js',
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'dist'),
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: [
          'style-loader',
          'css-loader',
          'postcss-loader',
        ],
      },
    ],
  },
  plugins: [
    new BrowserSyncPlugin({
      proxy: 'http://geeta.local/', // Adjust to your local dev URL
      files: [
        '**/*.php',
      ],
      injectChanges: true,
      notify: false,
    }, {
      reload: false,
    }),
  ],
  mode: 'development', // or 'production'
};