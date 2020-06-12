<template>
    <div class="SideBar" id="app-modal">
        <modal></modal>
    </div>
</template>

<style lang="scss">
@import 'resources/sass/css-reset';
@import 'resources/sass/variables';
@import 'resources/sass/general-styling';

    .SideBar {
        background: #F5F5F5;
        display: block;
        height: 426px;
        margin-left: 17px;
        margin-right: 18px;
        margin-top: 33px;
        padding: 34px 29px;
        width: auto;

        @media screen and (min-width: $xs-screen) {
            margin: 0 auto;
            margin-top: 33px;
            width: 282px;
        }

        @media screen and (min-width: $sm-screen) {
            margin-top: 68px;
            padding: 50px 24px 50px 26px;
        }

        @media screen and (min-width: $md-screen) {
            display: inline-block;
            height: 640px;
            vertical-align: top;
            width: 200px;
        }

        @media screen and (min-width: $lg-screen) {
            width: 220px;
        }
    }
</style>

<script>

const modal = Vue.component('modal', require('./Modal.vue').default);

</script>
