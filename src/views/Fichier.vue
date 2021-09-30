<template>
  <div class="page">
    <img src="../assets/wecheck.png" width="60" height=auto>
    <h1>WeCheck</h1>
    <div class="zone">
      <transition name="fade" mode="out-in">
        <div v-if="sent">
          <p>File send</p>
        </div>
        <label v-text="res"></label>
      </transition>
      <form v-on:submit="onSubmit">
        <label>
          <input type="email" v-model="form.email" placeholder="Addresse Email" required>
        </label>
        <div id="dropZ">
          <div>Drag and drop your file here</div>
          <span>OR</span>
          <div class="selectFile">
            <label for="file">Select file</label>
            <input type="file" id="file" ref="myFiles" v-on:change="onFileChange" multiple>
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
      res: '',
      form: {
        email: "",
        file: []
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
      this.file = this.$refs.myFiles.files;
      this.res = "File Add"
    }
  }
};
</script>


<style>
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