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
              <a-col :span="3">
                <!-- <a-avatar :size="100" icon="user" />  -->
                <a-avatar :size="160" style="backgroundColor:#93E5E6 " icon="user" />
              </a-col>

              <a-col :span="5">
                <h3>Khubaib Ahmad</h3>
                <h6>
                <br>
                (Admin)
                <br>
                Local Time: Tuesday, 06:04:03 
                <br>
                Bussiness Phone: <strong>+923485305011</strong>
                <br>
                khubaibahmadmughal@gmail.com
                </h6>
                <br>
                <h3> <a href="https://www.facebook.com"> <a-icon type="facebook"  /></a> <a href="https://www.linkedin.com/signup"> <a-icon type="linkedin" /></a></h3>
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
      <a-tab-pane key="4" tab="TIME" >
        <!-- <a href="#" v-scroll-to="'#4'">
        </a> -->
      </a-tab-pane>
      <a-tab-pane key="5" tab="BENEFITS">  </a-tab-pane>
      <a-tab-pane key="6" tab="PROXY">
      </a-tab-pane>
    </a-tabs>
  <div>
    
    <a-card title="Personal Information" :bordered="true" id="1" >
      <p>Card content</p>
      <p>Card content</p>
      <p>Card content</p>
    </a-card>
  <br>
    <a-card title="Employment" :bordered="false" id="2">
      <p>Card content</p>
      <p>Card content</p>
      <p>Card content</p>
    </a-card>
  <br>
    <a-card title="Compensation" :bordered="false" id="3" >
      <p>Card content</p>
      <p>Card content</p>
      <p>Card content</p>
    </a-card>
  <br>
          <a-card title="Time Sheet" size="small" id="4">
            <a-row class="time-card">
              <a-col :span="6">
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
    <a-card title="Benefits" :bordered="false" id="5">
      <p>Card content</p>
      <p>Card content</p>
      <p>Card content</p>
    </a-card>
  <br> 
      <a-card title="Approval" size="small" id="6">
        <a-row class="py-4">
           <a-col :span="12">
                <nuxt-link to="/leave">Click here!</nuxt-link>
           </a-col>
        </a-row>
      </a-card> 

  </div>

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
