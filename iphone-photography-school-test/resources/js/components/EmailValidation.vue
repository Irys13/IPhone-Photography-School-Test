<style lang="scss">
@import 'resources/sass/css-reset';
@import 'resources/sass/variables';
@import 'resources/sass/general-styling';
</style>

<template>
    <div class="floatingLabelInput">
        <input class="floatingLabelInput__inputField" :class="[isEmailValid()]" type="email" v-model="email" />
        <label class="floatingLabelInput__inputLabel">Please enter your email here</label>
    </div>
</template>



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
    },
  }
});
</script>
