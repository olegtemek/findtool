<template>
  <footer class="footer">
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__left">
          <h3>Данный сайт был разработан</h3>
          <p>
            Придатко Дмитрием -
            <a target="_blank" href="https://t.me/zyxron">https://t.me/zyxron</a>
          </p>
          <p>
            Алексеенко Олегом -
            <a target="_blank" href="https://t.me/olegtemek">https://t.me/olegtemek</a>
          </p>
        </div>
        <div class="footer__right">
          <p>
            По всем вопросам, предложениям, замечаниям и т.д. можете обращаться
            по номеру <a target="_blank" href="tel:+77712085150">+7-771-208-51-50</a> или
            <a target="_blank" href="https://t.me/zyxron">https://t.me/zyxron</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
</template>



<script>
export default {
  name: "FooterComponent",
};
</script>

<style lang="scss" scoped>
.footer {
  margin-top: 40px;
  padding: 10px 0;
  background-color: $gray;

  &__wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;

    @media (max-width: 700px) {
      flex-direction: column;
      align-items: flex-start;
      justify-content: center;
    }
  }

  &__left {
    @media (max-width: 700px) {
      margin-bottom: 10px;
    }

    h3 {
      font-size: 18px;
    }

    p {
      padding-top: 10px;

      a {
        font-weight: $fw-bold;
        color: $blue;
      }
    }
  }

  &__right {
    max-width: 300px;

    @media (max-width: 700px) {
      max-width: 100%;
    }

    p {
      a {
        font-weight: $fw-bold;
        color: $blue;
      }
    }
  }
}
</style>