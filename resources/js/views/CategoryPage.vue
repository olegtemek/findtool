<template>
  <div>
    <CategoriesComponent />
    <CompanyList :companies="companies" />
  </div>
</template>



<script>
import { computed, onMounted } from "@vue/runtime-core";
import { useRoute, useRouter } from "vue-router";
import { useStore } from "vuex";
export default {
  setup() {
    const route = useRoute();
    const store = useStore();

    onMounted(() => {
      store.dispatch("fetchCompaniesSlug", route.params.slug);
    });

    const companies = computed(() => {
      return store.getters.getAllCompanies;
    });

    return {
      companies,
    };
  },
};
</script>

