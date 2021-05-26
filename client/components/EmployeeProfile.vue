<template>
  <div class="profile">
     <!-- <div class="row">
      <div class="col-6">
        <h3>Employee Profile</h3>
      </div>
    </div>  -->
    <template>
      <div class="info">
          <a-card class="info">
            <a-row class="py-4">
              <a-col :span="2">
                <!-- <a-avatar :size="100" icon="user" />  -->
                <a-avatar :size="100" style="backgroundColor:#87d068" icon="user" />
              </a-col>
              <a-col :span="5">
                <strong>Khubaib Ahmad</strong>
                <br>
                (Admin)
                <br>
                Local Time: Tuesday, 06:04:03 
                <br>
                Bussiness Phone: <strong>+923485305011</strong>
                <br>
                khubaibahmadmughal@gmail.com
              </a-col>
            </a-row>
          </a-card>
        </div>
    </template> 

    <a-tabs default-active-key="0" @change="callback">
      <a-tab-pane key="1" tab="ME"> 
      </a-tab-pane>
      <a-tab-pane key="2" tab="EMPLOYMENT" force-render>
       
      </a-tab-pane>
      <a-tab-pane key="3" tab="COMPENSATION">
      
      </a-tab-pane>
      <a-tab-pane key="4" tab="TIME"> 
      </a-tab-pane>
      <a-tab-pane key="5" tab="BENEFITS">  </a-tab-pane>
      <a-tab-pane key="6" tab="PROXY">
      </a-tab-pane>
    </a-tabs>
<div>
    
    <a-card title="Personal Information" :bordered="true" >
      <p>Card content</p>
      <p>Card content</p>
      <p>Card content</p>
    </a-card>
  <br>
    <a-card title="Employment" :bordered="false" >
      <p>Card content</p>
      <p>Card content</p>
      <p>Card content</p>
    </a-card>
<br>
    <a-card title="Compensation" :bordered="false" >
      <p>Card content</p>
      <p>Card content</p>
      <p>Card content</p>
    </a-card>
  <br>
<a-card title="Time Sheet" size="small">
            <p>No time recording profile is assigned to job information</p>
            <a href="#">Go to Time Sheet </a>
            <a-row class="py-4">
              <a-col :span="5">
                <h5>Time Off</h5>
              </a-col>
              <a-col :span="8">
                <h5>Upcomming Time Off</h5>
                <p>There are no upcoming absences</p>
                <nuxt-link to="/time-sheet">Go to Time Off</nuxt-link>
              </a-col>
              <a-col :span="10">
                <p>Time Off Balances</p>
                <p><strong> 0 days </strong> Vacation</p>
                <p><strong> 0 days </strong> Sickness</p>
                <p><strong> 00:00 hours </strong> Comp Time</p>
              </a-col>
            </a-row>
          </a-card>
  <br>
    <a-card title="Benefits" :bordered="false" >
      <p>Card content</p>
      <p>Card content</p>
      <p>Card content</p>
    </a-card>
  <br> 
  <a-card title="Proxy" size="small">
          <a-row class="py-4">
           <a-col :span="12">
                <nuxt-link to="/super-visor">Click here!</nuxt-link>
           </a-col>
              
          </a-row>
          </a-card> 
</div>

    <!-- <div class="employee">
      <h1>Hello World</h1>
        <h2> Hello World</h2>
        <h2> Hello World</h2>
        <h2> Hello World</h2>
      <h1>Hello World</h1>
      <h1>Hello World</h1>
      <h2> Hello World</h2><h2> Hello World</h2><h2> Hello World</h2><h2> Hello World</h2>
      <h1>Hello World</h1>
      <h1>Hello World</h1>
      <h1>Hello World</h1>
    </div> -->
  </div>
</template>
<script>

export default {
  methods: {
    callback(key) {
      console.log(key);
    },
  },
};
</script>
<style lang="scss">
.ant-tabs-bar {
  background: white;
}
.info
{
    background-image: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img(11).jpg");
    height: 50%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
</style>
