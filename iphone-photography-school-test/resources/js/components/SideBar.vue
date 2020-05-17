<template>
    <div class="SideBar" id="app-modal">
        <modal></modal>
    </div>
</template>

<style lang="scss">
@import 'resources/sass/variables';

    .SideBar {
        background: #F5F5F5;
        display: inline-block;
        height: 640px;
        padding: 50px 24px 50px 26px ;
        vertical-align: top;
        width: 220px;
    }
</style>

<script>

const modal = Vue.component('modal', require('./Modal.vue').default);

</script>
