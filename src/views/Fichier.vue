<template>
<div class="page">
    <img src="../assets/wecheck.png" width="60" height=auto>
    <h1>WeCheck</h1>
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
</div>
</template>
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
