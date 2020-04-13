<template>
    <div class='header-container'>
        <div id='top-left'>
             <h3> TWEETER </h3>
        </div>

        <div >
            
            <button id="btn1" @click="gohome" href="/Home" class="btn btn-primary">Home</button>
            <button id="btn2" @click="goLogin"  href="/Login" class="btn btn-primary">Login</button>
            
            
        </div>
        

    </div>

</template>

<script>
export default {
    name: 'MSHeader',

    data: function() {
        return {
            isLoggedin: true,
            
        }
    },

    methods: {
        gohome: function(){
            let ajax = new XMLHttpRequest;
            let compData = this;
             ajax.onreadystatechange = function(){
                 if(ajax.status == 200 && ajax.readyState == 4){
                     let jsonData = JSON.parse(this.isLoggedin);
                     // console.log(this.isLoggedin);
                     compData.gohome = JSON.parse(jsonData);
                    // console.log(compData.gohome );
                 }
             };
             ajax.open("GET", "go-home", true);
             ajax.send();
        },

   
    }

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

    #btn1 {
        margin-left: 70vw;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   
    
    }

    

   

</style>
