<template>
  <div>
    <HeaderComponent />
    <main>
      <p class="warning">
        Это первая функциональная версия сайта. Дизайн и функции будут
        дорабатываться <br />
        Для идей и пожеланий:
        <a href="https://t.me/zyxron">https://t.me/zyxron</a>
      </p>
      <router-view :key="$route.fullPath"></router-view>
    </main>
    <FooterComponent />
  </div>
</template>



<script>
export default {};
</script>