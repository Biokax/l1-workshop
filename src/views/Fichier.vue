<template>
<div class="page">
    <img src="../assets/wecheck.png" width="60" height=auto>
    <h1>WeCheck</h1>
 <div class="zone">

  <div id="dropZ">
    <div>Glissez votre fichier</div>                    
    <span>ou</span>
    <div class="selectFile">       
      <label for="file">Sélectionner un fichier</label>
      <form>               
        <input type="file" name="files[]" id="file" maxlength="10000">
        <p>Limite de taille de fichier : 10 MB</p>
        <input type="submit" value="Vérifier" id="submit">
      </form>
    </div>
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

#submit {
  display: block;
  margin-top: 10px;
  margin-left: auto;
  margin-right: auto;
  padding: 10px;
  border-radius: 12px;
}

#file:hover {
  color:rgb(136, 136, 136)
}

#submit:hover {
  color:rgb(136, 136, 136)
}
</style>
