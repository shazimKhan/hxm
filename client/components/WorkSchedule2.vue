<template>
  <div>
    <a-row>
      <a-col :span="24" class="">
        <a-page-header
          style="border: 1px solid rgb(235, 237, 240)"
          :title="false"
        >
          <a-row>
            <a-col :span="1" class="pt-1">
              <span class="font-weight-bold">Search</span>
            </a-col>
            <a-col :span="3">
              <a-select
                default-value="work"
                style="width: 100%"
                @change="handleChange"
              >
                <a-icon slot="suffixIcon" type="down" />
                <a-select-option value="work">
                  Work Schedule:
                </a-select-option>
              </a-select>
            </a-col>
            <a-col :span="4" class="pl-4">
              <a-select
                default-value="name"
                style="width: 100%"
                @change="handleChange"
              >
                <a-icon slot="suffixIcon" type="down" />
                <a-select-option value="8hr7to15">
                  8hr7to15 (8hr7to15)
                </a-select-option>
                <a-select-option value="1">
                  8hr15to22 (8hr15to22)
                </a-select-option>
              </a-select>
            </a-col>
            <a-col :span="3" class="pt-1 pl-4">
              <span class="font-weight-bold">Includes Inactive</span>
            </a-col>
            <a-col :span="2">
              <a-select
                default-value="both"
                style="width: 100%"
                @change="handleChange"
              >
                <a-icon slot="suffixIcon" type="down" />
                <a-select-option value="no">
                  No
                </a-select-option>
                <a-select-option value="yes">
                  Yes
                </a-select-option>
                <a-select-option value="both">
                  Both
                </a-select-option>
              </a-select>
            </a-col>
            <a-col :span="11" align="end" class="pt-1">
              <a-row>
                <a-col :span="16" class="pt-1 pr-3">
                  <span class="font-weight-bold">Create New</span>
                </a-col>
                <a-col :span="8">
                  <a-select
                    default-value="no"
                    style="width: 100%"
                    @change="handleChange"
                  >
                    <a-icon slot="suffixIcon" type="down" />
                    <a-select-option value="no">
                      No Selection
                    </a-select-option>
                  </a-select>
                </a-col>
              </a-row>
            </a-col>
          </a-row>

          
        </a-page-header>
      </a-col>
    </a-row>
    <a-row>
      <a-card :title="'Work Schedule'">
        <a-row>
          <form>
            <a-col :span="16" :offset="7">
              <a-row :gutter="16">
                <a-col :span="4" class="text-right">
                  <p><span class="text-danger">*</span>Schedule Name</p>
                </a-col>
                <a-col :span="5">
                  <a-input v-model="workschedule.externalName" placeholder="" required />
                </a-col>
                <a-col :span="1">
                  <div class="send-icon">
                    <a-icon type="weibo-circle" />
                  </div>
                </a-col>
                <a-col :span="1">
                  <div class="send-icon">
                    <a-icon type="question-circle" theme="filled" />
                  </div>
                </a-col>
              </a-row>
              <a-row :gutter="16" class="my-2">
                <a-col :span="4" class="text-right">
                  <p><span class="text-danger">*</span> Model</p>
                </a-col>
                <a-col :span="4">
                  <a-select
                    v-model="workschedule.model"
                    default-value="default"
                    style="width: 100%"
                    required
                  >
                    <a-icon slot="suffixIcon" type="down" />
                    <a-select-option value="default">
                      No Selection
                    </a-select-option>
                    <a-select-option value="simole">
                      Simple
                    </a-select-option>
                    <a-select-option value="flexible">
                      Flexible
                    </a-select-option>
                    <!-- <a-select-option value="america">
                      America
                    </a-select-option>
                    <a-select-option value="china">
                      China
                    </a-select-option> -->
                  </a-select>
                </a-col>
                <a-col :span="1">
                  <div class="send-icon">
                    <a-icon type="plus-circle" theme="filled" />
                  </div>
                </a-col>
                <a-col :span="1">
                  <div class="send-icon">
                    <a-icon type="question-circle" theme="filled" />
                  </div>
                </a-col>
              </a-row>
              <a-row :gutter="16" class="my-2">
                <a-col :span="4" class="text-right">
                  <p><span class="text-danger">*</span> Average per Hour Day</p>
                </a-col>
                <a-col :span="10">
                  <a-input v-model="workschedule.hourPerDay" required />
                </a-col>
                <a-col :span="1">
                  <div class="send-icon">
                    <a-icon type="plus-circle" theme="filled" />
                  </div>
                </a-col>
                <a-col :span="1">
                  <div class="send-icon">
                    <a-icon type="question-circle" theme="filled" />
                  </div>
                </a-col>
              </a-row>
              <a-row :gutter="16">
                <a-col :span="4" class="text-right">
                  <p><span class="text-danger">*</span> Average Hours per Week</p>
                   </a-col>
                    <a-col :span="10">
                  <a-input v-model="workschedule.hourPerWeek" required />
                </a-col>
                <a-col :span="1">
                  <div class="send-icon">
                    <a-icon type="question-circle" theme="filled" />
                  </div>
                </a-col>
              </a-row>
              <a-row :gutter="16">
                <a-col :span="4" class="text-right">
                  <p><span class="text-danger">*</span> Average Hours per Month</p>
                </a-col>
                <a-col :span="10">
                  <a-input v-model="workschedule.hourPerMonth" required />
                </a-col>
                <a-col :span="1">
                  <div class="send-icon">
                    <a-icon type="question-circle" theme="filled" />
                  </div>
                </a-col>
              </a-row>
              <a-row :gutter="16">
                <a-col :span="4" class="text-right">
                  <p><span class="text-danger">*</span> Average Hour per Year</p>
                </a-col>
                    <a-col :span="10">
                  <a-input v-model="workschedule.hourPerYear" required />
                </a-col>
                <a-col :span="1">
                  <div class="send-icon">
                    <a-icon type="question-circle" theme="filled" />
                  </div>
                </a-col>
              </a-row>
              <a-row :gutter="16">
                <a-col :span="4" :offset="2" class="text-right">
                  <a-button :loading="loading" type="primary" @click="handleSave">
                    Save
                  </a-button>
                </a-col>
              </a-row>
            </a-col>
          </form>
        </a-row>
        <a-row>
          <a-col :span="24">
            <a-table
              :columns="columns"
              :data-source="data"
              :pagination="false"
              :bordered="false"
              :stripped="false"
            >
              <template slot="title">
                <h6>Holiday Assignments</h6>
              </template>
             
              <span slot="icon" slot-scope="text,row">
                <a-row>
                  <a-col :span="3" class="mr-3">
                    <div class="send-icon">
                      <a-icon type="delete" @click="deleteHolidayCalender(row.id)" />
                    </div>
                  </a-col>
                  <a-col :span="3" class="mr-2">
                    <div class="send-icon">
                      <a-icon type="arrow-down" />
                    </div>
                  </a-col>
                  <a-col :span="1">
                    <div class="send-icon">
                      <a-icon type="arrow-up" />
                    </div>
                  </a-col>
                </a-row>
              </span>
           
            </a-table>
          </a-col>
        </a-row>
      </a-card>
    </a-row>
    <a-row />
  </div>
