<template>
  <div class="create-form">
    <a-card>
      <a-row>
        <a-col :span="7" />
        <a-col :span="10">
          <a-form-model
            ref="createForm"
            :hide-required-mark="true"
            :model="createForm"
            label-align="center"
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
                  <a-select
                    v-model="createForm.time_type"
                    default-value="default"
                    style="width: 100%"
                  >
                    <a-select-option value="sickness">
                      Sickness
                    </a-select-option>
                    <a-select-option value="casual">
                      Casual
                    </a-select-option>
                    <a-select-option value="religious">
                      Religious
                    </a-select-option>
                    <a-select-option value="maternity">
                      Maternity
                    </a-select-option>
                    <a-select-option value="paternity">
                      Paternity
                    </a-select-option>
                    <a-select-option value="annual">
                      Annual
                    </a-select-option>
                  </a-select>

                  <!-- <a-input v-model="createForm.time_type" /> -->
                </a-form-model-item>
              </a-col>
            </a-row>
            <a-row :gutter="16">
              <a-col :xs="24" :sm="24" :md="24" :lg="24" :xl="24">
                <a-form-model-item
                  :label="'Avaliable Balance'"
                  prop="balance"
                  disabled
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
                  <a-input v-model="createForm.available_balance"/>
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
                  <a-date-picker
                    v-model="createForm.start_date"
                    style="width: 100%"
                    format="YYYY-MM-DD"
                  />
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
                  <a-date-picker
                    v-model="createForm.end_date"
                    style="width: 100%"
                    :format="'YYYY-MM-DD'"
                  />
                </a-form-model-item>
              </a-col>
            </a-row>
            <!-- <a-row :gutter="16">
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
                  <a-select
                    v-model="createForm.requesting"
                    default-value="jack"
                    style="width: 100%"
                  >
                    <a-select-option value="jack"> 1 day </a-select-option>
                    <a-select-option value="lucy"> 1 week</a-select-option>

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
                <a-date-picker
                    v-model="createForm.retruning"
                    style="width: 100%"
                  />
                   <a-input v-model="createForm.retruning" />
                </a-form-model-item>
              </a-col>
            </a-row> -->
            <!-- <a-row :gutter="16" class="px-2">
              <p>Team Absences</p>
              <a href="#">No Team Members Absent</a>
            </a-row> -->
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
                  <a-textarea v-model="createForm.comment" :rows="4" />
                </a-form-model-item>
              </a-col>
            </a-row>
            <a-row>
              <a-col :xs="10" :sm="12" :md="4" :lg="24" :xl="24">
                <div class="Reset_btn mt-3">
                  <a-button type="submit" @click="onSubmit">
                    Submit
                  </a-button>
                  <!-- <a-button class="mt-2" @click="handleCancel">
                    <nuxt-link to="/time-sheet"> Cancel</nuxt-link>
                  </a-button> -->
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
import moment from 'moment'
export default {
  data () {
    return {
      loading: false,
      createForm: {
        time_type: 'Casual',
        available_balance: '15',
        start_date: null,
        end_date: null,
        
        comment: ''
      }
    }
  },
  methods: {
    async onSubmit (event) {
      await this.$refs.createForm.validate(async (valid) => {
        if (valid) {
          this.createForm.start_date = moment(this.createForm.start_date).format('YYYY-MM-DD')
          this.createForm.end_date = moment(this.createForm.end_date).format('YYYY-MM-DD')
          await this.$axios.post('/absenses', this.createForm)
            .then((resp) => {
              alert('Absensce Added Succsfully')
              this.handleCancel()
            })
            .catch((error) => {
              console.log(error)
            })
        } else {
          console.log('error submit!!')
          return false
        }
      })
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
