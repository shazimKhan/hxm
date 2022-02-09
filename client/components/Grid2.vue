<template>
     <a-col :span="24">
            <a-table
              :columns="columns"
              :data-source="data"
              :pagination="false"
              :bordered="false"
              :stripped="false"
            >
              <template slot="title">
                <a-card class="title"> <h4>Holidays</h4> </a-card>
              </template>
              
              <span slot="icon" slot-scope="text,row">
                <a-row>
                  <a-col :span="3" class="mr-3">
                    <div class="send-icon">
                      <a-icon type="view" @click="deleteHolidayCalender(row.id)" /> -->
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
    // async handleSave () {
    //   this.holidayLeave.date_of_holiday = moment(this.holidayLeave.date_of_holiday).format('YYYY-MM-DD')
    //   this.loading = true
    //   await this.$axios.post('/saveHolidayCalender', this.holidayLeave)
    //     .then((resp) => {
    //       alert('Holiday Added Succsfully')
    //       this.getHolidayCalender()
    //       this.loading = false
    //     })
    //     .catch((error) => {
    //       this.loading = false
    //       console.log(error)
    //       alert('Please all filled all required fields')
    //       // alert(error.message)
    //     })
    // },
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
    // async deleteHolidayCalender (id) {
    //   const confirm = window.confirm('Are you sure want to delete?')
    //   if (confirm === true) {
    //     await this.$axios.post('/deleteHolidayCalender', { holiday_calendar_id: id })
    //       .then((resp) => {
    //         this.getHolidayCalender()
    //         alert(resp.data.message)
    //       })
    //       .catch((error) => {
    //         console.log(error)

    //       // alert(error.message)
    //       })
    //   }
    // },
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