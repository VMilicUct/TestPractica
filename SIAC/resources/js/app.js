/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
import Dashboard from './components/dashboard.vue';
import TablaProyectos from './components/tabla_proyectos.vue';
import PPCAL from './components/ppcal.vue';
import Revision from './components/revision.vue';
import Reportes from './components/reportes.vue';
/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({
    data() {
        return {
            menu: 0
        }
    }
});

// Register the component globally if needed
app.component('dashboard', Dashboard);
app.component('tabla_proyectos', TablaProyectos);
app.component('ppcal', PPCAL);
app.component('revision', Revision);
app.component('reportes', Reportes);

// Mount the Vue application to the `#app` element
app.mount('#app');
