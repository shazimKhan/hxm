<template>
  <div class="create-form">
    <a-card>
      <a-row>
        <a-col :span="14" />
        <a-col :span="10">
          <a-form-model
            ref="createForm"
            :hide-required-mark="true"
            :model="createForm"
            label-align="left"
          >
            <a-row :gutter="16">
              <a-col :xs="24" :sm="24" :md="24" :lg="24" :xl="24">
                <a-form-model-item
                  :label="'Time Type'"
                  prop="time_type"
                  has-feedback
                  :colon="false"
                  :wrapper-col="{
                    xl: 24,
                    lg: 14,
                    md: 14,
                    sm: 24,
                    xs: 24,
                  }"
                  :label-col="{
                    xl: 24,
                    lg: 10,
                    md: 8,
                    sm: 24,
                    xs: 24,
                  }"
                >
                  <a-input v-model="createForm.time_type" />
                </a-form-model-item>
              </a-col>
            </a-row>
            <a-row :gutter="16">
              <a-col :xs="24" :sm="24" :md="24" :lg="24" :xl="24">
                <a-form-model-item
                  :label="'Avaliable Balance'"
                  prop="balance"
                  has-feedback
                  :colon="false"
                  :wrapper-col="{
                    xl: 24,
                    lg: 14,
                    md: 14,
                    sm: 24,
                    xs: 24,
                  }"
                  :label-col="{
                    xl: 24,
                    lg: 10,
                    md: 8,
                    sm: 24,
                    xs: 24,
                  }"
                >
                  <a-input v-model="createForm.balance" />
                </a-form-model-item>
              </a-col>
            </a-row>
            <a-row :gutter="16">
              <a-col :xs="24" :sm="12" :md="12" :lg="12" :xl="12">
                <a-form-model-item
                  :label="'Start Date'"
                  prop="start_date"
                  has-feedback
                  :colon="false"
                  :wrapper-col="{
                    xl: 24,
                    lg: 24,
                    md: 24,
                    sm: 24,
                    xs: 24,
                  }"
                  :label-col="{
                    xl: 24,
                    lg: 24,
                    md: 24,
                    sm: 24,
                    xs: 24,
                  }"
                >
                  <a-date-picker v-model="createForm.start_date" style="width: 100%" />
                </a-form-model-item>
              </a-col>
              <a-col :xs="24" :sm="12" :md="12" :lg="12" :xl="12">
                <a-form-model-item
                  :label="'End Date'"
                  prop="end_date"
                  has-feedback
                  :colon="false"
                  :wrapper-col="{
                    xl: 24,
                    lg: 24,
                    md: 24,
                    sm: 24,
                    xs: 24,
                  }"
                  :label-col="{
                    xl: 24,
                    lg: 24,
                    md: 24,
                    sm: 24,
                    xs: 24,
                  }"
                >
                  <a-date-picker v-model="createForm.end_date" style="width: 100%" />
                </a-form-model-item>
              </a-col>
            </a-row>
            <a-row :gutter="16">
              <a-col :xs="24" :sm="12" :md="12" :lg="12" :xl="12">
                <a-form-model-item
                  :label="'Requesting'"
                  prop="requesting"
                  has-feedback
                  :colon="false"
                  :wrapper-col="{
                    xl: 24,
                    lg: 24,
                    md: 24,
                    sm: 24,
                    xs: 24,
                  }"
                  :label-col="{
                    xl: 24,
                    lg: 24,
                    md: 24,
                    sm: 24,
                    xs: 24,
                  }"
                >
                  <a-select v-model="createForm.requesting" default-value="jack" style="width: 100%">
                    <a-select-option value="jack">
                      1 day
                    </a-select-option>
                    <a-select-option value="lucy">
                      Lucy
                    </a-select-option>
                    <a-select-option value="Yiminghe">
                      yiminghe
                    </a-select-option>
                  </a-select>
                </a-form-model-item>
              </a-col>
              <a-col :xs="24" :sm="12" :md="12" :lg="12" :xl="12">
                <a-form-model-item
                  :label="'Returning To Work On'"
                  prop="retruning"
                  has-feedback
                  :colon="false"
                  :wrapper-col="{
                    xl: 24,
                    lg: 24,
                    md: 24,
                    sm: 24,
                    xs: 24,
                  }"
                  :label-col="{
                    xl: 24,
                    lg: 24,
                    md: 24,
                    sm: 24,
                    xs: 24,
                  }"
                >
                  <a-input v-model="createForm.retruning" />
                </a-form-model-item>
              </a-col>
            </a-row>
            <a-row :gutter="16" class="px-2">
              <p>Team Absences</p>
              <a href="#">No Team Members Absent</a>
            </a-row>
            <a-row :gutter="16" class="mt-2">
              <a-col :xs="24" :sm="24" :md="24" :lg="24" :xl="24">
                <a-form-model-item
                  :label="'Comment'"
                  prop="comment"
                  has-feedback
                  :colon="false"
                  :wrapper-col="{
                    xl: 24,
                    lg: 14,
                    md: 14,
                    sm: 24,
                    xs: 24,
                  }"
                  :label-col="{
                    xl: 24,
                    lg: 10,
                    md: 8,
                    sm: 24,
                    xs: 24,
                  }"
                >
                  <a-textarea v-model="createForm.comment"
                              :rows="4"
                  />
                </a-form-model-item>
              </a-col>
            </a-row>
            <a-row>
              <a-col :xs="10" :sm="12" :md="4" :lg="24" :xl="24">
                <div class="Reset_btn mt-3">
                  <a-button type="primary" @click="handleSave">
                    Submit
                  </a-button>
                  <a-button class=" mt-2" @click="handleCancel">
                    Cancel
                  </a-button>
                </div>
              </a-col>
            </a-row>
          </a-form-model>
        </a-col>
      </a-row>
    </a-card>
  </div>
</template>

<script>
export default {
  data () {
    return {
      loading: false,
      createForm: {
        time_type: '',
        balance: '0 days',
        start_date: 'May 4, 2021',
        end_date: 'May 4, 2021',
        requesting: '1 day',
        retruning: 'May 5, 2021',
        comment: ''
      }
    }
  },
  methods: {
    async handleSave () {
      this.loading = true
      await this.createForm()
      this.loading = false
    },

    handleCancel (e) {
      this.$refs.createForm.resetFields()
    }
  }
}
</script>

<style lang="scss">
.ant-form-item {
    margin-bottom: 8px;
}
</style>
