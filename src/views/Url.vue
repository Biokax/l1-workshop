<template>
  <div class page>
    <img src="../assets/wecheck.png" width="60" height="auto" />
    <div class="form__group field">
      <form>
        <input
          type="input"
          class="form__field"
          placeholder="Name"
          name="name"
          id="name"
          required
        />
        <input type="submit" value="Vérifier" id="submit" />
      </form>
      <label for="name" class="form__label">Saisir une URL</label>
    </div>
  </div>
</template>
<style scoped>
.form__group {
  position: relative;
  padding: 15px 0 0;
  margin-left: auto;
  margin-right: auto;
  margin-top: 10%;
  width: 50%;
}

.form__field {
  font-family: inherit;
  width: 100%;
  border: 0;
  border-bottom: 2px solid #9b9b9b;
  outline: 0;
  font-size: 1.3rem;
  color: #fff;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
}
.form__field::placeholder {
  color: transparent;
}
.form__field:placeholder-shown ~ .form__label {
  font-size: 1.3rem;
  cursor: text;
  top: 20px;
}

.form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: #9b9b9b;
}

.form__field:focus {
  padding-bottom: 6px;
  font-weight: 700;
  border-width: 3px;
  border-image: linear-gradient(to right, #11998e, #38ef7d);
  border-image-slice: 1;
}
.form__field:focus ~ .form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: #11998e;
  font-weight: 700;
}

/* reset input */
.form__field:required,
.form__field:invalid {
  box-shadow: none;
}

/* demo */
body {
  font-family: "Poppins", sans-serif;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  font-size: 1.5rem;
  background-color: #222222;
}

#submit {
  display: block;
  margin-top: 10px;
  margin-left: auto;
  margin-right: auto;
  padding: 10px;
  border-radius: 12px;
}

#submit:hover {
  color:rgb(136, 136, 136)
}
</style>