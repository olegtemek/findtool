<template>
  <section class="category">
    <div class="container">
      <div class="category__wrapper">
        <router-link
          :to="{ path: category.slug }"
          class="category__item"
          v-for="category of categories"
          :key="category.id"
          >{{ category.title }}</router-link
        >
      </div>
    </div>
  </section>
</template>



<script>
import { useStore } from "vuex";
import { onMounted, computed, onUnmounted } from "vue";
import { useRouter } from "vue-router";
export default {
  name: "CategoriesComponent",

  setup() {
    const store = useStore();
    const router = useRouter();
    onMounted(() => {
      store.dispatch("fetchCategories");
    });

    const categories = computed(() => {
      return store.getters.getCategories;
    });

    return { categories };
  },
};
</script>



<style lang="scss" scoped>
.category {
  padding-top: 40px;

  &__wrapper {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 20px 30px;

    @media (max-width: 1024px) {
      gap: 14px 14px;
    }
  }

  &__item {
    border: 1px solid $blue;
    font-size: 22px;
    color: $blue;
    padding: 20px 30px;
    border-radius: $br;
    transition: $tr;

    &.router-link-active {
      color: $green;
      border: 1px solid $green;
      &:hover {
        background-color: $green;
        color: $black;
      }
    }

    @media (max-width: 1340px) {
      font-size: 18px;
      padding: 15px 20px;
    }

    @media (max-width: 1024px) {
      font-size: 16px;
      padding: 10px 16px;
    }

    &:hover {
      background-color: $blue;
      color: $white;
    }
  }
}
</style>