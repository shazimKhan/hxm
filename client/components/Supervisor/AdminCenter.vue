<template>
    <div class="supcenter">
      <a-card class="c">
      <h3>Supervisor Admin Center</h3>
    </a-card>
   <template>
  <div style="padding: 20px;">
    <a-row :gutter="16">
      <a-col :span="10">
        <a-card title="Admin Alerts" :bordered="false">
          <a-row>
            <a-col :span="4">
              <h2><a-icon type="profile" /></h2>
            </a-col>
            <a-col :span="16">
              <h4>Workflow Request</h4>
              <a href="">See more</a>
            </a-col>
            <a-col :span="3">
              <h2 style="color: red">7</h2>
            </a-col>
          </a-row>
          <a-row>
            <a-col :span="4">
              <h2><a-icon type="team" /></h2>
            </a-col>
            <a-col :span="16">
              <h4>PEOPLE ISSUSE</h4>
              <a href="">See more</a>
            </a-col>
            <a-col :span="3">
              <h2 style="color: red">10</h2>
            </a-col>
          </a-row>
        </a-card>
      </a-col>
      <a-col :span="5">
        <a-card title="Intelligent Service Center(ISC)" :bordered="false">
          <h1 style="color: green"><a-icon type="bar-chart" /></h1>
          <br><h4>No Event Raised</h4><br><h6>Past 7 Days</h6>
        </a-card>
      </a-col>
      <a-col :span="4">
        <a-card title="Page Views" :bordered="false">
          <h6>3--------------2</h6><br><h6>7--------------4</h6><br><h6>2--------------1</h6><br><h6>4--------------4</h6>
          <a href="">See More </a>
        </a-card>
      </a-col>
    </a-row>
  </div>

  <div style="padding: 20px;">
    <a-row :gutter="16">
      <a-col :span="6">
        <a-card title="Reports" :bordered="false">
          <p>Select a report to generate</p>
          <a-col :span="8">
                  <a-select
                    default-value="no"
                    style="width: 150%"
                    @change="handleChange"
                  >
                    <a-icon slot="suffixIcon" type="down" />
                    <a-select-option value="no">
                      No Selection
                    </a-select-option>
                  </a-select>
                </a-col>
        </a-card>
      </a-col>
      <a-col :span="8">
        <a-card title="Data Volume" :bordered="false">
          <h3>Data Size:5.92 GB</h3>
          <br>
          <h3>Attachment Size: 1.22 GB</h3>
        </a-card>
      </a-col>
      <a-col :span="8">
        <a-card title="Latest Check tool Result" :bordered="false">
          <h1 style="color: Blue"><a-icon type="loading" /></h1>
          <br><h3>Loading...</h3>
        </a-card>
      </a-col>
    </a-row>
  </div>
</template>

    </div>
</template>

<script>

</script>
<style>
.c {
  padding: 25px;
  background-color: rgb(206, 218, 240);
}
</style>