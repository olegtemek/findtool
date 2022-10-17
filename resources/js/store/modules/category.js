import axios from 'axios';
const category = {
  state: {
    categories: null,
  },
  actions: {
    async fetchCategories(ctx) {
      let res = await axios.get('api/categories')

      if (res.data.status == 200) {
        ctx.commit('storeCategories', res.data.categories)
      }
    }
  },

  mutations: {
    storeCategories(state, categories) {
      state.categories = categories
    }
  },

  getters: {
    getCategories(state) {
      return state.categories
    }
  }
}

export default category