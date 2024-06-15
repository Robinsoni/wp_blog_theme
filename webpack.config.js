const path = require('path');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
module.exports = {
  entry: './src/js/app.js',
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'dist'),
  },

  module: {
    rules: [
      {
        test: /\.(sa|sc|c)ss$/,
        
        use: [
          
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '[name].[ext]',
              outputPath: 'fonts/'
            }
          }
        ]
      }
    ],
  },
  watchOptions: {
  
    aggregateTimeout: 300,
    poll: 1000,
  },
  
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'style.css',
    }),
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
   
  mode: 'production', // or 'production'
};