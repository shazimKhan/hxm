<template>

 <div class='a'>
    <a-button class ="b">    
        <nuxt-link to="/tabular-reports"> Tabular Reports</nuxt-link>
    </a-button>
    <a-button class ="c">
        <nuxt-link to="/graphical-reports"> Graphical Reports</nuxt-link>
    </a-button>
  </div>
</template>

<script>
export default {

}
</script>

<style>
.a{
  margin: 60px;
  padding: 80px;
  width: 90%;
  color:aqua ;
}
.b
{
  height: 270px;
   width: 40%;
   margin: 70px;
   background-color: aqua ;
}
.c
{
  height: 270px;
  width: 40%;
   background-color: aqua ;
}
</style>