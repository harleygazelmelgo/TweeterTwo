<template>
    <div class="header-container">
        <div id="top-left">
        <!-- <img src="../images/logo.png" style="width:50px; height:50px; float:left" alt="tweet-logo"><img> -->
        <h3> TWEETER </h3>

        </div>

    </div>

</template>

<script>
export default {
    name: 'MSHeader',
}
</script>

<style scoped>

    .header-container {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        background-color: #003F91;

    }
    h3 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 2rem;
        color: yellow;
        text-align: left;
        margin-left: 10px;

    }

</style>
