<template>
    <div class="container py-4">
        <div class="row d-block d-sm-flex">
            <div class="d-sm-none d-block">
                <img class="w-100"
                    src="https://static.wixstatic.com/media/4a5235_9b64ac74e62b4cfe9f5a9ae906b7134b~mv2.png/v1/fill/w_640,h_604,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/4a5235_9b64ac74e62b4cfe9f5a9ae906b7134b~mv2.png">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="content">
                    <nuxt-link to="/" class="fs-6 text-primary">
                        Outstanding Post of Week
                        <font-awesome-icon icon="fa-solid fa-arrow-right"></font-awesome-icon>
                    </nuxt-link>
                    <h1 class="fs-2">Lorem Ipsum</h1>
                    <p class="fs-5">
                        What is Lorem Ipsum?
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <div class="col-md-6 d-none d-sm-block">
                <img class="w-100"
                    src="https://static.wixstatic.com/media/4a5235_9b64ac74e62b4cfe9f5a9ae906b7134b~mv2.png/v1/fill/w_640,h_604,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/4a5235_9b64ac74e62b4cfe9f5a9ae906b7134b~mv2.png">
            </div>
        </div>
    </div>
    <hr class="container"/>
</template>
<script lang="ts" setup>
</script>
<style lang="scss">
hr {
    display: block;
    height: 2px;
    border: 1px;
    border-top: 2px solid #000000;
    margin: 1em 0;
    padding: 0;
}
</style>