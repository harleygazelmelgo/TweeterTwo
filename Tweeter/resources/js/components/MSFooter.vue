<template>
  <div class="footer-container">
        <h1> Copyright 2020 Tweeter, Inc. </h1>
  </div>


</template>

<script>
export default {
    name: 'MSFooter',

}
</script>

<style scoped>
    .footer-container {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #81C14B;
        text-align: center;

    }
    h1 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 1rem;
        text-align: center;
        color: #246EB9;
        margin-bottom: 20px;
    }

</style>
