/* eslint-disable */
const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
    watch: true,
    mode: "development",
    entry: "./src/index.js",
    devtool: "eval-cheap-module-source-map",
    output: {
        filename: "main.js",
        path: path.resolve(__dirname, 'assets/js')
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '../css/main.css'
        })
    ],
    stats: {
        children: true
    },
    module: {
        rules: [
            {
                test: /\.m?js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            },
            {
                test: /\.(sa|sc|c)ss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    { loader: 'css-loader', options: { importLoaders: 1 } },
                    {
                        loader: 'postcss-loader',
                        options: {
                            postcssOptions: {
                                plugins: [
                                    require('autoprefixer')({
                                        overrideBrowserslist: ['last 3 versions', 'ie >9']
                                    })
                                ]
                            }
                        }
                    },
                    'sass-loader'
                ],
            },


        ]
    },

}