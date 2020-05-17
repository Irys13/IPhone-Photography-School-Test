<template>
<div>
    <button @click="openModal" class="button button--purplePink">Send Me The Tips</button>

    <div v-if='isOpen' class="Modal__window">
        <div class="Modal__content">

            <div class="Modal__header">
                <div class="Modal__steps">
                    <p class="Modal__stepText">Step 1 of 2</p>
                    <div class="Modal__stepProgress stepProgress--colour"></div><div
                    class="Modal__stepProgress stepProgress--gray"></div>
                </div>

                <button @click="openModal" class="Modal__closeButton">
                    <div class="closeButton--x closeButton--xLeft"></div>
                    <div class="closeButton--x closeButton--xRight"></div>
                </button>
            </div>

            <div class="Modal__body">
                <h2 class="Modal__title">Enter Your Email To Get <span class="Modal__title--green">FREE</span><br>
                iPhone Photography Email Tips:</h2>
                <emailValidation></emailValidation>
                <button class="button button--purplePink">Send Me The Tips »</button>
            </div>

        </div>
    </div>
</div>
</template>

<style lang="scss">
@import 'resources/sass/variables';

.Modal__window {
    align-items: center;
    background: rgb(38, 38, 38, 0.8);
    display: flex;
    height: 100%;
    justify-content: center;
    position: absolute;
    bottom: 0;
    left: 0;
    top: 0;
    opacity: 1;
    width: 100%;
    z-index: 2;
}

.Modal__content {
    background: $background-primary;
    padding: 18px 65px 38px 65px;
    width: 440px;
}

.Modal__header {
    position: relative;
}

.Modal__stepText {
    color: #848484;
    display: block;
    font-size: 14px;
    font-weight: 300;
    line-height: 17px;
    text-align: center;
}

.Modal__stepProgress {
    display: inline-block;
    height: 1px;
    width: 50%;
}

.stepProgress--colour {
    background: linear-gradient(90deg, $gradient-background 0.83%, $gradient-background-secondary 100%);
}

.stepProgress--gray {
    background-color: $gray-light;
}

.Modal__closeButton {
    background: none;
    border: 0;
    height: 45px;
    position: absolute;
    top: -18px;
    right: -65px;
    width: 45px;
}

.Modal__title {
    color: $gray-dark;
    font-size: 23px;
    font-weight: bold;
    text-align: center;
    line-height: 28px;
    margin-bottom: 21px;
    margin-top: 23px;
}

.Modal__title--green {
    color: $green;
}

.Modal__email {
    margin-bottom: 21px;
}

.closeButton--x {
    background-color: $gray-dark;
    height: 3px;
    width: 20px;
}

.closeButton--xLeft {
    transform: rotate(45deg);
}

.closeButton--xRight {
    margin-top: -3px;
    transform: rotate(135deg);
}
</style>

<script>
    export default({
        data: function() {
            return {
                isOpen: false
            }
        },
        methods: {
            openModal() {
            const body = document.body;
                    if(this.isOpen == false) {
                        this.isOpen = true;
                        body.style.overflow = "hidden";
                        body.style.padding = "0 17px 0 0";
                    } else {
                        this.isOpen = false;
                        body.style.overflow = "auto";
                        body.style.padding = "0";
                    }
                }
            },
    });

    const emailValidation = Vue.component('emailValidation', require('./EmailValidation.vue').default);

</script>
