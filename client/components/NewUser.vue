<template>
<div>
    <a-row>
      <a-card :title="'NewUser'">
        <a-row>
          <form>
            <a-col :span="16" :offset="7">
              <a-row :gutter="16">
                <a-col :span="4" class="text-right">
                  <p><span class="text-danger">*</span>User Name</p>
                </a-col>
                <a-col :span="5">
                  <a-input v-model="newuser.name" placeholder="" required />
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
                  <p><span class="text-danger">*</span>Email Address</p>
                </a-col>
                <a-col :span="10">
                  <a-input v-model="newuser.email" required />
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
                  <p><span class="text-danger">*</span>Password</p>
                   </a-col>
                    <a-col :span="10">
                  <a-input v-model="newuser.password" required />
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
        </a-card>
</a-row>
</div>
    
</template>

<script>
import moment from 'moment'
// const columns = [
//   {
//     title: 'Username Name',
//     dataIndex: 'externalName',
//     scopedSlots: { customRender: 'full' },
//     key: 'externalName',
//     width: 120
//   },
//   {
//     title: 'Email Address',
//     dataIndex: 'model',
//     key: 'model',
//     scopedSlots: { customRender: 'model' },
//     width: 250
//   },
//   {
//     title: '',
//     dataIndex: 'planedHours',
//     key: 'planedHours',
//     scopedSlots: { customRender: 'icon' },
//     width: 120
//   }
// ]

export default {
  data () {
    return {
      data: [],
      loading: false,
      lists: [1, 2, 3, 4],
      items: [1, 2, 3, 4],
      newuser: {
        name: '',
        email: '',
        password: ''
      }
    }
  },
//   mounted () {
//      this.getWorkSchedule()
//   },
  methods: {
    moment,
    async handleSave () {
    //   this.holidayLeave.date_of_holiday = moment(this.holidayLeave.date_of_holiday).format('YYYY-MM-DD')
      this.loading = true
      await this.$axios.post('/newuser', this.newuser)
        .then((resp) => {
          alert('User Added Succsfully')
        //   this.getHolidayCalender()
          this.loading = false
        })
        .catch((error) => {
          this.loading = false
          console.log(error)
          alert('Oops something wrong!!')
          // alert(error.message)
        })
    },
    // async getWorkSchedule () {
    //   const _this = this
    //   await this.$axios.get('/getWorkSchedule')
    //     .then((resp) => {
    //       console.log(resp.data.data)
    //       if (resp.data.data.length > 0) {
    //         for (let i = 0; i < resp.data.data.length; i++) {
    //           _this.data.push({
    //             key: i,
    //             id: resp.data.data[i].id,
    //             externalName: resp.data.data[i].externalName,
    //             model: resp.data.data[i].model
    //           })
    //         }
    //       } else {
    //         this.data = []
    //       }
    //     })
    //     .catch((error) => {
    //       console.log(error)
    //       // alert(error.message)
    //     })
    // },
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