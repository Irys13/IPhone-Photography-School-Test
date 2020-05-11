<template>
<div>
    <button @click="openModal" class="button button--purplePink">Send Me The Tips</button>

    <div v-if='isOpen' class="Modal__window">
        <div class="Modal__content">
            <button @click="openModal">x</button>
            <p>Modal works!</p>

        </div>
    </div>
</div>
</template>

<style>
.Modal__window {
    position: absolute;
    background: rgb(38, 38, 38, 0.8);
    display: flex;
    height: 100%;
    width: 100%;
    align-items: center;
    justify-content: center;
    top: 0;
    left: 0;
    bottom: 0;
    overflow: hidden;
    opacity: 1;
}

.Modal__content {
    background: #ffffff;
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
                } else {
                    this.isOpen = false;
                    body.style.overflow = "auto";

                }
            }
        },
});
</script>
