const path = require('path')
const webpack = require('webpack')
const CURRENT_WORKING_DIR = process.cwd()


// This will configure Webpack to bundle the React code to be used in production mode.
// The configuration here is similar to the client-side configuration for development
// mode, but without the hot-reloading plugin and debug configuration as these will not
// be required in production.
const config = {
    mode: "production",
    entry: [
    path.join(CURRENT_WORKING_DIR, 'client/main.js')
    ],
    output: {
    path: path.join(CURRENT_WORKING_DIR , '/dist'),
    filename: 'bundle.js',
    publicPath: "/dist/"
    },
    module: {
    rules: [
    {
    test: /\.jsx?$/,
    exclude: /node_modules/,
    use: [
    'babel-loader'
    ]
    }
    ]
    }
}



module.exports = config
