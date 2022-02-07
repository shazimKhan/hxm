<template>
  <div class="applyleaves">
    <a-card class="title"> <h4>Apply for Leave</h4> </a-card>
    <br>
    <a-form-model ref="ruleForm"
                  :model="form"
                  :rules="rules" :label-col="labelCol" :wrapper-col="wrapperCol"
    >
      <a-form-model-item label="Leave Type" prop="leaveTypeId">
        <a-select v-model="form.leaveTypeId" placeholder="please select your zone">
          <a-select-option value="">
            Select Leave Type
          </a-select-option>
          <a-select-option v-for="(leaveType,index) in leaveTypes" :key="index" :value="leaveType.id">
            {{ leaveType.leave_type }}
          </a-select-option>
        </a-select>
      </a-form-model-item>
      <a-form-model-item label="Date From" required prop="dateFrom">
        <a-date-picker
          v-model="form.dateFrom"
          :disabled-date="disabledStartDate"
          format="Y-MM-DD"
          placeholder="from"
          style="width: 30%"
          @change="dateFrom"
          @openChange="handleStartOpenChange"
        />
      </a-form-model-item>
      <a-form-model-item label="Date To" prop="dateTo">
        <a-date-picker
          v-model="form.dateTo"
          :disabled-date="disabledEndDate"
          format="Y-MM-DD"
          placeholder="End"
          :open="endOpen"
          style="width: 30%;"
          @change="dateTo"
          @openChange="handleEndOpenChange"
        />
      </a-form-model-item>
      <a-form-model-item label="Days">
        <input id="total_days" v-model="form.days" readonly="readonly"
          type="text" size="20" class="select2-single form-control"
        >
      </a-form-model-item>
      <a-form-model-item label="Reason" prop="reason">
        <a-input v-model="form.reason" />
      </a-form-model-item>
      <a-form-model-item :wrapper-col="{ span: 14, offset: 4 }">
        <a-button type="primary" :loading="loading" @click="onSubmit">
         <nuxt-link to="/leavelist"> Submit</nuxt-link>
        </a-button>
        <a-button style="margin-left: 10px;">
           <nuxt-link to="/time-sheet">Cancel</nuxt-link>
        </a-button>
      </a-form-model-item>
    </a-form-model>
  </div>
</template>
<script>
import moment from 'moment'
import { mapGetters } from 'vuex'
export default {
  data () {
    return {
      labelCol: { span: 4 },
      wrapperCol: { span: 8 },
      disabled: true,
      loading: false,
      leaveTypes: null,
      form: {
        leaveTypeId: '',
        dateFrom: null,
        dateTo: null,
        days: '',
        reason: ''
      },
      endOpen: false,
      rules: {
        leaveTypeId: [{ required: true, message: 'Please select leave type', trigger: 'change' }
        ],
        dateFrom: [{ required: true, message: 'Please select date from', trigger: 'change' }],
        dateTo: [{ required: true, message: 'Please select date to', trigger: 'change' }],
        reason: [{ required: true, message: 'Please add reason', trigger: 'change' }]
      }
    }
  },
  computed: mapGetters({
    token: 'auth/token'
  }),
  mounted () {
    this.getLeavesType()
  },
  methods: {
    async getLeavesType () {
      await this.$axios.get('/leave-types', {
        headers: {
          Authorization: `Bearer ${this.token}`
        }
      })
        .then((resp) => {
          this.leaveTypes = resp.data.data
          console.log(resp.data)
        })
        .catch((error) => {
          console.log(error)
        })
    },
    async applyForLeave () {
      this.loading = true
      await this.$axios.post('/apply-leave', this.form,
        {
          headers: {
            Authorization: `Bearer ${this.token}`
          }
        })
        .then((resp) => {
          console.log(resp)
          this.loading = false
          this.$notification.success({
            message: resp.data.message,
            description:
           resp.data.message
          })
        })
        .catch((error) => {
          this.loading = false
          console.log(error)
        })
    },
    moment,
    dateFrom (value) {
      this.countDays()
      this.form.dateFrom = ''
      this.form.dateFrom = moment(value).format('YYYY-MM-DD')
    },
    dateTo (value) {

      this.countDays()
      this.form.dateTo = ''
      this.form.dateTo = moment(value).format('YYYY-MM-DD')
      
    },
    onSubmit () {
      this.$refs.ruleForm.validate((valid) => {
        if (valid) {
          this.applyForLeave()
          this.resetForm()
        } else {
          console.log('error submit!!')
          return false
        }
      })
    },
    resetForm () {
      this.$refs.ruleForm.resetFields()
    },
    disabledStartDate (fromDate) {
      const toDate = this.form.dateTo
      if (!fromDate || !toDate) {
        return false
      }
      return fromDate.valueOf() > toDate.valueOf()
    },
    disabledEndDate (toDate) {
      const fromDate = this.form.dateFrom
      if (!toDate || !fromDate) {
        return false
      }
      return fromDate.valueOf() >= toDate.valueOf()
    },
    handleStartOpenChange (open) {
      if (!open) {
        this.endOpen = true
      }
    },
    handleEndOpenChange (open) {
      this.endOpen = open
    },
    countDays () {
      if (this.form.dateFrom && this.form.dateTo) {
        const dateFrom = moment(this.form.dateFrom)
        const dateTo = moment(this.form.dateTo)
        const days = moment.duration(dateTo.diff(dateFrom)).asDays()
        this.form.days = days.toFixed()
      }
    }
  }

}
</script>
