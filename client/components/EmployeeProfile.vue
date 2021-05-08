<template>
  <div>
    <!-- <div class="row">
      <div class="col-6">
        <h3>Employee Profile</h3>
      </div>
    </div>
    <template>
      <a-descriptions title="User Info">
        <a-descriptions-item label="UserName">
          Zhou Maomao
        </a-descriptions-item>
        <a-descriptions-item label="Telephone">
          1810000000
        </a-descriptions-item>
        <a-descriptions-item label="Live">
          Hangzhou, Zhejiang
        </a-descriptions-item>
        <a-descriptions-item label="Remark">
          empty
        </a-descriptions-item>
        <a-descriptions-item label="Address">
          No. 18, Wantang Road, Xihu District, Hangzhou, Zhejiang, China
        </a-descriptions-item>
      </a-descriptions>
    </template> -->
    <a-tabs default-active-key="4" @change="callback">
      <a-tab-pane key="1" tab="ME">
        ME
      </a-tab-pane>
      <a-tab-pane key="2" tab="EMPLOYMENT" force-render>
        Content of Tab Pane 2
      </a-tab-pane>
      <a-tab-pane key="3" tab="COMPENSATION">
        Content of Tab Pane 3
      </a-tab-pane>
      <a-tab-pane key="4" tab="PAYROLL">
        <div class="payroll">
          <a-card title="Time Sheet" size="small">
            <p>No time recording profile is assigned to job information</p>
            <a href="#">Go to Time Sheet </a>
            <a-row class="py-4">
              <a-col :span="12">
                <h5>Upcomming Time Off</h5>
                <p>There are no upcoming absences</p>
                <a href="#">Go to Time Off</a>
              </a-col>
              <a-col :span="12">
                <p>Time Off Balances</p>
                <p><strong> 0 days </strong>  vacation</p>
                <p><strong> 0 days </strong>  sickness</p>
                <p><strong> 00:00 hours </strong>  Comp Time</p>
              </a-col>
            </a-row>
          </a-card>

          // form
          <a-card>
            <a-row>
              <a-col :span="12">
                <a-range-picker @change="onChange" open="true">
                </a-range-picker>
              </a-col>
            </a-row>
          </a-card>
        </div>
      </a-tab-pane>
      <a-tab-pane key="5" tab="TIME">
        Content of Tab Pane 3
      </a-tab-pane>
      <a-tab-pane key="5" tab="bENEFITS">
        Content of Tab Pane 3
      </a-tab-pane>
      <a-tab-pane key="5" tab="TALENT PROFILE">
        Content of Tab Pane 3
      </a-tab-pane>
    </a-tabs>
  </div>
</template>
<script>
export default {
  methods: {
    onChange (date, dateString) {
      console.log(date, dateString)
    },
    callback (key) {
      console.log(key)
    }
  }
}
</script>
<style lang="scss">
.ant-tabs-bar {
  background: white;
}
</style>
