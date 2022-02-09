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
              <a-card class="title"> <h4>Work Schedule Days</h4> </a-card>
              </template>
             
              <span slot="icon" slot-scope="text,row">
                <a-row>
                  <a-col :span="3" class="mr-3">
                    <div class="send-icon">
                      <a-icon type="view" @click="WorkSchedule(row.id)" />
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
    title: 'Schedule Name',
    dataIndex: 'externalName',
    scopedSlots: { customRender: 'full' },
    key: 'externalName',
    width: 120
  },
  {
    title: 'Schedule Model',
    dataIndex: 'model',
    key: 'model',
    scopedSlots: { customRender: 'model' },
    width: 250
  },
   {
    title: 'Hours',
    dataIndex: 'hourPerDay',
    key: 'hourPerDay',
    scopedSlots: { customRender: 'hourPerDay' },
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
     this.getWorkSchedule()
  },
  methods: {
    moment,
    // async handleSave () {
    // //   this.holidayLeave.date_of_holiday = moment(this.holidayLeave.date_of_holiday).format('YYYY-MM-DD')
    //   this.loading = true
    //   await this.$axios.post('/workschedule', this.workschedule)
    //     .then((resp) => {
    //       alert('Schedule Added Succsfully')
    //     //   this.getHolidayCalender()
    //       this.loading = false
    //     })
    //     .catch((error) => {
    //       this.loading = false
    //       console.log(error)
    //       alert('Oops something wrong!!')
    //       // alert(error.message)
    //     })
    // },
    async getWorkSchedule () {
      const _this = this
      await this.$axios.get('/getWorkSchedule')
        .then((resp) => {
          console.log(resp.data.data)
          if (resp.data.data.length > 0) {
            for (let i = 0; i < resp.data.data.length; i++) {
              _this.data.push({
                key: i,
                id: resp.data.data[i].id,
                externalName: resp.data.data[i].externalName,
                model: resp.data.data[i].model,
                hourPerDay: resp.data.data[i].hourPerDay,
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
    // async deleteWorkSchedule (id) {
    //   const confirm = window.confirm('Are you sure want to delete?')
    //   if (confirm === true) {
    //     await this.$axios.post('/deleteWorkSchedule', { workschedule_id: id })
    //       .then((resp) => {
    //         this.getWorkSchedule()
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
