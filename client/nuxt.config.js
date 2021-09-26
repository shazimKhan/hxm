require('dotenv').config()
const { join } = require('path')
const { copySync, removeSync } = require('fs-extra')

module.exports = {
  ssr: false,

  srcDir: __dirname,

  env: {
    apiUrl: process.env.API_URL || process.env.APP_URL + '/api',
    appName: process.env.APP_NAME || 'HXM',
    appLocale: process.env.APP_LOCALE || 'en',
    githubAuth: !!process.env.GITHUB_CLIENT_ID
  },

  head: {
    title: process.env.APP_NAME,
    titleTemplate: '%s - ' + process.env.APP_NAME,
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: 'Admin Center project' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },

  loading: { color: '#007bff' },

  router: {
    middleware: ['locale', 'check-auth']
  },

  css: [
    { src: '~assets/sass/app.scss', lang: 'scss' }
  ],

  plugins: [
    '~components/global',
    '~plugins/i18n',
    '~plugins/vform',
    '~plugins/axios',
    '~plugins/fontawesome',
    '~plugins/nuxt-client-init',
    { src: '~plugins/bootstrap', mode: 'client' },
    { src: '~plugins/ant-design-vue', mode: 'client' }
  ],

  modules: [
    '@nuxtjs/router',
    'bootstrap-vue/nuxt',
    '@nuxtjs/axios'
  ],
  axios: {
    progress: false,
    baseURL: 'http://127.0.0.1:8000/api/'
  },
  build: {
    extractCSS: true,
    babel: {
      plugins: [
        [
          '@babel/plugin-proposal-private-methods',
          {
            loose: true
          }
        ]
      ]
    }
  },
  buildModules: [
    '@nuxtjs/svg', '@nuxtjs/color-mode'
  ],

  hooks: {
    generate: {
      done (generator) {
        // Copy dist files to public/_nuxt
        if (generator.nuxt.options.dev === false && generator.nuxt.options.mode === 'spa') {
          const publicDir = join(generator.nuxt.options.rootDir, 'public', '_nuxt')
          removeSync(publicDir)
          copySync(join(generator.nuxt.options.generate.dir, '_nuxt'), publicDir)
          copySync(join(generator.nuxt.options.generate.dir, '200.html'), join(publicDir, 'index.html'))
          removeSync(generator.nuxt.options.generate.dir)
        }
      }
    }
  }
}
