<template>
 <div class="zone">

  <div id="dropZ">
    <div>Drag and drop your file here</div>                    
    <span>OR</span>
    <div class="selectFile">       
      <label for="file">Select file</label>                   
      <input type="file" name="files[]" id="file">
    </div>
    <p>File size limit : 10 MB</p>
  </div>

</div>
</template>
<style scoped>
.inputfile + label {
    font-size: 1.25em;
    font-weight: 700;
    color: white;
    background-color: black;
    display: inline-block;
}

.inputfile:focus + label,
.inputfile + label:hover {
    background-color: red;
}
</style>
