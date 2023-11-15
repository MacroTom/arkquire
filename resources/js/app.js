import './bootstrap';
import '../css/app.css';
import 'primeicons/primeicons.css';
import 'primevue/resources/themes/lara-light-teal/theme.css';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { InertiaProgress } from '@inertiajs/progress';
import PrimeVue from "primevue/config";
import ToastService from 'primevue/toastservice';
import Tooltip from 'primevue/tooltip';

createInertiaApp({
  resolve: name => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(PrimeVue, { ripple: true })
      .use(ToastService)
      .directive('tooltip', Tooltip)
      .mount(el)
  },
});

InertiaProgress.init({ color: '#4B5563' });
