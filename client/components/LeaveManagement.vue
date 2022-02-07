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
                  Holiday Calender
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
                <a-select-option value="name">
                  No Selection
                </a-select-option>
                <a-select-option value="1">
                  Holiday 1
                </a-select-option>
                <a-select-option value="2">
                  Holiday 2
                </a-select-option>
                <a-select-option value="3">
                  Holiday 3
                </a-select-option>
                <a-select-option value="4">
                  Holiday 4
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

          <!-- <template slot="extra">
            <a-button key="3"> Operation </a-button>
            <a-button key="2"> Operation </a-button>
            <a-button key="1" type="primary"> Primary </a-button>
          </template> -->
        </a-page-header>
      </a-col>
    </a-row>
    <a-row>
      <a-card :title="'  Holiday Caldendar: Holcal (Holcal)'">
        <a-row>
          <form>
            <a-col :span="16" :offset="7">
              <a-row :gutter="16">
                <a-col :span="4" class="text-right">
                  <p><span class="text-danger">*</span>Name</p>
                </a-col>
                <a-col :span="5">
                  <a-input v-model="holidayLeave.name" placeholder="Holcal" required />
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
                  <p><span class="text-danger">*</span> Country/Region</p>
                </a-col>
                <a-col :span="4">
                  <a-select
                    v-model="holidayLeave.country"
                    default-value="default"
                    style="width: 100%"
                    required
                  >
                    <a-icon slot="suffixIcon" type="down" />
                    <a-select-option value="default">
                      No Selection
                    </a-select-option>
                    <a-select-option value="pakistan">
                      Pakistan
                    </a-select-option>
                    <a-select-option value="india">
                      India
                    </a-select-option>
                    <a-select-option value="america">
                      America
                    </a-select-option>
                    <a-select-option value="china">
                      China
                    </a-select-option>
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
                  <p><span class="text-danger">*</span> Holiday Name</p>
                </a-col>
                <a-col :span="10">
                  <a-select
                    v-model="holidayLeave.holiday_name"
                    default-value="name"
                    style="width: 50%"
                    required
                  >
                    <a-icon slot="suffixIcon" type="down" />
                    <a-select-option value="name">
                      Select Holiday Name
                    </a-select-option>
                    <a-select-option value="happy-new-year">
                      Happy New Year
                    </a-select-option>
                    <a-select-option value="independence-day">
                      Independence Day
                    </a-select-option>
                    <a-select-option value="labour-day">
                      Labour Day
                    </a-select-option>
                    <a-select-option value="pakistan-day">
                      Pakistan Day
                    </a-select-option>
                    <a-select-option value="kashmir-solidarity-day">
                      Kashmir Solidarity Day
                    </a-select-option>
                    <a-select-option value="eid-al-fitr">
                      Eid al-Fitr
                    </a-select-option>
                    <a-select-option value="eid-al-adha">
                      Eid al-Adha
                    </a-select-option>
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
              <a-row :gutter="16">
                <a-col :span="4" class="text-right">
                  <p><span class="text-danger">*</span> Holiday Class</p>
                </a-col>
                <a-col :span="10">
                  <a-select
                    v-model="holidayLeave.holiday_class"
                    default-value="none"
                    style="width: 50%"
                    required
                  >
                    <a-icon slot="suffixIcon" type="down" />
                    <a-select-option value="full">
                      Full
                    </a-select-option>
                    <a-select-option value="half">
                      Half
                    </a-select-option>
                    <a-select-option value="none">
                      None
                    </a-select-option>
                  </a-select>
                </a-col>
                <a-col :span="1">
                  <div class="send-icon">
                    <a-icon type="question-circle" theme="filled" />
                  </div>
                </a-col>
              </a-row>
              <a-row :gutter="16">
                <a-col :span="4" class="text-right">
                  <p><span class="text-danger">*</span> External Code</p>
                </a-col>
                <a-col :span="10">
                  <a-input v-model="holidayLeave.external_code" required />
                </a-col>
                <a-col :span="1">
                  <div class="send-icon">
                    <a-icon type="question-circle" theme="filled" />
                  </div>
                </a-col>
              </a-row>
              <a-row :gutter="16">
                <a-col :span="4" class="text-right">
                  <p><span class="text-danger">*</span> Date Of Holiday</p>
                </a-col>
                <a-col :span="10">
                  <a-date-picker
                    v-model="holidayLeave.date_of_holiday"
                    :format="dateFormat"
                  />
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
      dateFormat: 'YYYY-MM-DD',
      monthFormat: 'MM/YYYY',
      dateFormatList: ['DD/MM/YYYY', 'DD/MM/YY'],
      lists: [1, 2, 3, 4],
      items: [1, 2, 3, 4],
      columns,
      holidayLeave: {
        name: '',
        country: '',
        date_of_holiday: null,
        external_code: '',
        holiday_name: '',
        holiday_class: ''
      }
    }
  },
  mounted () {
    this.getHolidayCalender()
  },
  methods: {
    moment,
    async handleSave () {
      this.holidayLeave.date_of_holiday = moment(this.holidayLeave.date_of_holiday).format('YYYY-MM-DD')
      this.loading = true
      await this.$axios.post('/saveHolidayCalender', this.holidayLeave)
        .then((resp) => {
          alert('Holiday Added Succsfully')
          this.getHolidayCalender()
          this.loading = false
        })
        .catch((error) => {
          this.loading = false
          console.log(error)
          alert('Please all filled all required fields')
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
