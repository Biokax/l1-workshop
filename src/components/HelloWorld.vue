<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <p>
      Application web permetant de vérifier la sûreté des mails,
      <br/> nottament par le scan de 
    
     <router-link to="/fichier">fichiers</router-link>
     ou bien de
      <router-link to="/Url">liens</router-link>
      </p>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
