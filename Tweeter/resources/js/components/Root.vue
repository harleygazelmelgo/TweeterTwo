<template>
  <div id="app">
     <MSHeader />
     <MSBody />
     <MSFooter />
  </div>
</template>

<script>
import MSHeader from '../components/MSHeader.vue'
import MSBody from '../components/MSBody.vue'
import MSFooter from '../components/MSFooter.vue'
export default {
  name: 'Root',
  components: {
    MSHeader,
    MSBody,
    MSFooter
  },
  mounted() {
      console.log('');
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
