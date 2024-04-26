import './bootstrap';

import { createApp, h } from 'vue'
import {createInertiaApp, router} from '@inertiajs/vue3'
import { ZiggyVue } from 'ziggy-js';
import { Ziggy } from './ziggy.js';
createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        let route = window.route;
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el)
    },
})