</template>
<script>
import moment from 'moment'
const columns = [
  {
    title: 'Date Of Holiday',
    dataIndex: 'date_of_holiday',
    key: 'date_of_holiday',
    scopedSlots: { customRender: 'date' },
    width: 180
  },
  {
    title: 'Holiday Class',
    dataIndex: 'holiday_class',
    scopedSlots: { customRender: 'full' },
    key: 'holiday_class',
    width: 120
  },
  {
    title: 'Holiday',
    dataIndex: 'holiday',
    key: 'holiday',
    scopedSlots: { customRender: 'holiday' },
    width: 250
  },
  {
    title: '',
    dataIndex: 'planedHours',
    key: 'planedHours',
    scopedSlots: { customRender: 'icon' },
    width: 120
  }
]

export default {
  data () {
    return {
      data: [],
      loading: false,
      lists: [1, 2, 3, 4],
      items: [1, 2, 3, 4],
      columns,
      workschedule: {
        externalName: '',
        model: '',
        hourPerDay: '',
        hourPerWeek: '',
        hourPerMonth: '',
        hourPerYear: ''
      }
    }
  },
  mounted () {
    // this.getHolidayCalender()
  },
  methods: {
    moment,
    async handleSave () {
    //   this.holidayLeave.date_of_holiday = moment(this.holidayLeave.date_of_holiday).format('YYYY-MM-DD')
      this.loading = true
      await this.$axios.post('/workschedule', this.workschedule)
        .then((resp) => {
          alert('Schedule Added Succsfully')
        //   this.getHolidayCalender()
          this.loading = false
        })
        .catch((error) => {
          this.loading = false
          console.log(error)
          alert('Oops someting wrong!!')
          // alert(error.message)
        })
    },
    async getHolidayCalender () {
      const _this = this
      await this.$axios.get('/getHolidayCalender')
        .then((resp) => {
          console.log(resp.data.data)
          if (resp.data.data.length > 0) {
            for (let i = 0; i < resp.data.data.length; i++) {
              _this.data.push({
                key: i,
                id: resp.data.data[i].id,
                date_of_holiday: resp.data.data[i].date_of_holiday,
                holiday_class: resp.data.data[i].holiday_class,
                holiday: resp.data.data[i].holiday_name
              })
            }
          } else {
            this.data = []
          }
        })
        .catch((error) => {
          console.log(error)
          // alert(error.message)
        })
    },
    async deleteHolidayCalender (id) {
      const confirm = window.confirm('Are you sure want to delete?')
      if (confirm === true) {
        await this.$axios.post('/deleteHolidayCalender', { holiday_calendar_id: id })
          .then((resp) => {
            this.getHolidayCalender()
            alert(resp.data.message)
          })
          .catch((error) => {
            console.log(error)

          // alert(error.message)
          })
      }
    },
    handleChange (val) {
      console.log(val)
    }
  }
}
</script>
<style lang="scss">
.bg-footer {
  background-color: #ffffff !important;
  border: none;
}

tr:last-child td {
  padding-bottom: 10px;
}
.send-icon {
  i.anticon.anticon-weibo-circle {
    font-size: 20px;
  }
  i.anticon.anticon-question-circle {
    font-size: 20px;
    color: #eee;
  }
  i.anticon.anticon-plus-circle {
    font-size: 20px;
  }
  i.anticon.anticon-delete {
    font-size: 20px;
  }
}
i.anticon.anticon-project {
  font-size: 20px;
}
</style>
