<template>
  <div class="super-visor">

    <a-card class="t">
      <h3>Team Absense Calender</h3>
    </a-card>
       <a-card>
         <a-row>
            <a-col :span="6">
              <h6>My Reporting Hirarchy</h6>
            </a-col>
            <a-col :span="5">
              <a-tabs default-active-key="0" @change="callback">
                <a-tab-pane key="1" tab="My Peers"> 
                   My Peers 
                   <a-card>
                   <a-avatar :size="40" icon="user" />  ABCD <br>
                   <a-avatar :size="40" icon="user" />  ABCD<br>
                   <a-avatar :size="40" icon="user" />  ABCD<br>
                   <a-avatar :size="40" icon="user" />  ABCD<br>
                   </a-card>
         
                   
                </a-tab-pane>
                <a-tab-pane key="2" tab="My Direct Reporties"> 
                   My Direct Reporties 
                </a-tab-pane>
              </a-tabs>  
            </a-col>
          
          
           <a-checkbox @change="onChange" value="absent"> Abesnt(0) </a-checkbox>
    
         </a-row> 

         <a-row>
           <a-col :span="6">
             <div>
                 <a-checkbox @change="onChange" value="check"> </a-checkbox>
                  <a-avatar :size="40" icon="user" />  ABCD
                 <!-- <a-avatar src="https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png" /> User 1 -->
            </div>
                  <br />
             <div>
               <a-checkbox @change="onChange" value="check"> </a-checkbox>
               <a-avatar :size="40" icon="user" />  XYZ
            </div>
           </a-col>
        </a-row>

      </a-card>

  </div>
</template>

<script>
export default {
  methods: {
    onChange(e) {
      console.log(`checked = ${e.target.checked}`);
    },
  },
};
</script>
<style lang="scss">
.t
{
  padding: 25px;
  background-color: rgb(209, 221, 243);
}
</style>

