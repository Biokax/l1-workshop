<template>
  <div class="home">
    <img src="../assets/wecheck.png" width="60" height=auto>
    <HelloWorld msg="Bienvenue sur WeCheck"/>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'Home',
  components: {
    HelloWorld
  }
}
</script>
