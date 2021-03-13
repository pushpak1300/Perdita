import { createApp, h } from 'vue'
import { app, plugin } from '@inertiajs/inertia-vue3'
import { InertiaProgress as progress } from '@inertiajs/progress'
require('./bootstrap')

const el = document.getElementById('app')

progress.init()

createApp({
  render: () => h(app, {
    initialPage: JSON.parse(el.dataset.page),
    resolveComponent: name => require(`./Pages/${name}`).default,
  })
})
.mixin({ methods: {
    route: window.route,
}})
.use(plugin)
.mount(el)
