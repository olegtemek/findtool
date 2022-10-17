<template>
  <div>
    <p class="alert" v-if="$route.params.status">
      Ваши данные успешно отправлены на модерацию, администрация сайта свяжется
      с вами в ближайшее время
    </p>
    <CategoriesComponent />
    <CompanyList :companies="companies" />
  </div>
</template>



<script>
import { computed } from "@vue/runtime-core";
import { useRoute, useRouter } from "vue-router";
import { useStore } from "vuex";
export default {
  setup() {
    const route = useRoute();
    const router = useRouter();
    const store = useStore();

    if (route.params.status) {
      setTimeout(() => {
        router.push("/");
      }, 5000);
    }

    store.dispatch("fetchAllCompanies");

    const companies = computed(() => {
      return store.getters.getAllCompanies;
    });

    return {
      companies,
    };
  },
};
</script>
<style lang="scss" scoped>
.alert {
  text-align: center;
  padding-top: 20px;
  font-size: 40px;
  color: $blue;
  max-width: 70%;
  margin: 0 auto;
  @media (max-width: 1024px) {
    max-width: 90%;
    font-size: 24px;
  }
  @media (max-width: 700px) {
    max-width: 100%;
    font-size: 20px;
  }
}
</style>