<template>
  <div>
    <div id="app">
      
    </div>

    <nav style="display:flex; justify-content: right; align-items: center;">
      <div @click="toggleMenu" class="burger-menu">
        <span>S'inscrire</span>
        <span>Commandes</span>
        <span>Mon compte</span>
        <span></span>   

       
  

      </div>
      <ul :class="{'navbar-list': true, 'is-active': menuActive}" style="display:flex;">
        <li class="navbar-item"><router-link to="/">Accueil</router-link></li>
        <li class="navbar-item"><router-link to="/meubles">Catalogue de meubles</router-link></li>
        <li class="navbar-item"><router-link to="/RegistrationForm">Inscription</router-link></li>
        
        <li class="navbar-item"><router-link to="/MeContacter">Contacts</router-link></li>
      </ul>
    </nav>
    
    <RouterView />
  </div>

  

</template>

<script>
export default {
  name: 'App',
  data() {
    return {
      // Vos données ici
    }
  }
}


 

</script>

<style>
.burger-menu {
  cursor: pointer;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  height: 30px;
  width: 40px;
}

.burger-menu span {
  display: block;
  height: 4px;
  width: 100%;
  background-color: black;
}

.navbar-list {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

.navbar-list.is-active {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.navbar-item {
  padding: 8px;
  text-align: center;
}

@media (max-width: 768px) {
  .navbar-list {
    display: none;
  }
  .navbar-list.is-active {
    display: flex;
  }
}
</style>