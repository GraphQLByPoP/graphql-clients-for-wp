module.exports = {
  webpack: {
    configure: {
      output: {
        filename: 'static/js/[name].js'
      },
      optimization: {
        runtimeChunk: false,
        splitChunks: {
          chunks(chunk) {
            return false
          },
        },
      },
    },
  },
}
