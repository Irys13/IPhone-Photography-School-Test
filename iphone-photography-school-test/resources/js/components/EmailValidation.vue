<template>
    <div>
        <input :class="[isEmailValid()]" type="email" v-model="email" />
    </div>
</template>

<style lang="scss">
@import 'resources/sass/variables';

.validation {

    .isInvalid {
        border: 1px solid red;
}
}

.isValid {
    border: 1px solid green;
}
</style>

<script>
/* Regex source: https://stackoverflow.com/a/46181 */
const regexValidation = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

export default({
  data() {
      return {
    email: '',
    reg: regexValidation
      }
  },
  methods: {
    isEmailValid: function() {
      return (this.email == "")? "" : (this.reg.test(this.email)) ? 'isValid' : 'isInvalid';
    }
  }
});
</script>
