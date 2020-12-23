const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    resolve:{
        extensions: ['.js']
    },

    entry: './src/app.js',
    output: {
        filename: 'js/bundle.js',
        path: path.join(__dirname, 'dist')
    },

    devServer:{
        contentBase: "dist",
        compress: true,
        port: 8000
    },

    plugins: [
        new HtmlWebpackPlugin({
            filename: 'index.html',
            template: './src/templates/template-header-logo-superior.handlebars'
        }),

        new HtmlWebpackPlugin({
            filename: 'header-logo-left.html',
            template: './src/templates/template-header-logo-left.handlebars'
        }),

        new HtmlWebpackPlugin({
            filename: 'header-logo-right.html',
            template: './src/templates/template-header-logo-right.handlebars'
        }),

        new HtmlWebpackPlugin({
            filename: 'header-logo-center.html',
            template: './src/templates/template-header-logo-center.handlebars'
        }),

        new MiniCssExtractPlugin({
           filename: 'css/[name]-styles.css' 
        })
    ],


    module:{
        rules:[
            { test: /\.js$/, exclude: /node_modules/, loader: "babel-loader" },

            {test: /\.handlebars/, loader: "handlebars-loader"},

            {
                test: /\.(sa|sc|c)ss$/i,
                use: [
                    MiniCssExtractPlugin.loader, 
                    'css-loader', 
                    {
                        loader: 'sass-loader',
                        options: {
                        // Prefer `dart-sass`
                        implementation: require('sass'),
                        },
                    }
                ],
            },
        ]
    }
}