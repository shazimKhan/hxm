<template>

 <div class='a'>
   <a-card class="title"> <h4>Generate Reports</h4> </a-card>
    <a-button class ="b">    
        <nuxt-link to="/tabular-reports"> Tabular Reports</nuxt-link>
    </a-button>
    <a-button class ="c">
        <nuxt-link to="/reporting"> Graphical Reports</nuxt-link>
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
  color:rgb(0, 153, 255) ;
}
.b
{
   height: 90px;
   width: 30%;
   margin: 70px;
   background-color: #346596 !important ;
}
.c
{
  height: 90px;
  width: 30%;
  background-color:#346596 !important  ;
}
</style>