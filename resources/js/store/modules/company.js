import axios from 'axios';
import router from '@/router/router.js';
const create = {
  state: {
    companies: null
  },
  actions: {
    async storeCompany(ctx, data) {
      let res = await axios.post('/api/store-company', data)
      if (res.status == 200) {
        router.push({ name: 'HomePage', params: { status: true } })
      }
    },
    async fetchAllCompanies(ctx) {
      let res = await axios.get('/api/companies')
      if (res.status == 200) {
        ctx.commit('storeAllCompanies', res.data.companies)
      }
    },

    async fetchCompaniesSlug(ctx, slug) {
      let res = await axios.get('/api/companies-slug/', { params: { slug: slug } })
      if (res.status == 200) {
        ctx.commit('storeAllCompanies', res.data.companies)
      }
    }
  },

  mutations: {
    storeAllCompanies(state, companies) {
      state.companies = companies
    }
  },
  getters: {
    getAllCompanies(state) {
      return state.companies;
    }
  }
}

export default create