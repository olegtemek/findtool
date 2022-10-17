import { createStore } from "vuex";
import category from '@/store/modules/category.js';
import company from '@/store/modules/company.js';

const store = createStore({
  modules: [
    category, company
  ]
})

export default store;