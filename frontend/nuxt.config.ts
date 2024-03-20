// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: {
    enabled: true,

    timeline: {
      enabled: true
    }
  },

  runtimeConfig: {
    public: {
      apiBase: process.env.API_BASE_URL,
      appName: process.env.APP_NAME,
    }
  },

  css: [
    'bootstrap/dist/css/bootstrap.min.css',
    './assets/css/bootstrap.scss',
    '@fortawesome/fontawesome-svg-core/styles.css',
  ],

  $meta: {
    script: [
      {
        src: 'bootstrap/dist/js/bootstrap.bundle.min.js'
      }
    ]
  },

  vite: {
    css: {
      preprocessorOptions: {
        scss: {
          additionalData: '@use "@/assets/css/_colors.scss" as *;'
        }
      }
    }
  },

  modules: ['@pinia/nuxt']
})