<template>
  <div class="company__item" :class="item.position ? 'popular' : ''">
    <div class="company__item-top">
      <h2>{{ item.title }}</h2>
      <a :href="`tel:${item.number}`" class="company__item-number">{{
        item.number
      }}</a>
    </div>
    <a :href="item.portfolio" class="company__item-portfolio">Портфолио</a>
    <div class="company__item-text">
      <h3>Что мы предлагаем</h3>
      <p>
        {{ item.offer }}
      </p>
    </div>
    <div class="company__item-text">
      <h3>Что мы ищем</h3>
      <p>
        {{ item.find }}
      </p>
    </div>
    <div class="company__item-text" v-if="item.text">
      <h3>Дополнительный текст</h3>
      <p>
        {{ item.text }}
      </p>
    </div>

    <a :href="item.link" class="company__item-link">Связаться</a>
  </div>
</template>



<script>
export default {
  name: "CompanyComponent",
  props: ["item"],
};
</script>

<style lang="scss" scoped>
.company__item {
  width: 40%;
  border: 1px solid $blue;
  padding: 20px;
  box-sizing: border-box;
  border-radius: $br;
  transition: $tr;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  background-color: darken($white, 90);

  &.popular {
    border: 1px solid $green;
    a {
      color: $green;
    }
  }

  a {
    color: $blue;
  }

  @media (max-width: 1024px) {
    width: 100%;
  }

  &-top {
    display: flex;
    align-items: center;
    justify-content: center;
    padding-bottom: 14px;
  }

  &:hover {
    transform: scale(1.01);
  }

  h2 {
    font-size: 26px;
    font-weight: $fw-bold;
    color: $green;
    margin-right: 40px;

    @media (max-width: 414px) {
      font-size: 24px;
      margin-right: 10px;
    }
  }

  &-number {
    display: inline-block;
    font-size: 20px;
    font-weight: $fw-bold;
    text-decoration: underline;

    @media (max-width: 414px) {
      font-size: 16px;
    }
  }

  &-portfolio {
    font-weight: $fw-bold;
    padding-bottom: 20px;
    font-size: 18px;
    text-decoration: underline;
  }

  &-text {
    h3 {
      font-size: 18px;
      padding-bottom: 8px;
      font-weight: $fw-medium;
    }

    p {
      line-height: 120%;
      font-weight: $fw-light;
      color: darken($white, 20);
    }

    padding-bottom: 20px;
  }

  &-link {
    font-weight: $fw-medium;
    font-size: 20px;
    border-bottom: 1px solid $blue;
    padding-bottom: 4px;
    padding: 4px 6px;
  }
}
</style>