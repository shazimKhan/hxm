<template>
  <div class="applyleaves">
    <h1> Apply For Leave </h1>
    <br>
    <a-form-model ref="ruleForm"
                  :model="form"
                  :rules="rules" :label-col="labelCol" :wrapper-col="wrapperCol"
    >
      <a-form-model-item label="Leave Type" prop="leave_type">
        <a-select v-model="form.leave_type_id" placeholder="please select your zone">
          <a-select-option value="shanghai">
            Zone one
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
          Submit
        </a-button>
        <a-button style="margin-left: 10px;">
          Reset
        </a-button>
      </a-form-model-item>
    </a-form-model>
  </div>
</template>
<script>
import moment from 'moment'
export default {
  data () {
    return {
      labelCol: { span: 4 },
      wrapperCol: { span: 8 },
      disabled: true,
      loading: false,
      form: {
        leave_type_id: '',
        dateFrom: null,
        dateTo: null,
        days: '',
        reason: ''
      },
      endOpen: false,
      rules: {
        leave_type: [
          { required: true, message: 'Please select leave type', trigger: 'change' }
        ],
        dateFrom: [{ required: true, message: 'Please select date from', trigger: 'change' }],
        dateTo: [{ required: true, message: 'Please select date to', trigger: 'change' }],
        reason: [{ required: true, message: 'Please add reason', trigger: 'change' }]
      }
    }
  },

  methods: {
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
          alert('submit!')
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
        this.form.days = days
      }
    }
  }

}
</script>
