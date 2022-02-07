<template>

<div class="ab" >
  <div>
    <a-card class="title">
        <h4>Generate Reports</h4>
    </a-card>
  </div>
    <a-card class="aa" title="Tables Names">
      <a-button type="link" :size="size">
      Employee Info-At Hire
      </a-button><br>
     <a-button type="link" :size="size">
      Personal Info
      </a-button><br>
     <a-button type="link" :size="size">
     Payment Information
     </a-button><br>
       <a-button type="link" :size="size">
      Biographical Info
    </a-button><br>
   <a-button type="link" :size="size">
      Email Info
    </a-button><br>
     </a-card>
    <!-- <button class="btn">    
    <a-button> > </a-button> <br>
    <a-button>
    >>
    <br>
    </a-button><br>
    <a-button>    
    &lt;
    <br>
    </a-button><br>
    <a-button>
    &lt; &lt;
        <br>
    </a-button> 
     </button>
     <a-card class="bb" title="Selected ">
      
    </a-card>
    <a-button class="cc" type="primary">
      <nuxt-link to="/tabular-selected"> Next</nuxt-link>
    </a-button> -->
</div> 
</template>
<script>
export default {
    data() {
      return {
        size: 'large',
      };
    }
  };
</script>

<style>
.ab{
margin: 60px;
font-size: 25px;
width: 75%;
padding: 40px;
}

.btn{
    display: inline-grid;
    float: left;
    height: 220px;
    padding: 35px;
    margin: 75px;
}
.aa{
     height: 350px;
    width: 28%;
    float: left;
}
.bb{
     height: 350px;
    width: 35%;
    float: right;
}
.cc{
margin: 40px;
}
</style>
