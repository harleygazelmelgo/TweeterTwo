<template>
    <div class='header-container'>
        <div id='top-left'>
             <h3> TWEETER </h3>
        </div>

        <div >
                       
            <a id="btn" href="/login" class="btn btn-primary">Login</a>
                        
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
        background-color: #81C14B;

    }
    h3 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 2rem;
        color: #246EB9;
        text-align: left;
        margin-left: 10px;

    }

    #btn {
        margin-left: 90vw;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   
    
    }

       

</style>
