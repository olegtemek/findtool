import './bootstrap';
import { createApp } from 'vue';
import App from '@/views/App.vue'
import router from '@/router/router.js';
import components from '@/components/index.js';
import store from '@/store/store.js';

import Maska from 'maska';

const app = createApp(App);


components.forEach(component => {
  app.component(component.name, component)
});



app
  .use(Maska)
  .use(store)
  .use(router)
  .mount('#app')