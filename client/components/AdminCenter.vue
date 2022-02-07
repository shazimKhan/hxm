
<template>
<div class="theme">
    <!-- <ColorModePicker /> -->
    
  <div>
    <!-- <a-divider></a-divider> -->
    <div class="row">
      <div class="col-6">
        <a-card class="title"> <h4>To do</h4> </a-card>

        <div style="padding: 10px;">
    <a-row :gutter="10">
      <a-col :span="8">
        <a-card title="Review Performance" :bordered="false" >
          <a-row>
            <a-col :span="7">
              <h2 style="color: black"><a-icon type="dashboard" theme="filled" /></h2>
            </a-col>
            <a-col :span="3">
              <h2 style="color: red">7</h2>
              <p>Reviews</p>
            </a-col>
          </a-row>
        </a-card>
      </a-col>
      <a-col :span="8">
        <a-card title="Approval Request" :bordered="false">
          <a-row>
            <a-col :span="7">
              <h2 style="color: black"><a-icon type="folder-open" /></h2>
            </a-col>
            <a-col :span="3">
              <h2 style="color: red">3</h2>
              <p>Requests</p>
            </a-col>
          </a-row>
        </a-card>
      </a-col>

    </a-row>
  </div>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <a-card class="title"> <h4>My Info</h4> </a-card>
        <div style="padding: 20px;">
    <a-row :gutter="15">
      <a-col :span="8">
        <a-card hoverable style="width: 250px">
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
        <a-card title="Time Off" :bordered="false">
          <a-row>
            <a-col :span="10">
              <p>No time off planned</p>
            </a-col>
            <a-col :span="10">
              <nuxt-link to="/time-sheet">Go to Time Off</nuxt-link>
            </a-col>
          </a-row>
        </a-card>
      </a-col>
      <a-col :span="7">
        <a-card title="Pending Request" :bordered="false">
          <a-row>
            <a-col :span="15">
              <h2 style="color: black"><a-icon type="message" /></h2>
            </a-col>
            <a-col :span="3">
              <h2 style="color: red">0</h2>
              <p>Request</p>
            </a-col>
          </a-row>
        </a-card>
      </a-col>
      <a-col :span="7">
        <a-card title="Org Chart" :bordered="false">
          <a-row>
            <a-col :span="15">
              <h2 style="color: black"><a-icon type="pie-chart" /></h2>
            </a-col>
            <a-col :span="3">
              <h2 style="color: blue">1</h2>
              <p>Chart</p>
            </a-col>
          </a-row>
        </a-card>
      </a-col>

    </a-row>
  </div>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <a-card class="title"> <h4>My Speciality</h4> </a-card>
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
import ColorModePicker from '@/components/ColorModePicker'
import { VueDraggableCard } from "vue-draggable-card";
export default {
  components: {
    VueDraggableCard,
    ColorModePicker
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
h1,h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
    text-align: left;
}

</style>
