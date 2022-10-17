<template>
  <section class="company">
    <div class="container">
      <div class="company__wrapper">
        <CompanyComponent
          v-for="company of companies"
          :key="company.id"
          :item="company"
        />
      </div>
    </div>
  </section>
</template>



<script>
export default {
  name: "CompanyList",
  props: ["companies"],
};
</script>

<style lang="scss" scoped>
.company {
  padding-top: 80px;

  &__wrapper {
    width: 100%;
    display: flex;
    align-items: flex-start;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 60px 0;
  }
}
</style>