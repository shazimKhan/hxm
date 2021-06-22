<template>
<div class="suphome">
  <div>
    <h3>SuperVisor Home Page</h3>
    <a-divider></a-divider>
    <div class="row">
      
    </div>

    <div class="row">
      <div class="col-6">
        <h3>My Info</h3>
        <div style="padding: 20px;">
    <a-row :gutter="15">
      <a-col :span="15">
        <a-card hoverable style="width: 400px">
            <img
              slot="cover"
              alt="example"
              src="https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png"
            />
            <a-card-meta title="My Profile">
            </a-card-meta>
            <a-progress
              :stroke-color="{
                '0%': '#108ee9',
                '100%': '#87d068',
              }"
              :percent="100"
            />
        </a-card>
      </a-col>
      <a-col :span="10">
        <a-card title="Team Absense" :bordered="false">
          <a-row>
            <a-col :span="8">
              <p>Go to team</p>
            </a-col>
            <a-col :span="6">
              <h1><nuxt-link to="/leave"><a-icon type="team" /></nuxt-link></h1>
            </a-col>
          
          </a-row>
        </a-card>
      </a-col>
      <a-col :span="8">
        <a-card title="Pending Request" :bordered="false">
          <a-row>
            <a-col :span="15">
              <h2><a-icon type="message" /></h2>
            </a-col>
            <a-col :span="3">
              <h2>0</h2>
              <p>Request</p>
            </a-col>
          </a-row>
        </a-card>
      </a-col>
      
      <a-col :span="15">
        <a-card title="Performance" :bordered="false">
          <div>
    <a-tooltip title="3 done / 3 in progress / 4 to do">
      <a-progress :percent="60" :success-percent="30" />
    </a-tooltip>
    <a-tooltip title="3 done / 3 in progress / 4 to do">
      <a-progress :percent="60" :success-percent="30" type="circle" />
    </a-tooltip>
    <a-tooltip title="3 done / 3 in progress / 4 to do">
      <a-progress :percent="60" :success-percent="30" type="dashboard" />
    </a-tooltip>
  </div>
        </a-card>
      </a-col>

    </a-row>
  </div>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <h3>My Speciality</h3>
        <div style="padding: 20px;">
    <a-row :gutter="15">
      <a-col :span="8">
        <a-card title="Admin Center" :bordered="false" >
          <h1><a-icon type="setting" theme="filled" /></h1>
          <a-divider></a-divider>
          <h6><nuxt-link to="/supcenter">Admin Center</nuxt-link></h6>
        </a-card>
      </a-col>
      <a-col :span="8">
        <a-card title="Admin Favourite" :bordered="false">
          <h1><a-icon type="sync" spin /></h1>
        </a-card>
      </a-col>

    </a-row>
  </div>
      </div>
    </div>
  </div>
</div>
  
</template>
<script>


export default {
  components: {
  }
}
</script>
<style>
.theme {
    text-align: center;
    padding: 50px;
  }
body{
  color: black;
}
.card
{
  padding:10px;
  text-align: left;
}
.row
{
text-align: left;
}
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
    text-align: left;
}


</style>
