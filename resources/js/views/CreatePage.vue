<template>
  <div>
    <div class="create">
      <div class="container">
        <h2>Добавить данные</h2>
        <div class="create__wrapper-top">
          <div class="create__item">
            <h3>Название компании/ФИО</h3>
            <span
              class="error"
              v-for="error in v$.title.$errors"
              :key="error.$uid"
            >
              {{ requiredMsg }}
            </span>
            <input
              type="text"
              placeholder="Имя компании/ФИО"
              v-model="data.title"
            />
          </div>
          <div class="create__item">
            <h3>Номер телефона</h3>
            <span
              class="error"
              v-for="error in v$.number.$errors"
              :key="error.$uid"
            >
              {{ requiredMsg }}
            </span>
            <input
              type="text"
              placeholder="Номер телефона"
              v-maska="'+7 ### ###-##-##'"
              v-model="data.number"
            />
          </div>
          <div class="create__item">
            <h3>Ссылка на портфолио</h3>
            <span
              class="error"
              v-for="error in v$.portfolio.$errors"
              :key="error.$uid"
            >
              {{ requiredMsg }}
            </span>
            <input
              type="text"
              placeholder="https://github.com/olegtemek"
              v-model="data.portfolio"
            />
          </div>
          <div class="create__item">
            <h3>Ссылка для связи с вами</h3>
            <span
              class="error"
              v-for="error in v$.link.$errors"
              :key="error.$uid"
            >
              {{ requiredMsg }}
            </span>
            <input
              type="text"
              placeholder="https://t.me/zyxron"
              v-model="data.link"
            />
          </div>
        </div>
        <div class="create__wrapper-bottom">
          <div class="create__item">
            <h3>
              Что вы предлагаете <span>Максимальная длина 150 символов</span>
            </h3>
            <span
              class="error"
              v-for="error in v$.offer.$errors"
              :key="error.$uid"
            >
              {{ error.$message == "Value is required" ? requiredMsg : maxMsg }}
            </span>
            <textarea v-model="data.offer"></textarea>
          </div>
          <div class="create__item">
            <h3>Что вы ищете <span>Максимальная длина 150 символов</span></h3>
            <span
              class="error"
              v-for="error in v$.find.$errors"
              :key="error.$uid"
            >
              {{ maxMsg }}
            </span>
            <textarea v-model="data.find"></textarea>
          </div>
        </div>

        <div class="create__item-category">
          <h3>Выберите вашу категорию</h3>
          <span
            class="error"
            v-for="error in v$.category_id.$errors"
            :key="error.$uid"
          >
            {{ requiredMsg }}
          </span>
          <div class="select">
            <select v-model="data.category_id">
              <option
                :value="category.id"
                v-for="category of categories"
                :key="category.id"
              >
                {{ category.title }}
              </option>
            </select>
          </div>
        </div>
        <button @click="saveData">Добавить данные</button>
      </div>
    </div>
  </div>
</template>



<script>
import { computed } from "vue";
import { reactive } from "@vue/reactivity";
import useVuelidate from "@vuelidate/core";
import { required, maxLength } from "@vuelidate/validators";
import { useStore } from "vuex";
import { onMounted } from "@vue/runtime-core";

export default {
  setup() {
    const data = reactive({
      title: "",
      number: "",
      portfolio: "",
      link: "",
      offer: "",
      find: "",
      category_id: "",
    });
    const rules = {
      title: { required },
      number: { required },
      portfolio: {},
      link: {},
      offer: { required, maxLength: maxLength(150) },
      find: { maxLength: maxLength(150) },
      category_id: { required },
    };

    const requiredMsg = "Это поле обязательно для заполнения";
    const maxMsg = "Максимальная длина поля 150 символов";
    const v$ = useVuelidate(rules, data);
    const store = useStore();

    onMounted(() => {
      store.dispatch("fetchCategories");
    });

    const categories = computed(() => {
      return store.getters.getCategories;
    });

    const saveData = async () => {
      const result = await v$.value.$validate();
      if (result) {
        store.dispatch("storeCompany", data);
      } else {
        console.log("error");
      }
    };

    return { data, saveData, v$, requiredMsg, maxMsg, categories };
  },
};
</script>








<style lang="scss" scoped>
.create {
  padding-top: 40px;

  h2 {
    font-size: 40px;
    text-align: center;
    font-weight: $fw-bold;
    padding-bottom: 40px;
  }

  button {
    display: block;
    width: 260px;
    border-radius: $br;
    padding: 10px 20px;
    font-size: 24px;
    border: 1px solid $blue;
    margin: 0 auto;
    color: $blue;
    transition: $tr;

    &:hover {
      background-color: $blue;
      color: $white;
    }
  }

  &__wrapper {
    &-top {
      display: flex;
      justify-content: center;
      align-items: flex-end;
      flex-wrap: wrap;
      gap: 20px;

      @media (max-width: 700px) {
        align-items: flex-start;
        justify-content: flex-start;
      }

      .create__item {
        width: 300px;

        @media (max-width: 1340px) {
          width: 260px;
        }

        @media (max-width: 700px) {
          width: 100%;
        }
      }
    }

    &-bottom {
      display: flex;
      justify-content: space-around;
      align-items: flex-end;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 40px;
      margin-bottom: 40px;

      .create__item {
        width: 40%;

        @media (max-width: 1340px) {
          width: 320px;
        }

        @media (max-width: 700px) {
          width: 100%;

          textarea {
            height: 140px;
          }
        }
      }
    }
  }

  &__item {
    .error {
      display: block;
      color: red;
      font-size: 14px;
      padding-bottom: 4px;
    }

    &-category {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      margin-bottom: 40px;
      .error {
        display: block;
        color: red;
        font-size: 14px;
        padding-bottom: 4px;
      }
      h3 {
        font-size: 20px;
        padding-bottom: 8px;

        span {
          display: block;
          font-size: 14px;
          color: darken($white, 40);
        }
      }

      .select {
        position: relative;
        display: flex;
        width: 20em;
        height: 3em;
        border-radius: $br;
        overflow: hidden;
        border: 1px solid $blue;
        @media (max-width: 414px) {
          width: 18em;
        }

        select {
          appearance: none;
          box-shadow: none;
          width: 100%;
          padding: 0 1em;
          color: $green;
          border: 1px solid transparent;
          background: rgba(248, 248, 248, 0.2);
          cursor: pointer;
        }

        select::-ms-expand {
          display: none;
        }

        &::after {
          content: "\25BC";
          position: absolute;
          top: 0;
          right: 0;
          padding: 1em;
          background-color: transparent;
          transition: 0.25s all ease;
          pointer-events: none;
        }
      }
    }

    h3 {
      font-size: 20px;
      padding-bottom: 8px;

      span {
        display: block;
        font-size: 14px;
        color: darken($white, 40);
      }
    }

    input,
    textarea {
      width: 100%;
      padding: 14px 20px;
      border-radius: $br;
      background-color: darken($white, 80);
      border: 1px solid $blue;
      color: $blue;
      box-sizing: border-box;

      @media (max-width: 700px) {
        padding: 10px 15px;
      }
    }

    textarea {
      width: 100%;
      height: 160px;
    }
  }
}
</style>