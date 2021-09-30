<template>
<div class="page">
    <img src="../assets/wecheck.png" width="60" height=auto>
    <h1>WeCheck</h1>
 <div class="zone">
   <transition name="fade" mode="out-in">
     <div v-if="sent">
       <p>Envoie du fichier en cours...</p>
     </div>
     <label v-text="res"></label>
   </transition>
   <form v-on:submit="onSubmit">
     <label>
       <input type="email" v-model="form.email" placeholder="Addresse Email">
     </label>
     <div id="dropZ">
       <div>Drag and drop your file here</div>
       <span>OR</span>
       <div class="selectFile">
         <label for="file">Select file</label>
         <input type="file" name="files[]" id="file" v-on:change="onFileChange">
       </div>
       <p>File size limit : 10 MB</p>
       <button data-text="submit" type="submit">Submit</button>
     </div>
   </form>
 </div>
</div>
</template>

<script>
import axios from "axios";

const querystring = require("querystring");

export default {
  data() {
    return {
      sent: false,
      res: 'rien',
      form: {
        email: "",
        file: ""
      }
    };
  },
  methods: {
    onSubmit(e) {
      e.preventDefault();
      axios.post("EnvoieMail.php", querystring.stringify(this.form))
          .then(res => {
            this.sent = true
            this.res = res
          })
          .catch(error => this.res = error)
    },
    onFileChange() {
      this.file = this.$refs.file.files[0];
      this.res = "File Add"
    }
  }
};
</script>


<style>
body {
  background: url("../assets/background.png") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  
}

.page {
  color: white;
}
.zone { 
    border: dashed #666369 4px;
    border-radius: 20px;
    margin-left: auto;
    margin-right: auto;
    width: 30%;
    padding: 5px;
}

.dropZ {
  background-color:white;
  opacity: 0.9;
}
</style>
