<template>
  <header class="header">
    <div class="container">
      <div class="header__wrapper">
        <router-link :to="{ name: 'HomePage' }" class="header__logo">
          <img src="@assets/logo.png" alt="" />
        </router-link>
        <div class="header__right">
          <h1>Найди нужные тебе контакты</h1>

          <router-link
            v-if="$route.name != 'CreatePage'"
            :to="{ name: 'CreatePage' }"
            class="create"
            href="#"
            >Добавить контакты</router-link
          >
        </div>
      </div>
    </div>
  </header>
</template>



<script>
export default {
  name: "HeaderComponent",
};
</script>

<style lang="scss" scoped>
.header {
  padding: 10px 0;
  background-color: $gray;

  &__logo {
    width: 162px;
    height: 130px;

    img {
      width: 100%;
      height: 100%;
    }

    @media (max-width: 620px) {
      width: 120px;
      height: 80px;
    }
  }

  &__wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: row;

    @media (max-width: 1024px) {
      align-items: flex-end;
    }

    h1 {
      color: $blue;
      font-weight: $fw-bold;
      font-size: 32px;

      @media (max-width: 1340px) {
        font-size: 28px;
      }

      @media (max-width: 1024px) {
        font-size: 26px;
        padding-bottom: 10px;
      }

      @media (max-width: 620px) {
        font-size: 22px;
        padding-bottom: 10px;
      }

      @media (max-width: 520px) {
        font-size: 18px;
        text-align: center;
      }
    }

    .create {
      border: 1px solid $blue;
      padding: 20px 30px;
      border-radius: $br;
      font-size: 24px;
      color: $blue;
      transition: $tr;
      font-weight: $fw-regular;

      @media (max-width: 1340px) {
        font-size: 18px;
        padding: 20px 26px;
      }

      @media (max-width: 1024px) {
        font-size: 16px;
        padding: 14px 20px;
      }

      @media (max-width: 620px) {
        padding: 10px 16px;
      }

      @media (max-width: 620px) {
        padding: 8px 12px;
      }

      &:hover {
        background-color: $blue;
        color: $white;
      }
    }
  }

  &__right {
    display: flex;
    align-items: center;
    justify-content: space-around;
    width: 100%;

    @media (max-width: 1024px) {
      flex-direction: column;
      padding-bottom: 8px;
    }

    @media (max-width: 620px) {
      padding-bottom: 4px;
    }
  }
}
</style>